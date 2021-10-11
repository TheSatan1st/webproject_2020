<?php
    /* Template Name: Аналитика */
	get_header();
	get_template_part('template-parts/breadcrumbs');
?>
	<div class="page_banner padding shadow">

		<div class="page_banner_text">
			<h1><?php the_title(); ?></h1>
			<h2><?php  echo get_field('banner_h2'); ?></h2>
			<div class="banner_descript"><?php  echo get_field('banner_text'); ?></div>
			<a href="#consult" class="primary_button_l"><?php echo get_field('button_order_an'); ?></a>
		</div>

		<div class="page_banner_img">
				<svg version="1.1" id="services" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 524 158" style="enable-background:new 0 0 300 134;" xml:space="preserve">
					    <style type="text/css">
					       .st0 {fill:url(#SVGID_1_);}
					       .st1 {fill:url(#SVGID_2_);}
						     .st2 {fill:url(#SVGID_3_);}
					       .st3{fill:url(#SVGID_4_);}
					       .gr0 {filter:url(#filter0_dd);}
					    </style>

					    <filter id="filter0_dd" x="0" y="0" width="524" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
					    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
					    <feOffset dx="4" dy="4"/>
					    <feGaussianBlur stdDeviation="4"/>
					    <feColorMatrix type="matrix" values="0 0 0 0 0.5 0 0 0 0 0.54 0 0 0 0 0.60 0 0 0 0.35 0"/>
					    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
					    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
					    <feOffset dx="-4" dy="-4"/>
					    <feGaussianBlur stdDeviation="4"/>
					    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
					    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
					    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
					    </filter>

					    <g class="gr0">
					      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="255" y1="319" x2="-14" y2="31" gradientTransform="matrix(1 0 0 -1 0 158)">
					  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
					  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
					  	</linearGradient>
					  	<path class="st0" d="M121.7,67.1c0,9.7-1.7,18.6-5.1,26.9c-3.3,8.2-8,15.2-14.1,21.2c-6.1,5.9-13.4,10.6-22,14
					  		c-8.5,3.3-18,5-28.4,5H0V0.2h52.1c10.4,0,19.9,1.7,28.4,5.1c8.6,3.4,15.9,8,22,14c6.1,5.9,10.8,13,14.1,21.2
					  		C120,48.6,121.7,57.5,121.7,67.1z M89.8,67.1c0-6.6-0.9-12.6-2.6-17.9c-1.7-5.3-4.2-9.8-7.5-13.5c-3.2-3.7-7.1-6.6-11.8-8.6
					  		c-4.7-2-10-3-15.9-3H31.3v86.2h20.8c6,0,11.3-1,15.9-2.9c4.7-2,8.6-4.9,11.8-8.6c3.3-3.7,5.7-8.3,7.5-13.6
					  		C89,79.8,89.8,73.8,89.8,67.1z"/>

					  		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="351" y1="228.5" x2="83" y2="-59" gradientTransform="matrix(1 0 0 -1 0 158)">
					  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
					  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
					  	</linearGradient>
					  	<path class="st1" d="M215.4,83L203,46.3c-0.9-2.3-1.9-5.1-2.9-8.2c-1-3.2-2.1-6.6-3.1-10.3C196,31.5,195,35,194,38.2
					  		c-1,3.2-2,5.9-2.9,8.3L178.7,83H215.4z M264.8,134.2h-24.1c-2.7,0-4.9-0.6-6.5-1.8c-1.7-1.3-2.9-2.9-3.8-4.9l-7.9-23.4h-51
					  		l-7.9,23.4c-0.7,1.7-1.9,3.3-3.7,4.7c-1.7,1.3-3.9,2-6.4,2h-24.3l51.9-134h31.8L264.8,134.2z"/>

					  		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="390" y1="192" x2="121" y2="-95" gradientTransform="matrix(1 0 0 -1 0 158)">
					  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
					  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
					  	</linearGradient>
					  	<path class="st2" d="M367.8,24.8h-37.7v109.4H299V24.8h-37.7V0.2h106.6V24.8z"/>

					  		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="477" y1="111" x2="208" y2="-176" gradientTransform="matrix(1 0 0 -1 0 158)">
					  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
					  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
					  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
					  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
					  	</linearGradient>
					  	<path class="st3" d="M450.6,83l-12.4-36.7c-0.9-2.3-1.9-5.1-2.9-8.2c-1-3.2-2.1-6.6-3.1-10.3c-0.9,3.7-1.9,7.2-2.9,10.4
					  		c-1,3.2-2,5.9-2.9,8.3L413.9,83H450.6z M500,134.2h-24.1c-2.7,0-4.9-0.6-6.5-1.8c-1.7-1.3-2.9-2.9-3.8-4.9l-7.9-23.4h-51l-7.9,23.4
					  		c-0.7,1.7-1.9,3.3-3.7,4.7c-1.7,1.3-3.9,2-6.4,2h-24.3l51.9-134h31.8L500,134.2z"/>
					    </g>
				  </svg>

		</div>
	</div>
<div class="value padding shadow">

	<h2 class="h2"><?php echo get_field('title_of_wwd'); ?></h2>

		<div class="value_inner">

		<?php if( have_rows('list_wwd') ): ?>

				<?php while( have_rows('list_wwd') ): the_row();

					// переменные
					$wwd_title = get_sub_field('wwd_title');
					$wwd_content = get_sub_field('wwd_cont');

					?>
			<div class="value_item_parent my-slide">
				<div class="value_item v_item_padding">
					<h4><?php echo $wwd_title ?></h4>
					<p><?php echo $wwd_content ?></p>
				</div>
			</div>

				<?php endwhile; ?>

			<?php endif; ?>
			<div class="navi">
					<?php if( have_rows('list_wwd') ): ?>
						<?php while( have_rows('list_wwd') ): the_row();

							?>
					<div>
						<span></span>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<h2 class="h2 analitica_h2"><?php echo get_field('title_of_acc'); ?></h2>

<div class="context_adv">
	<div class="dropdown shadow">
		<?php if( have_rows('list_of_acc') ): ?>

				<?php while( have_rows('list_of_acc') ): the_row();

					// переменные
					$ppc_title = get_sub_field('ppc_title');
					$ppc_content = get_sub_field('ppc_content');

					?>
				<div class="dropdown_item">
					<div class="question"><span><?php echo $ppc_title ?></span>
					<div class="plus_minus"></div>
					</div>

					<div class="answer"><?php echo $ppc_content ?></div>
				</div>

				<?php endwhile; ?>

			<?php endif; ?>

	</div>
</div>

<div class="scheme_one padding shadow">

	<h2 class="h2"><?php echo get_field('work_scheme_title'); ?></h2>


	<p class="scheme_text"><?php echo get_field('work_scheme_subtitle'); ?></p>

	<div class="scheme_inner">
			<ul>
				<?php if( have_rows('work_scheme_ul') ): ?>


				<?php while( have_rows('work_scheme_ul') ): the_row();

					// переменные
					$work_scheme_li = get_sub_field('work_scheme_li');

					?>
				<li>
				<div class="r_parent">
					<div class="round">
						<div class="outer">
							<div class="inner">

							</div>
						</div>
					</div>
					<div class="r_text">
						<p><?php echo $work_scheme_li ?></p>
					</div>
				</div>
				<div class="l_parent">
					<div class="line"></div>
				</div>
				</li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
	</div>
</div>
<div class="value pricing padding shadow">

		<h2 class="h2"><?php echo get_field('price_title'); ?></h2>

		<div class="value_inner">
			 <?php if( have_rows('prices') ): ?>


				<?php while( have_rows('prices') ): the_row();

					// переменные
					$price_name = get_sub_field('price_name');
					$serv_cont = get_sub_field('serv_cont');

					?>
					<div class="value_item_parent my-slide my-slide2">
						<div class="value_item">
							<h3><span><?php echo $price_name ?></span></h3>
							<div><?php echo $serv_cont ?></div>
						</div>
					</div>
				<?php endwhile; ?>
		<?php endif; ?>
		<div class="navi navi2">
			<?php if( have_rows('prices') ): ?>


				<?php while( have_rows('prices') ): the_row();

					?>
			<div>
				<span></span>
			</div>
							<?php endwhile; ?>
		<?php endif; ?>
		</div>
		</div>

		<p class="suitable"><?php echo get_field('postprice'); ?></p>
</div>
<div id="consult" class="form-block shadow">


    <h2 class="h2"><?php echo get_field('titleform'); ?></h2>

      <span class="after_title"><?php echo get_field('subtitleform'); ?></span>
      <div class="flex-row item-center justify">
        <div class="col_form"><?php echo do_shortcode('[contact-form-7 id="783" title="Оставить заявку"]') ?></div>
        <div class="ore">или</div>
        <div class="form_right col_form">
        						<span class="media_span">
						 			<?php
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'contact us in the convenient way';
				}
				else {
					echo 'свяжитесь с нами любым удобным способом';

				}
			 ?>
					</span>
            <div class="form_social">
            	<?php $all_options = get_option('true_options');?>
            <a href="<?php echo $all_options['facebook']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"></a>
            <a href="<?php echo $all_options['telegram']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg"></a>
            <a href="<?php echo $all_options['messenger']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg"></a>
            <a href="<?php echo $all_options['mail']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg"></a>
            </div>
        </div>
      </div>

  </div>

<?php
	get_footer();



?>
