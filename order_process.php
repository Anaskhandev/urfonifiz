<?php
require('bankconfig.php');
$title = "UrFon IFix | Payment ";
$currentPage = 'payment';
include_once('header.php');
require_once "shopping_cart.php";

if ($_SESSION['user'] == null) {
    echo "<script>window.location.href='admin-login.php'</script>";
}

$member_id = $_SESSION["userID"]; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();

/* Calculate Cart Total Items */
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;

if (!empty($cartItem)) {
    if (!empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["pr_price"] * $item["quantity"]);
        }
    }
}

if (!empty($_POST["proceed_payment"])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
}
$order = 0;
if (!empty($name) && !empty($address) && !empty($city) && !empty($zip) && !empty($country)) {
    // able to insert into database

    $order = $shoppingCart->insertOrder($_POST, $member_id, $item_price);
    if (!empty($order)) {
        if (!empty($cartItem)) {
            if (!empty($cartItem)) {
                foreach ($cartItem as $item) {
                    $shoppingCart->insertOrderItem($order, $item["pr_id"], $item["pr_price"], $item["quantity"]);
                }
            }
        }
    }
}

?>

<section class="padding-top-150 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="submit.php" method="post">
                    <div class="card shadow">
                        <div class="card-header h2 text-center bg-theme text-white text-uppercase">
                            Checkout Process
                        </div>
                        <div class="card-body booking-form">
                            <h4 class="mb-3 text-capitalize text-center">Customer Details</h4>
                            <div class="frm-customer-detail">
                                <div class="form-row">
                                    <div class="col-12">
                                        <label>Card Holder Name</label>
                                        <input type="text" name="customer_name" class="form-control"
                                            PlaceHolder="Card Holder Name" required>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-12">
                                        <label>Address</label>
                                        <textarea name="customer_address" id="customer_address" rows=4
                                            class="form-control" PlaceHolder="Address" required></textarea>
                                        <span id="error_customer_address" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-6">
                                        <label>City</label>
                                        <input type="text" name="customer_city" class="form-control" PlaceHolder="City"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <label>State</label>
                                        <input type="text" name="customer_state" class="form-control"
                                            PlaceHolder="State" required>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-6">
                                        <label>Zip Code</label>
                                        <input type="text" name="customer_pin" class="form-control"
                                            PlaceHolder="Zip Code" required>
                                    </div>
                                    <div class="col-6">
                                        <label>Country</label>
                                        <input type="text" name="customer_country" class="form-control"
                                            PlaceHolder="Country" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-details">
                                <h4 class="my-3 text-capitalize text-center">Payment Details</h4>
                                <input name="mamberId" type="hidden" value="<?php echo $member_id; ?>" required>
                                <input name="amount" type="hidden" value="<?php echo $item_price * 100; ?>" required>
                            </div>
                            <div class="text-center">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="<?php echo $publishableKey; ?>"
                                    data-amount="<?php echo $item_price * 100; ?>" data-name="UrFon IFix"
                                    data-description="Payment Method for UrFon IFix" data-image="logo.png"
                                    data-currency="usd">
                                </script>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-borderless table-responsive-md shadow">
                    <thead class="bg-theme text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($cartItem)) {
                            $i = 1;
                            foreach ($cartItem as $item) {
                        ?>
                        <!-- Product List -->
                        <tr class="product-item">
                            <th scope="row"><?php echo $i;
                                                    $i++; ?></th>
                            <td><img class="img-fluid" width="50" src="<?php echo $item["pr_images"]; ?>"></td>
                            <td><span class="font-weight-bold"><?php echo $item["pr_name"]; ?></span><br><span
                                    class="small"><?php echo $item["br_name"]; ?></span></td>
                            <td><?php echo "x " . $item["quantity"]; ?></td>
                            <td class="font-weight-bold"><?php echo "$" . $item["pr_price"]; ?></td>
                        </tr>
                        <!-- Product List -->
                        <?php
                            }
                        }
                        ?>
                        <tr class="border-top">
                            <th scope="col">TOTAL</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><?php echo "x " . $item_quantity; ?></th>
                            <th scope="col"><?php echo "$" . $item_price; ?></th>
                        </tr>
                    </tbody>
                </table>
                <a id="btnEmpty" class="btn btn-theme float-right" title="Empty Cart"
                    href="mobile_brands.php?action=empty"><i class="fa fa-trash mr-2"></i>Empty Cart</a>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>