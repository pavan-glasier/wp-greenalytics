<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenalytics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
    class="sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?> style="background-color: #fff;">
    <?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg navbar-light style-4"
	<?php if ( !is_front_page() ) : ?>
	 style="background-color: #FFF; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);"
	 <?php endif; ?>
	 >
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
                <?php
				if ( ! empty( $image[0] ) ) : ?>
                <img src="<?php echo esc_url( $image[0] ); ?>" class="logo" alt="" />
                <?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'container'      => 'ul',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav m-auto mb-2 mb-lg-0 text-uppercase',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                           	'walker'         => new WP_Bootstrap_Navwalker()
						)
					);
				?>
            </div>
        </div>
    </nav>