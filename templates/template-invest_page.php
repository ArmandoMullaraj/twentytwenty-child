<?php /* Template Name: [ Invest Page ] */
get_header(); 
$bannerimage = get_field('our_banner_image');?>
<section class="about-banner2 broker" style="background-image:url(<?php if($bannerimage){ echo $bannerimage; } ?>);">
  <div class="container">
    <div class="about-banner-text Professionals">
      <h1><?php the_field('our_banner_title'); ?></h1>
      <p><?php the_field('our_banner_description'); ?></p>
      <?php
      $bannerbtnurl = get_field('our_banner_button_url');
      if($bannerbtnurl)
      { ?><div class="sec2-learn-more">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>      
        <a href="#what-we-do-2" class="applyBtn animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a>
      </div>
      <?php
      } ?> 
    </div>
  </div>
</section>
<section class="what-we-do-new usp-invest-page" id="what-we-do-2">
    <div class="container">
      <div class="title_wrap">
        <h2><?php the_field('sec2_title'); ?></h2>
        <p><?php the_field('sec2_sub_title'); ?></p>
      </div>
      <div class="row"><?php
      while(have_rows('add_products'))
      {
        the_row();
        $sec2title = get_sub_field('sec2_title');
        $sec2description = get_sub_field('description');
        $sec2button = get_sub_field('sec2_button');
        $sec2url = get_sub_field('sec2_btn_url'); ?>
        <div class="col-4">
          <div class="col-4-cover">
            </figure>
            <h3><?php echo $sec2title; ?></h3>
            <div class="sec2-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px" alt="icon"/>      
              <a href="<?php echo $sec2url; ?>" class="enquire_btn"><?php echo $sec2button; ?></a>
            </div>
            <?php echo $sec2description;
            if($sec2url)
            { ?><?php
            } ?>
          </div>
        </div><?php
      } ?>
      </div>
    </div>
</section>
<?php
get_footer(); ?>