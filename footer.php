<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php
if ( is_page( 'Home' ) || is_page( 'About us' ) || is_page( 'Loans for property professionals' ) || is_page( 'Introducers' ) || is_page( 'Meet the team' ) || is_page( 'About us' ))
{ ?>
    <section class="testimonial_section">
  <div class="container-fluid">
    <div class="row"><?php 
     $bottom_image = get_field('bottom_image', 'option'); 
     if($bottom_image)
     { ?>
      <div class="col-6">
        <figure><img src="<?php echo $bottom_image; ?>" alt="img"/></figure>
      </div><?php
     } 
     if(have_rows('add_testimonial', 'option'))
     { ?>
      <div class="col-6">
        <div class="col-6-in">
          <h2><?php the_field('testimonial_title', 'option'); ?></h2>
          <div class="testimonial-slider"><?php
          while(have_rows('add_testimonial', 'option'))
          { 
              the_row();
              $ourtestimonial = get_sub_field('our_testimonial'); ?>
              <div class="testimonial_slide">
                <?php echo $ourtestimonial ; ?>
              </div><?php
          } ?>
          </div>
        </div>
      </div><?php
     } ?>
    </div>
  </div>
</section><?php
}  ?>
<section class="footer">
    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-5"><?php
                        $footerlogo1 = get_field('footer_logo_1', 'option');
                        if($footerlogo1)
                        { ?>
                            <div class="footer-logo"> 
                                <?php
                                    $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                                    if (!$hideHeaderFooterLinks) {
                                    ?>
                                        <a href="<?php echo site_url(); ?>" target="_blank"><img src="<?php echo $footerlogo1; ?>"/></a> 
                                    <?php }  else { ?>
                                        <img src="<?php echo $footerlogo1; ?>"/>
                                   <?php }?>
                            </div><?php
                        } 
                        $footerlogo2 = get_field('footer_logo_2', 'option');
                        if($footerlogo2)
                        { ?>
                            <div class="other_logo"> 
                                <?php
                                        $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                                        if (!$hideHeaderFooterLinks) {
                                        ?>
                                    <a href="<?php the_field('footer_logo2_url', 'option'); ?>" target="_blank">
                                    <?php } ?>
                                    <img src="<?php echo $footerlogo2; ?>"/>
                                </a> 
                            </div><?php
                        } ?>
                        <?php
                            $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                            if (!$hideHeaderFooterLinks) {
                            ?>
                                <div class="footer-socials">
                                    <ul>
                                    <?php
                                    $linkdinurl = get_field('linkedin_url', 'option');
                                    if($linkdinurl)
                                    { ?>
                                        <li>
                                            <a href="<?php echo $linkdinurl; ?>" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_linkedin_icon.svg" alt="icon"/>
                                            </a>
                                        </li><?php
                                    } 
                                    $twitterurl = get_field('twitter_url', 'option'); 
                                    if($twitterurl)
                                    { ?>
                                        <li>
                                            <a href="<?php echo $twitterurl; ?>" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_twitter_icon.svg" alt="icon"/>
                                            </a>
                                        </li><?php
                                    }
                                    $facebookurl = get_field('facebook_url', 'option'); 
                                    if($facebookurl)
                                    { ?>
                                        <li>
                                            <a href="<?php echo $facebookurl; ?>" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_facebook_icon.svg" alt="icon"/>
                                            </a>
                                        </li><?php
                                    } ?>
                                    </ul>
                                </div>
                        <?php } ?>
                    </div>
                    <?php
                        $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                        if (!$hideHeaderFooterLinks) {
                    ?>
                        <div class="col-2">
                            <div class="footer_links">
                            <h3>Quick Links</h3>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'ul',
                                    'menu'=>    'footer-menu',
                                    'menu_class' => 'footer-menu',			 
                                )); ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="footer_links">
                            <h3>Resources</h3>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'ul',
                                    'menu'=>    'footer-menu1',
                                    'menu_class' => 'footer-menu',			 
                                )); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-2">
                        <div class="footer_links">
                            <h3>Call Us At</h3>
                            <ul><?php
                                $headerphoneno = get_field('phone_number', 'option');
                                if($headerphoneno)
                                { ?>
                                <li><a href="tel:<?php echo $headerphoneno; ?>" class="callHead"><?php echo $headerphoneno; ?></a><?php } ?> </li>
                                <li><a>Write to us at</a></li>
                                <li><a>info@pmjcapital.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="footer_links">
                            <h3>Find Us At</h3>
                            <ul>
                                <li><a>Atria<br>Spa Road<br>Bolton,<br>BL1 4AG</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-3">
                        <div class="footer_links footer_links2">
                        <?php the_field('footer_address', 'option'); ?>
                        <h3>Write to us at</h3><?php
                        $footer_email_address = get_field('footer_email_address', 'option');
                        if($footer_email_address)
                        { ?>
                            <a href="mailto:<?php echo $footer_email_address; ?>"><?php echo $footer_email_address; ?></a><?php
                        } 
                        $footer_phone_number = get_field('footer_phone_number', 'option');
                        if($footer_phone_number)
                        { ?>
                            <h3>Call Us At</h3>
                            <a href="tel:<?php echo $footer_phone_number; ?>"><?php echo $footer_phone_number; ?></a><?php
                        } ?>
                        </div>
                    </div> -->
                    <!-- <div class="col-2">
                        <div class="footer_links footer_links2">
                        <h3>Resources</h3><?php
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'container'       => 'ul',
                                'menu'=>    'footer-menu1',
                                'menu_class' => 'footer-menu1',			
                            )); ?>
                        <div class="social">
                            <h3>Follow Us</h3><?php
                            $linkdinurl = get_field('linkedin_url', 'option');
                            if($linkdinurl)
                            { ?>
                                <a href="<?php echo $linkdinurl; ?>" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/Footer_Linkedin_icon.svg"/>
                                </a><?php
                            } 
                            $twitterurl = get_field('twitter_url', 'option'); 
                            if($twitterurl)
                            { ?>
                                <a href="<?php echo $twitterurl; ?>" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri()?>/img/Footer_twitter_icon.svg"/
                                ></a><?php
                            } ?>
                        </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div><?php
        $footerdescription = get_field('bottom_description', 'option');
        if($footerdescription)
        { ?>
            <div class="footer_bottom">
                <div class="container">
                    <?php echo $footerdescription; ?>
                </div>
            </div><?php
        } ?>
        <div class="footer-socials-bottom">
            <ul>
                            <?php
                            $linkdinurl = get_field('linkedin_url', 'option');
                            if($linkdinurl)
                            { ?>
                                <li>
                                    <a href="<?php echo $linkdinurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_linkedin_icon.svg" alt="icon"/>
                                    </a>
                                </li><?php
                            } 
                            $twitterurl = get_field('twitter_url', 'option'); 
                            if($twitterurl)
                            { ?>
                                <li>
                                    <a href="<?php echo $twitterurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_twitter_icon.svg" alt="icon"/>
                                    </a>
                                </li><?php
                            }
                            $facebookurl = get_field('facebook_url', 'option'); 
                            if($facebookurl)
                            { ?>
                                <li>
                                    <a href="<?php echo $facebookurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri()?>/img/Topbar_facebook_icon.svg" alt="icon"/>
                                    </a>
                                </li><?php
                            } ?>
                </ul>
                        </div>

    </footer>
</section>
<?php wp_footer(); ?>
</body>
</html>
