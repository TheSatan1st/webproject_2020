<?php
    /* Template Name: Разработка сайтов */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	<div class="page_banner padding shadow">


		<div class="page_banner_text">
			<h1><?php the_title(); ?></h1>
			<h2><?php  echo get_field('banner_h2'); ?></h2>
			<div class="banner_descript"><?php  echo get_field('banner_text'); ?></div>
			<a href="#consult" class="primary_button_l"><?php  echo get_field('button_order_ads'); ?></a>
		</div>
		
		<div class="page_banner_img">
			<div class="banner_img_img">
				 <svg version="1.1" id="services" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 408 158" style="enable-background:new 0 0 300 134;" xml:space="preserve">
				    <style type="text/css">
				       .st0 {fill:url(#SVGID_1_);}
				       .st1 {fill:url(#SVGID_2_);}
					     .st2 {fill:url(#SVGID_3_);}
				       .gr0 {filter:url(#filter0_dd);}
				    </style>

				    <filter id="filter0_dd" x="0" y="0" width="408" height="158" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
				    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
				    <feOffset dx="4" dy="4"/>
				    <feGaussianBlur stdDeviation="4"/>
				    <feColorMatrix type="matrix" values="0 0 0 0 0.5 0 0 0 0 0.54 0 0 0 0 0.6 0 0 0 0.35 0"/>
				    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
				    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
				    <feOffset dx="-4" dy="-4"/>
				    <feGaussianBlur stdDeviation="4"/>
				    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
				    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
				    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
				    </filter>

				    <g class="gr0">
				      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="244" y1="259.5" x2="-20" y2="42" gradientTransform="matrix(1 0 0 -1 0 158)">
				  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st0" d="M121.6,67c0,9.7-1.7,18.6-5.1,26.9c-3.3,8.2-8,15.2-14.1,21.2c-6.1,5.9-13.4,10.6-22,14c-8.5,3.3-18,5-28.4,5
				  		H0V0h52.1C62.5,0,72,1.7,80.5,5.1c8.6,3.4,15.9,8,22,14c6.1,5.9,10.8,13,14.1,21.2C119.9,48.4,121.6,57.3,121.6,67z M89.8,67
				  		c0-6.6-0.9-12.6-2.6-17.9c-1.7-5.3-4.2-9.8-7.5-13.5c-3.2-3.7-7.1-6.6-11.8-8.6c-4.7-2-10-3-15.9-3H31.3v86.2h20.8
				  		c5.9,0,11.3-1,15.9-2.9c4.7-2,8.6-4.9,11.8-8.6c3.2-3.7,5.7-8.3,7.5-13.6C88.9,79.6,89.8,73.6,89.8,67z"/>

				  		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="306" y1="185" x2="42" y2="-32" gradientTransform="matrix(1 0 0 -1 0 158)">
				  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st1" d="M180.4,23.9v31.3h42.1v23h-42.1v31.9h55V134h-86.3V0h86.3v23.9H180.4z"/>

				  		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="345" y1="137" x2="81" y2="-80" gradientTransform="matrix(1 0 0 -1 0 158)">
				  		<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  		<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  		<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  		<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st2" d="M384,0l-53.7,134h-28.1L248.4,0h25c2.7,0,4.9,0.6,6.5,1.9c1.7,1.2,2.9,2.8,3.8,4.8l25.9,71.7
				  		c1.2,3.1,2.4,6.6,3.6,10.3c1.2,3.7,2.3,7.5,3.3,11.6c0.9-4,1.8-7.9,2.9-11.6c1.1-3.7,2.3-7.2,3.5-10.3l25.8-71.7
				  		c0.7-1.7,1.9-3.2,3.6-4.6c1.8-1.4,4-2.1,6.5-2.1H384z"/>
				    </g>
				  </svg>
			</div>
		</div>
	</div>
	

	<div class="main_usage cms padding shadow">
	
		<h2 class="h2"><?php echo get_field('title_of_cms'); ?></h2>
		<div class="main_usage_inner">
		<?php if( have_rows('list_of_cms') ): ?>

				<?php while( have_rows('list_of_cms') ): the_row(); 

					// переменные
					$cms_link = get_sub_field('cms_link');
					$cms_logo = get_sub_field('cms_logo');

					?>	
					<div class="main_usage_item">
						<a href="<?php echo $cms_link ?>" target="_blank">
						<img src="<?php echo $cms_logo ?>" alt="">
						</a>
					</div>
				<?php endwhile; ?>

			<?php endif; ?>			
		</div>
	</div>

	<div class="develop">
		<div class="develop_left padding shadow">

			<h2 class="h2"><?php echo get_field('title_of_col1'); ?></h2>
				<ul>
				<?php if( have_rows('list_col1') ): ?>

					<?php while( have_rows('list_col1') ): the_row(); 

					// переменные
					$ico_list1 = get_sub_field('ico_list1');
					$list1_text = get_sub_field('list1_text');

					?>	

				
					<li>
					<div class="dev_img_inner"><img src="<?php echo $ico_list1 ?>" alt=""></div>
					<span><?php echo $list1_text ?></span>
					</li>
				<?php endwhile; ?>

			<?php endif; ?>						
			</ul>
		</div>
		
		<div class="develop_right padding shadow">
		
			<h2 class="h2"><?php echo get_field('title_of_col2'); ?></h2>
		
		
			<p class="our_sites"><?php echo get_field('subtitle_of_col2'); ?></p>	
		
				<ul>
				<?php if( have_rows('list_col2') ): ?>

					<?php while( have_rows('list_col2') ): the_row(); 

					// переменные
					$ico_list2 = get_sub_field('ico_list2');
					$list2_text = get_sub_field('list2_text');

					?>	

				
					<li>
					<div class="dev_img_inner"><img src="<?php echo $ico_list2 ?>" alt=""></div>
					<span><?php echo $list2_text ?></span>
					</li>
				<?php endwhile; ?>

			<?php endif; ?>						
			</ul>
		</div>
	</div>


<div class="scheme padding shadow">
	
	<h2 class="h2"><?php echo get_field('work_scheme_title'); ?></h2>
	
	
	<p class="scheme_text"><?php echo get_field('work_scheme_subtitle'); ?></p>
	
		<div class="scheme_inner">

			<div class="scheme_left">
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
			
			<div class="scheme_right">
				<div class="scheme_right_parent">
					<div class="scheme_right_inner">
						<?php echo get_field('report'); ?>
					</div>
				</div>
			</div>
		</div>
</div>
	
<div class="value padding shadow">
	
		<h2 class="h2"><?php echo get_field('price_title'); ?></h2>
	
		<div class="value_inner">
			 <?php if( have_rows('prices') ): ?>


				<?php while( have_rows('prices') ): the_row(); 

					// переменные
					$price_name = get_sub_field('price_name');
					$serv_cont = get_sub_field('serv_cont');

					?>		
					<div class="value_item_parent my-slide">
						<div class="value_item">
							<h3><?php echo $price_name ?></h3>
							<div><?php echo $serv_cont ?></div>
						</div>
					</div>
				<?php endwhile; ?>
		<?php endif; ?>				
			<div class="navi">
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

<div class="main_usage padding shadow">
	<h2 class="h2"><?php echo get_field('title_case'); ?></h2>
	 <?php if( have_rows('portfolio') ): ?>
	<div class="main_usage_inner">

				<?php while( have_rows('portfolio') ): the_row(); 

					// переменные
					$pf_img = get_sub_field('pf_img');
					$pf_link = get_sub_field('pf_link');

					?>		
					
						<div class="main_usage_item">
							<a href="<?php echo $pf_link ?>" target="_blank"><img src="<?php echo $pf_img ?>"></a>
						</div>
					
				<?php endwhile; ?>
		<?php endif; ?>				
	</div>
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