<!--<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>-->

<!-- personal.jpg -->
<div class="container text-center">
  <div class="photo">
    <img src="<?=get_stylesheet_directory_uri();?>/dist/images/personal.jpg">
  </div>
  <div class="name">
    <div style="text-align: center;"><strong>Jaron Call</strong></div>
  </div>
  <div class="info">
    <!--<div style="text-align: center;">Creator of jaronimocall.com</div>
  </div>-->
</div>


<!-- Top Text-->
<div class="about-copy text-center">
  <div style="text-align: center;">I am a <strong>Motion Graphics Artist</strong> and <strong>Website Designer.</strong></div>
  <div style="text-aling: center;">As a Freelancer, i've worked with a variety of companies.</div>
  <div style="text-aling: center;">Ranging from <strong>Adobe </strong>to start-ups and Youtubers.</div>
  <div style="text-align: center;">I also do <strong>Creative Design</strong> for <strong>Jackalope Media</strong>.</div>
  <div style="text-align: center;">
   <div>And the Co-Founder of <strong>Brake The Cycle</strong>. A local Utah Organization,</div>
   <div>in support of suicide prevention.</div>
  </div>
</div>

<!-- Bottom Text -->
<div class="about-copy-2">
  <div style="text-align: center;">In need of an animation?</div>
  <div style="text-align: center; font-size: 20px;"><em>Check out my amazing prices below!</em></div>
</div>

<!-- Add pricing.svg here -->


<div style="text-align: center;" class="about-inquire"><h4>For project inquiries, please fill out the form on the Contact Page</h4></div>

<!-- Bottom Text -->
<div class="about-copy-2">
  <div style="text-align: center;">See below for a breakdown of the site!</div>
</div>


<!-- about-rundown svg -->
<div class="container text-center">
  <div class="about-rundown">
    <svg class="about-rundown img-responsive" width="705" height="726"><?php get_template_part( 'assets/svg/inline', 'about-rundown.svg' ); ?></svg>
  </div>
</div>
