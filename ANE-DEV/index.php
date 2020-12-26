<?php get_header(); ?>
<?php

// customized query
// this helps display the posts you can also modify to get your projects and undergrad
$args = array(
    // associateve array
    'post_type' => 'post',
    'posts_per_page' => 3,
);
$blogposts = new WP_Query($args);

while ($blogposts->have_posts()) {
    $blogposts->the_post();
?>
<!-- permalink helps to move to the page required -->
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?> </h3>
    </a>
    <?php the_excerpt(); ?>
<?php
}
?>
<?php get_footer(); ?>