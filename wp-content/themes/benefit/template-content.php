<?php
    /* Template Name: Контент */
	get_header();
	get_template_part('breadcrumbs');
	
?>	
	
	<div class="page_banner padding shadow">

		<div class="page_banner_text">
			<h1><?php the_title(); ?></h1>
			<h2><?php  echo get_field('banner_h2'); ?></h2>
			<div class="banner_descript"><?php  echo get_field('banner_text'); ?></div>
			<a href="#consult" class="primary_button_l"><?php  echo get_field('button_order'); ?></a>
		</div>
		
		<div class="page_banner_img">
			 <svg version="1.1" id="services" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 540 102" style="enable-background:new 0 0 300 134;" xml:space="preserve">
			    <style type="text/css">
			       .st0 {fill:url(#SVGID_1_);}
			       .st1 {fill:url(#SVGID_2_);}
				     .st2 {fill:url(#SVGID_3_);}
			       .st3 {fill:url(#SVGID_4_);}
			       .st4 {fill:url(#SVGID_5_);}
			     	 .st5 {fill:url(#SVGID_6_);}
			     	 .st6 {fill:url(#SVGID_7_);}
			       .gr0 {filter:url(#filter0_dd);}
			    </style>

			    <filter id="filter0_dd" x="0" y="0" width="540" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
			      <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="152" y1="248" x2="23" y2="3" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st0" d="M67.6,69.4c0.4,0,0.8,0.1,1.3,0.3c0.4,0.1,0.8,0.4,1.2,0.8l7,7.4c-3.1,4-6.9,7.1-11.6,9.1
			  		c-4.6,2-10.1,3-16.4,3c-5.8,0-11-1-15.6-2.9c-4.6-2-8.5-4.7-11.7-8.2c-3.2-3.5-5.6-7.6-7.3-12.4C12.9,61.7,12,56.6,12,51
			  		c0-5.7,0.9-10.9,2.8-15.7c1.8-4.8,4.4-8.9,7.8-12.4c3.3-3.5,7.4-6.1,12-8.1C39.3,13,44.4,12,50,12c2.9,0,5.5,0.3,8.1,0.8
			  		c2.5,0.5,4.9,1.2,7.1,2.1c2.2,0.9,4.2,1.9,6.1,3.2c1.8,1.3,3.5,2.6,4.9,4.1l-6,8c-0.4,0.5-0.8,0.9-1.4,1.4
			  		c-0.5,0.4-1.3,0.6-2.2,0.6c-0.6,0-1.2-0.1-1.8-0.4c-0.6-0.3-1.2-0.6-1.8-1c-0.6-0.4-1.3-0.9-2.1-1.3c-0.7-0.5-1.6-0.9-2.7-1.3
			  		c-1-0.4-2.2-0.8-3.6-1c-1.4-0.3-3-0.4-4.8-0.4c-2.9,0-5.6,0.5-8.1,1.6c-2.4,1.1-4.5,2.7-6.3,4.8c-1.7,2.1-3.1,4.6-4.1,7.6
			  		c-0.9,3-1.4,6.4-1.4,10.3c0,3.9,0.5,7.4,1.6,10.4c1.1,3,2.5,5.6,4.3,7.7c1.8,2.1,4,3.6,6.4,4.7c2.4,1.1,5.1,1.6,7.8,1.6
			  		c1.6,0,3.1-0.1,4.4-0.2c1.3-0.2,2.6-0.4,3.7-0.8c1.2-0.4,2.2-0.9,3.2-1.5c1-0.6,2-1.4,3.1-2.4c0.4-0.3,0.9-0.6,1.4-0.8
			  		C66.6,69.5,67.1,69.4,67.6,69.4z"/>

			  		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="209" y1="218" x2="80" y2="-27" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st1" d="M160.9,51c0,5.5-1,10.7-2.9,15.4c-1.9,4.7-4.5,8.9-8,12.4c-3.5,3.5-7.6,6.2-12.5,8.2c-4.8,2-10.2,3-16.2,3
			  		c-5.9,0-11.3-1-16.2-3c-4.9-2-9.1-4.7-12.5-8.2c-3.5-3.5-6.1-7.7-8.1-12.4c-1.9-4.7-2.8-9.9-2.8-15.4s0.9-10.7,2.8-15.4
			  		c1.9-4.7,4.6-8.9,8.1-12.4c3.5-3.5,7.7-6.2,12.5-8.2c4.9-2,10.3-3,16.2-3c5.9,0,11.3,1,16.2,3c4.9,2,9,4.7,12.5,8.2s6.1,7.6,8,12.4
			  		C160,40.4,160.9,45.5,160.9,51z M142.8,51c0-3.8-0.5-7.2-1.5-10.2c-1-3-2.4-5.6-4.2-7.7c-1.8-2.1-4-3.7-6.7-4.8
			  		c-2.6-1.1-5.7-1.7-9-1.7c-3.4,0-6.5,0.6-9.2,1.7c-2.7,1.1-4.9,2.7-6.7,4.8c-1.8,2.1-3.2,4.7-4.2,7.7c-1,3-1.5,6.4-1.5,10.2
			  		c0,3.8,0.5,7.2,1.5,10.3c1,3,2.4,5.6,4.2,7.6c1.8,2.1,4.1,3.7,6.7,4.8c2.7,1.1,5.7,1.6,9.2,1.6c3.4,0,6.4-0.5,9-1.6
			  		c2.6-1.1,4.9-2.7,6.7-4.8c1.8-2.1,3.3-4.6,4.2-7.6C142.3,58.2,142.8,54.8,142.8,51z"/>

			  		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="277" y1="183" x2="148" y2="-63" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st2" d="M241,12.8v76.3h-9.2c-1.4,0-2.5-0.2-3.5-0.6c-0.9-0.5-1.8-1.2-2.7-2.3l-35.9-45.5c0.1,1.4,0.2,2.7,0.3,4
			  		c0.1,1.3,0.1,2.4,0.1,3.6v40.9h-15.6V12.8h9.3c0.8,0,1.4,0,1.9,0.1c0.5,0.1,1,0.2,1.4,0.4c0.4,0.2,0.8,0.4,1.2,0.8
			  		c0.4,0.3,0.8,0.8,1.3,1.4l36.2,45.8c-0.2-1.5-0.3-2.9-0.4-4.2c-0.1-1.4-0.1-2.7-0.1-3.9V12.8H241z"/>

			  		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="328" y1="156" x2="19" y2="-89" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st3" d="M313.6,26.9h-21.4v62.3h-17.7V26.9h-21.4v-14h60.5V26.9z"/>

			  		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="388.5" y1="124" x2="259" y2="-121" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st4" d="M343.5,26.5v17.8h23.9v13.1h-23.9v18.2h31.3v13.6h-49V12.8h49v13.6H343.5z"/>

			  		<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="445" y1="94" x2="315" y2="-151" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st5" d="M455.3,12.8v76.3h-9.2c-1.4,0-2.5-0.2-3.5-0.6c-0.9-0.5-1.8-1.2-2.7-2.3L404,40.7c0.1,1.4,0.2,2.7,0.3,4
			  		c0.1,1.3,0.1,2.4,0.1,3.6v40.9h-15.6V12.8h9.3c0.8,0,1.4,0,1.9,0.1c0.5,0.1,1,0.2,1.4,0.4c0.4,0.2,0.8,0.4,1.2,0.8
			  		c0.4,0.3,0.8,0.8,1.3,1.4l36.2,45.8c-0.2-1.5-0.3-2.9-0.4-4.2c-0.1-1.4-0.1-2.7-0.1-3.9V12.8H455.3z"/>

			  		<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="495.5" y1="67.5" x2="366" y2="-178" gradientTransform="matrix(1 0 0 -1 0 102)">
			  			<stop class="stop-1" offset="0" style="stop-color:#F5C7DA;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.2" style="stop-color:#BFB5E8;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="0.4" style="stop-color:#D2BDFF;stop-opacity:0.75"/>
			  			<stop class="stop-1" offset="0.6" style="stop-color:#B9C7F9;stop-opacity:0.75"/>
			  			<stop class="stop-2" offset="0.8" style="stop-color:#97B3DD;stop-opacity:0.75"/>
			  			<stop class="stop-3" offset="1" style="stop-color:#90A6D0;stop-opacity:0.75"/>
			  	</linearGradient>
			  	<path class="st6" d="M528,26.9h-21.4v62.3h-17.7V26.9h-21.4v-14H528V26.9z"/>
			    </g>
			  </svg>
			
		</div>
	</div>
<h2 class="h2"><?php echo get_field('title_of_acc'); ?></h2>

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
	
<div class="port_content shadow">
	<h2 class="h2"><?php echo get_field('pf_title'); ?></h2>
		
		<div class="content_tabs">
			<a href="" class="active tabs_video">Видео</a>
			<a href="" class="tabs_photo">Фото</a>
		</div>
		
		<div class="content_tab active">
			
			<div class="video mainContainer">
				<?php if( have_rows('pf_vm_album') ): ?>

					<?php while( have_rows('pf_vm_album') ): the_row(); 

					// переменные
					$pf_vm = get_sub_field('pf_vm');
					$pf_vm_img = get_sub_field('pf_vm_img');

					?>	
					<div>
						<iframe frameborder="0" controls="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="img" style="background:url(<?php echo $pf_vm_img ?>);
							background-position: center center; background-size:cover"></div>
							<div class="play" data-link="<?php echo $pf_vm ?>"></div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			
			<div class="thumbs videoThumbs">
			
				<div class="inside">
					<?php if( have_rows('pf_vm_album') ): ?>
						<?php while( have_rows('pf_vm_album') ): the_row(); 

						// переменные
						$pf_vm_img = get_sub_field('pf_vm_img');
						$pf_vmtext = get_sub_field('pf_vmtext');
						$timing = get_sub_field('timing');

					?>		
					<div class="thumb">
						<div class="mini" 
						style="background:url(<?php echo $pf_vm_img ?>);
						background-position: center center; background-size:cover">
							
						</div>
						<div class="video_text">
							<p><?php echo $pf_vmtext ?></p>
							<span><?php echo $timing ?></span>
						</div>
					</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
		
			</div>
		</div>		
		<div class="content_tab">
	
			<div class="mainContainer photos">
			<?php if( have_rows('pf_img_album') ): ?>

				<?php while( have_rows('pf_img_album') ): the_row(); 	
									// переменные
					$pf_img = get_sub_field('pf_img');

					?>			


					<div><a href="<?php echo $pf_img ?>" data-fancybox="gallery"><img src="<?php echo $pf_img ?>" alt="" /></a></div>
				
				<?php endwhile; ?>
			<?php endif; ?>	
			</div>
			<div class="thumbs photoThumbs">
				<div class="inside">

					
			<?php if( have_rows('pf_img_album') ): ?>
				<?php while( have_rows('pf_img_album') ): the_row(); 

					// переменные
					$pf_img = get_sub_field('pf_img');

					?>			
					<div class="thumb">
							<div class="mini" style="background:url(<?php echo $pf_img ?>);background-position: center center; background-size:cover"></div>
					</div>
					<?php endwhile; ?>

			<?php endif; ?>		


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