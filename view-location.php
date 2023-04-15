<?php
error_reporting(0);
$title = "UrFon IFix | Locations";
$currentPage = 'location';
include_once('header.php');
?>

<section class="mt-md-120 mt-sm-90 padding-top-50 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="heading-left-blue-style position-relative">Other UrFon IFix Locations Near You</h2>
            </div>
            <!-- <div class="col-4">
                <img class="img-fluid" alt="" src="https://d1zmiyu61cpipt.cloudfront.net/store-photos/southbirmingham/1161578426427-750x550.jpeg">
            </div> -->
            <?php
            $fetch_devices = mysqli_query($connection, "Select * from stores");

            while ($row = mysqli_fetch_array($fetch_devices)) {
                echo '
                        <div class="col-lg-4 col-md-6 mt-5 ">
                            <div class="card border-0 store_info_card" style="border-radius: 0px 0px 10px 10px;">
                                <div class="card-body d-flex p-0 pb-3">
                                    <div class="col-12">
                                        <p class="mb-0 text-body font-weight-bold">' . $row['s_name'] . '</p>
                                        <p class="mb-0 text-body">' . $row['s_address'] . '</p>
                                        <a href="tel:' . $row['s_phone'] . '"><i class="fa fa-phone mr-2 text-theme"></i>' . $row['s_phone'] . '</a>
                                    </div>
                                </div>
                                <div class="card-footer d-flex  p-0 text-center">
                                    <a class="store_info_btn text-uppercase" href="location.php?s_id=' . $row['s_id'] . '">View Store Info</a>
                                </div>

                            </div>
                        </div>';
            } ?>

            <!-- <div class="col-12 text-center mt-5">
                <a class="btn btn-theme-ghost font-weight-bold mb-4 mt-1 px-5 py-3 rounded-pill text-uppercase" href="">Find More Locations</a>
            </div> -->
        </div>

</section>

<?php

include_once('footer.php');
?>