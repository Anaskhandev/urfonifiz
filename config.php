<?php 

// define('HOST','localhost');
// define('USER','root');
// define('PASSWORD','');
// define('DB','phonehospital');

define('HOST','localhost');
define('USER','');
define('PASSWORD','');
define('DB','thewpked_phonehospital');
$connection=mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'thewpked_phonehospital');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}