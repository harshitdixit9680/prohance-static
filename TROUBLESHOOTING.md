# Docker Troubleshooting Guide

## Common Issues & Solutions

### 1. Port Already in Use

**Error**: `Ports are not available: exposing port 8080`

**Solution**:
```bash
# Find what's using the port
netstat -ano | findstr :8080

# Kill the process (Windows)
taskkill /PID <PID> /F

# Or change the port in docker-compose.yml
# Change "8080:80" to "8081:80" or another free port
```

---

### 2. Container Won't Start

**Error**: `Container exited with code 1`

**Solution**:
```bash
# Check logs
docker logs prohance-static-web

# If permission error:
docker-compose down
docker-compose up -d --build

# If still failing, check Docker Desktop is running
docker ps  # Should show containers or "Cannot connect to Docker"
```

---

### 3. Database Connection Failed

**Error**: `SQLSTATE[HY000]: General error: 1030 Got error`

**Solution**:
```bash
# Verify database container is healthy
docker ps | grep mysql

# Check database logs
docker logs prohance-mysql

# Reconnect to database
docker-compose down
docker-compose up -d

# Wait 10-15 seconds for MySQL to initialize
```

---

### 4. 500 Internal Server Error

**Possible Causes & Solutions**:

**a) PHP Error**
```bash
docker logs prohance-static-web | grep "PHP Error"
```

**b) Missing Include/Require**
- Check file paths are correct
- Verify files exist in container
- Use `$_SERVER['DOCUMENT_ROOT']` for paths

**c) Apache Rewrite Issues**
- Check apache-config.conf syntax
- Verify mod_rewrite is enabled
- Check .htaccess for conflicts

---

### 5. Static Assets Not Loading

**Error**: CSS/JS files return 404

**Solution**:
```bash
# Verify files exist
docker exec prohance-static-web ls -la /var/www/html/css/

# Check file permissions
docker exec prohance-static-web ls -l /var/www/html/ | grep css

# Rebuild if needed
docker-compose down
docker-compose up -d --build
```

---

### 6. MySQL Cannot Create Tables

**Error**: `Access denied for user 'phnewuser'@'prohance-db'`

**Solution**:
```bash
# Log in as root
docker exec -it prohance-mysql mysql -u root -p

# In MySQL CLI:
USE phnewweb;
GRANT ALL PRIVILEGES ON phnewweb.* TO 'phnewuser'@'%';
FLUSH PRIVILEGES;
EXIT;
```

---

### 7. Volume/Mount Issues

**Error**: Files changes not reflected in container

**Solution**:
```bash
# Verify volume is mounted
docker inspect prohance-static-web | grep -A 10 Mounts

# If not mounted, check docker-compose.yml syntax

# Restart container
docker-compose restart prohance-web

# Or full rebuild
docker-compose down && docker-compose up -d
```

---

### 8. Memory or CPU Issues

**Error**: Container keeps restarting or freezing

**Solution**:
```bash
# Check Docker Desktop resource limits
# Settings → Resources → Adjust CPU/Memory

# Check container resource usage
docker stats

# If too high, optimize:
# - Reduce PHP memory_limit
# - Disable unnecessary extensions
# - Use lightweight images
```

---

### 9. DNS Resolution Fails

**Error**: `failed to resolve module specification "..."`

**Solution**:
```bash
# Check container can reach internet
docker exec prohance-static-web ping 8.8.8.8

# If no internet, check Docker network
docker network ls
docker network inspect prohance-static_prohance-net

# Recreate network if needed
docker-compose down -v
docker-compose up -d --build
```

---

### 10. Nitropack Errors

**Error**: `require_once(/nitropack-sdk/bootstrap.php): Failed to open stream`

**Solution**:
- ✅ Already fixed in setup
- Nitropack include is commented out in about-us.php and events.php
- For production, either:
  1. Include nitropack-sdk directory
  2. Keep it disabled
  3. Install via composer

---

## Quick Diagnostics

### Run Full System Check

```bash
echo "=== DOCKER STATUS ==="
docker ps

echo ""
echo "=== CONTAINER HEALTH ==="
docker ps --format "table {{.Names}}\t{{.Status}}"

echo ""
echo "=== RESOURCE USAGE ==="
docker stats --no-stream

echo ""
echo "=== NETWORK ==="
docker network ls

echo ""
echo "=== VOLUMES ==="
docker volume ls

echo ""
echo "=== RECENT ERRORS ==="
docker logs prohance-static-web --tail 20 | grep -i error
docker logs prohance-mysql --tail 20 | grep -i error
```

---

## Debug Mode

### Enable Debug Logging in PHP

Edit `apache-config.conf`:
```apache
<Directory /var/www/html>
    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteLogLevel 4
        RewriteLog /tmp/rewrite.log
    </IfModule>
</Directory>
```

### View Real-Time Logs

```bash
# Web server
docker logs -f prohance-static-web

# Database
docker logs -f prohance-mysql

# Both
docker-compose logs -f
```

### Interactive Container Access

```bash
# Shell access to web container
docker exec -it prohance-static-web /bin/bash

# MySQL CLI access
docker exec -it prohance-mysql mysql -u phnewuser -p phnewweb

# Check Apache config
docker exec prohance-static-web apache2ctl -t
```

---

## Performance Optimization

### Enable Caching Headers

In `apache-config.conf`:
```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/webp "access plus 1 month"
</IfModule>
```

### Database Query Optimization

```bash
# Log slow queries
docker exec prohance-mysql mysql -u root -p -e "SET GLOBAL slow_query_log='ON';"

# View slow query log
docker exec prohance-mysql tail -f /var/log/mysql/slow.log
```

### Memory Optimization

In Dockerfile:
```dockerfile
RUN echo "memory_limit=512M" >> /usr/local/etc/php/php.ini
RUN echo "max_execution_time=300" >> /usr/local/etc/php/php.ini
```

---

## Backup & Recovery

### Backup Database

```bash
# Full backup
docker exec prohance-mysql mysqldump -u phnewuser -p phnewweb > backup.sql

# Compressed backup
docker exec prohance-mysql mysqldump -u phnewuser -p phnewweb | gzip > backup.sql.gz

# Specific table
docker exec prohance-mysql mysqldump -u phnewuser -p phnewweb events > events.sql
```

### Restore Database

```bash
# From SQL file
docker exec -i prohance-mysql mysql -u phnewuser -p phnewweb < backup.sql

# From compressed backup
docker exec -i prohance-mysql mysql -u phnewuser -p phnewweb < <(gunzip -c backup.sql.gz)
```

---

## Security Checklist

- [ ] Change default MySQL passwords
- [ ] Use environment variables for credentials
- [ ] Enable MySQL root password
- [ ] Restrict database user privileges
- [ ] Use HTTPS in production
- [ ] Regular backups
- [ ] Keep images updated
- [ ] Scan for vulnerabilities: `docker scan prohance-static-prohance-web`

---

## Support & Resources

- **Docker Documentation**: https://docs.docker.com/
- **Docker Compose**: https://docs.docker.com/compose/
- **PHP Docker**: https://hub.docker.com/_/php
- **MySQL Docker**: https://hub.docker.com/_/mysql

---

**Last Updated**: December 26, 2025
