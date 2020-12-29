<?php get_header(); ?>
<!-- main section of website -->
<h2 class="page-heading">Search Result for <?php echo get_search_query(); ?></h2>

<?php if (have_posts()) {
?>
    }

    <section>
        <?php
        while (have_posts()) {
            the_post();
        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="BLOG">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?>
                        in <a href="#"><?php echo get_the_category_list(',') ?></a>
                        <?php if (get_post_type() == 'post') { ?>
                            in <a href="#"><?php echo get_the_category_list(',') ?>
                            </a>
                        <?php } ?>
                    </div>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            <!-- reset query before function ends good practice -->
        <?php }
        wp_reset_query();
        ?>
    </section>

<?php } else { ?>

    <div class="no-results">
        <h2> Could not find anything </h2>
        <h3>Navigate the following links</h3>
        <h3></h3>
        <ul>
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

<?php } ?>
<div class="pagination">
    <?php echo paginate_links(); ?>
</div>
<?php get_footer(); ?>