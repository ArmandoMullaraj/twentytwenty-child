<?php 
get_header(); 
$bannerimage = get_field('our_banner_image');
$page_for_posts = get_option( 'page_for_posts' ); 
$sec_title = get_field('sec_title', $page_for_posts); 
$sec_description = get_field('sec_description', $page_for_posts); ?>
<section class="about-banner2 broker" style="background-image:url(<?php echo get_site_url() . '/wp-content/uploads/2022/05/header-image-news-and-insights-scaled.jpg'; ?> );">
  <div class="container">
    <div class="about-banner-text">
      <h1>News & Insights</h1>
      <p>Find out more about the projects we fund, the clients we work with and insight from our experts on the market.</p>
      <?php
      $bannerbtnurl = get_field('our_banner_button_url');
      if($bannerbtnurl)
      { ?><div class="sec2-learn-more">
        
        <a href="<?php echo $bannerbtnurl; ?>" class="applyBtn animated" data-animation-in="fadeIn" data-delay-in="0.3"><?php the_field('our_banner_button'); ?></a>
      </div>
      <?php
      } ?>
    </div>
  </div>
</section>
<section class="newsec-home news_listing">
  <div class="container">
    <div class="row">
      <div class="col-left">
        <div class="sidebar">
          <div class="cat_box"><?php
            $categories = get_categories(); ?>
            <h2>Categories</h2>
            <ul><?php
                foreach($categories as $category) 
                { ?>
                    <li><a href="<?php echo get_term_link($category); ?>" class="sortby" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a></li><?php
                } ?>
            </ul>
          </div>
          <div class="cat_box">
            <h2>Archive</h2>
            <ul>
            <li><a href="#"><?php echo wp_custom_archive(); ?></a></li>
            </ul>
          </div>
          <div class="search-box">
            <h3>Subscribe</h3>
            <p>to our newsletter and receive the latest on property investment</p>
             <?php echo do_shortcode('[mc4wp_form id="359"]'); ?>
             
          </div>
        </div>
      </div><?php
      $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
      $newstories = array(
				'post_type' => 'post',
				'post_status'   => 'publish',
				'posts_per_page' =>  get_option('post_per_page'),
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
                  <div class="bottom_text">
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
                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" class="form-button" alt="icon"/>
                    <a href="<?php the_permalink(); ?>" class="read_more">Read</a>
                  </div>
                </div>
              </div>
            </div><?php
          } wp_reset_query(); ?>
          </div>   
          <div class="pagination">     <?php
           $posts_pagination = get_the_posts_pagination(
             array(
                  'title' => '',
                  'mid_size'  => 1,
                  'prev_text' => '',
                  'next_text' => '',
                )
             ); 
            echo  $posts_pagination; ?>
          </div>    
        </div><?php
       } ?>
    </div>
  </div>
</section>
<?php
get_footer(); ?>