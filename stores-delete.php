<?php 
 include('./config.php');
    if(isset($_GET['s_id'])){
        $s_id=$_GET['s_id'];
        mysqli_query($connection,"DELETE FROM stores WHERE s_id=$s_id");
        header("location:view-stores.php");
    }

?>  