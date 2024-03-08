<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/lrg7utr.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W67EX9Z9SX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-W67EX9Z9SX');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PXN83BT');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Redirection to Thank You page -->
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            if (event.detail.contactFormId == '1357') {
                location = '/refurbishment-loans/thank-you';
            } else if (event.detail.contactFormId == '1356') {
                location = '/development-finance/thank-you';
            } else {
                location = '/thank-you';
            }
        }, false);
    </script>
    <!-- End Redirection to Thank You page -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php
                                wp_body_open(); ?>

    <div id="popupDiv" style="display:none;">
        <div class="popup-wrapper">
            <h4>Welcome to PMJ Capital Investments</h4>
            <p>Please tell us who you are...</p>
            <div class="buttons-page">
                <button class="investorOption" data-href="/invest/advised-investor">Advised Investor</button>
                <button class="investorOption" data-href="/invest/high-net-worth-investor">High Net Worth Investor</button>
                <button class="investorOption" data-href="/invest/self-certified-sophisticated-investor">Self-Certified Sophisticated Investor</button>
            </div>
            <button id="closePopup">X</button>
        </div>
    </div>


    <div id="confirmationPopup" style="display:none;">
        <div class="confirmation-wrapper">
            <h4>This website is intended for retail clients.</h4>

                    <p>None of the information provided is investment or tax advice and we always recommend you speak to a financial adviser before investing.

                    Some of our products are high risk and you should read the addociated risks before deciding whether to invest. These can be found on the relevant product web pages and in our guide to risks.(we don't have the link?)

                    Please confirm you have read the information above.</p>
            <button id="confirmButton">Confirm</button>
            <button id="cancelButton">Cancel</button>
        </div>
    </div>

    <section class="header-cover animated">
        <?php
        $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
        if (!$hideHeaderFooterLinks) {
        ?>
            <section class="upheader">
                <div class="container flex">
                    <div class="leftPart">
                        <ul><?php
                            $linkdinurl = get_field('linkedin_url', 'option');
                            if ($linkdinurl) { ?>
                                <li>
                                    <a href="<?php echo $linkdinurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/Topbar_linkedin_icon.svg" alt="icon" />
                                    </a>
                                </li><?php
                                    }
                                    $twitterurl = get_field('twitter_url', 'option');
                                    if ($twitterurl) { ?>
                                <li>
                                    <a href="<?php echo $twitterurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/Topbar_twitter_icon.svg" alt="icon" />
                                    </a>
                                </li><?php
                                    }
                                    $facebookurl = get_field('facebook_url', 'option');
                                    if ($facebookurl) { ?>
                                <li>
                                    <a href="<?php echo $facebookurl; ?>" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/Topbar_facebook_icon.svg" alt="icon" />
                                    </a>
                                </li><?php
                                    } ?>

                        </ul>
                    </div><?php
                            $headerphoneno = get_field('phone_number', 'option');
                            if ($headerphoneno) { ?>
                        <div class="rightPart">
                            <a href="tel:<?php echo $headerphoneno; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/button-arrow.svg" alt="icon" /></a>
                            <a href="tel:<?php echo $headerphoneno; ?>" class="callHead"><span>Call us now on</span> <?php echo $headerphoneno; ?></a>
                        </div><?php
                            } ?>

                </div>
            </section>
        <?php } ?>
        <header>
            <div class="container">
                <?php
                $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                if (!$hideHeaderFooterLinks) {
                ?>
                    <a href="<?php echo site_url(); ?>" class="logo"><?php
                                                                        $header_logo_1 = get_field('header_logo_1', 'option');
                                                                        if ($header_logo_1) { ?>
                            <img src="<?php echo $header_logo_1; ?>" /><?php
                                                                        }
                                                                        $header_logo_2 = get_field('header_logo_2', 'option');
                                                                        if ($header_logo_2) { ?>
                            <img src="<?php echo $header_logo_2; ?>" class="logo2" /><?php
                                                                                    } ?>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo site_url(); ?>" class="logo"><?php
                                                                        $header_logo_2 = get_field('header_logo_2', 'option');
                                                                        if ($header_logo_2) { ?>
                            <img src="<?php echo $header_logo_2; ?>" class="logo2" /><?php
                                                                                    } ?>
                    </a>
                <?php } ?>
                <?php
                $hideHeaderFooterLinks    = get_field('hide_header_footer_links');
                if (!$hideHeaderFooterLinks) {
                ?>
                    <nav id='cssmenu'>
                        <div id="head-mobile"></div>
                        <div id="menu-toggle">
                            <div id="hamburger"> <span></span> <span></span> <span></span> </div>
                            <div id="cross"> <span></span> <span></span> </div>
                        </div><?php
                                wp_nav_menu(array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'ul',
                                    'menu' =>    'main-menu',
                                    'menu_class' => 'main-menu',
                                ));
                                $contactbtnurl = get_field('header_button_url', 'option');
                                if ($contactbtnurl) { ?>
                        <?php
                                } ?>
                    </nav>
                <?php } ?>
            </div>
        </header>
    </section>