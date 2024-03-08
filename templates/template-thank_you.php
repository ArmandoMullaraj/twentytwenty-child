<?php /* Template Name: [Thank You ] */
get_header(); 
$bannerimage = get_field('our_banner_image');?>
<section class="about-banner2" style="background-image:url(<?php if($bannerimage){ echo $bannerimage; } ?>);">
  <div class="container">
    <div class="about-banner-text Professionals">
      <h1><?php the_field('our_banner_title'); ?></h1>
      <p><?php the_field('our_banner_description'); ?></p>
      <?php
      $bannerbtnurl = get_field('our_banner_button_url');
      if($bannerbtnurl)
      { ?><div class="sec2-learn-more">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
        <a href="<?php echo $bannerbtnurl; ?>" class="enquire-button-white" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a>
      </div>
      <?php
      } ?> 
    </div>
  </div>
</section>
<?php
get_footer(); ?>