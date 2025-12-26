<?php
// Docker/Environment-aware database configuration
$db_host = getenv('DB_HOST') ?: 'prohance-db';  // Use container name for Docker
$db_name = getenv('DB_NAME') ?: 'phnewweb';
$database_username = getenv('DB_USER') ?: 'phnewuser';
$database_password = getenv('DB_PASSWORD') ?: '218.Pt(hFa787FBAS';

try {
    $pdo_conn = new PDO(
        "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
        $database_username,
        $database_password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    // Log connection error but don't break static pages
    error_log("Database connection error: " . $e->getMessage());
}
?>