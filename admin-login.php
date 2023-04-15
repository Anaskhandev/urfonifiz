<?php
	error_reporting(0);
    session_start();
    if(isset($_SESSION['roll']))
	{
		$roll=$_SESSION['roll'];
		if($roll=='admin')
		{
			 header('location:admin-index.php');
		}
		else{
			 header('location:index.php');
		}
       
    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link href="./assets/fonts/BebasKai.otf">
    <link href="./assets/fonts/BebasKai.ttf">
    <link rel="stylesheet" href="./assets/css/style-light.css">
</head>
    <body class="login_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <a class="navbar-brand js-scroll-trigger main_logo" href="./">
                            <img class="img-fluid" width="150" src="./assets/img/logo-main-white.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class=" w-100 d-flex justify-content-center vh-100 align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-md-4 login-main">
                    <?php 
                        if($_SESSION['password_reset']!=""){
                    ?>
                    <span><?php echo $_SESSION['password_reset']; ?></span>
                    <?php
                        }
                        else{
                            echo '';
                        }
                    ?>
                        <form  action="logincheck.php" class="form-group login-form mb-0" method="POST">
                            <div class="input-group mb-4 mt-2">
                                <div class="input-group-prepend">
                                <i class="fa fa-user input-group-text bg-transparent d-flex text-black-50"></i>
                                </div>
                                <input type="text" name="user" id="user" placeholder="Username" class="form-control  bg-transparent" autocomplete="off">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                <i class="bg-transparent d-flex fa fa-lock input-group-text text-black-50"></i>
                                </div>
                                <input type="password" name="pass" id="pass" autocomplete placeholder="Password" class="form-control bg-transparent ">
                            </div>
                            <a href="forget-password.php" class="small text-theme">Forget Password</a>
							
                            <a href="register.php" class="small text-theme" style="float:right;">Register Here</a>
                            <div class=" text-center mt-3">
                            <input type="submit" class="btn btn-theme w-75"  value="Submit">
                            </div>
							 <?php
							 if(isset($_SESSION['message']))
								{
									//session_destroy();
									echo $message=$_SESSION['message'];
								}						
							?>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/scripts.js"></script>
    </body>
</html>