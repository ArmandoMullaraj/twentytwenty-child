<?php
get_header(); 
$page_for_posts = get_option( 'page_for_posts' ); 
$sec_title = get_field('sec_title', $page_for_posts); 
$sec_description = get_field('sec_description', $page_for_posts); 
$blogimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
$category_detail = get_the_category( $postid ); 
$blogvalue = get_field('post_value'); 
$bloglocation = get_field('post_location');  
$bannerimage = get_field('our_banner_image');?>

<section class="newsec-home news_listing blog_page">
  <div class="container">
    <div class="container-row">
  <div class="blog-row">
    <div class="featured-img">
      <img src="<?php echo $blogimage; ?>" alt="img"/>
      
    </div>
    <div class="sidebar">
      <div class="cat_box"><?php
        $categories = get_categories();  
        $count_posts = wp_count_posts(); ?>
        <h2>Categories</h2>
        <ul><?php
            foreach($categories as $category) 
            { ?>
                <li><a href="<?php echo get_term_link($category); ?>" class="sortby" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a></li><?php
            } ?>
        </ul>
      </div>
      <div class="search-box">
        <h3>Subscribe</h3>
        <p>to our newsletter and receive the latest on property investment</p>
          <?php echo do_shortcode('[mc4wp_form id="359"]'); ?>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-right">
        <div class="news-deatil-box"><?php
          if($blogimage)
          { ?>
          <?php
          }
          else
          { 
            $post_gallery = get_field('post_gallery');
            if( $post_gallery )
            { ?>
          <div class="gallery-featured-img"><?php
             foreach( $post_gallery as $image )
             { ?>
                <div class="galllery-item">
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div><?php
             } ?>
        </div><?php
            } 
          }  wp_reset_postdata(); ?>
          <h2><?php the_title(); ?></h2>
          <div class="author-name">
          <h6><?php the_time('jS F'); ?></h6>
          </div>
          <?php the_content(); ?>
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
          <?php echo do_shortcode('[addtoany]'); ?>
      </div>
      </div>
    </div>
    <?php
        $related = get_posts( 
          array( 
            'category__in' => wp_get_post_categories(get_the_ID()), 
            'numberposts' => 4, 
            'post__not_in' => array(get_the_ID()) 
            ) 
        );
        if( $related ) 
        { ?>
        </div>
        <div class="col-right">
        <div class="related-news">
          <div class="row">
            <div class="col-12">
              <h2>RELATED ARTICLES</h2>
            </div><?php
            foreach( $related as $post ) 
            {
              setup_postdata($post); 
              $blogimage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full')); 
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
                      <img src="<?php echo get_stylesheet_directory_uri()?>/img/button-arrow.svg" style="width:50px"  alt="icon"/>

                      <a href="<?php the_permalink(); ?>" class="read_more">Read</a>
                    </div>
                  </div>
                </div>
              </div><?php
            } ?>
          </div>
        </div>
          </div><?php
      } ?>
      
  </div>
</section><?php
get_footer(); ?>