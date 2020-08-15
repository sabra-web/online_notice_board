<?php 
include 'connection.php';
if(isset($_POST['save']))
{

  $username=$_POST['UserName'];
  $dept=$_POST['dept'];
  $course=$_POST['Course'];
  $gender=$_POST['Gender'];
  $academic=$_POST['Academic'];
  $studentName=$_POST['studentName'];
  $regNo=$_POST['regID'];

  $sql=$con->prepare("update student set registrationid=:reg,studentname=:stname,academicyear=:ac,course=:c,gender=:g,department=:d,username=:u where registrationid=:id");
  $res=$sql->execute(array(':reg'=>$regNo,':stname'=>$studentName,':ac'=>$academic,':c'=>$course,':g'=>$gender,':d'=>$dept,':u'=>$username,':id'=>$_POST['id']));
  header("location:viewstudent.php");

}
?>