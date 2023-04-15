<?php
error_reporting(0);
$title = "UrFon IFix | Home";
$currentPage = 'home';
include_once('header.php');
?>

<section class="hero">
    <div class="owl-carousel owl-header owl-theme hero-carousel position-relative">
        <div class="item bg_owl_img1">
            <div class="container">
                <div class="text-center row hero-text" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="col-md-12 text-center hero-text" data-aos="zoom-in" data-aos-duration="1200">
                        <h1 class=" h1-3 font-theme mt-4">Trusted Services Repair Your Laptop & Computer
                        </h1>
                        <h3 class="h1-3 font-theme">UrFoniFix</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg_owl_img2">
            <div class="container">
                <div class="text-center row hero-text" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="col-md-12 text-center hero-text" data-aos="zoom-in" data-aos-duration="1200">
                        <h1 class=" h1-3 font-theme mt-4">Trusted Services Repair Your Laptop & Computer
                        </h1>
                        <h3 class="h1-3 font-theme">UrFoniFix</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg_owl_img3">
            <div class="container">
                <div class="text-center row hero-text" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="col-md-12 text-center hero-text" data-aos="zoom-in" data-aos-duration="1200">
                        <h1 class=" h1-3 font-theme mt-4">Trusted Services Repair Your Laptop & Computer
                        </h1>
                        <h3 class="h1-3 font-theme">UrFoniFix</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="position-relative padding-top-150 padding-bottom-50 products_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 ">
                <h3 class="heading-left-blue-style position-relative mx-lg-4">What can we fix for you today?</h3>
                <div class="container-fluid">
                    <div class="row all-devices pt-3 d-none d-lg-block">
                        <?php
                        $fetch_devices = mysqli_query($connection, "Select * from all_devices");

                        while ($row = mysqli_fetch_array($fetch_devices)) {
                            echo '<div class="device-item">
                            <a href="repair.php" class="device-item-a">
                            <div class="card all-devices-card">
                            <div class="card-body device_body text-center">
                            <img class="img-fluid" alt="' . $row['d_alt'] . '" width="150" height="150" src="' . $row['d_image'] . '"></div>
                            <div class="card-footer device_footer text-center">
                            <p class="mb-0">' . $row['d_name'] . '</p>
                            </div>
                            </div>
                            </a>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="row pt-3 d-block d-lg-none">
                        <?php
                        $fetch_devices = mysqli_query($connection, "Select * from all_devices");

                        while ($row = mysqli_fetch_array($fetch_devices)) {
                            echo '
                            <a href="repair.php" class="device-item-a sm-md-view">
                            <div class="all-devices-card d-flex  align-items-center mt-3">
                            <div class="device_body text-center">
                            <img class="img-fluid" alt="' . $row['d_alt'] . '" width="150" height="150" src="' . $row['d_image'] . '"></div>
                            <div class="device_footer text-center">
                            <p class="mb-0">' . $row['d_name'] . '</p>
                            </div>
                            </div>
                            </a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="padding-top-50  padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-md-3 offers">
                <h5 class="mb-3 text-dark title-highlight-top">Free Diagnostics</h5>
                <p>We believe in a transparent repair process. If you’re not sure what’s wrong with your device,
                    we’ll diagnose it for free.</p>

            </div>
            <div class="col-md-3 offers">
                <h5 class="mb-3 text-dark title-highlight-top">Low Price Guarantee</h5>
                <p class="offer-speration">We want you to be confident that you’re getting the best price. We’ll
                    match any local competitor’s published price for the same repair and beat it by $5.</p>
                <a href="" class="text-theme">How To Price Match
                    <svg aria-hidden="true" height="15" focusable="false" data-prefix="fal"
                        data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" class="svg-inline--fa fa-angle-double-right fa-w-10 fa-3x">
                        <path fill="currentColor"
                            d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17zm128-17l-117.8-116c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17L255.3 256 153.1 356.4c-4.7 4.7-4.7 12.3 0 17l7.1 7.1c4.7 4.7 12.3 4.7 17 0l117.8-116c4.6-4.7 4.6-12.3-.1-17z"
                            class=""></path>
                    </svg>
                </a>

            </div>
            <div class="col-md-3 offers">
                <h5 class="mb-3 text-dark title-highlight-top">Quick Turnaround</h5>
                <p class="offer-speration">We know you don’t have all day so we’ll return your device as quickly as
                    possible. Most of our repairs can be performed in 30 minutes.</p>

            </div>
            <div class="col-md-3 offers">
                <h5 class="mb-3 text-dark title-highlight-top">Limited Lifetime Warranty</h5>
                <p class="offer-speration">All of our repairs are backed with our Limited Lifetime Warranty, hassle-free
                    warranty.</p>

            </div>
        </div>
    </div>

</section>
<section>
    <div class="container-fluid">
        <div class="row padding-top-50 padding-bottom-100">
            <div class="col-md-12">
                <h1 class="text-center text-theme text_overline text-uppercase font-theme font-lg-big">A Little More
                    About Us</h1>
            </div>
        </div>
    </div>
    <div class="featured_about featured_about_second featured_about_flip">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <h1 class="text-uppercase heading_underline_theme font-theme font-lg-big">Speedy Repairs</h1>
                    <p class="About_us_text pt-4">Our team carries out same-day repairs, with a Limited Lifetime
                        Warranty warranty and price match guarantee on all our work. In fact, iPhone screen repairs are
                        often carried out in 30 minutes or less. Our technicians have expertly fixed more than 10,000
                        devices including cracked screen, water damage, defective speakers, battery problems. Whatever
                        the technical issue, we fix it all.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="featured_about featured_about_third">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
                    <h1 class="text-uppercase heading_underline_theme font-theme font-lg-big">Quality Service</h1>
                    <p class="About_us_text pt-4">At UrFon IFix, we lead the industry in cell phone, iPod and iPad
                        Repair because of our reliability, affordability and quality service. No other team has a more
                        rigorous training and certification process, and our team is able to fix electronic issues that
                        are not even found by the average repair technician. That's why we're comfortable offering a
                        Limited Lifetime Warranty warranty and pricing guarantee - we stand by the quality of our
                        same-day repair. Whether we're fixing your iPhone, Samsung, Moto, LG, ZTE and many other
                        devices. we will make it work like it's a brand-new device just taken out of the box.</p>
                </div>
            </div>
        </div>
</section>
<section class="get_in_touch get_in_touch_bg">
    <div class="container">
        <div class="col-lg-8 offset-lg-2">
            <p class="get_in_touch_content text-center">You deserve a device that works when you need it to. When
                things aren’t going right, our technicians can help with any issue that you’re facing. Visit your
                local UrFon IFix and let us reconnect you to what matters most.</p>
            <div class="text-center pt-4">
                <a href="" class="btn btn-outline-light rounded-pill text-uppercase get_in_touch_btn px-4 py-2">Get
                    In Touch</a>
            </div>
        </div>
    </div>
</section>
<section class="padding-top-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid gilr-img-file" alt="UrFon IFix Technician" src="./img/file.PNG">
            </div>
            <div class="col-lg-6">
                <h2 class="section-head position-relative">Come on in, we’re waiting for you!</h2>
                <p>At UrFon IFix we are passionate about our work and that passion can be felt in every repair that
                    we do. We’re the best in the industry because we give every device the same care and attention
                    that we would give our own. We treat each
                    diagnosis and repair as a challenge waiting to be beaten and not like a chore that needs to be
                    done. We take every opportunity to be better than we were yesterday, and we thought yesterday
                    was a pretty good day.</p>
                <button class="btn btn-theme px-5 py-2 rounded-pill mb-3 mb-lg-0">GET STARTED</button>
            </div>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>