<?php
include('cnx.php');
$sqlDel = "DELETE FROM compte WHERE idcompte = ".$_GET['id'];
$resultShow = $conn->query($sqlDel);
header('Location: /Test/');



