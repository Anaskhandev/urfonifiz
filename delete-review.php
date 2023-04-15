<?php 
 include('./config.php');
    if(isset($_GET['f_id'])){
        $f_id=$_GET['f_id'];
        mysqli_query($connection,"DELETE FROM feedback WHERE f_id=$f_id");
        header("location:view-reviews.php");
    }
?>  