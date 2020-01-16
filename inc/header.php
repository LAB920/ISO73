<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/portfolio.css">
    <title><?= $title . $title_tag ?></title>
</head>
<body>

    <div id="home-container">
        <div id="menu-bar">
            <section class="app-header">
                <!-- Hamburger icon -->
                <div id="hamburger-container" class="header-item">
                    <button id="hamburger-button" class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Menu -->
                <div id="menu-list">  
                    <?php
                        foreach ($menu_items as $item) {
                            echo "<a href=\"" . str_replace(' ', '', strtolower($item)) . ".php\" class=\"nav-link\">$item</a>";
                        }
                    ?>
                    <a href="<?= str_replace(' ', '', strtolower($menu_item_bordered)) ?>.php" class="nav-link profile-btn"><?= $menu_item_bordered ?></a>
                </div>
                <!-- Logo -->
                <div class="logo-container header-item">
                    <svg id="logo-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401.89 112.45">
                        <a href="#">
                            <path d="M185.58,38h-60.1A55,55,0,0,1,165.54,3.31ZM217.8,20.23A54.8,54.8,0,0,0,177,2.1a55.84,55.84,0,0,0-9.3.79l30,52.05Zm1.45,1.68L189.2,74h40.09a55,55,0,0,0-10-52Zm-83,71.92A54.78,54.78,0,0,0,177,112a56.05,56.05,0,0,0,9.31-.79l-30.05-52ZM124.76,40.11a55,55,0,0,0,10,52l30-52Zm63.74,70.64A55,55,0,0,0,228.57,76H168.46ZM8.23,2.62V111.93H30.88V2.62ZM44.46,28.85A27.42,27.42,0,0,0,48,42.75,40.21,40.21,0,0,0,56.4,53.14a161.34,161.34,0,0,0,13,9.91Q79,69.62,83.88,74.77a17,17,0,0,1,4.84,12q0,10.62-11.73,10.62T65.25,86.79V79H43.84V85.7q0,13.27,8.65,20.38t25.11,7.1q16.47,0,25.12-7.1t8.65-20.38a27.42,27.42,0,0,0-3.5-13.9,40.41,40.41,0,0,0-8.44-10.39,161.34,161.34,0,0,0-13-9.91A88.33,88.33,0,0,1,71.94,39.78a17,17,0,0,1-4.83-12c0-3.75,1-6.48,2.88-8.2S74.72,17,78.43,17s6.51.86,8.44,2.58,2.88,4.45,2.88,8.2v4.53h21.41V28.85q0-13.28-8.44-20.38T77.81,1.37q-16.47,0-24.91,7.1T44.46,28.85Zm222.35-10h-7.54l5.2-15.62h-8.08l-8.62,17.34V35.42h19ZM339.18,3.25H279.92V18.87h39.33l-28.92,93.7h19.76l29.09-94.33Zm51.18,26.86V36.2c0,4.17-1,7.14-3,8.91s-4.94,2.65-8.89,2.65h-7.72V63.38h6.64q6.82,0,9.88,3.2t3.05,10.7v8.58q0,6.89-2.6,9.61t-7.63,2.73q-10.25,0-10.24-10.77V77.28H351.21v9q0,13.28,7.55,20.38t21.91,7.11q14.35,0,21.91-7.11t7.54-20.38V77.74q0-17.64-13.83-22.95a19.42,19.42,0,0,0,10.42-8q3.41-5.55,3.41-14.45V29.49q0-13.27-7.54-20.38T380.67,2Q366.3,2,358.76,9.11t-7.55,20.38v5.93h18.68v-7q0-10.78,10.24-10.78,5,0,7.63,2.73T390.36,30.11Z" transform="translate(-8.23 -1.37)"/>
                        </a>
                    </svg>
                </div>
            </section>
        </div>