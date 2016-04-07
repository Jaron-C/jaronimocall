<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Place "personal.jpg" Here -->

<!-- Text -->
<div class="about-copy text-center">
  <p style="text-align: center;font-size: 30px;">Welcome to</p>
  <p style="text-align: center;font-size: 30px;" class="jc.com"><strong>JaronimoCall.com</strong></p>
  &nbsp;
  <div>
    <div style="text-align: center;">I am an independent Motion Graphics Artist and Website Designer for <strong>Jackalope Media</strong>.</div>
  </div>
  <div style="text-align: center;">
    <div>Along side my design, I also run a local Utah Organization called <strong>Brake The Cycle</strong>,</div>
    <div>which is in support of suicide awareness.</div>
  </div>
</div>
  &nbsp;

<div class="about-copy-2">
  <div style="text-align: center;">Listed below is a quick rundown</div>
  <div style="text-align: center;">of what you can expect from this website!</div>
  <div style="text-align: center;"></div>
</div>
  &nbsp;

<!-- about-rundown svg -->
<div class="about-rundown text-center">
    <svg class="about-rundown img-responsive" width="705" height="726"><?php get_template_part( 'assets/svg/inline', 'about-rundown.svg' ); ?></svg>
</div>
