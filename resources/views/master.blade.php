<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_asset/assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/fonts/remixicon.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_asset/assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/metismenu.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/simplebar.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/dropzone.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/meanmenu.min.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('front_asset/assets/css/responsive.css')}}">

    <title>Micro Fiverr</title>

    <link rel="icon" type="image/png" href="{{asset('front_asset/assets/images/favicon.png')}}">
    <style type="text/css">
.bg-light {
    background-color: transparent !important;
}
.carousel-item {
    height: 60vh;
    min-height: 300px;
}
.carousel-caption {
    bottom: 220px;
}
.carousel-caption h5 {
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
    color: #fff;
}
.carousel-caption p {
    width: 60%;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
}
.carousel-caption a {
    text-transform: uppercase;
    text-decoration: none;
    background: darkorange;
    padding: 10px 30px;
    display: inline-block;
    color: #000;
    margin-top: 15px;
}

.w-100 {
    height: 100vh;
}

@media only screen and (max-width: 767px) {
    .navbar-nav {
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
    }
    .carousel-caption {
        bottom: 165px;
    }
    .carousel-caption h5 {
        font-size: 17px;
    }
    .carousel-caption a {
        padding: 10px 15px;
        font-size: 15px;
    }
}

    </style>
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <img src="{{asset('front_asset/assets/images/20220222_120205.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container-fluid">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('front_asset/assets/images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav desktop-nav-one nav-area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="#">
                <img src="{{asset('front_asset/assets/images/logo.png')}}" alt="Logo">
                </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active"><i class="ri-home-4-line"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Follow Us<i class="ri-arrow-down-s-line"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Facebook
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Linkedin
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Twitter
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li id="navbar_register_btn" class="nav-item">
                                <a href="#myModal" data-toggle = "modal" data-target= "#myModal" class="nav-link">Our Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Help Center</a>
                            </li>

                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="optional-item">
                                <a href="#" class="default-btn two border-radius-5">Join Us <i class="ri-user-3-line"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="side-nav-responsive">
            <div class="container-max">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="side-nav-inner">
                        <div class="side-nav justify-content-center align-items-center">
                            <div class="side-nav-item">
                                <a href="#" class="default-btn two">
                                Join Us <i class="ri-user-3-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front_layouts.inc.navModal')


    @yield('mainContent')

    <footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="footer-widget">
                    <div class="footer-logo">
                    <a href="#">
                    <img src="{{asset('front_asset/assets/images/logo.png')}}" alt="Footer Logo">
                    </a>
                    </div>
                        <ul class="footer-contact-list">
                            <li>
                                <i class="ri-map-pin-line"></i>
                                <div class="content">
                                <a href="#">
                                    Microfiverr Office Adress,Bangladesh.
                                </a>
                                </div>
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <div class="content">
                                <a href="">
                                <span class="">support@microfiverr.com</span>
                                </a>
                                </div>
                            </li>
                            <li>
                                <i class="ri-phone-line"></i>
                                <div class="content">
                                <a href="tel:+4471234567890">
                                 +00 000 0000 00
                                </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="footer-widget">
                        <h3>Navigation</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="#" target="_blank">Home</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Our Mission</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Terms Of Services</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Browse Jobs</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Browse Sellers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="footer-widget ps-5">
                        <h3>The Highlights</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="#" target="_blank">New Jobs</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Guideline</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Help Center</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Site Map</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copy-right-text">
                            <p>
                            © 2022 Micro Fiverr. All Rights Reserved by
                            <a href="#" target="_blank">Micro Fiverr</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="copy-right-social-link">
                            <ul class="social-link">
                                <li>
                                     <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    
    <script src="{{asset('front_asset/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_asset/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/odometer.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/jquery.appear.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/meanmenu.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/metismenu.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/simplebar.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/dropzone.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/sticky-sidebar.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/tweenMax.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/wow.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/form-validator.min.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/contact-form-script.js')}}"></script>

    <script src="{{asset('front_asset/assets/js/custom.js')}}"></script>
    <script type="text/javascript">
        $("#navbar_register_btn").on("click",function(e){
            e.preventDefault();
            $('#myModal').modal('show');
        })
    </script>
    <script type="text/javascript">
        $("#showModal").on("click",function(e){
            e.preventDefault();
            $('#filterModal').modal('show');
        })
    </script>
</body>
</html>