<?php

session_start();
include('./config/db.php');


$select = 'SELECT * FROM users';
$connect = mysqli_query($db_connect, $select);
$users = mysqli_fetch_assoc($connect);


$service_query = "SELECT * FROM services WHERE status='active'";
$services = mysqli_query($db_connect, $service_query);

$portfolio_query = "SELECT * FROM portfolios WHERE status='active'";
$portfolios = mysqli_query($db_connect, $portfolio_query);

$skills_query = "SELECT * FROM skills WHERE status='active'";
$skills = mysqli_query($db_connect, $skills_query);

$testimonials_query = "SELECT * FROM testimonials WHERE status='active'";
$testimonials = mysqli_query($db_connect, $testimonials_query);

$counter_query = "SELECT * FROM counters WHERE status='active'";
$counters = mysqli_query($db_connect, $counter_query);

$brand_query = "SELECT * FROM brands WHERE status='active'";
$brands = mysqli_query($db_connect, $brand_query);


?>


<!doctype html>
<html class="no-./fontend_assets/js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- ./fontend_assets/css here -->
    <link rel="stylesheet" href="./fontend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontend_assets/css/animate.min.css">
    <link rel="stylesheet" href="./fontend_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./fontend_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./fontend_assets/css/flaticon.css">
    <link rel="stylesheet" href="./fontend_assets/css/slick.css">
    <link rel="stylesheet" href="./fontend_assets/css/aos.css">
    <link rel="stylesheet" href="./fontend_assets/css/default.css">
    <link rel="stylesheet" href="./fontend_assets/css/style.css">
    <link rel="stylesheet" href="./fontend_assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.html" class="navbar-brand logo-sticky-none"><img src="./fontend_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.html" class="navbar-brand s-logo-none"><img src="./fontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="./fontend_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?= $users['name'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">I'm <?= $users['name'] ?>, professional sports analyst with 10yrs experience in this field​.</p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="https://www.facebook.com/swagmaruf/about"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/_pera_nai"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right ">
                            <img src="./images/profile/<?= $users['image'] ?>" alt="" style="height:500px; width: 400px; margin-left:70px; margin-bottom:70px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="./fontend_assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="./fontend_assets/img/banner/banner_img2.png" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                blanditiis culpa vitae velit. Numquam!</p>
                            <h3>Education:</h3>
                        </div>
                        <!-- Education Item -->
                        <?php foreach ($skills as $skill) : ?>
                            <div class="education">
                                <div class="year"><?= $skill['year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skill['title'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skill['skill_persentice'] ?>%" aria-valuenow="65" aria-valuemin="50" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- End Education Item -->

                        <!-- End Education Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['icon'] ?>"></i>
                                <h3><?= $service['service_title'] ?></h3>
                                <p>
                                    <?= $service['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>Best Performers in Sports</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($portfolios as $portfolio) : ?>
                        <!-- <?php $_SESSION['portfolio_image'] ?> -->
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img style="height: 500px;" src="./images/portfolios/<?= $portfolio['image'] ?>">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $portfolio['title'] ?></span>
                                    <h4><a href="portfolio_single.php"><?= $portfolio['description'] ?></a></h4>
                                    <a href="portfolio_single.php?person_id=<?= $portfolio['id'] ?>" class="arrow-btn"><span></span></a>
                                    <?php $_SESSION['image'] = $portfolio['image'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">

                        <?php foreach ($counters as $counter) : ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $counter['icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $counter['number'] ?></span></h2>
                                        <span><?= $counter['title'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->

        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-xl-9 col-lg-10">

                        <div class="testimonial-active">
                            <?php foreach ($testimonials as $testimonial) : ?>
                                <div class="single-testimonial text-center">

                                    <div class="testi-avatar">
                                        <img style="height: 120px; border-radius:50%" src="./images/testimonial/<?= $testimonial['image'] ?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><?= $testimonial['description'] ?></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testimonial['name'] ?></h5>
                                            <span><?= $testimonial['title'] ?></span>
                                        </div>

                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center" style="gap:50px">
                    <?php foreach ($brands as $brand) : ?>
                        <img src="./images/brands/<?= $brand['image'] ?>" alt="img">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                            <h5>OFFICE IN <span>NEW YORK</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span>Dhanmondi,Dhaka</li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span>01812359193</li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>mmaruf950@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class=""> -->
                        <form action="mail_post.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Feedback</label>
                                <textarea name="message" class="form-control" placeholder="your message *"></textarea>
                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>

                            <button class="btn" name="mail_post_btn">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- ./fontend_assets/js here -->
    <script src="./fontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./fontend_assets/js/popper.min.js"></script>
    <script src="./fontend_assets/js/bootstrap.min.js"></script>
    <script src="./fontend_assets/js/isotope.pkgd.min.js"></script>
    <script src="./fontend_assets/js/one-page-nav-min.js"></script>
    <script src="./fontend_assets/js/slick.min.js"></script>
    <script src="./fontend_assets/js/ajax-form.js"></script>
    <script src="./fontend_assets/js/wow.min.js"></script>
    <script src="./fontend_assets/js/aos.js"></script>
    <script src="./fontend_assets/js/jquery.waypoints.min.js"></script>
    <script src="./fontend_assets/js/jquery.counterup.min.js"></script>
    <script src="./fontend_assets/js/jquery.scrollUp.min.js"></script>
    <script src="./fontend_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="./fontend_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./fontend_assets/js/plugins.js"></script>
    <script src="./fontend_assets/js/main.js"></script>
</body>

</html>