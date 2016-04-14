<!--<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>-->

<!-- Contact Information -->
<!--<div class=" row text-center">
  <h2 class="col-xs-12">Contact Information</h2>
</div>-->

<!-- Social Media -->
<div class="contact-info">
<div class="row text-center">
  <div class="col-xs-12 col-md-6"><h3 style="text-align: center; 16dpx;">Social Media</h3>
    &nbsp;
    <p style="text-center"><strong>Instagram: </strong><em>@jaroninthesis</em></p>
    <p style="text-center"><strong>Twitter: </strong><em>@JaronimoCall</em>
  </div>
<!-- Work Contact -->
  <div class="col-xs-12 col-md-6"><h3 style="text-align: center; 16px;">Work Contact</h3>
    &nbsp;
    <p style="text-style"><strong>Email: </strong><em>jaroninthesis@gmail.com</em></p>
    <p style="text-style"><strong>Phone: </strong><em>(801) 540-0648</em></p>
  </div>
</div>
</div>
<div class="hours text-center">
  <p>Available 9am-6pm on weekdays</p>

<!-- GF Form Text -->
<div class="row text-center">
  <h4 class="col-xs-12">For project inquiries, please fill out the form below!</h4>
</div>

<div class="gravity-form text-center">
<?php gravity_form( 1, false, false, false, '', false ); ?>
</div>

<div class="brands text-center">
  <div class="companies center-block">
    <svg class="companies" width="236" height="68"><?php get_template_part( 'assets/svg/inline', 'companies.svg' ); ?></svg>
  </div>
</div>
