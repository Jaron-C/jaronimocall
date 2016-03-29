<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<div class="cta text-center">
<h4>Inquiring about an animation?</h4>
<h4>Let's chat!</h4>

<div id="contact">
<form class="form-inline text-center">
  <div class="form-group-name">
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Name">
  </div>

  <div class="form-group-address">
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Address">
  </div>
  <button type="submit" class="btn btn-default">Grab A Quote!</button>
</form>
</div>
</div>

<div class="brands text-center">
  <div class="companies center-block">
    <svg class="companies" width="236" height="68"><?php get_template_part( 'assets/svg/inline', 'companies.svg' ); ?></svg>
  </div>
</div>
