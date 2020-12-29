<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">ERROR 404</h2>
    <img src="http://source.unsplash.com/640x480/?cats">
    <h3>Sorry. Try the following links</h3>
    <ul>
        <li>
            <a href="<?php echo site_url(''); ?>"> HOME</a>
        </li>
        <li>
            <a href="<?php echo site_url('/blog'); ?>"> BLOG</a>
        </li>
        <li>
            <a href="<?php echo site_url('/UNDERGRAD'); ?>"> UNDERGRAD</a>
        </li>
        <li>
            <a href="<?php echo site_url('/PORTFOLIO'); ?>"> PORTFOLIO</a>
        </li>
        <li>
            <a href="<?php echo site_url('/about'); ?>"> ABOUT</a>
        </li>
    </ul>
</div>

<?php get_footer();?>