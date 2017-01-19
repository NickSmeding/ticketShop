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
                        <h3 class="title-page" data-color="#333333">Check Out</h3>
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Check Out</span>
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
        <div class="site-content-inner product-checkout">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12">
                        <div id="main" class="site-main">
                            <div>
                                <form action="#" class="checkout" method="post" name="checkout">
                                    <div id="customer_details" class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h5 class="title-shopping-cart">Billing Address</h5>
                                            <div class="billing_address">
                                                <p class="form-row form-row-wide">
                                                    <label>first name <strong>*</strong></label>
                                                    <input type="text" name="first-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>last name <strong>*</strong></label>
                                                    <input type="text" name="last-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>company name</label>
                                                    <input type="text" name="company-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>address <strong>*</strong></label>
                                                    <input type="text" name="address-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>city <strong>*</strong></label>
                                                    <input type="text" name="city-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>country <strong>*</strong></label>
                                                    <input type="text" name="country-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>email <strong>*</strong></label>
                                                    <input type="text" name="email-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="submit" name="submit" value="continue" class="button-duck">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h5 class="title-shopping-cart">Shipping Info</h5>
                                            <div class="shipping_address">
                                                <p class="form-row form-row-wide">
                                                    <label>first name <strong>*</strong></label>
                                                    <input type="text" name="first-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>last name <strong>*</strong></label>
                                                    <input type="text" name="last-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>company name</label>
                                                    <input type="text" name="company-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>address <strong>*</strong></label>
                                                    <input type="text" name="address-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>city <strong>*</strong></label>
                                                    <input type="text" name="city-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>country <strong>*</strong></label>
                                                    <input type="text" name="country-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>email <strong>*</strong></label>
                                                    <input type="text" name="email-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="submit" name="submit" value="Submit" class="button-duck">
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="checkout-element-wrap">
                                                <h5 class="title-shopping-cart">Payment Method</h5>
                                                <div class="checkout-element-content">
                                                    <div id="payment">
                                                        <ul class="payment_methods methods">
                                                            <li class="payment_method_bacs">
                                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                                <label for="payment_method_bacs">Direct Bank Transfer </label>
                                                                <div class="payment_box payment_method_bacs">
                                                                    <p>Eu nisl vocent mea. Viderer et eum, pri bonorum prodesset argumentum id. In
                                                                        eumo  ption ancillae disputando. Eu disl vocent mea. Viderer senserit et eum, pri
                                                                        bonorum prodesset arumentum id.</p>
                                                                </div>
                                                            </li>
                                                            <li class="payment_method_cheque">
                                                                <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                                <label for="payment_method_cheque">Credit Card
                                                                    </label>
                                                                <a href="#"> <img alt="PayPal Acceptance Mark" src="assets/images/credit-cart.png"></a>
                                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                </div>
                                                            </li>
                                                            <li class="payment_method_paypal">
                                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                                <label for="payment_method_paypal">Via PayPal </label>
                                                                <a href="#"> <img alt="PayPal Acceptance Mark" src="assets/images/paypal.png"></a>
                                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                                    <p>Pay via PayPal; you can pay with your credit card 	if you don’t have a PayPal account.</p>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="checkout-element-wrap">
                                                <h5 class="title-shopping-cart">cart totals</h5>
                                                <div class="checkout-element-content">
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
                                                        <tr class="discount">
                                                            <td>Coupon Discount:</td>
                                                            <td><span class="amount">-20.00</span></td>
                                                        </tr>
                                                        <tr class="grand-total">
                                                            <td>Grand Total:</td>
                                                            <td>$330.00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="checkout-submit">
                                        <a href="#" class="button-submit">place order now</a>
                                    </p>
                                </form>
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
