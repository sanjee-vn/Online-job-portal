<?php 
include 'config.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

$sql="insert into customers(NAME,EMAIL,PHONENUMBER,ADDRESS) values('{$name}','{$email}','{$phone}','{$address}')";
if($conn->query($sql)){
    echo 'data saved';
}






$conn->close();
?>