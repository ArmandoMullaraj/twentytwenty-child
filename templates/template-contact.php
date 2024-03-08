<?php /* Template Name: [ Contact ] */
get_header(); 
$bannerimage = get_field('our_banner_image');
$sec_title = get_field('sec_title'); 
$sec_description = get_field('sec_description'); ?>
<section class="contact_banner"  style="background-image:url(<?php if($bannerimage){ echo $bannerimage; } ?>);">
  <div class="container">
  <h1><?php echo $sec_title; ?></h1>
    <p><?php echo $sec_description; ?> </p>
  </div>
</section>
<section class="contact-deatil">
  <div class="container">
    <div class="contact-deatil_cover">
      <div class="col-left-3">
        <?php the_field('contact_description'); ?>
        <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a> <br/><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
        <?php the_field('contact_address'); ?>
      </div>
      <div class="col-mid-6">
        <p class="telephone-paragraph">Use our quick enquiry form alternatively call<a href="tel:01204-328477" class="tele"> 01204 328477 </a>for more information.</p>
        <div class="form-cover">
            <?php echo do_shortcode('[contact-form-7 id="376" title="Contact form 1"]'); ?>
            
        </div>
      </div>
      <div class="col-right-3">
        <div class="col-right-in">
          <h2>Are you a referrer, broker or introducer?</h2>
          <div class="col-right-in-content">
            <?php
            $sec2_btn_url = get_field('sec2_btn_url');
            if($sec2_btn_url)
            { ?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="about-us" class="apply_btn"><?php the_field('sec2_button'); ?></a> <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php
$sec3_map = get_field('sec3_map');
if($sec3_map)
{ ?>
<section class="map">
  <?php echo $sec3_map; ?>
</section><?php
} ?>
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
<?php
get_footer(); ?>