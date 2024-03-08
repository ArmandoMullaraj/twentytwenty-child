<?php /* Template Name: [ Short Term Finance ] */
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
</section>
<section class="homeSec3-refurbishment">
  <div class="container">
    <div class="row">
      <?php
      if(have_rows('sec2_add_values'))
      { ?>
        <div class="col-right">
          <div class="row refurbishment"  id="homeSec3-refurbishment-slider"><?php
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
<section class="refurbishment-deatil">
  <div class="container">
    <div class="contact-deatil_cover">
        <div class="col-left-3">
    <?php the_field('sec3_description'); ?>
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
              <a href="/contact-us" class="apply_btn"><?php the_field('sec2_button'); ?></a> <?php
            } ?>
          </div>
        </div>
      </div>
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

<section class="our-team-refurbishment about-team-sec1" id="short-term-team">
            <div class="container">
                <div class="row-team-refurbishment">
                    <div class="team-refurbishment-left">
                    <h2><?php the_field('sec6_title'); ?></h2>
                    <p class="team-description-refurbishment"><?php the_field('sec6_description'); ?></p>
                    </div>
                    <div class="team-refurbishment-right">
                    <?php
                        if(have_rows('url_team'))
                        { ?>
                            <div class="col-right">
                            <div class="row-refurbishment"><?php
                                while(have_rows('url_team'))
                                {
                                the_row();
                                $sec6teamimage = get_sub_field('sec6_team_image');
                                $sec6teamtitle = get_sub_field('sec6_team_title');
                                $sec6teamtext = get_sub_field('sec6_team_text'); ?>
                                <div class="col-4">
                                    <div class="col-4_wrap"><?php
                                    if($sec6teamimage)
                                    { ?>
                                        <figure><img src="<?php echo $sec6teamimage; ?>"/></figure><?php
                                    } ?>
                                    <h3><?php echo $sec6teamtitle; ?></h3>
                                    <h5><?php echo $sec6teamtext;  ?></h5>
                                    </div>
                                </div><?php
                                } ?>
                            </div>
                            </div><?php
                        } ?>
                </div>
            </div>
</section>

<?php
get_footer(); ?>