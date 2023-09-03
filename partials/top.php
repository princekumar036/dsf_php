<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= set_title() ?> | Democratic Students' Federation</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/twstyle.css">

    <meta name="description" content="DSF is an independent, leftwing students' organisation which was formed in 2012-13 by student activists of JNU. DSF seeks to strengthen the progressive and democratic students' movement across the country on the basis of independent, principled positions on the issues confronting the student community.">
    <meta property="og:site_name" content="Democratic Students' Federation">
    <meta property="og:title" content="Democratic Students' Federation">
    <meta property="og:type" content="website">  
    <meta property="og:image" itemprop="image" content="assets/img/dsf.jpg">
    <meta property="og:image:secure_url" content="assets/img/dsf.jpg">
    <meta property="og:url" content="www.dsfofficial.org">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fac2f10ac.js" crossorigin="anonymous"></script>
</head>

<body class="max-w-screen-2xl mx-auto">

<!-- HEADER -->
    <header class="font-rbto-cnsd font-bold text-lg bg-gray-300 px-10 py-2 lg:flex justify-between items-center lg:text-xl">
        
        <div class="flex justify-between items-center">

            <div>
                <a href="index.html" class="lg:flex items-center gap-2">
                    <div><img class="w-16" src="assets/img/logo.png" alt="logo"></div>
                    <p class="hidden lg:block leading-none">
                        <span class="block">democratic</span>
                        <span class="block">students'</span>
                        <span class="block">federation</span>
                    </p>
                </a>
            </div>

            <button id="navtoggle" class="lg:hidden">
                <span id="navtoggle-open"><i class="fa-solid fa-bars text-2xl"></i></span>
                <span id="navtoggle-close" class="hidden"><i class="fa-solid fa-xmark text-3xl"></i></span>
            </button>

        </div>

        <nav id="navmenu" class="hidden text-right lg:block">
            <ul class="lg:flex gap-8 items-center">
                <li><a class="navlink" href="index.php">Home</a></li>
                <li><a class="navlink" href="about.php">About</a></li>
                <li><a class="navlink" href="statements.php">Statements</a></li>
                <li><a class="navlink" href="events.php">Events</a></li>
                <li><a class="navlink" href="contact-us.php">Contact Us</a></li>
                <li class="mt-2 lg:mt-0 lg:hover:scale-105 transition-transform">
                    <?php include "join-btn.php" ?>
                </li>
            </ul>
        </nav>

    </header>