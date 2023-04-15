<?php
/* session_start();
include('./config.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "select * from `admin_login` where `name` = '$username' and `password` = '$password'";
$query= mysqli_query($connection,$sql);
$row =  mysqli_num_rows($query);
if($row == 1){
    $_SESSION['user'] = $username;
    echo 22;
}

  */
?>
<?php
error_reporting(0);
session_start();
include('./config.php');

echo $username=$_POST['user'];
echo $password=$_POST['pass'];

$sql = "select * from `admin_login` where `name` = '$username' and `password` = '$password'";

print_r($query= mysqli_query($connection,$sql));



echo  $row =  mysqli_num_rows($query);
 if($row == 1)
{
while($rows=mysqli_fetch_array($query))
{
	$id =$rows['id'];
	$name =$rows['name'];
	$Email =$rows['Email'];
	$password =$rows['password'];
	$roll =$rows['roll'];
	if($roll == 'admin'){
		
		$_SESSION['roll'] = $roll;
		$_SESSION['user'] = $username;
		$_SESSION['userID'] = $id;
		header("location:admin-index.php");
		
	}
	else{
		
		$_SESSION['roll'] = $roll;
		$_SESSION['user'] = $username;
		$_SESSION['userID'] = $id;
		header("location:index.php");
	}
	}
}
else{
	$_SESSION["message"]="Email And Password Invalid";
	header("location:admin-login.php");
   
}


