<?php
$title = "UrFon IFix | Location";
$currentPage = 'location';
include_once('header.php');
?>
<?php


if (isset($_GET['s_id'])) {
    $sql = "select * from stores where s_id = '" . $_GET['s_id'] . "'";
    $result = mysqli_query($connection, $sql);

    foreach ($result as $row) {
?>
        <section class="mt-md-120 mt-sm-90 padding-top-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 ">
                        <h3><?php echo $row['s_name'] ?></h3>
                        <p class="text-dark"><?php echo $row['s_address'] ?></p>
                        <a href="tel:<?php echo $row['s_phone'] ?>" class="text-theme h4 mb-3"><?php echo $row['s_phone'] ?></a>
                        <div class="service-options mt-4">
                            <h5>Available Service Options</h5>
                            <hr>
                            <p class="font-weight-bold">
                                Carry-In - <span class="service_available">Available</span><br>
                            </p>
                            <p class="font-weight-bold">
                                <span>Mail-In Repair</span> - <span class="service_available">Available</span>

                            </p>
                            <a href="repair.php" class="btn btn-theme-ghost font-weight-bold mb-4 mt-1 px-5 py-3 rounded-pill text-uppercase"> Start a Repair </a>
                        </div>
                    </div>

                    <div class="col-md-7 offset-lg-1">
                        <div class="text-center">
                            <h5 class="text-dark">Get Direction:</h5>
                            <div>
                                <iframe src="<?php echo $row['s_map'] ?>" class="w-100" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
?>
<section class="padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="heading-left-blue-style position-relative">Other UrFon IFix Locations Near You</h2>
            </div>
            <?php
            $fetch_devices = mysqli_query($connection, "Select * from stores");

            $count = 0;


            while ($count < 2 && $row = mysqli_fetch_array($fetch_devices)) {

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
                $count++;
            } ?>

            <div class="col-12 text-center mt-5">
                <a class="btn btn-theme-ghost font-weight-bold mb-4 mt-1 px-5 py-3 rounded-pill text-uppercase" href="view-location.php">Find More Locations</a>
            </div>
        </div>

</section>
<section class="padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="heading-left-blue-style position-relative">What Can We Fix for You Today?</h3>
            </div>
            <div class="container-fluid">
                <div class="justify-content-lg-around justify-content-center row">
                    <div class="col-lg-3 col-md-6 ">
                        <a href="repair.php" class="text-center phones_repair">
                            <img class="img-fluid p-4" src="assets/img/phone-loc.png">
                            <p class="phones_repair_a font-weight-bold">Cell Phone Repair</p>
                            <p class="text-dark">From iPhone to Samsung to Google, we’ve got the high-quality parts and training to complete any cell phone repair in Mishawaka, IN.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <a href="repair.php" class="text-center phones_repair">
                            <img class="img-fluid p-4" src="assets/img/tablet-loc.png">
                            <p class="phones_repair_a font-weight-bold">Tablet Repair</p>
                            <p class="text-dark">If your tablet screen is cracked or the battery won’t hold a charge, it’s time to look into a tablet repair in Mishawaka, IN.</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <a href="repair.php" class="text-center phones_repair">
                            <img class="img-fluid p-4" src="assets/img/ipad-loc.png">
                            <p class="phones_repair_a font-weight-bold">iPod Repair</p>
                            <p class="text-dark">Turn to us for the best customer service and the highest quality iPad repair in Mishawaka, IN.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-top-100 location_infromation_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-white text-uppercase">Location Information</h1>
            </div>
            <div class="col-lg-8 text-center mt-5 mx-auto">
                <h3 class="text-white font-weight-bold">UrFon IFix in Mishawaka, IN</h3>
                <p class="text-white font-weight-bold mt-3">You shouldn’t have your day screech to a halt just because of a shattered screen or a broken battery. At UrFon IFix, cell phone repairs are our specialty, but we fix electronics of every kind. If you have a broken device, come see
                    us and we’ll help you out right away. Our highly-trained repair technicians are passionate about electronics, and we offer a free diagnostic exam for every device. If you’re not sure what's wrong with your device, just bring it
                    by and we'll diagnose the problem for free on the spot. It’s that easy!</p>
            </div>
            <div class="col-lg-8 text-center mt-5 mx-auto">
                <h3 class="text-white font-weight-bold">Invest in Your Device’s Future</h3>
                <p class="text-white font-weight-bold mt-3">Modern electronics can do almost anything. Most devices nowadays are a personal assistant, navigator, calculator, and personal computer all in one.They’re worth every penny, but all these amazing features come at a cost. Your gadgets
                    are an investment, and should only be handled by pros who know what they’re doing. Whether it's a software or hardware problem, our highly trained technicians are trained to deal with whatever they're up against. Put your repair
                    to expert hands, ones recognized through an official partnership with top brands across the globe. Come see us at UrFon IFix.</p>
            </div>

            <div class="col-lg-8 text-center mt-5 mx-auto">
                <h3 class="text-white font-weight-bold">A Fast Fix from an Expert Tech</h3>
                <p class="text-white font-weight-bold mt-3">Our free diagnostic isn't the only thing worth bragging about; we also boast a quick turnaround time. In fact, most repairs can be completed in two hours or less! Customer satisfaction is our priority. And our technicians aren’t just
                    great at fixing phones and iPads-- their communication and collaboration skills are also top notch. Their expertise makes UrFon IFix one of the best phone repair shops in Birmingham. Plus, you’ll always get the lowest rate around;
                    that’s our low-price promise. If you find a lower price for the same repair, we’ll beat their price by $5.</p>
            </div>
            <div class="col-lg-8 text-center mt-5 mx-auto">
                <h3 class="text-white font-weight-bold">iPhone, Galaxy, Tablet Repair in Mishawaka, IN</h3>
                <p class="text-white font-weight-bold mt-3">We provide great electronic repair near you— and we do it fast, too! We offer same-day services so you’re not parted from your precious tech for a second longer than absolutely necessary. We know our repairs are performed by top technicians
                    using high-quality parts, which is why we’re comfortable offering a 90-day warranty for every customer. If you’re in need of a fix fast, stop by UrFon IFix in Birmingham today for your free diagnostic exam.</p>
            </div>
            <div class="col-lg-8 text-center mt-5 mx-auto">
                <h3 class="text-white font-weight-bold">Directions</h3>
                <p class="text-white font-weight-bold mt-3">We are located right off U.S. Highway 280 in the same building as the Cowboys gas station, across the street from Edwards Chevrolet-280.</p>
                <p class="text-white font-weight-bold">If you are coming from UAB get on US-280 E/US-31 S. Continue on US-280 E towards Shelby County. </p>

            </div>
            <div class="col-12 text-center mt-3 mb-5">
                <a href="repair.php" class="btn rounded-pill start_to_repair_btn font-weight-bold">START A REPAIR</a>
            </div>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>