<?php
$title = "UrFon IFix | Thank You ";
$currentPage = 'payment';
include_once('header.php');
require_once "shopping_cart.php";

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
?>

<section class="padding-top-150 padding-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card shadow">
                    <div class="card-header h2 text-center bg-theme text-white text-uppercase">
                        Shopping Cart
                    </div>
                    <div class="card-body pt-3" id="shopping-cart">
                        <div class="success mb-4">
                            <h4 class="text-center">Thank you for shopping with us. Your order has been placed. Your
                                order ID is <?php echo $_GET["item_number"]; ?></h4>
                        </div>
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
                                            <td><span class="font-weight-bold"><?php echo $item["pr_name"]; ?></span><br><span class="small"><?php echo $item["br_name"]; ?></span></td>
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
                        <a id="btnEmpty" class="btn btn-theme float-right" title="Empty Cart" href="mobile_brands.php?action=empty"><i class="fa fa-trash mr-2"></i>Empty Cart</a>
                    </div>
                    <div class="card-footer text-center bg-transparent border-0">
                        <a href="mobile_brands.php" class="btn-continue btn btn-theme rounded-pill px-5">Continue
                            Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('footer.php');
?>