<?php 

include 'config.php';

$id = $_POST['id'];

$sql = "delete from `ajaxcrud` where id=$id";
mysqli_query($conn,$sql);

header("location: index.php");
?>

