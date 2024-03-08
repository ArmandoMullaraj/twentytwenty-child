<?php /* Template Name: [ About ] */
get_header(); 
$bannerimage = get_field('our_banner_image'); ?>
<section class="about-banner2" style="background-image:url(<?php if($bannerimage){ echo $bannerimage; } ?>);">
  <div class="container">
    <div class="about-banner-text Professionals">
      <h1 class="about-us-h1"><?php the_field('our_banner_title'); ?></h1>
      <p id="about-us-paragraph"><?php the_field('our_banner_description'); ?></p><?php
      $bannerbtnurl = get_field('our_banner_button_url');
      if($bannerbtnurl)
      { ?>
      <div class="button-banner-div">
      <div class="sec2-learn-more">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px" alt="icon"/>
        <a href="<?php echo $bannerbtnurl; ?>" class="applyBtn2 animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a><?php
      } ?> 
      </div>
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
    </div>
  </div>
</section>
<section class="about-top-section" id="about-us-history">
  <div class="container">
    <div class="row" id="about-us-our-history">
    <div class="col-6">
      <div class="col-6-text">
        <h2><?php the_field('sec1_title'); ?></h2>
        <?php the_field('sec2_description'); ?>
      </div>
    </div>
    <?php
    $sec1_image = get_field('sec1_image');
    if($sec1_image)
    { ?>
      <div class="col-6">
          <figure><img src="<?php echo $sec1_image; ?>"/></figure>
      </div><?php
    } ?>
    </div>
  </div>
</section><?php
if(have_rows('add_section_values'))
{ ?>
<section class="what-we-do-new" id="about-us-what-we-do">
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
  </section><?php
} 
$sec3_image = get_field('sec3_image'); ?>
<section class="homeSec2">
  <div class="container">
    <div class="rowflex">
      <div class="usp">
        <div class="usp-row">
          <div class="homesec2-in"><?php
          $sectitle1 = get_field('sec_1_title_1');
          if($sectitle1)
          { ?>
            <h3><?php echo $sectitle1; ?></h3>
            <?php
          $sec1btnurl1 = get_field('sec1_btn_url'); 
          if($sec1btnurl1)
          { ?><div class="sec2-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="<?php echo $sec1btnurl1; ?>" class="learn_more"><?php the_field('sec1_button_1'); ?></a>
            </div>
            <?php
          } ?>
            
          </div>
          <?php
          }
          $sec1image1 = get_field('sec1_image_1');
          if($sec1image1)
          { ?>
            <figure>
              <a href="<?php the_field('sec1_btn_url'); ?>"><img src="<?php echo $sec1image1; ?>" style=""/></a>
            </figure><?php
          } ?>
        </div>
      </div>
      <div class="usp">
        <div class="usp-row">
          <div class="homesec2-in"><?php
          $sec_1_title_2 = get_field('sec_1_title_2');
          if($sec_1_title_2)
          { ?>
            <h3><?php echo $sec_1_title_2; ?></h3>
            <?php
          $sec1_btn_url2 = get_field('sec1_btn_url2'); 
          if($sec1_btn_url2)
          { ?><div class="sec2-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="<?php echo $sec1_btn_url2; ?>" class="learn_more"><?php the_field('sec1_button_2'); ?></a>
            </div>
            <?php
          } ?>
            
          </div>
          <?php
          }
          $sec1image2 = get_field('sec1_image_2');
          if($sec1image2)
          { ?>
            <figure>
              <a href="<?php the_field('sec1_btn_url2'); ?>"><img src="<?php echo $sec1image2; ?>"/></a>
            </figure><?php
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>
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
<section class="newsec-home">
  <div class="container">
  <h2><?php the_field('sec4_title'); ?></h2>
    <div class="row">
      <div class="col-left">
        <div class="col-left-in">
          
          <?php the_field('sec4_description'); 
          $seemorebtnurl = get_field('sec4_btn_url');
          if($seemorebtnurl)
          { ?>
              <?php 
          } ?>
        </div>
        <div class="sec4-div">
        <div class="sec4-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="<?php echo $seemorebtnurl; ?>" class="btn"><?php the_field('sec4_button'); ?></a>              
            </div>
          </div>
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
<section class="contact-deatil">
  <div class="container">
  <h2>Quick Enquiry</h2>
    <div class="contact-deatil_cover">
      <div class="col-left-3">
        <p>Use our quick enquiry form alternatively call 01204 328477 for more information.</p>
      </div>
      <div class="col-mid-6">
        <div class="form-cover">
            <?php echo do_shortcode('[contact-form-7 id="376" title="Contact form 1"]'); ?>
            
        </div>
      </div>
      <div class="col-right-3">
        <div class="col-right-in">
          <h2>Are you a referrer, broker or introducer?</h2>
          <div class="col-right-in-content">
            <?php
            $sec2_btn_url = get_field('sec1_btn_url2');
            if($sec2_btn_url)
            { ?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="#" class="apply_btn"><?php the_field('sec2_button'); ?> Our History</a> <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>