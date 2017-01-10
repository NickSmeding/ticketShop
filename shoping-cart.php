<!-- the header untill the main nav -->
<?php include 'inc/header-top.php'; ?>
<!-- end the header untill the main nav -->
<!-- Main Nav Menu -->
<nav id="primary-navigation" class="site-navigation nav-show">
    <div id="main-menu" class="main-nav main-menu">
        <ul class="menu-nav">
            <li class="menu-item active">
                <a href="index.php">Home</a>
            </li>
            <li class="menu-item">
                <a href="amsterdam.php">Amsterdam</a>
            </li>
            <li class="menu-item"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- End Main Nav Menu -->
<!-- Rest of the header -->
<?php include 'inc/header.php'; ?>
<!-- end Rest of the header -->
        <!-- Header Banner -->
        <div class="header-banner banner-image">
            <div class="banner-wrap">
                <div class="banner-overlay-color" style="background-color: rgba(0,0,0,0.4)"></div>
                <div class="banner-header" style="background-image: url(assets/images/banner-detail.jpg);min-height:460px;" >
                    <div class="banner-content">
                        <h3 class="title-page" data-color="#333333">shopping cart</h3>
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>shopping cart</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Banner -->
    </header>
    <div class="main-content">
        <div class="site-content-inner">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12">
                        <div id="main" class="site-main">
                            <div class="product-cart">
                                <div>
                                    <div class="table-responsive">
                                        <table class="shop_table cart">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">Product</th>
                                                    <th class="product-name">&nbsp;</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Subtotal</th>
                                                    <th class="product-remove">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="cart_item">
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img width="120" height="144" src="assets/images/thumb-cart1.jpg" class="attachment-shop_thumbnail wp-post-image" alt="poster_2_up" /></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="#">Rust Shirt With Half Sleeves</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.</p>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="amount">&pound;12.00</span>
                                                    </td>

                                                    <td class="product-quantity">
                                                        <div class="quantity">
                                                            <input class="minus" type="button" value="-">
                                                            <input class="input-text qty text" type="text" size="4" title="Qty" value="1" name="quantity">
                                                            <input class="plus" type="button" value="+">
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal">
                                                        <span class="amount">&pound;12.00</span>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#" class="remove" title="Remove this item"><i class="flaticon-dustbin"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="cart_item">

                                                    <td class="product-thumbnail">
                                                        <a href="#"><img width="120" height="144" src="assets/images/thumb-cart2.jpg" class="attachment-shop_thumbnail wp-post-image" alt="hoodie_4_front" /></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="#">Hooded Denim Jacket in Black</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.</p>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="amount">&pound;35.00</span>
                                                    </td>

                                                    <td class="product-quantity">
                                                        <div class="quantity">
                                                            <input class="minus" type="button" value="-">
                                                            <input class="input-text qty text" type="text" size="4" title="Qty" value="1" name="quantity">
                                                            <input class="plus" type="button" value="+">
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal">
                                                        <span class="amount">&pound;35.00</span>
                                                    </td>
                                                    <td class="product-remove">
                                                        <a href="#" class="remove" title="Remove this item"><i class="flaticon-dustbin"></i></a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="shopping-cart-element-wrap">
                                                <h5 class="title-shopping-cart">calculate shipping</h5>
                                                <p>Enter your destination to get shipping & tax</p>
                                                <div class="shopping-cart-element-content">
                                                    <form class="shipping_calculator" action="#" method="get">
                                                        <p class="form-row form-row-wide">
                                                            <label>country*</label>
                                                            <select class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                                                <option value="">- Select a country -</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                            </select>
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label>state/ province*</label>
                                                            <select class="country_to_state" id="calc_shipping_state" name="calc_shipping_state">
                                                                <option value="">- Select a state - </option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                            </select>

                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label>zip/ postat code</label>
                                                            <input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text">
                                                        </p>
                                                        <p><button class="button-duck" value="1" name="calc_shipping" type="submit">calculate</button></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="shopping-cart-element-wrap">
                                                <h5 class="title-shopping-cart">Enter your couppon code</h5>
                                                <p>Enter your couppon if you have one</p>
                                                <div class="shopping-cart-element-content">
                                                    <p class="form-row form-row-wide">
                                                        <label for="coupon_code">Coupon code</label>
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                    </p>
                                                    <p>   <input type="submit" class="button-duck" name="apply_coupon" value="Apply Coupon" /></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="shopping-cart-element-wrap">
                                                <h5 class="title-shopping-cart">cart totals</h5>
                                                <div class="shopping-cart-element-content">
                                                    <table class="cart-total">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <td>Sub total:</td>
                                                                <td><span class="amount">$320.00</span></td>
                                                            </tr>
                                                            <tr class="shipping">
                                                                <td>Shipping Charge:</td>
                                                                <td><span class="amount">$30.00</span></td>
                                                            </tr>
                                                            <tr class="grand-total">
                                                                <td>Grand Total:</td>
                                                                <td>$350.00</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="2" >
                                                                    <input type="submit" class="button" name="update_cart" value="Update Cart" />
                                                                    <input type="submit" class="checkout-button button alt wc-forward" name="proceed" value="Proceed Checkout" />
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Main content -->
                </div><!-- / End row content -->
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
