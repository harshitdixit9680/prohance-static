<?php
// Base URL configuration - works both locally and in Docker
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

// Get host
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// For local Docker environment
if ($host === 'localhost:8080') {
    define('BASE_URL', '');  // Files are at root in Docker
} else {
    define('BASE_URL', '/prohance');  // Production path
}
