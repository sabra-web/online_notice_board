
<?php
include"connection.php";
session_start();
?>

<!-- bootstrap4 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">

<!-- DataTable -->
	<script src="datatable/js/jquery-3.5.1.js"></script>
	<script src="datatable/js/jquery.dataTables.min.js"></script>
	<script src="datatable/js/dataTables.bootstrap4.min.js"></script>
	<script src="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/popper.min.js"></script>
	<script src= "bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/js/bootstrap.min.js"> </script>

<script>
$(document).ready(function() {
	$('#example').DataTable();
} );
</script>

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
				<?php include "menu.php" ?>
			</div>

				<div class="col-sm-10" id="content">
					<div style="margin-top: 10px">
						<h4 style="color: black" class="text-center">VIEW LIST OF STUDENTS</h4>
						<div style="width: 100%; margin:auto; margin-top: 2%">
						<div class="container">
					 	 <a class="btn btn-primary float-right" href="addstudent.php" style="margin-top:2%;" >REGISTER</a>
					 		<table class="table table-bordered" id="example" border="1px">
					 		<thead>
					 				<tr>
					 				<th>Registration ID</th>
					 				<th>Student Name</th>
					 				<th>Academic Year</th>
					 				<th>Course</th>
					 				<th>Gender</th>
					 				<th>Department</th>
					 				<th>Username</th>
					 				<th>Edit</th>
					 				<th>Delete</th>
					 				</tr>
					 			</thead>

					 			<tbody>
					 				<?php

										$stmt = $con->prepare("SELECT * FROM Student");
										$stmt->execute();
										while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
   
					 					?>
					 					<tr>
					 						 <td><?php echo $row['registrationid']?></td>
					 						 <td><?php echo $row['studentname']?></td>
					 						 <td><?php echo $row['academicyear']?></td>
					 						 <td><?php echo $row['course']?></td>
					 						 <td><?php echo $row['gender']?></td>
					 						 <td><?php echo $row['department']?></td>
					 						 <td><?php echo $row['username']?></td>
					 						 <td><a href="editStudent.php?id=<?php echo $row['registrationid']?>" >Edit</a></td>
					 						 <td><a href="deleteStudent.php?id=<?php echo $row['registrationid']?>" >Delete</td>
					 						</tr>
					 					<?php
					 				}
					 				?>

					 			</tbody>
					 		</table>
					 	</div>

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
