<?php 
 include('./config.php');
    if(isset($_GET['pr_id'])){
        $pr_id=$_GET['pr_id'];
        mysqli_query($connection,"DELETE FROM all_products WHERE pr_id=$pr_id");
        header("location:view-products.php");
    }
?>  