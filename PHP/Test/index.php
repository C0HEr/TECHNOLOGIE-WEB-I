<?php
include('cnx.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Test </title>
</head>
<style>
    section {
        border: 1px solid gray;
        margin-bottom: 25px;
        padding: 40px;
        background: #fdf0e3;
    }
    div, p{
        margin:20px 0;
    }
    .autor {
        float: right;
        margin-right: 12px;
        color: red;
    }
</style>
<body>
<main>
    <?php
        include('insert.php');
        include('liste.php');
        include('update.php');
    ?>
</main>
</body>
</html>

