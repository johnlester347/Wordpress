<?php get_header(); ?>

<div class="container">

    <?php get_template_part('includes/section', 'archive'); ?>

    <?php previous_posts_link(); ?>
    <!-- Eto yung pagination, para lumabas to need mo mag limit ng post sa settings>reading>blog pages -->

    <?php next_posts_link(); ?>
    <!-- Eto yung pagination, para lumabas to need mo mag limit ng post sa settings>reading>blog pages -->



</div>

<?php get_footer(); ?>