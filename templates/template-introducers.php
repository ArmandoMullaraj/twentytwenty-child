<?php /* Template Name: [ Introducers ] */
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
        <a href="<?php echo $bannerbtnurl; ?>" class="applyBtn animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a>
      </div>
      <?php
      } ?> 
    </div>
  </div>
</section>
<section class="what-we-top-section">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="col-6-text"><?php
          $sec1icon = get_field('sec1_icon');
          if($sec1icon)
          { ?>
            <div class="top_icon"> 
                <img src="<?php echo $sec1icon; ?>"/> 
            </div><?php
          } ?>
          <?php the_field('sec1_description'); ?>
        </div>
        <?php
      $sec1_image = get_field('sec1_image');
      if($sec1_image)
      { ?>
        <div class="col-6-image">
            <figure><img src="<?php echo $sec1_image; ?>"/></figure>
        </div><?php
      } ?>
      </div>
      
    <div class="contact-deatil_cover">
      <div class="col-left-3">
      <h3>Quick Enquiry</h3>
        <p>Use our quick enquiry form alternatively call <b>01204 328477</b> for more information.</p>
      </div>
      <div class="col-mid-6">
        <div class="form-cover">
            <?php echo do_shortcode('[contact-form-7 id="376" title="Contact form 1"]'); ?>
            
        </div>
      </div>
    </div>
    </div>
  </div>
</section><?php
if(have_rows('add_values'))
{ ?>
<section class="what-we-do-offer">
  <div class="container">
    <div class="title_wrap">
      <h2><?php the_field('sec2_title'); ?></h2>
      <?php the_field('sec_2description'); ?>
    </div>
    <div class="row"><?php
    while(have_rows('add_values'))
    { 
      the_row();
      $sec2valueicon = get_sub_field('sec2_value_icon'); 
      $sec2valuetitle = get_sub_field('sec2_title'); ?>
      <div class="usp">
        <div class="col-4-offer"><?php
        if($sec2valueicon)
        { ?>
          <figure><img src="<?php echo $sec2valueicon; ?>"/></figure><?php
        } ?>
          <h3><?php echo $sec2valuetitle; ?></h3>
        </div>
      </div><?php
    } ?>
    </div>
  </div>
</section><?php
} ?>
<section class="testimonial-home">
  <div class="container">
    <h2><?php the_field('sec5_title'); ?></h2>
    <div class="usp-testimonials" id="usp-testimonials-slider">
      <?php
        // Loop through rows.
        while( have_rows('usp') ) : the_row();
            // Load sub field value.
            $text   = get_sub_field('text');
       if($text !== ''): ?><div class="text"><?php echo $text; ?></div><?php endif; 

        endwhile; ?>
    </div>
  </div>
</section>
<section class="call-to-sec">
  <div class="container">
    <h2><?php the_field('sec3_title'); ?></h2>
    <?php the_field('sec3_description'); ?><?php
    $sec3_btn_url = get_field('sec3_btn_url');
    if($sec3_btn_url)
    { ?>
    <div class="sec2-learn-more">
    <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>      
    <a href="<?php echo $sec3_btn_url; ?>" class="contact_btn"><?php the_field('sec3_button'); ?></a>
    </div>
    <?php
    } ?>
    </div>
</section>
<section class="newsec-home">
  <div class="container">
  <h2><?php the_field('sec6_title'); ?></h2>
    <div class="row">
      <div class="col-left">
        <div class="col-left-in">
          
          <?php the_field('sec6_description'); 
          $seemorebtnurl = get_field('sec6_btn_url');
          if($seemorebtnurl)
          { ?>
              <?php 
          } ?>
        </div>
        <div class="sec4-div">
        <div class="sec4-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="<?php echo $seemorebtnurl; ?>" class="btn"><?php the_field('sec6_button'); ?></a>              
            </div></div>
      </div> <?php
      $newstories = array(
				'post_type' => 'post',
				'post_status'   => 'publish',
				'posts_per_page' =>  3,
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $paged,
			 );
			 $wp_query = new WP_Query($newstories);
			 if ($wp_query->have_posts())
			 { ?>
        <div class="col-right">
          <div class="row">
            
          <?php
          while ($wp_query->have_posts())
          {
            $wp_query->the_post(); 
            $postid = get_the_ID();
            $blogimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
            $category_detail = get_the_category( $postid ); 
            $blogvalue = get_field('post_value'); 
            $bloglocation = get_field('post_location'); ?>
            <div class="col-4">
              <div class="col-4_wrap">
                  <figure><img src="<?php if($blogimage){ echo $blogimage; } else{ echo 'https://via.placeholder.com/250'; } ?>" /></figure>
                <div class="text_wrap_news">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                  <div class="bottom_text">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
                    <a href="<?php the_permalink(); ?>" class="read_more">Read</a> 
                  </div>
                </div>
              </div>
            </div><?php
          } wp_reset_query(); ?>
          </div>
        </div><?php
       } ?>
    </div>
  </div>
</section>
<?php
get_footer(); ?>