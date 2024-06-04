<?php
// Database configuration

$dbHost = 'localhost';
$dbName = 'paca';
$dbUsername = 'root';
$dbPassword = '';

/*
$host = 'localhost';
$dbname = 'u593341949_db_paca';
$username = 'u593341949_dev_paca';
$password = '20211486Paca';
*/
try {
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUsername, $dbPassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
