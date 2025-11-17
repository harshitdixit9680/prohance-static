# Dockerfile (put at project root)
FROM php:8.2-apache

# Enable apache rewrite module for .htaccess friendly routing
RUN a2enmod rewrite

# Install common PHP extensions (edit if you need others)
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git \
  && docker-php-ext-install zip pdo pdo_mysql \
  && rm -rf /var/lib/apt/lists/*

# Copy site files into Apache webroot
COPY . /var/www/html/

# Set proper permissions (www-data is apache user)
RUN chown -R www-data:www-data /var/www/html \
  && find /var/www/html -type d -exec chmod 755 {} \; \
  && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 80

# Start apache in foreground (default for php:apache image)
CMD ["apache2-foreground"]
