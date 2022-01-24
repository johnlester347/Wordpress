<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="card mb-3">
    <div class="card-body">

        <h3><?php the_title(); ?></h3>

        <?php //the_content(); ?>
        <!-- Showing the content from the post and pages -->

        <?php the_excerpt(  ); ?>
        <!-- Showing the content but limited text -->

        <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
        <!-- Eto yung nag ddirect sa mismong post, sample clinick mo yung post 1 i-ddirect ka nya sa mismong post na yun -->

    </div>
</div>

<?php endwhile; else: endif; ?>