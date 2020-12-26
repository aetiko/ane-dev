<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>ANE DEV</title>
</head>

<body>
    <!-- mobile navigation -->
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">MAIN</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo site_url('/UNDERGRAD'); ?>">UNDERGRAD</a>
            </li>
            <li>
                <a href="<?php echo site_url('/PORTFOLIO'); ?>">PORTFOLIO</a>
            </li>
            <!-- <li>
                <a href="<?php echo site_url('/SERVICE'); ?>">SERVICES</a>
            </li> -->
            <!-- <li>
                        <a href="#">STACK ANE</a>
                    </li> -->
            <li>
                <a href="<?php echo site_url('/about'); ?>">ANE DEV</a>
            </li>
            <li>
                <input type="text" placeholder="Broaden your knowledge">
                <!-- <br>
                <a href="#">
                    <i class="fa fa-search"></i>
                </a> -->
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ANELOGO3.png" alt="ANEDEV LOGO">
            </a>
        </div>
        <!-- main navigation bar -->
        <div id="menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">MAIN</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo site_url('/UNDERGRAD'); ?>">UNDERGRAD</a>
            </li>
            <li>
                <a href="<?php echo site_url('/PORTFOLIO'); ?>">PORTFOLIO</a>
            </li>
            <!-- <li>
                <a href="<?php echo site_url('/SERVICE'); ?>">SERVICES</a>
            </li> -->
            <!-- <li>
                <a href="#">STACK ANE</a>
            </li> -->
            <li>
                <a href="<?php echo site_url('/about'); ?>">ANE DEV</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fa fa-search">
                    </i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Broaden your knowledge">
    </div>