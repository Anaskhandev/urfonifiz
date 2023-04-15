<?php
$title = "UrFon IFix | Checkout";
$currentPage = 'checkout';
include_once('header.php');
?>

<section class="padding-top-150 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form name="frm_customer_detail" action="process-order.php" method="POST">
                    <div class="card shadow">
                        <div class="card-header h2 text-center bg-theme text-white text-uppercase">
                            Customer Details
                        </div>
                        <div class="card-body booking-form pt-5">
                            <div class="frm-customer-detail">
                                <div class="form-row">
                                    <div class="col-6">
                                        <label>Customer Name</label>
                                        <input type="text" name="name" class="form-control" PlaceHolder="Customer Name" required>
                                    </div>
                                    <div class="col-6">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" PlaceHolder="Address" required>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-6">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" PlaceHolder="City" required>
                                    </div>
                                    <div class="col-6">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control" PlaceHolder="State" required>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-6">
                                        <label>Zip Code</label>
                                        <input type="text" name="zip" class="form-control" PlaceHolder="Zip Code" required>
                                    </div>
                                    <div class="col-6">
                                        <label>Country</label>
                                        <input type="text" name="country" class="form-control" PlaceHolder="Country" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-transparent border-0">
                            <input type="submit" class="btn-action btn btn-theme px-5 py-2 rounded-pill" name="proceed_payment" value="Proceed to Payment">
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

<?php
include_once('footer.php');
?>