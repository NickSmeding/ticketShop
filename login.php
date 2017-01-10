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
                <div class="banner-header" style="background-image: url(assets/images/login-banner.jpg); min-height:196px;" >
                    <div class="banner-content">
                        <h3 class="title-page" data-color="#333333">Authentication</h3>
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Authentication</span>
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
                            <div id="customer_login">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="title-login">Login</h5>
                                        <form class="login" method="post">
                                            <p class="form-row form-row-wide">
                                                <label for="username">Username or Email address <span class="required">*</span></label>
                                                <input type="text" value="" id="username" name="username" class="input-text">
                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="password">Password <span class="required">*</span></label>
                                                <input type="password" id="password" name="password" class="input-text">
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" value="Login" name="login" class="button-submit">
                                                <a href="#">Lost your password?</a>
                                            </p>
                                            <p class="lost_password">

                                                <label class="inline" >
                                                    <input type="checkbox" value="forever1" id="login-rememberme" name="login-rememberme"> Remember me
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="title-login">Register</h5>
                                        <form class="register" method="post">
                                            <p class="form-row form-row-wide">
                                                <label for="reg_email">Username or Email address <span class="required">*</span></label>
                                                <input type="email" value="" id="reg_email" name="email" class="input-text">
                                            </p>

                                            <p class="form-row form-row-wide">
                                                <label for="reg_password">Password <span class="required">*</span></label>
                                                <input type="password" id="reg_password" name="password" class="input-text">
                                            </p>
                                            <p class="form-row">
                                                <label class="inline" >
                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme"> Sign me up for the Newsletter!
                                                </label>
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" value="Register" name="register" class="button-submit">
                                            </p>


                                        </form>
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
