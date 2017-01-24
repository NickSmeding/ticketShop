<header class="header header-basic header-style_5 menu-no-transparent">
<div class="main-header">
    <div class="header-inner-top">
        <div class="row">
            <div class="col-sm-5 header-nav">
            </div>
            <div class="col-sm-2 header-logo text-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div><!-- End Logo -->
            </div>
            <div class="col-sm-5 col-mobile" >
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
                        <span class="cart-number-items"> 5 </span>
                        <div id="header-cart" class="header-element-content">
                            <h4 class="title-element">Shopping Cart</h4>
                            <?php
                                if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
                                {
                                    $total =0;
                                    $b = 0;
                                    
                                    foreach ($_SESSION["cart_products"] as $cart_itm)
                                    {
                                        $product_name = $cart_itm["product_name"];
                                        $product_qty = $cart_itm["product_qty"];
                                        $product_price = $cart_itm["product_price"];
                                        $product_code = $cart_itm["product_code"];
                                        $product_color = $cart_itm["product_color"];
                                        $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
                                        echo '<tr class="'.$bg_color.'">';
                                        echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                                        echo '<td>'.$product_name.'</td>';
                                        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
                                        echo '</tr>';
                                        $subtotal = ($product_price * $product_qty);
                                        $total = ($total + $subtotal);
                                    }
                                }
                            ?>
                            <p class="description-cart">You have <span>3 item(s)</span> in your cart</p>
                            <div class="xshop-cart_list">
                                <div class="xshop-cart_list-inner content-scrollbar">
                                    <ul class="cart_list product_list_widget">
                                        <li class="mini_cart_item">
                                            <a class="cart-remove" href="#"></a>
                                            <a href="#" class="cart-img">
                                                <img width="100" height="120" src="assets/images/img-cart1.jpg" alt="img">
                                            </a>
                                            <div class="cart-inner">
                                                <a href="#">Crew Neck T-Shirt SS in Ash</a>
                                                <div class="quantity">
                                                    <p class="product-price">$ 120.00
                                                        <span class="quantity-input"> (x<input type="text" size="1" class="input-text qty text" title="Qty" value="2" disabled="disabled">) </span>
                                                    </p>
                                                    <div class="xshop-quantity">
                                                        <div class=" buttons_added">
                                                            <a class="sign minus" href="#"></a>
                                                            <a class="sign plus" href="#"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <a class="cart-remove" href="#"></a>
                                            <a href="#" class="cart-img">
                                                <img width="100" height="120" src="assets/images/img-cart2.jpg" alt="img">
                                            </a>
                                            <div class="cart-inner">
                                                <a href="#">Sweatshirt In Grey Marl</a>
                                                <div class="quantity">
                                                    <p class="product-price">$ 120.00
                                                        <span class="quantity-input"> (x<input type="text" size="1" class="input-text qty text" title="Qty" value="2" disabled="disabled">) </span>
                                                    </p>
                                                    <div class="xshop-quantity">
                                                        <div class=" buttons_added">
                                                            <a class="sign minus" href="#"></a>
                                                            <a class="sign plus" href="#"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mini_cart_item">
                                            <a class="cart-remove" href="#"></a>
                                            <a href="#" class="cart-img">
                                                <img width="100" height="120" src="assets/images/img-cart1.jpg" alt="img">
                                            </a>
                                            <div class="cart-inner">
                                                <a href="#">Crew Neck T-Shirt SS in Ash</a>
                                                <div class="quantity">
                                                    <p class="product-price">$ 120.00
                                                        <span class="quantity-input"> (x<input id="qty" type="text" size="1" class="input-text qty text" title="Qty" value="2" disabled="disabled">) </span>
                                                    </p>
                                                    <div class="xshop-quantity">
                                                        <div class="buttons_added">
                                                            <a class="sign minus" href="#"></a>
                                                            <a class="sign plus" href="#"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul><!-- end product list -->
                                </div>
                                <div class="mini-cart-bottom">
                                    <p class="total">Subtotal <span id="subtotal-price" class="subtotal-price price-amount amount">$200.00</span></p>
                                    <p class="buttons">
                                        <a class="button checkout" href="checkoput.html">Proceed to checkout</a>
                                        <a class="button " href="cart.html">Go to cart</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Cart Element -->
                    <!-- Settings Element -->
                    <div class="header-settings header-element">
                        <span class="icon-settings header-icon" data-togole="header-settings"><i class="flaticon-cogwheel"></i></span>
                        <div id="header-settings" class="header-element-content header-element-content-settings">
                            <div class="header-element-content-inner">
                                <h6 class="title-element">currency</h6>
                                <ul class="currency">
                                    <li class="item-currency">England <span>(gbp)</span></li>
                                    <li class="item-currency">United stabe <span>(usd)</span></li>
                                    <li class="item-currency">Netherland <span>(eur)</span></li>
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
                    <!-- Button Menu Mobile -->
                    <a href="#primary-navigation" class="mobile-navigation">
                    <span class="button-icon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                    </a>
                    <!-- End Button Menu Mobile -->
                </div>
                <!-- End Header Right -->
            </div>
        </div>
    </div>
    <!-- Main Nav Menu -->
    <nav id="primary-navigation" class="site-navigation">
        <div id="main-menu" class="main-nav main-menu">
            <ul class="menu-nav">
                <li class="menu-item menu-item-has-children megamenu-menu-item active">
                    <a href="index.html">Home</a>
                    <div class="sub-menu megamenu">
                        <div class="megamenu-inner">
                            <div class="megamenu-content ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-content">
                                                    <ul class="menu">
                                                        <li class="menu-item"><a href="index.html">Home v1</a></li>
                                                        <li class="menu-item"><a href="home-v2.html">Home v2</a></li>
                                                        <li class="menu-item"><a href="home-v3.html">Home v3</a></li>
                                                        <li class="menu-item"><a href="home-v4.html">Home v4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-content">
                                                    <ul class="menu">
                                                        <li class="menu-item active"><a href="home-v5.html">Home v5</a></li>
                                                        <li class="menu-item"><a href="home-v6.html">Home v6</a></li>
                                                        <li class="menu-item"><a href="home-v7.html">Home v7</a></li>
                                                        <li class="menu-item"><a href="home-v8.html">Home v8</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-content">
                                                    <ul class="menu">
                                                        <li class="menu-item"><a href="home-v9.html">Home v9</a></li>
                                                        <li class="menu-item"><a href="home-v10.html">Home v10</a></li>
                                                        <li class="menu-item"><a href="home-v11.html">Home v11</a></li>
                                                        <li class="menu-item"><a href="home-v12.html">Home v12</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-content">
                                                    <ul class="menu">
                                                        <li class="menu-item"><a href="home-v13.html">Home v13</a></li>
                                                        <li class="menu-item"><a href="home-v14.html">Home v14</a></li>
                                                        <li class="menu-item"><a href="home-v15.html">Home v15</a></li>
                                                        <li class="menu-item"><a href="home-v16.html">Home v16</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children megamenu-menu-item">
                    <a href="shop.html">Shop</a>
                    <div class="sub-menu megamenu">
                        <div class="megamenu-inner">
                            <div class="megamenu-content ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="widget">
                                                        <h6 class="widget-title">Men</h6>
                                                        <div class="widget-content">
                                                            <ul class="menu">
                                                                <li class="menu-item"><a href="#">Jackets $ Coats</a></li>
                                                                <li class="menu-item"><a href="#">Jeans</a></li>
                                                                <li class="menu-item"><a href="#">Blouses & Shirts</a></li>
                                                                <li class="menu-item"><a href="#">Top & T-Shirt</a></li>
                                                                <li class="menu-item"><a href="#">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="widget">
                                                        <h6 class="widget-title">women</h6>
                                                        <div class="widget-content">
                                                            <ul class="menu">
                                                                <li class="menu-item"><a href="#">Dresses</a></li>
                                                                <li class="menu-item"><a href="#">Jeans & Trousers</a></li>
                                                                <li class="menu-item"><a href="#">Blouses & Shirts</a></li>
                                                                <li class="menu-item"><a href="#">Top & T-Shirt</a></li>
                                                                <li class="menu-item"><a href="#">Jackets & Coats</a></li>
                                                                <li class="menu-item"><a href="#">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="widget">
                                                        <h6 class="widget-title">shoes & bags</h6>
                                                        <div class="widget-content">
                                                            <ul class="menu">
                                                                <li class="menu-item"><a href="#">Across Bags</a></li>
                                                                <li class="menu-item"><a href="#">Backpacks</a></li>
                                                                <li class="menu-item"><a href="#">Bum Bags</a></li>
                                                                <li class="menu-item"><a href="#">Espadrilles</a></li>
                                                                <li class="menu-item"><a href="#">Heeled Shoes</a></li>
                                                                <li class="menu-item"><a href="#">Sloppers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="widget">
                                                        <h6 class="widget-title">accessories</h6>
                                                        <div class="widget-content">
                                                            <ul class="menu">
                                                                <li class="menu-item"><a href="#">Belts</a></li>
                                                                <li class="menu-item"><a href="#">Bow Ties & Collars</a></li>
                                                                <li class="menu-item"><a href="#">Capes & Ponchos</a></li>
                                                                <li class="menu-item"><a href="#">Gloves</a></li>
                                                                <li class="menu-item"><a href="#">Hair Accessories</a></li>
                                                                <li class="menu-item"><a href="#">Hats</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="widget">
                                                <figure>
                                                    <img src="assets/images/img-menu.jpg" alt="img">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="shoping-cart.html">Shop Cart</a></li>
                        <li class="menu-item"><a href="checkout.html">Shop Checkout</a></li>
                        <li class="menu-item"><a href="login.html">Login</a></li>
                        <li class="menu-item"><a href="page404.html">Page 404</a></li>
                        <li class="menu-item"><a href="about-us.html">Page About</a></li>
                        <li class="menu-item"><a href="detail-product.html">Detail Product</a></li>
                        <li class="menu-item"><a href="blog-post.html">Signle Post</a></li>
                        <li class="menu-item"><a href="index.html">Newsletter Popup</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Elements</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="category_3colums.html">Category 3 Columns FullWidth</a></li>
                        <li class="menu-item"><a href="category_4colums.html">Category 4 Columns FullWidth</a></li>
                        <li class="menu-item"><a href="gridcategory_ritghsidebar.html">Grid Category Right Sidebar</a></li>
                        <li class="menu-item"><a href="shop.html">Grid Category Left Sidebar</a></li>
                        <li class="menu-item"><a href="listcategory_rightsidebar.html">List Category Right Sidebar</a></li>
                        <li class="menu-item"><a href="listcategory_leftsidebar.html">List Category Left Sidebar</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="blog.html">Blog</a></li>
                <li class="menu-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Main Nav Menu -->
</div>