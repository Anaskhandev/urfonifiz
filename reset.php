<?php 
include_once('./config.php');
session_start();

if($connection){echo "";}else{
    echo "not connection";
}

if(isset($_POST["btn_submit"])){

$token=$_GET["token"];
$newpassword=$_POST["password"];
$query=mysqli_query($connection,"UPDATE admin_login SET password='$newpassword' WHERE token='$token'");

if($query){
	header('location:admin-login.php');
	$_SESSION['password_reset']="your password has been updated";
}
else{
	echo "someting went wrong while rseting password";
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
    <link rel="stylesheet" href="./assets/css/daniyal.css">
</head>

<body>
    <form method="POST">
        <input type="password" name="password" id="password" placeholder="Enter Your Email">
		<input type="password" name="confirm_password" id="confirm_password" placeholder="Enter Your Email">
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_submit" name="btn_submit">Submit</button>
		<span id="mesg"></span>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){

	$("#btn_submit").click(function(){
		var pass=$("#password").val();
	var con_passs=$("#confirm_password").val();

if(pass==con_passs){
	return true;
}
else{
$("#mesg").html("Password not matching try again");
return false;
}
	});


});

</script>

</body>
</html>