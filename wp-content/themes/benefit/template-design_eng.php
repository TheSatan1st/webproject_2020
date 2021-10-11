<?php
    /* Template Name: Дизайн англ. */
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
					 viewBox="0 0 540 124" style="enable-background:new 0 0 300 134;" xml:space="preserve">
				    <style type="text/css">
				       .st0 {fill:url(#SVGID_1_);}
				       .st1 {fill:url(#SVGID_2_);}
					     .st2 {fill:url(#SVGID_3_);}
				       .st3 {fill:url(#SVGID_4_);}
				       .st4 {fill:url(#SVGID_5_);}
				     	 .st5 {fill:url(#SVGID_6_);}
				       .gr0 {filter:url(#filter0_dd);}
				    </style>

				    <filter id="filter0_dd" x="0" y="0" width="540" height="124" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
				    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
				    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
				    <feOffset dx="4" dy="4"/>
				    <feGaussianBlur stdDeviation="4"/>
				    <feColorMatrix type="matrix" values="0 0 0 0 0.52 0 0 0 0 0.54 0 0 0 0 0.6 0 0 0 0.35 0"/>
				    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
				    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
				    <feOffset dx="-4" dy="-4"/>
				    <feGaussianBlur stdDeviation="4"/>
				    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
				    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
				    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
				    </filter>

				    <g class="gr0">
				      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="196" y1="285" x2="10" y2="9.5" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st0" d="M101.6,62c0,7.1-1.2,13.6-3.7,19.6c-2.4,6-5.9,11.1-10.4,15.5c-4.5,4.3-9.9,7.7-16.2,10.2
				  		c-6.3,2.4-13.3,3.6-20.9,3.6H12V13.1h38.4c7.7,0,14.7,1.2,20.9,3.7C77.6,19.2,83,22.6,87.5,27c4.5,4.3,7.9,9.5,10.4,15.5
				  		C100.4,48.4,101.6,54.9,101.6,62z M78.1,62c0-4.8-0.6-9.2-1.9-13.1C75,45,73.2,41.7,70.8,39c-2.3-2.7-5.2-4.8-8.7-6.2
				  		c-3.4-1.5-7.3-2.2-11.7-2.2H35v62.9h15.3c4.4,0,8.3-0.7,11.7-2.1c3.4-1.5,6.3-3.6,8.7-6.2c2.4-2.7,4.2-6,5.5-9.9
				  		C77.5,71.2,78.1,66.8,78.1,62z"/>

				  		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="270" y1="235" x2="84" y2="-40" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st1" d="M144.9,30.5v22.8h31v16.8h-31v23.3h40.5v17.5h-63.6V13.1h63.6v17.5H144.9z"/>

				  		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="326.1221" y1="197.5" x2="140" y2="-78" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st2" d="M260.9,33c-0.7,1.1-1.4,1.9-2.2,2.4c-0.7,0.5-1.7,0.8-2.8,0.8c-1,0-2.2-0.3-3.4-0.9c-1.2-0.7-2.5-1.4-4.1-2.2
				  		c-1.5-0.8-3.2-1.5-5.2-2.1c-1.9-0.7-4.2-1-6.6-1c-4.3,0-7.5,0.9-9.6,2.8c-2.1,1.8-3.1,4.2-3.1,7.3c0,2,0.6,3.6,1.9,4.9
				  		c1.3,1.3,2.9,2.4,4.9,3.4c2.1,0.9,4.4,1.8,7,2.6c2.7,0.8,5.4,1.6,8.1,2.6c2.8,0.9,5.4,2.1,8.1,3.4c2.7,1.3,5,3,7,5
				  		c2.1,2,3.8,4.5,5,7.4c1.3,2.9,1.9,6.3,1.9,10.4c0,4.5-0.8,8.8-2.4,12.7c-1.6,3.9-3.9,7.4-6.9,10.3c-3,2.9-6.7,5.2-11.1,6.9
				  		c-4.4,1.7-9.4,2.5-15,2.5c-3.1,0-6.2-0.3-9.4-0.9c-3.2-0.6-6.2-1.5-9.2-2.6c-3-1.2-5.8-2.5-8.4-4.1c-2.6-1.6-4.9-3.3-6.8-5.2
				  		l6.8-10.6c0.5-0.8,1.2-1.4,2.1-1.9c0.9-0.5,1.9-0.8,2.9-0.8c1.4,0,2.7,0.4,4.1,1.3c1.4,0.9,3,1.8,4.7,2.8c1.8,1,3.8,2,6,2.8
				  		c2.3,0.9,4.9,1.3,8,1.3c4.2,0,7.4-0.9,9.7-2.7c2.3-1.8,3.5-4.7,3.5-8.7c0-2.3-0.6-4.1-1.9-5.6c-1.3-1.4-2.9-2.6-5-3.6
				  		c-2-0.9-4.4-1.8-7-2.5c-2.6-0.7-5.3-1.5-8.1-2.4c-2.8-0.9-5.4-2-8.1-3.2c-2.6-1.3-5-3-7-5c-2-2.1-3.7-4.7-4.9-7.8
				  		c-1.3-3.1-1.9-7-1.9-11.6c0-3.7,0.7-7.3,2.2-10.7c1.5-3.5,3.7-6.6,6.6-9.3c2.9-2.7,6.4-4.9,10.6-6.5c4.2-1.7,9-2.5,14.4-2.5
				  		c3,0,6,0.2,8.8,0.7c2.9,0.4,5.6,1.1,8.2,2.1c2.6,0.9,5,2,7.2,3.3c2.3,1.3,4.3,2.7,6,4.3L260.9,33z"/>

				  		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="371" y1="167" x2="184" y2="-108" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st3" d="M311.2,110.9h-23V13.1h23V110.9z"/>

				  		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="428" y1="129" x2="242" y2="-147" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st4" d="M384.5,60.2h35.1v41.3c-5.1,3.7-10.5,6.3-16.2,8c-5.7,1.7-11.7,2.5-17.9,2.5c-8.1,0-15.5-1.3-22.2-3.8
				  		c-6.6-2.6-12.3-6-17.1-10.5c-4.7-4.5-8.4-9.8-11-15.8c-2.6-6.1-3.9-12.8-3.9-19.9c0-7.3,1.2-14,3.7-20.1
				  		c2.4-6.1,5.9-11.4,10.4-15.8c4.6-4.4,10.1-7.9,16.5-10.3c6.5-2.5,13.7-3.7,21.6-3.7c4.1,0,8,0.3,11.6,1c3.6,0.7,6.9,1.6,10,2.8
				  		c3.1,1.2,5.9,2.6,8.4,4.2c2.5,1.6,4.8,3.4,6.8,5.2l-6.6,10c-1,1.6-2.4,2.5-4.1,2.9c-1.6,0.4-3.4,0-5.3-1.2c-1.8-1.1-3.5-2-5.2-2.8
				  		c-1.6-0.8-3.2-1.5-4.9-1.9c-1.7-0.5-3.4-0.9-5.3-1.1s-3.9-0.3-6.2-0.3c-4.3,0-8.2,0.8-11.6,2.3c-3.4,1.5-6.4,3.6-8.8,6.3
				  		c-2.4,2.7-4.2,6-5.6,9.9c-1.3,3.8-2,8.1-2,12.8c0,5.2,0.7,9.8,2.2,13.8c1.4,4,3.5,7.4,6.1,10.2c2.7,2.8,5.8,4.9,9.5,6.4
				  		c3.7,1.4,7.8,2.1,12.3,2.1c2.8,0,5.2-0.3,7.5-0.8c2.3-0.5,4.5-1.3,6.6-2.1V76.7h-9.8c-1.4,0-2.6-0.4-3.4-1.1
				  		c-0.8-0.8-1.2-1.7-1.2-2.9V60.2z"/>

				  		<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="498" y1="82" x2="311" y2="-194" gradientTransform="matrix(1 0 0 -1 0 124)">
				  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
				  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
				  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
				  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
				  	</linearGradient>
				  	<path class="st5" d="M528,13.1v97.9h-11.9c-1.8,0-3.3-0.3-4.5-0.8c-1.2-0.6-2.3-1.6-3.5-3l-46.6-58.4c0.2,1.7,0.3,3.4,0.3,5.1
				  		c0.1,1.6,0.1,3.1,0.1,4.6v52.5h-20.2V13.1h12.1c1,0,1.8,0,2.5,0.1c0.7,0.1,1.3,0.3,1.8,0.5c0.5,0.2,1.1,0.6,1.6,1
				  		c0.5,0.4,1.1,1.1,1.7,1.8l47,58.8c-0.2-1.9-0.4-3.7-0.5-5.4c-0.1-1.8-0.1-3.5-0.1-5V13.1H528z"/>
				    </g>
				  </svg>
			</div>
		</div>
</div>
<div class="design_work shadow">
	
	<h2 class="h2"><?php echo get_field('title_of_cms'); ?></h2>
		
		<div class="design_work_inner">
		
			<ul>
				<?php if( have_rows('list_of_cms') ): ?>

					<?php while( have_rows('list_of_cms') ): the_row(); 

					// переменные
					$cms_text = get_sub_field('cms_text');
					$cms_logo = get_sub_field('cms_logo');

					?>						
					<li>
						<div class="design_img"><img src="<?php echo $cms_logo ?>" alt=""></div>
						<span><?php echo $cms_text ?></span>
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
			
			<div class="scheme_right"
			<?php if( have_rows('report') ): ?>>


				<?php while( have_rows('report') ): the_row(); 

					// переменные
					$block_content = get_sub_field('block_content');

					?>		
				<div class="scheme_right_parent">
					<div class="scheme_right_inner">
							<div><?php echo $block_content ?></div>
					</div>
				</div>
				<?php endwhile; ?>
		<?php endif; ?>					
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

<div class="port_design padding shadow">
	
	<h2 class="h2"><?php echo get_field('title_case'); ?></h2>
	
	<div class="port_design_inner">

		<?php get_template_part('template-parts/cases_block');?>	
	</div>
	
	<a href="/cases/" class="secondary_button_s ref_design"><?php echo get_field('botton_pf'); ?></a>
</div>
	

	<div id="consult" class="form-block shadow">
    

    <h2 class="h2"><?php echo get_field('titleform'); ?></h2>

      <span class="after_title"><?php echo get_field('subtitleform'); ?></span>
      <div class="flex-row item-center justify">
        <div class="col_form"><?php echo do_shortcode('[contact-form-7 id="945" title="Оставить заявку англ"]') ?></div>
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