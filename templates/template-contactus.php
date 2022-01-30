<?php
/*
Template Name: Contact Us
*/
?>


<?php get_header(); ?>

<div class="container">



    <h1><?php the_title(); ?></h1>

    <?php if(has_post_thumbnail()): ?>

    <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title(); ?>"
        class="img-fluid img-thumbnail me-2"></img>


    <?php endif; ?>


    <div class="row">
        <div class="col-lg-6">
            <p>This is where the contact form goes</p>
        </div>
        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content'); ?>
        </div>
    </div>






</div>

<?php get_footer(); ?>