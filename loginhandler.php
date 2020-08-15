<?php
include 'connection.php';

session_start();

if(isset($_POST['btnsubmit'])){

	$name= $_POST['UserName'];
	$pass= $_POST['Password'];

	$stmt = $con->query("SELECT * FROM user WHERE username='$name' AND password= '$pass'");

		if($stmt->rowCount()==1){

			header("location:home.php");
		}else{

			header('location: login.php');
		}

	}
	else{
	header('location: login.php');

}
?>