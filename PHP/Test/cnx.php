<?php
    $DB_HOST = 'localhost';
    $DB_NAME = 'compte';
    $DB_USER = 'root';
    $DB_PASSWORD = 'a.errafaiy';

    try {
        $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }