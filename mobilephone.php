<?php
error_reporting(0);
$title = "UrFon IFix | Certified Pre Owned Devices ";
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
$btnEmptyHref = 'mobilephone.php?br_id=' . $_GET["br_id"] . '&pageno=' . $_GET['pageno'] . '&action=empty';

// $cartItem = $shoppingCart->getMemberCartItem($member_id);
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
$btnRemoveHref = 'mobilephone.php?br_id=' . $_GET["br_id"] . '&pageno=' . $_GET['pageno'] . '&action=remove';
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

<?php
// $sql = "SELECT * FROM all_products Where br_id='" . $_GET['br_id'] . "'";
// $result = mysqli_query($connection, $sql);

// $std_num = 0;
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
<!-- <div class="col-12 col-lg-3 col-md-4 my-2">
    <form method="post"
        action="mobilephone.php?br_id=<?php echo $_GET['br_id'] ?>&pageno=<?php echo $pageno ?>&action=add&code=<?php echo $product_array[$key]["code"]; ?>">
        <div class="product-item">
            <div class="card all-product-card">
                <a href="main-product.php?pr_id=<?php echo $row["pr_id"]; ?>" class="product-item-a">
                    <div class="card-body product_body text-center">
                        <img class="img-fluid" alt=" " width="150" height="150" src="<?php echo $row["pr_images"]; ?>">
                        <img class="img-fluid" alt="60-day-warranty" src="./assets/img/60_final.png">
                    </div>
                </a>
                <div class="card-footer product_footer text-center px-2">
                    <a href="main-product.php?pr_id=<?php echo $row["pr_id"]; ?>" class="product-item-a">
                        <p class="product-name mb-0">
                            <?php echo $row["pr_name"]; ?>
                        </p>
                        <h3 class="product-price">
                            $<?php echo $row["pr_price"]; ?>
                        </h3>
                    </a>
                    <input type="number" name="quantity" value="1" class="d-block input-cart-quantity mx-auto my-2 w-25"
                        min="1" max="20">
                    <input type="submit" class="btn btn-theme mb-0 px-4 py-2 rounded-pill text-uppercase btnAddAction"
                        value="Add To Cart">
                </div>
            </div>
        </div>
    </form>
</div> -->
<?php
// }
?>


