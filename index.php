<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="assets/images/favicon.png" type="image/ico" />
<title>SIDAM | Sistem Informasi Akademik Data Akademik Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '<div class="alert alert-warning"><center>Username dan Password salah!</center></div>';
		}
	}
	?>
 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 

            <div class="panel panel-default" >
            <div class="panel-heading">
            <center><img src="assets/images/polinema.png" width="200px" height="200px" /></center> <br>
                <div class="panel-title text-center">SIDAM | Sistem Informasi Data Akademik Mahasiswa</div>
            </div>     

            <div class="panel-body" >

            <form action="cek_login.php" name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <center><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> Log in</center></button>                          
                        </div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
    </div>
</body>
<footer>
          <center>
          <div class="center-margin">
            Copyright © SIDAM | Sistem Informasi Data Akademik Mahasiswa 2021 
          </div>
          </center>
          <div class="clearfix"></div>
        </footer>
</html>