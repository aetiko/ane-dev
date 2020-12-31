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
            <div class="searchbox-slide-menu">
                <?php get_search_form(); ?>
            </div>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ANELOGO3.png" alt="ANEDEV LOGO">
            </a>
        </div>
        <!-- main navigation bar -->
        <div id="menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>" <?php if (is_front_page()) echo 'class= "active"' ?>>MAIN</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>" <?php if (get_post_type() == 'post') echo 'class= "active"' ?>>BLOG</a>
            </li>
            <li>
                <a href="<?php echo site_url('/UNDERGRAD'); ?>" <?php if (get_post_type() === 'undergrad') echo 'class= "active"' ?>>UNDERGRAD</a>
            </li>
            <li>
                <?php //print_r(get_post_type()); ?> 
                <a href="<?php echo site_url('/PORTFOLIO'); ?>" <?php if (get_post_type() === 'portfolio') echo 'class= "active"' ?>>PORTFOLIO</a>
            </li>
            <!-- <li>
                <a href="<?php echo site_url('/SERVICE'); ?>">SERVICES</a>
            </li> -->
            <!-- <li>
                <a href="#">STACK ANE</a>
            </li> -->
            <li>
                <a href="<?php echo site_url('/about'); ?>" <?php if (is_page('about')) echo 'class= "active"' ?>>ANE DEV</a>
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
        <?php get_search_form(); ?>
    </div>

    <?php if (!is_front_page()) { ?>
        <main>
        <?php } ?>