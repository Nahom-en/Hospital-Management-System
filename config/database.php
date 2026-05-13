<?php
// Load environment variables if .env file exists
$envFile = __DIR__ . '/../.env';
$env = [];
if (file_exists($envFile)) {
    $env = parse_ini_file($envFile);
}

// This tells PHP: "If connection fails, show me the error"
try {
    // These are your database credentials
    $host = $env['DB_HOST'] ?? 'localhost';        // Where is database? Usually localhost
    $dbname = $env['DB_NAME'] ?? 'hospital_db';    // Your database name
    $username = $env['DB_USER'] ?? 'root';         // Your MySQL username
    $password = $env['DB_PASS'] ?? '';             // Your MySQL password (empty for XAMPP default)
    
    // Create connection string (DSN)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    
    // Create PDO connection
    $pdo = new PDO($dsn, $username, $password);
    
    // Set error mode (so you see errors during development)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optional: echo "Connected successfully!"; // Test it works
    
} catch(PDOException $e) {
    // If connection fails, show error and stop
    die("Connection failed: " . $e->getMessage());
}
?>