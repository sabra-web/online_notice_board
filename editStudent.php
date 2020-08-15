<?php 
include 'connection.php';
$id=$_GET['id'];
$sql=$con->prepare("select * from student where registrationid=:id");
$sql->execute(array(':id'=>$id));
$res=$sql->fetch();
?>
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
            	<form action="handleEdit.php " method="Post" style="margin-top: 3%;  padding: 10px; width:100%; min-height:350px">
            	<div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                  				  <label>Registration ID</label>
                  				  <input type="text" class="form-control form-control-sm" value="<?php echo $res['registrationid']?> "name="regID" placeholder="Regisration ID" required="required">
            			        </div>

                          <div class="form-group">
                  				  <label>Student Name</label>
                  				  <input type="text" class="form-control form-control-sm" value="<?php echo $res['studentname']?>" name="studentName" placeholder="Student Name" required="required">
                          </div>

                          <div class="form-group">
                            <label>Academic Year</label>
              			        <input type="text" class="form-control form-control-sm"  value="<?php echo $res['academicyear']?>" name="Academic" placeholder="Academic" required="required">
                          </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Course</label>
                          <input type="text" class="form-control form-control-sm" name="Course"  value="<?php echo $res['course']?>" placeholder="Course" required="required">
                           <input type="hidden" class="form-control form-control-sm" name="id"  value="<?php echo $id?>" placeholder="Course" required="required">
                        </div>

                        <div class="form-group">
                          <label>Gender</label>
                           <select name="Gender" class="form-control form-control-sm" required="required">
                            <option value="<?php echo $res['gender']?>"><?php echo $res['gender']?></option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                         <div class="form-group">
                          <label for="UserName">UserName</label>
            			        <input type="text" class="form-control form-control-sm" value="<?php echo $res['username'] ?>" name="UserName" placeholder="UserName" required="required">
                        </div>

                         <div class="form-group">
                          <input type="submit" name="save" class="btn btn-primary btn-sm" value="save" style="margin-top:10%; width:100%;">

                        </div>

                      </div>
                      <div class="col-sm-4">

                      <div class="form-group">
                          <label>Department</label>
                           <select name="dept" class="form-control form-control-sm"  required="required">
                            <option value="<?php echo $res['department'] ?>"><?php echo $res['department'] ?></option>
                            <option>Computing</option>
                            <option>Library</option>
                            <option>Science</option>
                            <option>Art</option>
                          </select>
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

</html>
