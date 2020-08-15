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
						<h4 style="color: black" class="text-center">VIEW LIST OF NOTES BOARD</h4>
						<div style="width: 100%; margin:auto; margin-top: 2%">
              <button type="button" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#myModal" style="margin-top:2%;">
                 Add Notes
              </button>

              			<!-- The Modal -->
              			<div class="modal" id="myModal">
              			  <div class="modal-dialog">
              				<div class="modal-content">

              				  <!-- Modal Header -->
              				  <div class="modal-header">
              					<h4 class="modal-title">NOTES BOARD</h4>
              					<button type="button" class="close" data-dismiss="modal">&times;</button>
              				  </div>

              				  <!-- Modal body -->
              				  <div class="modal-body">
              					<form >
              					<div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="Tilte" class="form-control" placeholder="Title">
                              </div>
                              <div>
                                <label>Date</label>
                                <input type="date" min="<?php echo date('Y-m-d') ?>" name="date" id="date" class="form-control">
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Description</label>
                                  <textarea type="text-area" name="description" class="form-control" placeholder="Description" ></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
              					</form>
              				  </div>

              				  <!-- Modal footer -->
              				  <div class="modal-footer">
              					<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
              					<button type="submit" name="save" value="save" class="btn btn-success btn-block">Save Data</button>
              				  </div>

              				</div>
              			  </div>
              			</div>
						<div class="container">
					 		<table class="table table-bordered" id="example" border="1px">
					 		<thead>
					 				<tr>
					 				<th>Notes ID</th>
					 				<th>Title Name</th>
					 				<th>Description </th>
					 				<th>Date</th>
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
