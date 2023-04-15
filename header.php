<!DOCTYPE html>
<html>
<?php
include_once('config.php');
session_start();
$themeStyleSheet = 'assets/css/style-light.css';
$logo = 'assets/img/logo-main.png';
$buttonText = 'Toggle Dark Mode<i class="fas fa-moon ml-2"></i>';
$buttonText2 = 'Switch To Dark Mode';
$class = 'light-theme';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
    $themeStyleSheet = 'assets/css/style-dark.css';
    $class = 'dark-theme';
    $logo = 'assets/img/logo-main-white.png';
    $buttonText2 = 'Switch To Light Mode';
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link href="/assets/fonts/BebasKai.otf">

    <!-- <link rel="stylesheet" href="assets/css/style-light.css" id="web_theme"> -->
    <link href="<?php echo $themeStyleSheet; ?>" rel="stylesheet" id="web_theme">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body class="<?php echo $class; ?>">
    <header class="main-header fixed-top">
        <nav class="nav_top navbar py-0 d-none d-md-block">
            <div class="container d-flex justify-content-end ">
                <ul class="align-items-end d-flex justify-content-center list-inline list-unstyled mb-0">
                    <li class="nav_top_item list-inline-item">
                        <a href="" data-toggle="modal" class="nav_top_a" data-target="#theme-modal">
                            <i class="fa fa-sun mr-2"></i>Light/Dark Mode
                        </a>
                    </li>
                    <li class=" nav_top_item list-inline-item">
                        <a href="tel:4693329662" class="nav_top_a">
                            <i class="fa fa-phone mr-2"></i> (469) 332-9662
                        </a>
                    </li>
                    <li class="dropdown nav_top_item list-inline-item">
                        <a class="dropdown-toggle nav_top_a" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://www.worldometers.info/img/flags/us-flag.gif" width="20">
                            English
                        </a>
                        <div class="dropdown-menu menu_dropdown mt-0" aria-labelledby="navbarDropdownMenuLink">
                            <div class="dropdown-item">
                                <a href="#" onclick="doGTranslate('en|en');return false;" title="English"
                                    class="gflag nturl text-body" style="background-position:-0px -0px;">
                                    <img src="https://www.worldometers.info/img/flags/us-flag.gif" width="24"
                                        alt="English" />
                                    English
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish"
                                    class="gflag nturl text-body" style="background-position:-600px -200px;">
                                    <img src="https://www.worldometers.info/img/flags/sp-flag.gif" width="24"
                                        alt="Spanish" />
                                    Spanish
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav_top_item  list-inline-item">
                        <?php
                        if ($_SESSION["user"] == null) {
                        ?>
                        <a href="admin-login.php" class="nav_top__btn">
                            <p class="nav_top_btn_text text-uppercase mb-0">Login</p>
                        </a>
                        <?php
                        } else {
                        ?>
                        <a href="logout.php" class="nav_top__btn">
                            <p class="nav_top_btn_text text-uppercase mb-0">Logout</p>
                        </a>

                        <?php
                        }

                        ?>

                    </li>

                </ul>

            </div>

        </nav>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm main_navigation py-0" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger main_logo" href="./">
                    <img class="img-fluid main-logo" src="<?php echo $logo; ?>" id="main-logo" alt="" />
                </a>
                <button class="navbar-toggler navbar-toggler-right focus-0" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger <?php if ($currentPage == 'home') {
                                                                        echo 'active';
                                                                    } ?>" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger <?php if ($currentPage == 'about') {
                                                                        echo 'active';
                                                                    } ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger <?php if ($currentPage == 'brands') {
                                                                        echo 'active';
                                                                    } ?>" href="mobile_brands.php">Products</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link js-scroll-trigger <?php if ($currentPage == 'repairs') {
                                                                        echo 'active';
                                                                    } ?>" href="repair.php">Repairs</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger <?php if ($currentPage == 'contact') {
                                                                        echo 'active';
                                                                    } ?>" href="contact-us.php">Contact</a>
                        </li>
                        <li class="nav-item mb-3 mb-lg-0 ml-lg-1">
                            <a class="btn-light border nav_btn btn px-4 rounded-pill" href="view-location.php">
                                <svg height="18" aria-hidden="true" focusable="false" data-prefix="far"
                                    data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512" class="mr-2">
                                    <path fill="currentColor"
                                        d="M192 0C85.903 0 0 86.014 0 192c0 71.117 23.991 93.341 151.271 297.424 18.785 30.119 62.694 30.083 81.457 0C360.075 285.234 384 263.103 384 192 384 85.903 297.986 0 192 0zm0 464C64.576 259.686 48 246.788 48 192c0-79.529 64.471-144 144-144s144 64.471 144 144c0 54.553-15.166 65.425-144 272zm-80-272c0-44.183 35.817-80 80-80s80 35.817 80 80-35.817 80-80 80-80-35.817-80-80z"
                                        class=""></path>
                                </svg>
                                FIND YOUR STORE
                            </a>
                        </li>
                        <!-- <li class="nav-item my-3 my-lg-0">
                            <a class="ml-2 btn_search btn-light border btn btn_nav_search pointer rounded-circle">
                                <svg height="20" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="lightbulb" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class=""><path fill="currentColor" d="M176 0C73.05 0-.12 83.54 0 176.24c.06 44.28 16.5 84.67 43.56 115.54C69.21 321.03 93.85 368.68 96 384l.06 75.18c0 3.15.94 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84L256 384c2.26-15.72 26.99-63.19 52.44-92.22C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0zm47.94 454.31L206.85 480h-61.71l-17.09-25.69-.01-6.31h95.9v6.31zm.04-38.31h-95.97l-.07-32h96.08l-.04 32zm60.4-145.32c-13.99 15.96-36.33 48.1-50.58 81.31H118.21c-14.26-33.22-36.59-65.35-50.58-81.31C44.5 244.3 32.13 210.85 32.05 176 31.87 99.01 92.43 32 176 32c79.4 0 144 64.6 144 144 0 34.85-12.65 68.48-35.62 94.68zM176 64c-61.75 0-112 50.25-112 112 0 8.84 7.16 16 16 16s16-7.16 16-16c0-44.11 35.88-80 80-80 8.84 0 16-7.16 16-16s-7.16-16-16-16z" class=""></path></svg>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>