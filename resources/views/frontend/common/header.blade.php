<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from geeko.netlify.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Feb 2023 09:29:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Multipurpose Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?=asset('assets/frontend/img/core-img/favicon.ico')?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=asset('assets/frontend/css/style.css')?>">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="<?=asset('assets/frontend/css/responsive.css')?>">

</head>

<body class="light-version">
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="dream-load"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <div class="classy-nav-container dark breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="dreamNav">

                <!-- Logo -->
                <a class="nav-brand" href="index-2.html"><img src="<?=asset('assets/frontend/img/core-img/logo.png')?>" alt="logo"> CV Builder.</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="templates.html">Templates</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>

                        <!-- Button -->
                        <a href="#test-popup" class="open-popup-link btn login-btn mr-im">Log in</a>
                        <a href="#signup-popup" class="open-signup-link btn login-btn">Signup </a>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- Login popup form  -->

<div id="test-popup" class="white-popup mfp-hide">
    <div class="top-form-header">
        <h4>Login Form</h4>
    </div>
    <form action="#" method="post" id="main_login_form" novalidate="">
        <div class="row">

            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="text" name="name" id="name0" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="password" name="name" id="name1" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
            </div>

            <div class="col-12 col-sm-5 text-left ">
                <button type="submit" class="btn dream-btn">Login</button>
            </div>
            <div class="col-12 col-sm-7 text-left">
                <p class="mb-0 mt-10">Don't have an account? <a href="#" >Sign up</a></p>
            </div>
        </div>
    </form>

    <div class="other-accounts text-center">
        <p class="w-text">Login with other account</p>
        <div class="footer-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<!-- signup popup form so: -->

<div id="signup-popup" class="white-popup mfp-hide">
    <div class="top-form-header">
        <h4>Signup Form</h4>
    </div>
    <form action="#" method="post" id="main_Signup_form" novalidate="">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="text" name="name" id="name3" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name</label>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="text" name="name" id="name4" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="password" name="name" id="name5" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="group">
                    <input type="password" name="name" id="name6" required="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Confirm Password</label>
                </div>
            </div>

            <div class="col-12 col-sm-5 text-left ">
                <button type="submit" class="btn dream-btn">Login</button>
            </div>
            <div class="col-12 col-sm-7 text-left">
                <p class="mb-0 mt-10">Don't have an account? <a href="#" >Sign up</a></p>
            </div>
        </div>
    </form>

    <div class="other-accounts text-center">
        <p class="w-text">Login with other account</p>
        <div class="footer-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
