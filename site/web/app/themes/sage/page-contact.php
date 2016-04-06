<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Place Gravity Form Here -->

<div class="brands text-center">
  <div class="companies center-block">
    <svg class="companies" width="236" height="68"><?php get_template_part( 'assets/svg/inline', 'companies.svg' ); ?></svg>
  </div>
</div>
