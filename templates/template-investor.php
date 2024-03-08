<?php /* Template Name: [ Investor ] */
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
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px;"  alt="icon"/>      
        <a href="#contact-us" class="applyBtn animated" data-animation-in="fadeIn" style="color:#fff;" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a>
      </div>
      <?php
      } ?>
      <?php
      $bannerbtnurl2 = get_field('our_banner_button_url2');
      if($bannerbtnurl)
      { ?>
      <div class="sec2-learn-more">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px" alt="icon"/>
        <a href="<?php echo $bannerbtnurl2; ?>" class="applyBtn2 animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button2'); ?></a><?php
      } ?> 
    </div>
  </div>
</section>
<section class="what-we-top-section invest" id="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="col-6-text">
          <?php the_field('sec1_description'); ?>
          <?php if (have_rows('advisor_slider')) { ?>
                <div class="id-row">
                    <?php
                    
                    while (have_rows('advisor_slider')) : the_row();
                    $advisor     = get_sub_field('advisor');
                    ?>
                      <div class="advisor"> 
                        <?php echo $advisor ?>
                      </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
      </div>
      
    <div class="contact-detail_cover">
      <div class="col-left-3">
      <h3>Quick Enquiry</h3>
        <p>Fill the form for more information on this investment and a <b>FREE</b> copy of our Guide to Private Lending.</p>
      </div>
      <div class="col-mid-6">
        <div class="form-cover">
            <?php echo do_shortcode('[contact-form-7 id="06bff6b" title="Institutional Investor"]'); ?>
            
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="what-we-do-new" id="what-we-do-2">
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