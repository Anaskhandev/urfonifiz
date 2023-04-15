<?php
$title = "UrFon IFix | Mobile Phone";
$currentPage = 'brands';
include_once('header.php');
require_once "shopping_cart.php";
$member_id = $_SESSION["userID"]; // you can your integerate authentication module here to get logged in member
$shoppingCart = new ShoppingCart();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {

                $productResult = $shoppingCart->getProductByCode($_GET["code"]);

                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["pr_id"], $member_id);

                if (!empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    if ($member_id == '') {
                        echo "<script>alert('Please Login First To Purchase Anything');</script>";
                        echo "<script>window.location.href='admin-login.php'</script>";
                    } else {

                        $shoppingCart->addToCart($productResult[0]["pr_id"], $_POST["quantity"], $member_id);
                    }
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
$btnEmptyHref = 'main-product.php?pr_id=' . $_GET["pr_id"] . '&action=empty';

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

$btnRemoveHref = 'main-product.php?pr_id=' . $_GET["pr_id"] . '&action=remove';
?>

<section class="mt-md-120 mt-sm-90 repair_main_bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left text-white">
                <h1 class="my-5 font-theme font-lg-big text-center text-md-left">All Products</h1>
            </div>
        </div>
    </div>
</section>

<section class="mt-sm-90 padding-top-50 padding-bottom-50">
    <div class="container">
        <?php

        if (isset($_GET['pr_id'])) {
            $fetch_devices = mysqli_query($connection, "SELECT * FROM all_products where pr_id = '" . $_GET['pr_id'] . "'");

            while ($row = mysqli_fetch_array($fetch_devices)) {
                echo '
        <div class="row">
            <div class="col-md-5 col-lg-5">
                <form method="post"
                action="main-product.php?pr_id=' . $_GET["pr_id"] . '&action=add&code=' . $row['code'] . '">
                    <h4 class="font-weight-normal mb-0 text-uppercase">' . $row['pr_name'] . '</h4>
                    <h1 class="font-weight-bold text-dark mb-4">$' . $row['pr_price'] . '</h1>
                    <h5 class="font-weight-normal">For more description, you can see the below link:</h5>
                    <a href="' . $row["pr_specification"] . '" class="text-theme text-break mb-3 h6">' . $row["pr_specification"] . '</a>
                    <div class="service-options mt-3">
                        <hr>
                        <p class="font-weight-bold">
                            <h6>' . $row["pr_description"] . '</h6>
                        </p>
                        <div class="d-flex align-items-end justify-content-start">
                            <div>
                                <label for="quantity" class="small mb-0 font-weight-bold">Quantity</label>
                                <input type="number" name="quantity" value="1" class="form-control input-cart-quantity mx-auto m-2" min="1" max="20">
                            </div>
                            <input type="submit" class="btn btn-theme-ghost m-2 px-5 py-2 font-weight-bold rounded-pill text-uppercase btnAddAction" value="Add To Cart">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 offset-lg-1">
                <div class="text-center">
                    <div>
                        <img class="img-fluid" alt="" src="' . $row['pr_images'] . '">
                    </div>
                </div>
            </div>
        </div>';
            }
        }
        ?>
    </div>
</section>

<?php
include_once('fixed-cart.php');
include_once('footer.php');
?>