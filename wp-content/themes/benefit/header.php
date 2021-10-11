<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allrenter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHPFFJM');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript data-html2canvas-ignore ><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHPFFJM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
	<div class="wrapper">
	<?php $all_options = get_option('true_options');?>
		<header data-html2canvas-ignore>
		<div class="header">
			<div class="header_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/themes/benefit/img/logo.svg" alt=""></a></div>
			<div class="header_links hide-mob">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'top-menu1',
							'container'       => false, 
							'menu_class'      => 'menu', 
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						)
					);
					?>
			</div>
			<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo '<a class="header_consult secondary_button_s hide-mob">' .$all_options['consult_en'] . '</a>';
				}
				else {
					echo '<a class="header_consult secondary_button_s hide-mob">' .$all_options['consult_ru'] . '</a>';

				}
			 ?>
			
			<div class="header_social hide-mob">
			
				<a href="<?php echo $all_options['facebook']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/fb.svg" alt=""></a>
					<a href="<?php echo $all_options['telegram']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/telegram.svg" alt=""></a>
					<a href="<?php echo $all_options['messenger']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/whatsapp.svg" alt=""></a>
					<a href="<?php echo $all_options['instagram']; ?> " class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/mail.svg" alt=""></a>
				
			</div>
			<div class="language hide-mob">
				<ul class="language"><?php pll_the_languages(array('show_flags'=>0,'display_names_as'=>'slug'));?></ul>
			</div>
		<div class="my-hamburger"><div class="hamburger_inner"></div></div>
		</div>	
		

		<div class="header_media">
			<div class="header_links">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'top-menu2',
							'container'       => false, 
							'menu_class'      => 'menu', 
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						)
					);
					?>
			</div>
			<div class="secondary_button_s">
				<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo '<a class="header_consult">' .$all_options['consult_en'] . '</a>';
				}
				else {
					echo '<a class="header_consult">' .$all_options['consult_ru'] . '</a>';

				}
			 ?>
			</div>
			<div class="header_social">

			<?php $all_options = get_option('true_options');?>	
				<a href="<?php echo $all_options['facebook']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/fb.svg" alt=""></a>
					<a href="<?php echo $all_options['telegram']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/telegram.svg" alt=""></a>
					<a href="<?php echo $all_options['messenger']; ?>" class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/whatsapp.svg" alt=""></a>
					<a href="<?php echo $all_options['mail']; ?> " class="social_button" target="_blank"><img src="/wp-content/themes/benefit/img/mail.svg" alt=""></a>
			</div>
			<div class="language">
				<ul class="language"><?php pll_the_languages(array('show_flags'=>0,'display_names_as'=>'slug'));?></ul>
			</div>
		</div>
		</header>