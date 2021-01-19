<?php 

include 'config.php';
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "insert into `ajaxcrud` (name,password,email) values('$name','$password','$email')";

if($conn->query($sql) ===TRUE){
    alert("successful create");
}else{
    echo "Error:" . $sql . "<br>" .$conn->error;
}
    $conn->close();
?>