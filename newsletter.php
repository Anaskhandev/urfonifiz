<?php

$nl_email=$_POST['nl_email'];
if(isset($_POST['submit'])){
    $sql= "INSERT INTO newsletter (nl_email) VALUES ('$nl_email')";
    $result = mysqli_query($connection,$sql);
}
?>