<?php
include('header.php');
require('cnx.php');
$allOk = true;
if(isset($_POST['submit'])) {
    foreach ( $_POST as $key => $value) {
        if(empty($_POST[$key])) {
            echo "<h3 style='color:red;'> Please entre a ". $key .". </h3>";
            $allOk = false;
        }
    }
    if($allOk) {
        try {
            $sql = "INSERT INTO forum  VALUES (NULL,'". valid_input($_POST['fistName'])."','". valid_input($_POST['lastName']) ."','". valid_input($_POST['subject']) ."','". valid_input($_POST['message'])."','". date("Y/m/d") ."')";
            header('Location: forum.php');
            $conn->exec($sql);

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
} else {
    echo "<h3 style='color:red;'> Post empty !!! </h3>";
}

function valid_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include('footer.php');
?>