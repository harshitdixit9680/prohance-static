#!/bin/bash
# ProHance Docker Quick Start Script

echo "🚀 ProHance Docker Setup"
echo "========================="
echo ""

# Check if Docker is running
if ! docker ps > /dev/null 2>&1; then
    echo "❌ Docker is not running. Please start Docker Desktop."
    exit 1
fi

echo "✓ Docker is running"

# Navigate to project directory
cd "$(dirname "$0")" || exit 1

echo ""
echo "📦 Building and starting containers..."
docker-compose down 2>/dev/null
docker-compose up -d --build

echo ""
echo "⏳ Waiting for services to be ready..."
sleep 5

# Check if services are running
echo ""
echo "📊 Service Status:"
docker ps --format "table {{.Names}}\t{{.Status}}\t{{.Ports}}" | grep prohance

echo ""
echo "✅ All services are running!"
echo ""
echo "📍 Access your application:"
echo "   • Homepage:  http://localhost:8080/"
echo "   • About Us:  http://localhost:8080/about-us.php"
echo "   • Events:    http://localhost:8080/events.php"
echo ""
echo "🗄️  Database Access:"
echo "   • Host: 127.0.0.1"
echo "   • Port: 3307"
echo "   • User: phnewuser"
echo "   • Database: phnewweb"
echo ""
echo "📋 Useful Commands:"
echo "   docker logs prohance-static-web    # View web server logs"
echo "   docker logs prohance-mysql          # View database logs"
echo "   docker-compose down                # Stop all containers"
echo ""
