<?php 
include 'connection.php';
$id=$_GET['id'];
$sql=$con->prepare("delete from student where registrationid=:id");
$sql->execute(array(':id'=>$id));
header("location:viewstudent.php");
?>