<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php echo date("F j, Y, g:i a");  ?>

<?php the_content(); ?>

<p>Your Username: <?php the_author(); ?></p>
<!--Eto yung username mo sa User>Profile -->

<?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    // echo $fname . ' ' . $lname;
?>
<!-- Eto yung nag sshow ng name and lastname User>Profile>First Name & Last Name -->

<P>Posted by <?php echo $fname; ?> <?php echo $lname; ?></P>

<h3>Tags:</h3>

<?php
$tags = get_the_tags();
foreach ($tags as $tag): ?>

<a class="btn btn-success mt-2" href='<?php echo get_tag_link($tag->term_id); ?>'>
    <!-- Eto yung nag sshow ng tags, pwede mo sya alisin sa href if gusto mo makita talaga -->
    <?php echo $tag->name; ?>
    <!-- Eto naman yung tag name lang -->
</a>
<?php endforeach; ?>

<h3>Categories:</h3>

<?php
$categories = get_the_category();
foreach($categories as $cat): ?>

<a class="btn btn-danger" href='<?php echo get_category_link($cat->term_id); ?>'>
    <!-- Eto yung nag sshow ng categories -->
    <?php echo $cat->name; ?>
</a>

<?php endforeach; ?>


<!-- Eto yung nag sshow ng ng comments pero need mo pa to lagyan ng CSS -->
<?php //comments_template(); ?>



<?php endwhile; else: endif; ?>