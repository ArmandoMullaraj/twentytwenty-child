<?php /* Template Name: [ Team ] */
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
</section><?php
 $simplemember = array(
    'post_type' => 'team_members',
    'post_status'   => 'publish',
    'posts_per_page' =>  -1,
    'post__not_in' => $ltFs,
    'orderby' => 'date',
    'order' => 'DESC',
    );
    $wp_query = new WP_Query($simplemember); 
    if ($wp_query->have_posts())
    { ?>
        <section class="our-team-home about-team-sec1">
            <div class="container">
                <div class="team-head">
                  <h2><?php the_field('sec1_title'); ?></h2>
                  <h3 class="meet-team-title"><?php the_field('sec1_description'); ?></h3>
                </div><?php 
                while ($wp_query->have_posts())
                {
                    $wp_query->the_post(); 
                    $postid = get_the_ID(); 
                    $simpleimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
                    $simpleimagealt = wp_get_attachment_image( get_post_thumbnail_id(get_the_ID()), 'full');
                    $simpleposation = get_field('member_postion'); 
                    $simplelinkedInlink = get_field('linkedin_url');
                    $simpledmailid = get_field('email_address'); ?>
                    <div class="main-team-sec">
                        <div class="row">
                            <div class="col-4">
                            <div class="team-img">
                              <!-- <img src=" <?php // if($simpleimage){ echo $simpleimage; } else{ echo 'https://via.placeholder.com/500'; } ?>" />    
                              -->
                              <?php
                              echo $simpleimagealt;
                              ?>
                            </div>
                            <div class="team-img-text">
                                    <h4><?php the_title(); ?></h4>
                                    <h5><?php echo $simpleposation; ?></h5>
                              </div>
                            </div>
                           
                            <div class="col-8">
                              
                            <?php the_content(); ?>
                            <div class="team-links">
                                <ul><?php
                                    if($simplelinkedInlink)
                                    { ?>
                                        <li><a href="<?php echo $simplelinkedInlink; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/linked-in.svg"  style="width: 49px"/></a></li><?php
                                    } 
                                    if($simpledmailid)
                                    { ?>
                                        <li><a href="mailto:<?php echo $simpledmailid; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/email.svg"/></a></li><?php
                                    } ?>
                                </ul><?php
                               /* $about_team_page_url = get_field('about_team_page_url', 'option');
                               if($about_team_page_url)
                               { ?>
                                 <a href="<?php echo $about_team_page_url; ?>" class="read-more">Read more</a><?php
                               } */ ?>
                            </div>
                            </div>
                        </div>
                    </div><?php
                } wp_reset_query(); ?>
            </div>
        </section><?php
    } 
$sec3_image = get_field('sec3_image'); ?> 
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