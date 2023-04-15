<?php
error_reporting(0);
$title = "UrFon IFix | Repairs";
$currentPage = 'repairs';
include_once('header.php');
?>

<section class="mt-md-120 mt-sm-90 repair_main_bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left text-white">
                <h1 class="my-5 font-theme font-lg-big text-center text-md-left">Device Repair</h1>
            </div>
        </div>
    </div>
    <div class="repair_main_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white">
                    <p class="text-center text-md-left">2 Locations Nationwide</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-top-50 bg-grey section-repair-main padding-bottom-50">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4">
                    <div class="d-flex align-items-baseline justify-content-between repaire_store_upper">
                        <h5>Select a store</h5>
                        <a href="" class="text-theme">Search</a>
                    </div>

                    <div class="col-12 repair_location_form">
                        <h3>Find Your Store</h3>
                        <form action="" class="form-group">
                            <label for="">Find the closest store to get your repair started!</label>
                            <div class="d-flex justify-content-between align-items-center repair_location_form_border rounded">
                                <input type="text" name="" id="" placeholder="Search by Zip code,City or State" class="form-control"><svg height="18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location" role="img" xmlns="http://www.w3.org/2000/svg "
                                    viewBox="0 0 512 512" class=" ml-3 mr-2 mr-3"><path fill="currentColor" d="M496 224h-50.88C431.61 143.66 368.34 80.39 288 66.88V16c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v50.88C143.66 80.39 80.39 143.66 66.88 224H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h50.88C80.39 368.34 143.66 431.61 224 445.12V496c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-50.88c80.34-13.51 143.61-76.78 157.12-157.12H496c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM256 384c-70.7 0-128-57.31-128-128s57.3-128 128-128 128 57.31 128 128-57.3 128-128 128zm0-216c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88z" class=""></path></svg>
                            </div>
                            <button class="btn btn-theme rounded-pill mt-4 repair_location_btn" type="submit">FIND MY STORE</button>
                        </form>
                    </div>
                </div> -->
            <div class="col-md-8 offset-md-2">
                <form action="booking-form.php" method="POST">
                    <div class=" service_type_main">
                        <p class="text-uppercase text-center service_type_inner mb-0"> Select a service type</p>
                    </div>
                    <div class="row all-devices pt-3 d-flex">
                        <div class="col-12">
                            <div class="form-row service_type_buttons d-flex">
                                <?php
                                $fetch_service = mysqli_query($connection, "Select * from service_type");

                                while ($row = mysqli_fetch_array($fetch_service)) {
                                    echo '
                                                <div class="form-check col-lg-4 col-6">
                                                    <input type="radio" class="form-check-input service_type_radio" name="service" id="' . $row['st_title'] . '" value="' . $row['st_title'] . '" hidden>
                                                    <label class="form-check-label pointer device-item-a service_type_label w-100" for="' . $row['st_title'] . '">
                                                            <div class="card all-devices-card">
                                                                <div class="card-body device_body text-center">
                                                                    <img class="img-fluid" alt="' . $row['st_image_alt'] . '" width="150" height="150" src="' . $row['st_image'] . '">
                                                                </div>
                                                                <div class="card-footer device_footer text-center">
                                                                    <p class="mb-0">' . $row['st_title'] . '</p>
                                                                </div>
                                                            </div>   
                                                    </label>
                                                </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 service_type_main">
                        <p class="text-uppercase text-center service_type_inner mb-0">CHOOSE YOUR DEVICE</p>
                    </div>
                    <div class="row all-devices pt-3 d-flex">
                        <div class="col-12">
                            <div class="form-row device_type_buttons d-flex">
                                <?php
                                $fetch_devices = mysqli_query($connection, "Select * from all_devices");

                                while ($row = mysqli_fetch_array($fetch_devices)) {
                                    echo '
                                                <div class="form-check col-lg-4 col-6">
                                                    <input type="radio" class="form-check-input device_type_radio" name="device" id="' . $row['d_name'] . '" value="' . $row['d_name'] . '" hidden>
                                                    <label class="form-check-label pointer device-item-a device_type_label w-100" for="' . $row['d_name'] . '">
                                                            <div class="card all-devices-card">
                                                                <div class="card-body device_body text-center">
                                                                    <img class="img-fluid" alt="' . $row['d_alt'] . '" width="150" height="150" src="' . $row['d_image'] . '">
                                                                </div>
                                                                <div class="card-footer device_footer text-center">
                                                                    <p class="mb-0">' . $row['d_name'] . '</p>
                                                                </div>
                                                            </div>   
                                                    </label>
                                                </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <input type="submit" name="submit" class="btn btn-theme rounded-pill px-5" value="Ask For Free Quote">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="repair_review padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">

                <h2 class="heading-left-blue-style">The Best Reviews in the Industry</h2>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-lg-2 col-md-5 mb-4 mb-md-0">
                <div class="card all-devices-card">
                    <div class="card-body review_body text-center">
                        <p class="text-black-50 font-weight-bold small text-uppercase">out of 2161 reviews</p>
                        <h2 class="text-dark-black">4.6</h2>
                        <p class="text-dark-black">Star Rating</p>
                    </div>
                    <div class="text-white card-footer device_footer text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-7">
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="fa fa-star review-star text-theme">
                            <strong class="review-star-label">5</strong>
                        </i>
                        <span class="review_rating_innerline">
                            <span class="review_rating_upperline_5"></span>

                        </span>
                        <p class="text-black-50 text-dark-white mb-0">(1000)</p>
                    </li>

                </ul>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="fa fa-star review-star text-theme">
                            <strong class="review-star-label">4</strong>
                        </i>
                        <span class="review_rating_innerline">
                            <span class="review_rating_upperline_4"></span></span>
                        <p class="text-black-50 text-dark-white mb-0">(800)</p>
                    </li>

                </ul>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="fa fa-star review-star text-theme">
                            <strong class="review-star-label">3</strong>
                        </i>
                        <span class="review_rating_innerline">
                            <span class="review_rating_upperline_3"></span>
                        </span>
                        <p class="text-black-50 text-dark-white mb-0">(325)</p>

                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="fa fa-star review-star text-theme">
                            <strong class="review-star-label">2</strong>
                        </i>
                        <span class="review_rating_innerline">
                            <span class="review_rating_upperline_2"></span>
                        </span>
                        <p class="text-black-50 text-dark-white mb-0">(27)</p>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="fa fa-star review-star text-theme">
                            <strong class="review-star-label">1</strong>
                        </i>
                        <span class="review_rating_innerline">
                            <span class="review_rating_upperline_1"></span>
                        </span>
                        <p class="text-black-50 text-dark-white mb-0">(9)</p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 pt-4 pt-lg-0 text-center text-lg-left">
                <p class="text-black-50 text-dark-white">Whether you had a stellar experience or you think there’s room for improvement, please let us know. We value your experience at UrFon IFix above anything else. We want to hear from you!</p>
                <a href="feedback.php" class="btn btn-primary rounded-pill repair_review_btn">Write a Review</a>
            </div>
        </div>
        <div class="row padding-top-100 ">
            <?php
            $sql = mysqli_query($connection, "SELECT * FROM feedback");
            while ($row = mysqli_fetch_assoc($sql)) {
                echo '
                <div class="col-lg-6 client_review my-3">
                    <div class="col-4 col-lg-3 col-md-2">
                        <img class="img-fluid" src="https://d1zmiyu61cpipt.cloudfront.net/assets/images/icons/reviews/7.jpg">
                    </div>
                    <div class="col-lg-8">
                  
                        <p class="client_name mb-0">' . $row['f_name'] . '/
                            <b class="font-weight-bold text-theme">' . $row['f_city'] . '</b>
                        </p>
                        <h4 class="text-black-50 text-dark-white mb-0">' . $row['f_device'] . '</h4>
                        <i class="fa fa-star text-theme"></i>
                        <i class="fa fa-star text-theme"></i>
                        <i class="fa fa-star text-theme"></i>
                        <i class="fa fa-star text-theme"></i>
                        <i class="fa fa-star text-theme"></i>
                        <i class="fa fa-certificate certificate_favicon">
                            <i class="fa fa-check check_favicon"></i></i>
                        <i class="pl-2 small text-black-50 text-dark-white text-uppercase">verfied purhase</i>
                        <p class="text-black-50 text-dark-white mb-0">' . $row['f_date'] . '</p>
                        <p class="text-black-50 text-dark-white mb-0"> ' . $row['f_message'] . '</p>
                    </div>
                </div>';
            }
            ?>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a id="loadMore" class="btn btn-outline rounded-pill pointer reviews_view_more_btn">View More</a>
        </div>

    </div>

</section>
<section class="padding-top-100 repair_card_main padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center text-uppercase font-theme font-lg-big">You Come First</h1>
            </div>
        </div>
        <div class="row padding-top-50 ">
            <div class="col-lg-4 repair_card_inner">
                <div class=" all-devices-card card-body p-4 mb-5 mb-lg-0">
                    <div class="text-center mb-lg-5 mb-3">
                        <img alt="Limited Lifetime Warranty" class="img-fluid" src="./assets/img/lifetime.png">
                    </div>
                    <h3 class="mb-5 text-center h4">Limited Lifetime Warranty</h3>
                    <div class="">
                        <p class="mb-0">All parts and labor that we provide are covered by a Limited Lifetime Warranty. If your repaired device seems to be having issues after a repair, please visit UrFon IFix right away for warranty diagnostics.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 repair_card_inner">
                <div class=" all-devices-card card-body p-4 mb-5 mb-lg-0">
                    <div class="text-center mb-lg-5 mb-3">
                        <img class="img-fluid" src="https://www.ubreakifix.com/assets/images/city_service/icon-price.png">
                    </div>
                    <h3 class="mb-5 text-center h4">Low Price Guarantee</h3>

                    <div class="">
                        <p class="mb-0">How do you know that you are always getting the best price for your repair services? Because UrFon IFix offers a Low Price Guarantee on all local competitors’ regular advertised pricing.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 repair_card_inner">
                <div class=" all-devices-card card-body p-4 mb-5 mb-lg-0">
                    <div class="text-center mb-lg-5 mb-3">
                        <img class="img-fluid" src="https://www.ubreakifix.com/assets/images/city_service/icon-support.png">
                    </div>
                    <h3 class="mb-5 text-center h4">We're Here for You</h3>

                    <div class="">
                        <p class="mb-0">You, the Customer, are the most important aspect of our business at UrFon IFix. From our friendly, well-trained staff at each location to a dedicated Customer Consultant Team, rest assured your satisfaction is our number one
                            priority.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php
include_once('footer.php');
?>