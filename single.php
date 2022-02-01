<?php get_header(); ?>

<div class="container">

    <?php if(has_post_thumbnail()): ?>

    <!-- Eto yung pwede ka mag upload ng image sa POST pero need mo muna i update sa functions.php yung add theme support na post thumbnails and yung blog-large pala is yung size na gusto mo mag load check mo sa function php-->
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title(); ?>"
        class="img-fluid img-thumbnail mb-3"></img>


    <?php endif; ?>

    <h1><?php the_title(); ?></h1>



    <?php get_template_part('includes/section', 'blogcontent'); ?>

    <!-- Eto yung content ng test post na naka pagebreak -->
    <?php wp_link_pages(); ?>

</div>

<?php get_footer(); ?>