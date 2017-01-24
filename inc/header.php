                    <!-- End Main Nav Menu -->
                </div>
                <div class="col-sm-2 col-mobile" >
                    <!-- Header Right -->
                    <div class="header-right">
                        <!-- Search Element -->
                        <div class="header-search header-element">
                            <span class="icon-search header-icon" data-togole="header-search"><i class="flaticon-search"></i></span>
                            <div id="header-search" class="header-element-content">
                                <h4 class="title-element">Search Now!</h4>
                                <!-- Search Form -->
                                <form role="search" method="get" action="/search">
                                    <input type="text" value="" placeholder="Your search here..." class="search" id="s" name="q">
                                    <input type="submit" class="button-light" value="Search">
                                </form>
                                <!-- End Search Form -->
                            </div>
                        </div>
                        <!-- End Search Element -->
                        <!-- Cart Element -->
                        <div class="header-cart header-element">
                            <a href="#"><span class="icon-cart header-icon" data-togole="header-cart"><i class="flaticon-bag"></i></span></a>
                                    <?php
                                        if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
                                        {
                                            echo '<span class="cart-number-items">'.count($_SESSION["cart_products"]).'</span>';
                                            echo '<div id="header-cart" class="header-element-content">';
                                            echo '<h4 class="title-element">Shopping Cart</h4>';
                                            echo '<div class="shopping-cart">';
                                            echo '<p class="description-cart">You have <span>'.count($_SESSION["cart_products"]).' item(s)</span> in your cart</p>';
                                            echo '<div class="xshop-cart_list">';
                                            echo '<form method="post" action="inc/cart-update.php">';
                                            echo '<div class="xshop-cart_list-inner content-scrollbar">';
                                            echo '<ul class="cart_list product_list_widget">';
                                            $total =0;
                                            $b = 0;
                                            foreach ($_SESSION["cart_products"] as $cart_itm)
                                            {
                                                $product_name = $cart_itm["product_name"];
                                                $product_qty = $cart_itm["product_qty"];
                                                $product_price = $cart_itm["product_price"];
                                                $product_code = $cart_itm["product_code"];
                                                    echo'<li class="mini_cart_item">';
                                                        echo'<input type="checkbox" name="remove_code[]" class="cart-remove" value="'.$product_code.'">';
                                                        echo'<a href="#" class="cart-img">';
                                                            echo'<img width="100" height="120" src="assets/images/img-cart1.jpg" alt="img">';
                                                        echo'</a>';
                                                        echo'<div class="cart-inner">';
                                                            echo'<a href="#">'.$product_name.'</a>';
                                                            echo'<div class="quantity">';
                                                                echo'<p class="product-price">&euro;'.$product_price.'<span class="quantity-input"> (x<input type="text" size="2" maxlength="2" class="input-text qty text" name="product_qty['.$product_code.']" value="'.$product_qty.'"/>)</span></p>';
                                                                echo'<div class="xshop-quantity">';
                                                                    echo'<div class=" buttons_added">';
                                                                        echo'<a class="sign minus" href="#"></a>';
                                                                        echo'<a class="sign plus" href="#"></a>';
                                                                    echo'</div>';
                                                                echo'</div>';
                                                            echo'</div>';
                                                        echo'</div>';
                                                    echo'</li>';
                                                $subtotal = ($product_price * $product_qty);
                                                $total = ($total + $subtotal);
                                                echo '</div>';
                                            }
                                    echo'</div>';
                                    echo'</ul>';
                                    echo'</div>';
                                    echo'<div class="mini-cart-bottom">';
                                        echo'<p class="total">Subtotal <span class="subtotal-price price-amount amount">&euro;'.$total.'</span></p>';
                                        echo'<p class="buttons">';
                                            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                                            echo'<button type="submit" class="button">Update</button>';
                                            echo'<a class="button checkout" href="checkout.php">Proceed to checkout</a>';
                                        echo'</p>';
                                        echo '</form>';
                                    echo'</div>';        
                                    }else{
                                        echo '<span class="cart-number-items">0</span>';
                                        echo '<div id="header-cart" class="header-element-content">';
                                        echo '<h4 class="title-element">Shopping Cart</h4>';
                                        echo '<div class="shopping-cart">';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Cart Element -->
                        <!-- Settings Element -->
                        <div class="header-settings header-element">
                            <div id="header-settings" class="header-element-content header-element-content-settings">
                                <div class="header-element-content-inner">
                                    <h6 class="title-element">My Account</h6>
                                    <ul class="header-account">
                                        <li class="item-account"><a href="#">log in</a> / <a href="#">sign up</a></li>
                                        <li class="item-account"><a href="cart.html">wishlist <span>(3)</span></a> </li>
                                        <li class="item-account"><a href="cart.html">Compare items <span>(6)</span></a></li>
                                        <li class="item-account"><a href="checkout.html">checkout</a></li>
                                    </ul>
                                </div>
                                <div class="header-element-content-inner">
                                    <h6 class="title-element">currency</h6>
                                    <ul class="currency">
                                        <li class="item-currency">england <span>(gbp)</span></li>
                                        <li class="item-currency">united stabe <span>(usd)</span></li>
                                        <li class="item-currency">france <span>(eur)</span></li>
                                    </ul>
                                </div>
                                <div class="header-element-content-inner language-element">
                                    <h6 class="title-element">language</h6>
                                    <ul class="languages">
                                        <li class="item-language"><a href="#"><img src="assets/images/usa.png" alt=""></a></li>
                                        <li class="item-language"><a href="#"><img src="assets/images/france.png" alt=""></a></li>
                                        <li class="item-language"><a href="#"><img src="assets/images/germany.png" alt=""></a></li>
                                        <li class="item-language"><a href="#"><img src="assets/images/brazil.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Settings Element -->
                    </div>
                    <!-- End Header Right -->
                </div>
            </div>
        </div>
