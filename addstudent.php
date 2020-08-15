<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
<html>
<html>
<head>
<title></title>
</head>
</head>


<body>

<div class="container-fluid">
   <div class="row" id="heading">
		<div class="col-sm-12"></div>
   </div>

    <div class="row" id="body">
			<div class="col-sm-2" id="navigation">
	       <?php include "menu.php"; ?>
			</div>

		<div class="col-sm-10" id="content">
			<div>
				<h4 style="color:black; margin-top: 3%"class="text-center"> REGISTER STUDENT ON NOTES BOARD</h4>
				<div style="width: 100%; margin:auto;">
            	<form action=" " method="Post" style="margin-top: 3%;  padding: 10px; width:100%; min-height:350px">
            	<div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                  				  <label>Registration ID</label>
                  				  <input type="text" class="form-control form-control-sm" name="regID" placeholder="Regisration ID" required="required">
            			        </div>

                          <div class="form-group">
                  				  <label>Student Name</label>
                  				  <input type="text" class="form-control form-control-sm" name="studentName" placeholder="Student Name" required="required">
                          </div>

                          <div class="form-group">
                            <label>Academic Year</label>
              			        <input type="text" class="form-control form-control-sm" name="Academic" placeholder="Academic" required="required">
                          </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Course</label>
                          <input type="text" class="form-control form-control-sm" name="Course" placeholder="Course" required="required">
                        </div>

                        <div class="form-group">
                          <label>Gender</label>
                           <select name="Gender" class="form-control form-control-sm" required="required">
                            <option value="">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Role</label>
            			        <input type="text" class="form-control form-control-sm" name="Role" placeholder="Student" readonly>
                        </div>

                      </div>

                    <div class="col-md-4">

                       <div class="form-group">
                          <label>Department</label>
                           <select name="dept" class="form-control form-control-sm"  required="required">
                            <option value="">Select Department</option>
                            <option>Computing</option>
                            <option>Library</option>
                            <option>Science</option>
                            <option>Art</option>
                          </select>
                        </div>


                        <div class="form-group">
                          <label for="UserName">UserName</label>
            			        <input type="text" class="form-control form-control-sm" name="UserName" placeholder="UserName" required="required">
                        </div>

                        <div class="form-group">
                          <label for="Password">Password</label>
            			        <input type="password" class="form-control form-control-sm" name="Password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                          <input type="submit" name="save" class="btn btn-primary btn-sm" value="save" style="margin-top:10%; width:100%;">

                        </div>

                </div>
            </div>

            </form>
</div>
			</div>
		</div>
   </div>

   <div class="row" id="footer">
		<div class="col-sm-12" ><p>© Notes Board 2020</p></div>
   </div>




</div>



</body>
<?php 
if(isset($_POST['save']))
{
  include 'connection.php';
  $password=$_POST['Password'];
  $username=$_POST['UserName'];
  $dept=$_POST['dept'];
  $role=$_POST['Role'];
  $course=$_POST['Course'];
  $gender=$_POST['Gender'];
  $academic=$_POST['Academic'];
  $studentName=$_POST['studentName'];
  $regNo=$_POST['regID'];

  $sql=$con->prepare("insert into student values('$regNo','$studentName','$academic','$course','$gender','$dept','$username')");
  $res=$sql->execute();
  header("location:viewstudent.php");
}
?>
</html>
