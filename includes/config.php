<?php 
// Database credentials
define('DB_HOST', 'localhost');  // for Render DB, this will change later
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tms');

try {
    // Establish database connection
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
