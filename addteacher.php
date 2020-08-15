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

		<div class="col-sm-10" id="co" >
			<div>
				<h4 style="color:black; margin-top: 3%"class="text-center"> REGISTER TEACHER ON NOTES BOARD</h4>
				<div style="width: 100%; margin:auto;">
            	<form action="savestudent.php" method="Post" style="margin-top: 3%;  padding: 10px; width:100%; min-height:350px">
            	<div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                  				  <label>Teacher ID</label>
                  				  <input type="text" class="form-control form-control-sm" name="teacherID" placeholder="Teacher ID" required="required">
            			        </div>

                          <div class="form-group">
                  				  <label>Teacher Name</label>
                  				  <input type="text" class="form-control form-control-sm" name="teachertName" placeholder="Teacher Name" required="required">
                          </div>

                          <div class="form-group">
                            <label>Role</label>
              			        <input type="text" class="form-control form-control-sm" name="Role" placeholder="Teacher" readonly>
                          </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status" class="form-control form-control-sm" required="required">
                           <option value="">Select Status</option>
                           <option>Lecture</option>
                           <option>Assistance Lecture</option>
                         </select>
                        </div>

                        <div class="form-group">
                          <label>Gender</label>
                           <select name="Gender" id="Gender" class="form-control form-control-sm" required="required">
                            <option value="">Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                          <input type="submit" name="save" class="btn btn-primary btn-sm" value="save" style="margin-top:15%; width:100%;">
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
            			        <input type="text" class="form-control form-control-sm" name="Password" placeholder="Password" required="required">
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
</html>
