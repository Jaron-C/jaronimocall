<!--<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>-->

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

  <div style="text-align: center;"><strong>Motion Graphics</strong> and <strong>Website Design.</strong></div>
  <div style="text-align: center;">Creative for <strong>Jackalope Media</strong>.</div>
  <div style="text-align: center;">
    <div>Co-Founder of local Utah Organization <strong>Brake The Cycle</strong>,</div>
    <div>which is in support of suicide prevention.</div>
  </div>
</div>

<!-- Bottom Text -->
<div class="about-copy-2">
  <div style="text-align: center;">Below is a quick rundown of what</div>
  <div style="text-align: center;">you will find on this website!</div>
  <div style="text-align: center;"></div>
</div>


<!-- about-rundown svg -->
<div class="container text-center">
<div class="about-rundown">
    <svg class="about-rundown img-responsive" width="705" height="726"><?php get_template_part( 'assets/svg/inline', 'about-rundown.svg' ); ?></svg>
</div>
</div>

<div style="text-align: center;" class="about-inquire"><h4>For project inquiries, please fill out form on Contact Page</h4></div>
