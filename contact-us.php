<?php
error_reporting(0);
$title = "UrFon IFix | Contact";
$currentPage = 'contact';
include_once('header.php');

// include('config.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email'];
    $store = $_POST['store'];
    $comment = $_POST['message'];

    $mailto = "ullahkhalil99@gmail.com";
    $subject = "UrFon IFix";
    $headers = 'From:' . $email;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body>';
    $message .= '<b>First Name:</b> ' . $fname . '<br>';
    $message .= '<b>Last Name:</b> ' . $lname . '<br>';
    $message .= '<b>Email:</b> ' . $email . '<br>';
    $message .= '<b>Store:</b> ' . $store . '<br>';
    $message .= '<b>Message:</b> ' . $comment . '<br>';
    $message .= '</body></html>';

    mail($mailto, $subject, $message, $headers);
}
?>

<section class="contact_us_form_main position-relative slice-right-to-left padding-top-150 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <h1 class=" text-white text-uppercase">Contact Us</h1>
                <p class=" form-para pb-3  text-white">Have a question? Need help? Get in touch with us.</p>
                <div class="contact_us_form_main_bg">
                    <form id="contact_form" name="contact_form" method="POST" action="" enctype="multipart/form-data">
                        <div class="contact_us_form_inner">
                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="f_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="l_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Store Name (optional)</label>
                                    <select class="form-control" id="store" name="store">
                                        <option disabled selected>Select Store</option>
                                        <?php
                                        $fetch_devices = mysqli_query($connection, "Select * from stores");

                                        while ($row = mysqli_fetch_array($fetch_devices)) {
                                            echo '
                                                <option value="' . $row['s_name'] . '">' . $row['s_name'] . '</option>
                                                ';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" rows="5" style="resize:none"
                                        placeholder="Enter your feedback" id="message" cols="50"></textarea>
                                </div>

                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info btn-block submit_contact_us_form">Get
                            Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-top-100 padding-bottom-50">
    <div class="container">
        <div class="pb-5 pl-3 pl-md-0 row">
            <div class="col-lg-12">
                <h3 class="heading-left-blue-style position-relative">Ways You Can Reach Out</h3>
                <p class="text-dark">We've got a team ready to help with any issue you may be having.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-5 title-highlight-top pt-4 position-relative">
                <p class="pl-1">Email or Phone</p>
                <div class="contact_us_a_main font-weight-bold mb-5 mb-lg-0">
                    <a href="tel:4693329662" class="align-items-center contact_us_a d-flex justify-content-between">
                        <span class=""><i class="fa fa-phone mr-2"></i> (469) 332 - 9662
                        </span>
                        <i class="fa fa-arrow-right "></i>
                    </a>

                    <a href="mailto:urfonifix@gmail.com"
                        class="align-items-center contact_us_a d-flex justify-content-between font-weight-bold ">
                        <span class=""><i class="fa fa-envelope mr-2"></i>
                            urfonifix@gmail.com
                        </span>
                        <i class="fa fa-arrow-right "></i>
                    </a>
                    <div class="contact_us_a pt-3 pb-4">
                        <p class=" mb-0 font-weight-bold">Hours</p>
                        <p class="text-dark mb-0">Mon - Sat: 10:00am - 10:00pm</p>
                        <p class="text-dark mb-0">Sunday: 12:00pm - 8:00pm</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 speration ">

            </div>

            <div class="col-lg-5 title-highlight-top pt-4 position-relative">
                <p class="pl-1">On Social </p>
                <div class="contact_us_a_main font-weight-bold">
                    <a class="align-items-center d-flex contact_us_a justify-content-between"
                        href="https://www.facebook.com/UrFoniFix/" target="blank_">
                        <span class=""><i class="fab fa-facebook-square mr-2 "></i>
                            facebook.com</span>
                        <i class="fa fa-arrow-right "></i>
                    </a>
                    <a class="align-items-center d-flex contact_us_a justify-content-between" href="">
                        <span class=""><i class="fab fa-twitter mr-2"></i>
                            twitter.com</span>
                        <i class="fa fa-arrow-right "></i>
                    </a>
                    <a class="align-items-center d-flex contact_us_a justify-content-between"
                        href="https://www.instagram.com/urfonifix" target="_blank">
                        <span class=""><i class="fab fa-instagram  mr-2"></i>
                            instagram.com</span>
                        <i class="fa fa-arrow-right "></i>
                    </a>
                    <a class="align-items-center d-flex contact_us_a justify-content-between" href="">
                        <span class=""><i class="fab fa-youtube mr-2"></i>
                            youtube.com</span>
                        <i class="fa fa-arrow-right "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-grey padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="./assets/img/contact-2.png">
            </div>
            <div class="col-md-5 ml-2 ml-md-0 offset-1 pt-3">
                <h2 class="ml-3 position-relative section-head">Friendly Service, Every Time </h2>
                <p class="pt-3 text-dark">At UrFon IFix we are passionate about our work and that passion can be felt in
                    every repair that we do. We’re the best in the industry because we give every device the same care
                    and attention that we would give our own. We treat each diagnosis
                    and repair as a challenge waiting to be beaten and not like a chore that needs to be done. We take
                    every opportunity to be better than we were yesterday, and we thought yesterday was a pretty good
                    day.
                </p>
                <a href="#contact_form"
                    class="btn btn-theme px-4 py-2 rounded-pill js-scroll-trigger partnership_service_btn">Contact
                    Us</a>

            </div>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>