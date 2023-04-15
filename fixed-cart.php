<div class="fixed-cart">
    <div class="dropdown show-cart-dropdown">
        <a class="btn-cart-open pointer" data-toggle="dropdown" aria-expanded="false">
            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="cart-icon">
                <path fill="currentColor"
                    d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z"
                    class=""></path>
            </svg>
        </a>
        <div class="dropdown-menu cart-body">
            <div class="card">
                <div class="card-header bg-white text-center">
                    <h5 class="font-weight-bold text-uppercase mb-0">Shop</h5>
                </div>
                <div class="card-body">
                    <?php
                    $cartItem = $shoppingCart->getMemberCartItem($member_id);
                    $item_quantity = 0;
                    $item_price = 0;
                    if (! empty($cartItem)) {
                        if (! empty($cartItem)) {
                            foreach ($cartItem as $item) {
                                $item_quantity = $item_quantity + $item["quantity"];
                                $item_price = $item_price + ($item["pr_price"] * $item["quantity"]);
                            }
                        }
                    }
                ?>
                    <ul class="product-listing list-group shadow-sm" id="cart-items">
                        <?php
                            if (empty($cartItem)){
                                echo'                        
									<li class="list-group-item">
										<div>
											<div class="product-info text-truncate text-wrap text-center">
												<p class="mb-0">No item</p>
											</div>
										</div>
									</li>
								';
                            }
                            else{
                            foreach ($cartItem as $item) {
                        ?>
                        <!-- Product List -->
                        <li class="list-group-item product-item">
                            <div>
                                <div class="product-info text-truncate text-wrap">
                                    <h6 class="text-capitalize font-weight-bold"><?php echo $item["br_name"]; ?><span
                                            class="float-right text-lowercase">x<?php echo $item["quantity"]; ?></span>
                                    </h6>
                                    <p class="small mb-0 text-muted">
                                        <?php echo $item["pr_name"]; ?><span
                                            class="float-right"><?php echo "$".$item["pr_price"]; ?></span>
                                    </p>
                                    <a href="<?php echo $btnRemoveHref.'&id='.$item["cart_id"].'' ?>" class="btnRemoveAction small text-theme">Delete</a>
                                    <p class="float-right small mb-0 font-weight-bold"><?php echo '$'.($item["pr_price"] * $item["quantity"]) ?></p>
                                </div>
                            </div>
                        </li>
                        <!-- Product List -->
                        <?php
                                }
                            }
                        ?>
                    </ul>
                    <div class="text-right my-2">
                        <a id="btnEmpty" class="btn btn-theme" title="Empty Cart" href="<?php echo $btnEmptyHref ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                    <ul class="product-listing list-group shadow-sm">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-truncate text-wrap">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">Total</h6>
                                </div>
                                <div class="text-truncate text-wrap">
                                    <h6 class="mb-0 font-weight-bold text-red" id="total">$<?php echo $item_price; ?>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer bg-white text-center">
                    <a href="order_process.php" class="btn btn-theme rounded-pill px-5 text-uppercase btn-action"
                        name="check_out">Proceed</a>
                </div>
            </div>
        </div>
    </div>
</div>