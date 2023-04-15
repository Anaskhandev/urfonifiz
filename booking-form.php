<?php
error_reporting(0);
$title = "UrFon IFix | Booking-Form";
$currentPage = 'Booking';

include_once('header.php');
$service = $_POST['service'];
$device = $_POST['device'];
?>
<section class="padding-top-150 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form id="booking_form" name="booking_form" method="POST" action="booking.php" enctype="multipart/form-data">
                    <div class="card shadow">
                        <div class="card-header h2 text-center bg-theme text-white text-uppercase">
                            Booking Form
                        </div>
                        <div class="card-body booking-form pt-5">
                            <div class="form-row">
                                <div class="col-6">
                                    <label>First Name</label>
                                    <input type="text" name="f_name" id="f_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-6">
                                    <label>Last Name</label>
                                    <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-row pt-4">
                                <div class="col-6">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <label>Contact No #</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="e.g +92-342-2729486">
                                </div>
                            </div>
                            <div class="form-row pt-4">
                                <div class="form-group col-6">
                                    <label for="service_type">Service</label>
                                    <select id="service_type" name="service_type" class="form-control">
                                        <option value="<?php echo $service ?>" selected><?php echo $service ?></option>
                                        <?php
                                        $fetch_services = mysqli_query($connection, "Select * from service_type");
                                        while ($row = mysqli_fetch_array($fetch_services)) {
                                            if ($row['st_title'] == $service) {
                                                continue;
                                            }
                                            echo '
                                            <option value="' . $row['st_id'] . '">' . $row['st_title'] . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="device_name">Device</label>
                                    <select id="device_name" name="device_name" class="form-control">
                                        <option value="<?php echo $device ?>" selected><?php echo $device ?></option>
                                        <?php
                                        $fetch_devices = mysqli_query($connection, "Select * from all_devices");
                                        while ($row = mysqli_fetch_array($fetch_devices)) {
                                            if ($row['d_name'] == $device) {
                                                continue;
                                            }
                                            echo '
                                            <option value="' . $row['d_id'] . '">' . $row['d_name'] . '</option>
                                            ';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row pt-4">
                                <div class="form-group col-12">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-transparent border-0">
                            <button type="submit" name="submit" class="btn btn-theme px-5 py-2 rounded-pill">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>