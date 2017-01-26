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
                    <div class="content-area col-xs-12 col-sm-12 col-md-12 top-buffer">
                        <div id="main" class="site-main">
                            <ul class="progressbar">
                              <li class="link active"  data-link="1">Order</li>
                              <li class="link" data-link="2">Personal info</li>
                              <li class="link" data-link="3">Paying</li>
                              <li class="link" data-link="4">Checkout</li>
                            </ul>
                            
                            <!-- Start form -->
                            <form action="#" class="checkout" method="post" name="checkout">
                                <div class="col-xs-12 col-sm-12 col-md-12 top-buffer">
                                    <div class="form" id="vis" data-link="1">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h5 class="title-shopping-cart">Order</h5>
                                        </div>
                                    </div>
                                    <div class="form" data-link="2">
                                      <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h5 class="title-shopping-cart">Personal Info</h5>
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
                                                    <label>Email</label>
                                                    <input type="text" name="company-name" placeholder="" value="" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <label>Phone<strong>*</strong></label>
                                                    <input type="text" name="address-name" placeholder="" value="" class="input-text">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form" data-link="3">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h5 class="title-shopping-cart">Paying</h5>
                                        </div>
                                    </div>
                                    <div class="form" data-link="4">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h5 class="title-shopping-cart">Checkout</h5>
                                        </div>
                                    </div>
                                    <div id="currentProduct" class="col-md-5 col-sm-5 col-xs-12">
                                            <div class="single-product-content">
                                                <img class="single-product-content-image" src="assets/images/lovers-image.png">
                                                <h6 class="product-title">Titel</h6>
                                                <div class="product-price">
                                                    <span class="price">$75.00</span>
                                                    <span class="in-stock"><i class="fa fa-check"></i> Instock</span>
                                                </div>
                                                <div class="product-rating">
                                                    <div class="star-rating" title="Rated 5 out of 5">
                                                        <span>
                                                            <a class="star-1" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="star-2" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="star-3" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="star-4" href="#"><i class="fa fa-star"></i></a>
                                                            <a class="star-5" href="#"><i class="fa fa-star"></i></a>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="product-preview">
                                                    <ul class="review-list">
                                                        <li class="review-item"><a href="#">5 Review(M)</a></li>
                                                        <li class="review-item"><a href="#">Add your review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-desc">
                                                    Quick Overview: Blending sleek style and refined elegance, design offers a casual air to any space and effortlessly complements both modern and
                                                    traditional ...
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </form>
                            <!-- end form -->
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
