<?php
error_reporting(0);
$title = "UrFon IFix | Product Brands";
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
                    $shoppingCart->addToCart($productResult[0]["pr_id"], $_POST["quantity"], $member_id);
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
?>

<section class="mt-md-120 mt-sm-90 repair_main_bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left text-white">
                <h1 class="my-5 font-theme font-lg-big text-center text-md-left">Pre-Owned Devices</h1>
            </div>
        </div>
    </div>
</section>

<section class="position-relative padding-top-100 padding-bottom-50 products_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 ">
                <h3 class="heading-left-blue-style position-relative mx-lg-4">What Pre-Owned Device are you looking for?</h3>
                <div class="container-fluid">
                    <div class="row all-product pt-3">
                        <?php
                        $fetch_brands = mysqli_query($connection, "Select * from all_brands");

                        while ($row = mysqli_fetch_array($fetch_brands)) {
                            echo '

                                            
                            <div class="col-12 col-lg-3 col-md-4 my-2">
                                <div class="product-item">
                                        <a href="mobilephone.php?br_id=' . $row['br_id'] . '&pageno=1" class="product-item-a">
                                            <div class="card all-product-card">
                                                <div class="card-body product_body text-center">
                                                <img class="img-fluid" alt="' . $row['br_alt'] . '"width="150" height="150" src="' . $row['br_image'] . '">
                                                </div>
                                                <div class="card-footer product_footer text-center">
                                                    <p class="mb-0 product-name">' . $row['br_name'] . '</p>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>';
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>