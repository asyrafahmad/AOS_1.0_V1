<?php session_start(); ?>
<?php include "includes/functions.php"; ?> 
<?php  include "includes/db_connection.php"; ?>    


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/Style.css" rel="stylesheet">
	
	<style>
		
	/* Green */
	.success {
	  color: green;
	}

	.success:hover {
	  background-color: #4CAF50;
	  color: white;
	}

	/* Blue */
	.info {
	  color: dodgerblue;
	}

	.info:hover {
	  background: #2196F3;
	  color: white;
	}

	/* Orange */
	.warning {
	  color: orange;
	}

	.warning:hover {
	  background: #ff9800;
	  color: white;
	}

	/* Red */
	.danger {
	  color: red;
	}

	.danger:hover {
	  background: #f44336;
	  color: white;
	}

	/* Gray */
	.default {
	  color: black;
	}

	.default:hover {
	  background: #e7e7e7;
	}
	</style>

</head>

    
<?php




if($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_username = trim($_POST['user_username']);
    $user_phone    = trim($_POST['user_phone']);
    $user_password = trim($_POST['user_password']);
    $user_repassword = trim($_POST['user_repassword']);
    $user_role = trim($_POST['user_role']);
            

//    $error = [
//
//        'user_username'=>'',
//        'user_phone'=>'',
//        'user_password'=>'',
//        'user_repassword'=>''
//    ];
//
//
//    if(strlen($user_username) < 4){
//        $error['user_username'] = 'Username needs to be longer';
//    }
//
//     if(strlen($user_phone) < 12){
//        $error['user_phone'] = 'Phone number cannot be exceed 11 number';
//    }
//
//    if($user_password == '') {
//        $error['password'] = 'Password cannot be empty';
//    }
//    
//    if($user_password == '') {
//        $error['user_password'] = 'Retype password cannot be empty';
//    }


        register_user($user_username, $user_phone, $user_password, $user_repassword ,$user_role);

        $data['message'] = $user_username;
        $pusher->trigger('notifications', 'new_user', $data);

        login_user($user_username, $user_password);

} 


?>
    
   
    
    
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 ">
			  
			<div class="p-5">
				<div class="text-center">
					<img src="img/bg/register.png" height="80%" width="100%" alt="MakmurLogo">
					<h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
				</div>
			</div>
			  
		  </div>
			
			
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>DAFTAR AKAUN</b></h1>
              </div>
                
                
                
              <form class ="user" role="form" method="post" autocomplete="off">

                  
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0" align="right">
                        <input type="radio" class="btn info" id="supplier" name="user_role" value="Petani"><br>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0" align="left">
                        <input type="radio"  class="btn info" id="buyer" name="user_role" value="Pemborong"><br>
                    </div>
                </div>
				  
				  
				
				  
                  
                <div class="form-group">
                    <input  class="form-control form-control-user" name="user_username" placeholder="ID Pengguna" required>
                </div>
                <div class="form-group">
                  <input class="form-control form-control-user" name="user_phone" placeholder="Nombor Telefon" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="user_password" placeholder="Katalaluan" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="user_repassword" placeholder="Ulangan Katalaluan" required>
                  </div>
                </div>
<!--
                <a href="login.php" class="btn btn-primary btn-user btn-block">
                  Register Account
                </a>
-->
                <div class="">
                    <input type="submit" name="register"  class="btn btn-primary btn-user btn-block" value="Daftar">
                </div>
              </form>
                
                
<!--
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
-->
              <div class="text-center">
                <p>Sudah mempunyai akaun? <a class="" href="login.php">Log Masuk</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
