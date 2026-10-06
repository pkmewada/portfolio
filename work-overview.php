<?php
header('Cache-Control: no-cache, must-revalidate');
require_once __DIR__ . '/asset-helpers.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="MqQLUS - Creative Digital Agency Single Page">
    <title>Mqlus — Creative Digital Agency</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Mozilla+Text:wght@200..700&display=swap"
        rel="stylesheet">

    <!-- Plugins & Core Styles -->
    <link rel="stylesheet" href="<?php echo asset_url('assets/css/plugins.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('assets/css/style.css'); ?>">
</head>

<body class="main-bg">

    <!-- ==================== Loading ==================== -->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>M</span><span>Q</span><span>l</span><span>u</span><span>s</span>
            </div>
        </div>
    </div>

    <!-- Cursor & Progress -->
    <div class="cursor"></div>
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== Navbar ==================== -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="logo" href="index.php">
                <img src="assets/imgs/logo/logo.webp" alt="Mqlus" class="w-160px">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><span class="rolling-text"></span></a>
                    </li>
                    <li class="nav-item"><span
                            class="rolling-text"></span></a></li>
                    <li class="nav-item"><span
                            class="rolling-text"></span></a></li>
                    <li class="nav-item"><span
                            class="rolling-text"></span></a></li>

                </ul>
            </div>

            <a href="#contact" class="butn-arrow butn-rounded">
                <span class="text-uppercase fs-14 fw-500">Let's Talk</span>
                <span class="arrow-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M7 11.5H17.0635M17.0635 11.5L12.5635 7M17.0635 11.5L12.5635 16"></path>
                    </svg>
                </span>
            </a>

        </div>
    </nav>


    <!-- ==================== Smooth Scroll Wrapper ==================== -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <section class="work-overview">

                    <div class="container">

                        <!-- ================= Row 1 ================= -->
                        <div class="row-one">

                            <!-- 70% -->
                            <div class="work-title">
                                <h2>WORK <br> OVERVIEW</h2>
                            </div>

                            <!-- 30% -->
                            <div class="work-logo">
                                <img src="assets/imgs/shape1.png" alt="">
                            </div>

                        </div>

                        <!-- ================= Row 2 ================= -->
                        <div class="row-two">

                            <!-- 30% -->
                            <div class="left-info">

                                <div class="client">
                                    <span class="title">CLIENT</span>

                                    <div class="author-details">
                                        <h5>Arora Brothers</h5>
                                        <span>CEO • Arora Pvt. Ltd.</span>
                                    </div>
                                </div>

                                <div class="services">
                                    <span class="title">SERVICES</span>

                                    <p>
                                        Branding <br>
                                        UI / UX Design <br>
                                        Web Development
                                    </p>
                                </div>

                            </div>

                            <!-- 70% -->
                            <div class="right-info">

                                <div class="middle">
                                    <span>OUR</span>
                                    <span>APPROACH</span>
                                    <div class="line"></div>
                                </div>

                                <div class="author-about">
                                    <span class="title">ABOUT</span>

                                    <p>
                                        Our journey has been marked by countless successful
                                        projects that not only achieved but surpassed our
                                        clients' Our journey has been marked by countless successful
                                        projectsOur journey has been marked by countless successful
                                        projectsOur journey has been marked by countless successful
                                        projectsOur journey has been marked by countless successful
                                        projects goals.
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="stats">

                            <div class="stat">
                                <h3 class="counter" data-target="120">0</h3>
                                <p>Increase in conversions</p>
                            </div>

                            <div class="stat">
                                <h3 class="counter" data-target="80">0</h3>
                                <p>Average daily signups</p>
                            </div>

                            <div class="stat">
                                <h3 class="counter" data-target="140">0</h3>
                                <p>Increase in website traffic</p>
                            </div>

                            <div class="stat">
                                <h3 class="counter" data-target="130">0</h3>
                                <p>Increase in conversions</p>
                            </div>

                        </div>

                    </div>

                </section>





                <!-- ==================== Start Section ==================== -->

                <div class="portfolio-elegant">
                    <div class="container-xxl">
                        <div class="work-boxs">
                            <div class="item cursor-pointer">
                                <div class="w-100">
                                    <div class="bg-img" data-background="assets/imgs/works/4/1.webp">
                                    </div>
                                </div>
                            </div>
                            <div class="item cursor-pointer">
                                <div class="w-100">
                                    <div class="bg-img" data-background="assets/imgs/works/4/2.webp">
                                    </div>
                                </div>
                            </div>
                            <div class="item cursor-pointer">
                                <div class="w-100">
                                    <div class="bg-img" data-background="assets/imgs/works/4/3.webp">
                                    </div>
                                </div>
                            </div>
                            <div class="item cursor-pointer">
                                <div class="w-100">
                                    <div class="bg-img" data-background="assets/imgs/works/4/4.webp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                <?php include 'footer.php'; ?>