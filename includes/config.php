<?php 
// DB credentials (from Clever Cloud)
define('DB_HOST', 'behxgmihzluelavkvkjk-mysql.services.clever-cloud.com');
define('DB_USER', 'ujalai0tgppgzjuh');
define('DB_PASS', 'UG4Sw8OfGAeGRTPa3HEm');
define('DB_NAME', 'behxgmihzluelavkvkjk');

// Establish database connection
try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=3306;charset=utf8",
        DB_USER,
        DB_PASS,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