<section class="position-relative padding-top-100 padding-bottom-50 products_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 ">
                <h3 class="heading-left-blue-style position-relative mx-lg-4">What Pre-Owned Device are you looking
                    for?
                </h3>
                <div class="container-fluid">
                    <div class="row all-product pt-3">
                        <?php
                        $sql = "SELECT * FROM all_products Where br_id='" . $_GET['br_id'] . "'";
                        $result = mysqli_query($connection, $sql);

                        $std_num = 0;
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>

                        <div class="col-12 col-lg-3 col-md-4 my-2">
                            <form method="post"
                                action="mobilephone.php?br_id=<?php echo $_GET['br_id'] ?>&pageno=<?php echo $pageno ?>&action=add&code=<?php echo $row["code"]; ?>">
                                <div class="product-item">
                                    <div class="card all-product-card">
                                        <a href="main-product.php?pr_id=<?php echo $row["pr_id"]; ?>"
                                            class="product-item-a">
                                            <div class="card-body product_body text-center">
                                                <img class="img-fluid" alt=" " width="150" height="150"
                                                    src="<?php echo $row["pr_images"]; ?>">
                                                <!-- <img class="img-fluid" alt="60-day-warranty"
                                                    src="./assets/img/60_final.png"> -->
                                            </div>
                                        </a>
                                        <div class="card-footer product_footer text-center px-2">
                                            <a href="main-product.php?pr_id=<?php echo $row["pr_id"]; ?>"
                                                class="product-item-a">
                                                <p class="product-name mb-0">
                                                    <?php echo $row["pr_name"]; ?>
                                                </p>
                                                <h3 class="product-price">
                                                    $<?php echo $row["pr_price"]; ?>
                                                </h3>
                                            </a>
                                            <input type="number" name="quantity" value="1"
                                                class="d-block input-cart-quantity mx-auto my-2 w-25" min="1" max="20">
                                            <input type="submit"
                                                class="btn btn-theme mb-0 px-4 py-2 rounded-pill text-uppercase btnAddAction"
                                                value="Add To Cart">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                    <!-- <nav>
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item <?php if ($pageno <= 1) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno <= 1) {
                                                                echo '#';
                                                            } else {
                                                                echo "?br_id=" . $_GET['br_id'] . "&pageno=" . ($pageno - 1);
                                                            } ?>">Previous</a>
                            </li>

                            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                            <li class="page-item <?php if ($pageno == $i) {
                                                        echo 'active';
                                                    } ?>">
                                <a class="page-link"
                                    href="mobilephone.php?br_id=<?= $_GET['br_id'] ?>&pageno=<?= $i; ?>"> <?= $i; ?>
                                </a>
                            </li>
                            <?php endfor; ?>

                            <li class="page-item <?php if ($pageno >= $total_pages) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                                                echo '#';
                                                            } else {
                                                                echo "?br_id=" . $_GET['br_id'] . "&pageno=" . ($pageno + 1);
                                                            } ?>">Next</a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="position-relative padding-top-100 padding-bottom-50 products_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 ">
                <h3 class="heading-left-blue-style position-relative mx-lg-4">What Pre-Owned Device are you looking
                    for?
                </h3>
                <div class="container-fluid">
                    <div class="row all-product pt-3">
                        <?php
                        // if (isset($_GET['pageno'])) {
                        //     $pageno = $_GET['pageno'];
                        // } else {
                        //     $pageno = 1;
                        // }
                        // $no_of_records_per_page = 12;
                        // $offset = ($pageno - 1) * $no_of_records_per_page;

                        // $total_pages_sql = "SELECT COUNT(*) FROM all_products WHERE br_id='" . $_GET['br_id'] . "'";
                        // $result = mysqli_query($connection, $total_pages_sql);
                        // $total_rows = mysqli_fetch_array($result)[0];
                        // $total_pages = ceil($total_rows / $no_of_records_per_page);

                        // $query = "SELECT * FROM all_products WHERE br_id='" . $_GET['br_id'] . "' LIMIT $offset, $no_of_records_per_page";
                        // $product_array = $shoppingCart->getAllProduct($query);
                        // if (!empty($product_array)) {
                        // foreach ($product_array as $key => $value) {
                        ?>

                        <div class="col-12 col-lg-3 col-md-4 my-2">
                            <form method="post"
                                action="mobilephone.php?br_id=<?php echo $_GET['br_id'] ?>&pageno=<?php echo $pageno ?>&action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-item">
                                    <div class="card all-product-card">
                                        <a href="main-product.php?pr_id=<?php echo $product_array[$key]["pr_id"]; ?>"
                                            class="product-item-a">
                                            <div class="card-body product_body text-center">
                                                <img class="img-fluid" alt=" " width="150" height="150"
                                                    src="<?php echo $product_array[$key]["pr_images"]; ?>">
                                                <img class="img-fluid" alt="60-day-warranty"
                                                    src="./assets/img/60_final.png">
                                            </div>
                                        </a>
                                        <div class="card-footer product_footer text-center px-2">
                                            <a href="main-product.php?pr_id=<?php echo $product_array[$key]["pr_id"]; ?>"
                                                class="product-item-a">
                                                <p class="product-name mb-0">
                                                    <?php echo $product_array[$key]["pr_name"]; ?>
                                                </p>
                                                <h3 class="product-price">
                                                    $<?php echo $product_array[$key]["pr_price"]; ?>
                                                </h3>
                                            </a>
                                            <input type="number" name="quantity" value="1"
                                                class="d-block input-cart-quantity mx-auto my-2 w-25" min="1" max="20">
                                            <input type="submit"
                                                class="btn btn-theme mb-0 px-4 py-2 rounded-pill text-uppercase btnAddAction"
                                                value="Add To Cart">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php

                        // }
                        ?>
                    </div>
                    <nav>
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item <?php if ($pageno <= 1) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno <= 1) {
                                                                echo '#';
                                                            } else {
                                                                echo "?br_id=" . $_GET['br_id'] . "&pageno=" . ($pageno - 1);
                                                            } ?>">Previous</a>
                            </li>

                            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                            <li class="page-item <?php if ($pageno == $i) {
                                                        echo 'active';
                                                    } ?>">
                                <a class="page-link"
                                    href="mobilephone.php?br_id=<?= $_GET['br_id'] ?>&pageno=<?= $i; ?>"> <?= $i; ?>
                                </a>
                            </li>
                            <?php endfor; ?>

                            <li class="page-item <?php if ($pageno >= $total_pages) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                                                echo '#';
                                                            } else {
                                                                echo "?br_id=" . $_GET['br_id'] . "&pageno=" . ($pageno + 1);
                                                            } ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php
include_once('fixed-cart.php');
include_once('footer.php');
?>