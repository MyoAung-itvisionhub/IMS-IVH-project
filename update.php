<?php 

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "update `ajaxcrud` set name ='$name', password='$password', email='$email' where id='$id' ";

mysqli_query($conn,$sql);

?>