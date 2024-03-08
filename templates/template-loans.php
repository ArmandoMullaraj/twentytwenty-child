<?php /* Template Name: [ Loans for property professionals ] */
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
if(have_rows('add_products'))
{ ?>
  <section class="what-we-do-new">
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
} ?>
<section class="homeSec3 what-we-page">
  <div class="container">
    <div class="row">
      <div class="col-left">
        <div class="col-left-in">
          <h2><?php the_field('sec3_title'); ?></h2>
          <h4><?php the_field('sec3_sub_title'); ?></h4>
          <p><?php the_field('sec3_description'); ?></p><?php
          $sec3_btn_url = get_field('sec3_btn_url');
          if($sec3_btn_url)
          { ?>
          <div class="sec2-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>
            <a href="<?php echo $sec3_btn_url; ?>" class="btn"><?php the_field('sec3_button'); ?></a>
          </div><?php
          } ?>
        </div>
      </div><?php
      if(have_rows('sec3_add_values'))
      { ?>
        <div class="col-right">
          <div class="row"><?php
          while(have_rows('sec3_add_values'))
          {
            the_row();
            $valuesec3image = get_sub_field('sec3_values_icon');
            $valuesec3title = get_sub_field('sec3_title');
            $valuesec3description = get_sub_field('sec3_description'); ?>
            <div class="col-4">
              <div class="col-4_wrap">
                <figure><img src="<?php echo $valuesec3image; ?>"></figure>
                <h3><?php echo $valuesec3title; ?></h3>
                <?php echo $valuesec3description; ?>
              </div>
            </div><?php
          } ?>
          </div>
        </div><?php
      } ?>
    </div>
  </div>
</section>


<section class="testimonial-home">
  <div class="container">
    <h2><?php the_field('sec4_title'); ?></h2>
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
  <h2><?php the_field('sec5_title'); ?></h2>
    <div class="row">
      <div class="col-left">
        <div class="col-left-in">
          
          <?php the_field('sec5_description'); ?><?php
          $sec5_btn_url = get_field('sec5_btn_url');
          if($sec5_btn_url)
          { ?>
          <div class="sec4-div">
          <div class="sec4-learn-more">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>
            <a href="<?php echo $sec5_btn_url; ?>" class="btn"><?php the_field('sec5_button'); ?></a>
          </div>
          </div>
          <?php 
          } ?>
        </div>
      </div><?php
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
          <div class="row"><?php
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
                  
                    <div class="left-detail">
                      <ul><?php
                      if($blogvalue)
                      { ?>
                        <li><img src="<?php echo get_stylesheet_directory_uri()?>/img/Group.svg"/><?php echo $blogvalue; ?></li><?php
                      } 
                      if($bloglocation)
                      { ?>
                        <li><img src="<?php echo get_stylesheet_directory_uri()?>/img/News_location_icon.svg"/><?php echo $bloglocation; ?></li><?php 
                      } ?>
                      </ul>
                    </div>
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