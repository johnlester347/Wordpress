<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">

        <?php if(has_post_thumbnail()): ?>

        <!-- Eto yung pwede ka mag upload ng image sa POST pero need mo muna i update sa functions.php yung add theme support na post thumbnails and yung blog-large pala is yung size na gusto mo mag load check mo sa function php -->
        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title(); ?>"
            class="img-fluid img-thumbnail me-2"></img>


        <?php endif; ?>

        <div class="blog-content">
            <h3><?php the_title(); ?></h3>

            <?php //the_content(); ?>
            <!-- Showing the content from the post and pages -->

            <?php the_excerpt(  ); ?>
            <!-- Showing the content but limited text -->

            <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
            <!-- Eto yung nag ddirect sa mismong post, sample clinick mo yung post 1 i-ddirect ka nya sa mismong post na yun -->
        </div>

    </div>
</div>

<?php endwhile; else: endif; ?>