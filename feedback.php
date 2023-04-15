<?php
$title = "UrFon IFix | Feedback";
include_once('header.php');

if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $f_device = $_POST['f_device'];
    $f_city = $_POST['f_city'];
    $f_date = $_POST['f_date'];
    $f_message = $_POST['f_message'];

    $sql = "INSERT INTO feedback (f_name,f_device,f_city,f_date,f_message) VALUES ('$f_name','$f_device','$f_city','$f_date','$f_message')";
    $result = mysqli_query($connection, $sql);
    header("location:repair.php");
}
?>

<section class="padding-bottom-50 padding-top-150">
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-12 col-md-7 p-md-0">
                <form action="" method="POST">
                    <div class="card ">
                        <div class="card-header h2 text-center bg-theme text-white ">
                            FEEDBACK FORM
                        </div>
                        <div class="card-body  booking-form pt-5">
                            <div class="form-row">
                                <div class="col-6">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="f_name" placeholder="Name">
                                </div>
                                <div class="col-6">
                                    <label>Your Device Name</label>
                                    <input type="text" class="form-control" name="f_device" placeholder="Your device name">
                                </div>
                            </div>
                            <div class="form-row pt-4">
                                <div class="col-6">
                                    <label>City</label>
                                    <input type="city" class="form-control" name="f_city" placeholder="City">
                                </div>
                                <div class="form-group col-6">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="f_date" placeholder="">
                                </div>

                            </div>

                            <div class="form-row pt-4">
                                <div class="form-group col-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="f_message" id="description" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
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