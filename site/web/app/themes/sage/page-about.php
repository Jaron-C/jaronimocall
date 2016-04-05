<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div id="rundown">
  <div class="about-rundown text-center">
    <svg class="about-rundown img-responsive" width="705" height="726"><?php get_template_part( 'assets/svg/inline', 'about-rundown.svg' ); ?></svg>
  </div>
</div>
