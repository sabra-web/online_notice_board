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
					<div class="well" style="margin-top: 10px">
						<h4 style="color: black" class="text-center"> VIEW LIST OF TEACHER</h4>
						<div style="width: 100%; margin:auto; margin-top: 2%">
						<div class="container">
					 	 <a class="btn btn-primary float-right" href="addteacher.php" style="margin-top:2%;" >REGISTER</a>
					 		<table class="table table-bordered" id="example" border="1px">
					 		<thead>
					 				<tr>
					 				<th>Teacher ID</th>
					 				<th>Teacher Name</th>
					 				<th>Department</th>
					 				<th>Position</th>
					 				<th>Gender</th>
					 				<th>Username</th>
					 				<th>Edit</th>
					 				<th>Delete</th>
					 				</tr>
					 			</thead>

					 			<tbody>
					 				<!-- <?php
					 				include "connection.php";

					 				$sql = "SELECT* FROM student inner join user using(Username)";
					 				$stmt = $db->query($sql);
					 				while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
					 				{
					 					?> -->
					 					<!-- <tr>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><?php echo $row['']?></td>
					 						 <td><a href="editstudent.php?edit=<?php echo $row['']?>" >Edit</td>
					 						 <td><a href="deletestudent.php?id=<?php echo $row['']?>" >Delete</td>
					 						</tr>
					 					<?php
					 				}
					 				?> -->

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
