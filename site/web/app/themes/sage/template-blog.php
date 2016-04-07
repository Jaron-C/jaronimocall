<?php
/**
 * Template Name: Blog Page
 */
?>

<!--<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>-->

<div class="container text-center">
  <h4 class="intro">Please feel free to leave comments or shoot me</h4>
  <h4>an email if you'd like to get in contact!</h4>
</div>


<!-- Featured Category -->
<div class="wrap container">
<div class="row">
<?php query_posts('category_name=featured&showposts=12'); while (have_posts()) : the_post();?>
<div class="col-xs-12">
<div class="thumbnail">
<?php the_post_thumbnail( 'featured-img-thumb' ); ?>
<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php get_template_part('templates/entry-meta'); ?>
<!--<?php the_excerpt(); ?> (excerpts from the post)-->
</div>
</div>
<?php endwhile; ?>
</div>
</div>
<!-- //Featured Category -->

<!-- Place Gravity Form Here -->
