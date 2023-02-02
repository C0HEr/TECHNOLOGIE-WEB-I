<?php
$servername = "localhost";
$username = "root";
$password = "pwd";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=ForumBD", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>