<?php get_header(); ?>

<div class="container">

    <h1 style="font-family: san-serif;'"><?php echo single_cat_title(); ?></h1>

    <?php get_template_part('includes/section', 'archive'); ?>

    <?php previous_posts_link(); ?>
    <!-- Eto yung pagination, para lumabas to need mo mag limit ng post sa settings>reading>blog pages -->

    <?php next_posts_link(); ?>
    <!-- Eto yung pagination, para lumabas to need mo mag limit ng post sa settings>reading>blog pages -->

    <?php
        // global $wp_query;
        // $big = 999999999;

        // echo paginate_links( array(
        //     'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        //     'format' => '?paged=%#%',
        //     'current' => max(1, get_query_var('paged')),
        //     'total' => $wp_query->max_num_pages
        // ));
    ?>
    <!-- Pagination 2 -->






</div>

<?php get_footer(); ?>