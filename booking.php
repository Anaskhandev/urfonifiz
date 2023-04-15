<?php 
    if(isset($_POST['submit']))
    {
        $fname=$_POST['f_name'];
        $lname=$_POST['l_name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $service_type=$_POST['service_type'];
        $device_name=$_POST['device_name'];
        $comment=$_POST['message'];
       
        $mailto = "ullahkhalil99@gmail.com";
        $subject = "Repair Booking Request";
        $headers = 'From:' .$email;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = '<html><body>';
        $message .= '<b>First Name:</b> '.$fname.'<br>';
        $message .= '<b>Last Name:</b> '.$lname.'<br>';
        $message .= '<b>Email:</b> '.$email.'<br>';
        $message .= '<b>Phone No:</b> '.$phone.'<br>';
        $message .= '<b>Service:</b> '.$service_type.'<br>';
        $message .= '<b>Device:</b> '.$device_name.'<br>';
        $message .= '<b>Message:</b> '.$comment.'<br>';
        $message .= '</body></html>';
    
        $mail_status = mail($mailto,$subject,$message,$headers);
        if($mail_status == true){
            header('Location:./');
            echo "<script>alert('Thank you for the message. We will contact you shortly.');</script>";
        }else{
            header('Location:/repair.php');
            echo "<script>alert('Sorry! Please try again.');</script>";
        }
    }
?>