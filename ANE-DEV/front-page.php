<?php get_header(); ?>
<!-- banner for frontpage -->
<div id="banner">
    <h1>ANE DEV &#169;</h1>

    <h3>Embracing the world of both <br> Back-end and Front-end Development</h3>
</div>


<!-- main section of website -->
<main>
    <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="section-heading">BLOG</h2>
    </a>
    <section>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $blogpost = new WP_Query($args);
        while ($blogpost->have_posts()) {
            $blogpost->the_post();
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
    <a href="<?php echo site_url('/UNDERGRAD'); ?>">
        <h2 class="section-heading">COURSES TAKEN AT UNB</h2>
    </a>
    <!-- Courses taken at UNB -->
    <section>
        <?php
        $args = array(
            'post_type' => 'UNDERGRAD',
            'posts_per_page' => 2,
        );
        $undergradpost = new WP_Query($args);
        while ($undergradpost->have_posts()) {
            $undergradpost->the_post();
        ?>
            <!-- Java 1 -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="COURSES AT UNB">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
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

    <!-- All projects worked on -->
    <a href="<?php echo site_url('/PORTFOLIO'); ?>">
        <h2 class="section-heading">PORTFOLIO</h2>
        <section>
            <!-- Bonds Web Development -->
            <?php
            $args = array(
                'post_type' => 'PORTFOLIO',
                'posts_per_page' => 2,
            );
            $portfoliopost = new WP_Query($args);
            while ($portfoliopost->have_posts()) {
                $portfoliopost->the_post();
            ?>
                <div class="card">
                    <div class="card-image">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="PORTFOLIO">
                        </a>
                    </div>
                    <div class="card-description">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
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
        <!-- cakes by bims, mikes website , development on the side from udemy copy the section above and add fillers-->
        <!-- Link to my sourceCode
        <h class="section-heading">Source Code</h>
        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odit quo dolorem dolores? Nihil, quae architecto. Facilis praesentium officia nisi laboriosam. Tempora consequatur numquam, itaque animi natus sint dolorem laboriosam!
            </p>
            <a href="#">GitHub</a>
        </section> -->
        <!-- Making my footer really simple -->

        <?php get_footer(); ?>