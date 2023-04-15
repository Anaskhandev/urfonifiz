<?php
include_once('./config.php');
if ($connection) {
    echo "";
} else {
    echo "not connection";
}
if (isset($_POST["btn_forget"])) {
    $ClientEmail = $_POST["email"];
    // $token=bin2hex(random_bytes(15));
    $query = mysqli_query($connection, "SELECT * FROM `admin_login` WHERE Email='$ClientEmail'");

    $emailcount = mysqli_num_rows($query);

    if ($emailcount) {
        $data = mysqli_fetch_array($query);
        $username = $data[1];
        $token = $data[3];

        $to = $ClientEmail;
        $subject = "UrFon IFix Password Reset";
        $body = "Hello " . $username . " to reset your password kindly click on the link: https://www.phonehospitalusa.com/reset.php?token=" . $token . "";
        $headers = "From: ullahkhalil99@gmail.com";

        $result = mail($to, $subject, $body, $headers);
        if ($result) {
            $success = "We have sent you a link to " . $ClientEmail . " . Please check your mail.";
        } else {
            $notemailsend = "something went wrong while sending email";
        }
    } else {
        $error = "You enterd Invalid email address";
    }

    if ($success != "") {
        echo "<span class='alert alert-success'>$success</span>";
    } else if ($notemailsend != "") {
        echo "<span class='alert alert-danger'>$notemailsend</span>";
    } else {
        echo "<span class='alert alert-danger'>$error</span>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link href="./assets/fonts/BebasKai.otf">
    <link href="./assets/fonts/BebasKai.ttf">
    <link rel="stylesheet" href="./assets/css/daniyal.css">
</head>

<body>
    <form method="POST">
        <input type="email" name="email" placeholder="Enter Your Email">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_forget">Forgot Password</button>
    </form>
</body>

</html>