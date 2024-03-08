<?php
get_header(); 
if(have_rows('add_banner_slider'))
{ ?>
<section class="homeSec1"><?php
  while(have_rows('add_banner_slider'))
  {
    the_row();
    $bannersliderimage = get_sub_field('banner_slider_image'); 
    $bannerslidertitle = get_sub_field('slider_title'); 
    $bannersliderdescription = get_sub_field('banner_slider_description'); ?>
    <div class="sec1TextCover" style="background-image:url(<?php if($bannersliderimage){ echo $bannersliderimage; } ?>)">
      <div class="container">
        <h1 class="animated top-title" data-animation-in="fadeIn"><?php echo $bannerslidertitle; ?></h1>
        <p class="animated title" data-animation-in="fadeIn" data-delay-in="0.2"><?php echo $bannersliderdescription; ?></p><?php
        $bannerbtnurl = get_field('slider_btn_url');
        if($bannerbtnurl)
        { ?>
          <a href="<?php echo $bannerbtnurl; ?>" class="applyBtn animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('slider_button'); ?></a><?php
        } ?> 
      </div>
    </div><?php
  } ?>
</section><?php
} ?>
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

<section class="homeSec3">
  <div class="container">
    <div class="row">
      <div class="col-left">
        <div class="col-left-in">
          <h2><?php the_field('sec2_title'); ?></h2>
          <h4><?php the_field('sec2_sub_title'); ?></h4>
          <p><?php the_field('sec2_description'); ?></p><?php
          $sec2_btn_url = get_field('sec2_btn_url');
          if($sec2_btn_url)
          { ?><div class="sec3-learn-more">
            <img src="<?php echo get_stylesheet_directory_uri()?>/img/gold-arrow.svg" style="width:50px"  alt="icon"/>
            <a href="<?php echo $sec2_btn_url; ?>" class="btn"><?php the_field('sec2_button'); ?></a>
            </div>
            <?php
          } ?>
        </div>
      </div><?php
      if(have_rows('sec2_add_values'))
      { ?>
        <div class="col-right">
          <div class="row"><?php
            while(have_rows('sec2_add_values'))
            {
              the_row();
              $sec2valueimage = get_sub_field('sec2_values_image');
              $sec2valuetitle = get_sub_field('sec2_values_title');
              $sec2valuesubtitle = get_sub_field('sec2_values_sub_title');
              $sec2valuedesription = get_sub_field('sec2_values_description'); ?>
              <div class="col-4">
                <div class="col-4_wrap"><?php
                  if($sec2valueimage)
                  { ?>
                    <figure><img src="<?php echo $sec2valueimage; ?>"/></figure><?php
                  } ?>
                  <h3><?php echo $sec2valuetitle; ?></h3>
                  <h5><?php echo $sec2valuesubtitle;  ?></h5>
                  <p><?php echo $sec2valuedesription; ?></p>
                </div>
              </div><?php
            } ?>
          </div>
        </div><?php
      } ?>
    </div>
  </div>
</section>

<section class="our-team-home">
  <div class="container">
    <div class="team-head">
      <h2><?php the_field('sec3_title'); ?></h2>
      <h3><?php the_field('description'); ?></h3>
    </div>
    <div class="slider our-team-slider">
    <?php
    $feateamember = array(
      'post_type' => 'team_members',
      'post_status'   => 'publish',
      'posts_per_page' =>  1,
      'orderby' => 'date',
      'order' => 'DESC',
      'meta_query'	=> array(
          'relation'		=> 'AND',
            array(
                'key'	 	=> 'featured_member',
                'value'	  	=> 1,
            ),
      ),
      );
      $wp_query = new WP_Query($feateamember); 
      $ltFs = array();
      if ($wp_query->have_posts())
      { ?>
        <div class="main-team-sec">
          <div class="team-row" id="our-team-home-slider-1"><?php 
          while ($wp_query->have_posts())
          {
            $wp_query->the_post(); 
            $ltFs[] = get_the_ID();
            $postid = get_the_ID(); 
            $featrtedimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
            $feaurtedposation = get_field('member_postion'); 
            $feaurtedlinkedInlink = get_field('linkedin_url');
            $feaurtedmailid = get_field('email_address');  ?>
            <div class="col-4">
              <div class="team-img">
                <img src="<?php if($featrtedimage){ echo $featrtedimage; } else{ echo 'https://via.placeholder.com/500'; } ?>" />
                <div class="team-img-text">
                  <h4><?php the_title(); ?></h4>
                  <h5><?php echo $feaurtedposation; ?></h5>
                </div>
              </div>
            </div>
            <div class="col-8">
              <?php the_content(); ?>
              <div class="team-links">
                <ul><?php
                if($feaurtedlinkedInlink)
                { ?>
                  <li><a href="<?php echo $feaurtedlinkedInlink; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/linked-in.svg"/></a></li><?php
                } 
                if($feaurtedmailid)
                { ?>
                  <li><a href="mailto:<?php echo $feaurtedmailid; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/img/email.svg"/></a></li><?php
                } ?>
                </ul><?php
               /* $team_page_url = get_field('team_page_url', 'option');
                if($team_page_url)
                { ?>
                  <a href="<?php echo $team_page_url; ?>" class="read-more">Read more</a><?php
                } */ ?>
              </div>
            </div><?php
          } wp_reset_query(); ?>
          </div>
        </div>
        </div><?php
      } 
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
          <div class="team-row team-div" id="our-team-home-slider-2"><?php 
          while ($wp_query->have_posts())
          {
            $wp_query->the_post(); 
            $postid = get_the_ID(); 
            $simpleimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
            $simpleposation = get_field('member_postion'); 
            $simplelinkedInlink = get_field('linkedin_url');
            $simpledmailid = get_field('email_address'); ?>
            <div class="col-4">
              <div class="co-4-in">
                <div class="team-img">
                  <img src="<?php if($simpleimage){ echo $simpleimage; } else{ echo 'https://via.placeholder.com/500'; } ?>" />
                </div>
                <div class="team_text_wrap">
                <h4><?php the_title(); ?></h4>
                <h5><?php echo $simpleposation; ?></h5>
                  
                  
                </div>
              </div>
            </div>
            <?php
          } wp_reset_query(); ?>
          </div><?php
        } ?>
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
            $sec2_btn_url = get_field('sec2_btn_url');
            if($sec2_btn_url)
            { ?>
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>
              <a href="/about-us" class="apply_btn"><?php the_field('sec2_button'); ?></a> <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>