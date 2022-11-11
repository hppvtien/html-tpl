<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home One || Ambed || Ambed HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> -->
    <meta name="description" content="Ambed HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/nouislider.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/css/stylesheet.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/vegas.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/timePicker.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/ambed.css" />
    <link rel="stylesheet" href="assets/css/ambed-responsive.css" />

    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="assets/css/ambed-light.css">


    <!-- toolbar css -->
    <link rel="stylesheet" href="assets/css/toolbar.css">

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- style switcher -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Dark</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Light</a>
            <button class="boxed-switcher">Boxed</button><!-- /.ltr-switcher -->
        </div><!-- /.language-feature -->
    </div>
    <!-- end style switcher -->



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include('header.php'); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="contact-page-shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact us</span>
                                <h2 class="section-title__title">Feel Free to Write</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <div class="contact-page__form">
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                <ul class="list-unstyled contact-page__details-list">
                                    <li>
                                        <span>Call anytime</span>
                                        <p><a href="tel:980009630">+ 98 (000) - 9630</a></p>
                                    </li>
                                    <li>
                                        <span>Send email</span>
                                        <p><a href="mailto:ambed@company.com">ambed@company.com</a></p>
                                    </li>
                                    <li>
                                        <span>Visit Office</span>
                                        <p>380 St Kilda Golden Road Melbourne, Australia</p>
                                    </li>
                                </ul>
                                <div class="contact-page__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__two-box" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Newsletter Start-->
        <section class="newsletter newsletter-two">
            <div class="container">
                <div class="newsletter__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="newsletter-shape-1" style="background-image: url(assets/images/shapes/newsletter-shape-1.png);"></div>
                    <div class="newsletter__left">
                        <h3 class="newsletter__title">Join Our Newsletter</h3>
                        <p class="newsletter__text">Lorem ipsum dolor amet, elit do eiusmod sed</p>
                    </div>
                    <div class="newsletter__right">
                        <form class="newsletter__form">
                            <div class="newsletter__input-box">
                                <input type="email" placeholder="Enter your email" name="email">
                                <button type="submit" class="thm-btn newsletter__btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter End-->

        <!--Site Footer Start-->
        <?php include('footer.php'); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@ambed.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.circle-progress.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/tiny-slider.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/timePicker.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>


    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!-- template js -->
    <script src="assets/js/ambed.js"></script>


    <!-- toolbar js -->
    <script src="assets/js/js.cookie.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/toolbar.js"></script>

</body>

</html>