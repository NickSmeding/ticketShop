<?php include 'inc/header-top.php'; ?>
<!-- Main Nav Menu -->
<nav id="primary-navigation" class="site-navigation nav-show">
    <div id="main-menu" class="main-nav main-menu">
        <ul class="menu-nav">
            <li class="menu-item">
                <a href="index.php">Home</a>
            </li>
            <li class="menu-item">
                <a href="amsterdam.php">Amsterdam</a>
            </li>
            <li class="menu-item active"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- End Main Nav Menu -->
<?php include 'inc/header.php'; ?>
        <!-- Header Banner -->
        <div class="header-banner banner-image"><!-- Banner Img -->
            <div class="banner-wrap">
                <div class="banner-overlay-color" style="background-color: rgba(0,0,0,0.4)"></div>
                <div class="banner-header" style="background-image: url(assets/images/img1.jpg); min-height:350px;" >
                    <div class="banner-content">
                        <h3 class="title-page" data-color="#333333">Contact</h3>
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
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12" style="padding:150px 0 0;">
                        <div id="main" class="site-main">
                            <!-- Contact Content -->
                            <div class="contact-wrap">
                                <!-- Map Element -->
                                <div class="xshop-map">
                                    <figure>
                                        <img src="assets/images/map.jpg" alt="img">
                                    </figure>
                                </div>
                                <!-- End Map Element -->
                                <!-- Contact Form Element -->
                                <div class="xshop-contact-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="contact-info">
                                                <h5 class="title-contact-info">Contact Info</h5>
                                                <ul class="list-contact-info equal-container">
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-map.png" alt="img">
                                                            </span>
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> address</h6>
                                                                <div class="desc-info">87 Rue Jeanne d'Arc, 54000
                                                                    Nancy, France</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-phone.png" alt="img">
                                                            </span>
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> Phone</h6>
                                                                <div class="desc-info">+(00) 123 456 789</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-mail.png " alt="img">
                                                            </span>
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> E-mail</h6>
                                                                <div class="desc-info"><a href="mailto:Supporta@xshop.com">Supporta@xshop.com</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <span class="icon-info">
                                                                <img src="assets/images/icon-clock.png" alt="img">
                                                            </span>
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> working hours</h6>
                                                                <div class="desc-info">
                                                                    <p>Monday - Friday: 8am - 8pm</p>
                                                                    <p>Saturday: 9am - pm</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="title-contact-info">write to us</h5>
                                            <div class="contact-form ">

                                                <form class="form-contact" action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
                                                                <input type="text" placeholder="First Name"  class="input-control first-name" value="" name="first-name">
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
                                                                <input type="text" placeholder="Second Name"  class="input-control second-name"  value="" name="second-name">
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <textarea placeholder="Message" aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <input type="submit" class="button-duck" value="Send Message">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Contact Form Element -->
                            </div>
                            <!-- Contact Content -->
                        </div>
                    </div>
                    <!-- End Main content -->
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
