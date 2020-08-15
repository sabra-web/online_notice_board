<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
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
      		<!-- <div class="col-sm-2" id="navigation">
          <?php //include "menu.php"; ?>
    	    </div> -->

    			<div class="col-sm-12" id="content">
    				<div style="margin-top: 30px">
    					<h4 style="color: black" class="text-center">Welome Our system</h4>

              <div style="width: 50%; margin:auto;">
              <form action="loginhandler.php" method="Post" style="margin-top: 3%;  padding: 10px; width:100%; min-height:350px">
              <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                          <label for="UserName">UserName</label>
                          <input type="text" class="form-control form-control-sm" name="UserName" placeholder="UserName" required="required">
                        </div>
                        </div>
                         <div class="col-md-6">
                        <div class="form-group">
                          <label for="Password">Password</label>
                          <input type="password" class="form-control form-control-sm" name="Password" placeholder="Password" required="required">
                        </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit" style="margin-top:2%;">
                 login
              </button>

                    
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
