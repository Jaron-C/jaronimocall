<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Place "personal.jpg" Here -->
<div class="container text-center">
  <div class="photo">
    <img src="<?=get_stylesheet_directory_uri();?>/dist/images/personal.jpg">
  </div>
  <div class="name">
    <div style="text-align: center;"><strong>Jaron Call</strong></div>
  </div>
  <div class="info">
    <div style="text-align: center;">Creator of jaronimocall.com</div>
  </div>
</div>

<!-- Top Text -->
<div class="about-copy text-center">

  <div style="text-align: center;">I am an independent Motion Graphics Artist and Website Designer for <strong>Jackalope Media</strong>.</div>
  <div style="text-align: center;">
    <div>Along side my design, I also run a local Utah Organization called <strong>Brake The Cycle</strong>,</div>
    <div>which is in support of suicide awareness.</div>
  </div>
</div>

<!-- Bottom Text -->
<div class="about-copy-2">
  <div style="text-align: center;">Listed below is a quick rundown</div>
  <div style="text-align: center;">of what you can expect from this website!</div>
  <div style="text-align: center;"></div>
</div>
  

<!-- about-rundown svg -->
<div class="container text-center">
<div class="about-rundown">
    <svg class="about-rundown img-responsive" width="705" height="726"><?php get_template_part( 'assets/svg/inline', 'about-rundown.svg' ); ?></svg>
</div>
</div>
