<!-- this page helps navigate to each of my posts -->
<?php get_header(); ?>
<!-- We want the title , featured image, comment form, author, content,  -->
<?php 
while(have_posts()){
    the_post();
    // title
    ?>
    <h2><?php the_title(); ?></h2>
    Posted by <? the_author();?>
    
    <!-- featured image -->
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>"/>

    <!-- content and comment form -->

    <?php the_content();
    comment_form();
}

?>
<?php get_footer(); ?>