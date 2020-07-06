<?php include 'server.php';

$id = $_GET['id'];
delete_data($db,$id);
header('location:display.php');
?>