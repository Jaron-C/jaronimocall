<h3>Motion Graphics | Website Design</h3>

<!-- Featured Category -->
<div class="wrap container">
<div class="row">
<?php query_posts('category_name=featured&showposts=3'); while (have_posts()) : the_post();?>
<div class="col-sm-4 col-xs-12">
<div class="thumbnail">
<?php the_post_thumbnail( 'featured-img-thumb' ); ?>
<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php get_template_part('templates/entry-meta'); ?>
<?php the_excerpt(); ?>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
<!-- //Featured Category -->
