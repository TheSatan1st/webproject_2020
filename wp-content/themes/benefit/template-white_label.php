<?php
    /* Template Name: White Label */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	<div class="page_banner padding shadow">

		<div class="page_banner_text">
			<h1><?php /*the_title()*/ echo get_field('banner_h1'); ?></h1>
			<h2><?php  echo get_field('banner_h2'); ?></h2>
			<div data-html2canvas-ignore class="banner_descript"><?php  echo get_field('banner_text'); ?></div>
			<a data-html2canvas-ignore href="#consult" class="primary_button_l"><?php echo get_field('button_order'); ?></a>
		</div>
		
		<div class="page_banner_img">
				<svg width="334" height="170" viewBox="0 0 334 170" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g filter="url(#filter0_dd)">
								<path d="M212.819 18L171.505 152H143.411L118.256 68.9513C117.766 67.6637 117.307 66.2535 116.879 64.7206C116.45 63.1265 116.022 61.4711 115.593 59.7543C115.165 61.4711 114.736 63.1265 114.308 64.7206C113.879 66.2535 113.42 67.6637 112.931 68.9513L87.4078 152H59.3142L18 18H44.0738C46.7669 18 49.0009 18.6131 50.7759 19.8394C52.6121 21.0657 53.8056 22.6905 54.3565 24.7138L72.7183 94.6108C73.2692 96.8181 73.82 99.24 74.3709 101.876C74.9218 104.452 75.4726 107.149 76.0235 109.97C77.1252 104.206 78.4717 99.0867 80.0631 94.6108L101.73 24.7138C102.281 22.997 103.444 21.4642 105.219 20.1153C107.055 18.7051 109.258 18 111.829 18H121.01C123.703 18 125.876 18.6438 127.528 19.9314C129.181 21.1576 130.436 22.7518 131.293 24.7138L152.776 94.6108C154.367 98.9028 155.714 103.777 156.816 109.234C157.305 106.475 157.795 103.9 158.285 101.509C158.835 99.056 159.386 96.7568 159.937 94.6108L178.299 24.7138C178.789 22.9357 179.952 21.3722 181.788 20.0233C183.624 18.6744 185.827 18 188.398 18H212.819Z" fill="url(#paint0_linear)"/>
								<path d="M316 127.168V152H235.391V18H266.423V127.168H316Z" fill="url(#paint1_linear)"/>
						</g>
						<defs>
								<filter id="filter0_dd" x="0" y="0" width="334" height="170" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
										<feOffset dx="6" dy="6"/>
										<feGaussianBlur stdDeviation="6"/>
										<feColorMatrix type="matrix" values="0 0 0 0 0.519688 0 0 0 0 0.53901 0 0 0 0 0.596979 0 0 0 0.35 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
										<feOffset dx="-6" dy="-6"/>
										<feGaussianBlur stdDeviation="6"/>
										<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
										<feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
								</filter>
										<linearGradient id="paint0_linear" x1="240.573" y1="-31.5217" x2="-3.51453" y2="124.15" gradientUnits="userSpaceOnUse">
										<stop stop-color="#F5C7DA" stop-opacity="0.75"/>
										<stop offset="0.1953" stop-color="#BFB5E8" stop-opacity="0.75"/>
										<stop offset="0.393225" stop-color="#D2BDFF" stop-opacity="0.75"/>
										<stop offset="0.617192" stop-color="#B9C7F9" stop-opacity="0.75"/>
										<stop offset="0.8047" stop-color="#97B3DD" stop-opacity="0.75"/>
										<stop offset="1" stop-color="#90A6D0" stop-opacity="0.75"/>
								</linearGradient>
								<linearGradient id="paint1_linear" x1="240.573" y1="-31.5217" x2="-3.51453" y2="124.15" gradientUnits="userSpaceOnUse">
										<stop stop-color="#F5C7DA" stop-opacity="0.75"/>
										<stop offset="0.1953" stop-color="#BFB5E8" stop-opacity="0.75"/>
										<stop offset="0.393225" stop-color="#D2BDFF" stop-opacity="0.75"/>
										<stop offset="0.617192" stop-color="#B9C7F9" stop-opacity="0.75"/>
										<stop offset="0.8047" stop-color="#97B3DD" stop-opacity="0.75"/>
										<stop offset="1" stop-color="#90A6D0" stop-opacity="0.75"/>
						</linearGradient>
						</defs>
				</svg>
							
		</div>
	</div>
<div data-html2canvas-ignore class="value padding shadow">
	
	<h2 class="h2"><?php echo get_field('title_of_wyg'); ?></h2>
	
		<div class="value_inner">

		<?php if( have_rows('list_wyg') ): ?>

				<?php while( have_rows('list_wyg') ): the_row(); 

					// переменные
					$wyg_title = get_sub_field('wyg_title');
					$wyg_content = get_sub_field('wyg_cont');

					?>		
			<div class="value_item_parent my-slide">
				<div class="value_item v_item_padding" style="background: #FAFAFA;">
					<h4><b><?php echo $wyg_title ?></b></h4>
					<div style="padding: 0;">
						<?php echo $wyg_content ?>
					</div>	
				</div>
			</div>
					
				<?php endwhile; ?>

			<?php endif; ?>
	
		</div>
		<div class="navi">
				<?php if( have_rows('list_wyg') ): ?>
					<?php while( have_rows('list_wyg') ): the_row(); 

						?>
				<div>
					<span></span>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>		
	</div>	
	


<div class="scheme padding shadow services-container" id="htmlContent">
		<h2 data-html2canvas-ignore class="h2" ><?php echo get_field('services_title') ?></h2>
		<p data-html2canvas-ignore class="scheme_text" ><?php echo get_field('services_subtitle') ?></p>

		<div data-html2canvas-ignore class="content_tabs services-tabs">
				<a href="" class="active tab-label">
						<?php echo get_field('web_dev_label') ?>
				</a>
				<a href="" class="tab-label">
						<?php echo get_field('design_label') ?>
				</a>
				<a href="" class="tab-label">
						<?php echo get_field('ads_label') ?>
				</a>
				<a href="" class="tab-label">
						<?php echo get_field('anal_label') ?>
				</a>
				<a href="" class="tab-label">
						<?php echo get_field('seo_label') ?>
				</a>
		</div>

		<div class="content_tab active">
				<div class="single-service">
						<div class="left">
								<h3>Select website type</h3>
								<div class="service-tabs web-tabs">

										<?php if( have_rows('web_dev_list') ): 
												$first = 1;
												?>
												<?php while( have_rows('web_dev_list') ): the_row(); 
														// переменные
														$title = get_sub_field('list_title');
														?>
														<a href="" class="tab-label <?php if ($first == 1): echo('active'); $first = 0; endif;?>">
																<span></span>
																<?php echo $title ?>
														</a>
														
												<?php endwhile; ?>
										<?php endif; ?>

								</div>
								<h3>Need something special?</h3>
								<p>Just <a href="#consult">write to us</a></p>
						</div>

						<div class="right">
								<?php if( have_rows('web_dev_list') ): 
										$first = 1;
										?>
										
										<?php while( have_rows('web_dev_list') ): the_row(); 
												
												// переменные
												$title = get_sub_field('list_title');
												$price = get_sub_field('list_price');
												$content = get_sub_field('list_desc');
												$calc = get_sub_field('list_calc');

												?>

												<div class="<?php if ($first == 1): echo('active'); $first = 0; endif; ?> service-tab web-tab">

														<h3><?php echo $title ?></h3>
														<span class="price">$ <?php echo $price ?></span>
														<div class="whats-included banner_descript">
																<?php echo $content ?>
														</div>
														<?php echo do_shortcode($calc); ?>

														<div data-html2canvas-ignore class="save-buttons">
																<a href="#htmlContent" class="generatePDF">
																		<img src="/wp-content/themes/benefit/img/pdf_btn.svg" alt="">
																		Download
																</a>
														</div>

														<h3 data-html2canvas-ignore >Order <?php echo $title ?> development</h3>
														<div data-html2canvas-ignore > <?php echo do_shortcode('[contact-form-7 id="2019" title="White Label"]'); ?> </div>
												</div>
												
										<?php endwhile; ?>
								<?php endif; ?>
								
						</div>
				</div>
		</div>
		<div class="content_tab">
				<div class="single-service">
						<div class="left">
								<h3>Select website type</h3>
								<div class="service-tabs des-tabs">

										<?php if( have_rows('des_list') ): 
												$first = 1;
												?>
												<?php while( have_rows('des_list') ): the_row(); 
														// переменные
														$title = get_sub_field('list_title');
														?>
														<a href="" class="tab-label <?php if ($first == 1): echo('active'); $first = 0; endif;?>">
																<span></span>
																<?php echo $title ?>
														</a>
														
												<?php endwhile; ?>
										<?php endif; ?>

								</div>
								<h3>Need something special?</h3>
								<p>Just <a href="#consult">write to us</a></p>
						</div>

						<div class="right">
								<?php if( have_rows('des_list') ): 
										$first = 1;
										?>
										
										<?php while( have_rows('des_list') ): the_row(); 
												
												// переменные
												$title = get_sub_field('list_title');
												$price = get_sub_field('list_price');
												$content = get_sub_field('list_desc');
												$calc = get_sub_field('list_calc');

												?>

												<div class="<?php if ($first == 1): echo('active'); $first = 0; endif; ?> service-tab des-tab">

														<h3><?php echo $title ?></h3>
														<span class="price">$ <?php echo $price ?></span>
														<div class="whats-included banner_descript">
																<?php echo $content ?>
														</div>
														<?php echo do_shortcode($calc); ?>
														<div data-html2canvas-ignore class="save-buttons">
																<a href="#htmlContent" class="generatePDF">
																		<img src="/wp-content/themes/benefit/img/pdf_btn.svg" alt="">
																		Download
																</a>
														</div>
														<h3 data-html2canvas-ignore >Order <?php echo $title ?> design</h3>
														<div data-html2canvas-ignore > <?php echo do_shortcode('[contact-form-7 id="2019" title="White Label"]'); ?> </div>
												</div>
												
										<?php endwhile; ?>
								<?php endif; ?>
								
						</div>
				</div>
		</div>
		<div class="content_tab">
				<div class="single-service">
						<div class="left">
								<h3>Select advertising type</h3>
								<div class="service-tabs ads-tabs">

										<?php if( have_rows('ads_list') ): 
												$first = 1;
												?>
												<?php while( have_rows('ads_list') ): the_row(); 
														// переменные
														$title = get_sub_field('list_title');
														?>
														<a href="" class="tab-label <?php if ($first == 1): echo('active'); $first = 0; endif;?>">
																<span></span>
																<?php echo $title ?>
														</a>
														
												<?php endwhile; ?>
										<?php endif; ?>

								</div>
								<h3>Need something special?</h3>
								<p>Just <a href="#consult">write to us</a></p>
						</div>

						<div class="right">
								<?php if( have_rows('ads_list') ): 
										$first = 1;
										?>
										
										<?php while( have_rows('ads_list') ): the_row(); 
												
												// переменные
												$title = get_sub_field('list_title');
												$price = get_sub_field('list_price');
												$content = get_sub_field('list_desc');
												$calc = get_sub_field('list_calc');

												?>

												<div class="<?php if ($first == 1): echo('active'); $first = 0; endif; ?> service-tab ads-tab">

														<h3><?php echo $title ?></h3>
														<span class="price">$ <?php echo $price ?></span>
														<div class="whats-included banner_descript">
																<?php echo $content ?>
														</div>
														<?php echo do_shortcode($calc); ?>
														<div data-html2canvas-ignore class="save-buttons">
																<a href="#htmlContent" class="generatePDF">
																		<img src="/wp-content/themes/benefit/img/pdf_btn.svg" alt="">
																		Download
																</a>
														</div>
														<h3 data-html2canvas-ignore >Order <?php echo $title ?></h3>
														<div data-html2canvas-ignore > <?php echo do_shortcode('[contact-form-7 id="2019" title="White Label"]'); ?> </div>
												</div>
												
										<?php endwhile; ?>
								<?php endif; ?>
								
						</div>
				</div>
		</div>
		<div class="content_tab">
				<div class="single-service">
						<div class="left">
								<h3>Select analytics type</h3>
								<div class="service-tabs anal-tabs">

										<?php if( have_rows('anal_list') ): 
												$first = 1;
												?>
												<?php while( have_rows('anal_list') ): the_row(); 
														// переменные
														$title = get_sub_field('list_title');
														?>
														<a href="" class="tab-label <?php if ($first == 1): echo('active'); $first = 0; endif;?>">
																<span></span>
																<?php echo $title ?>
														</a>
														
												<?php endwhile; ?>
										<?php endif; ?>

								</div>
								<h3>Need something special?</h3>
								<p>Just <a href="#consult">write to us</a></p>
						</div>

						<div class="right">
								<?php if( have_rows('anal_list') ): 
										$first = 1;
										?>
										
										<?php while( have_rows('anal_list') ): the_row(); 
												
												// переменные
												$title = get_sub_field('list_title');
												$price = get_sub_field('list_price');
												$content = get_sub_field('list_desc');
												$calc = get_sub_field('list_calc');

												?>

												<div class="<?php if ($first == 1): echo('active'); $first = 0; endif; ?> service-tab anal-tab">
														
														<h3><?php echo $title ?></h3>
														
														<?php if (get_sub_field('list_price')): ?>
																<span class="price"><?php echo $price ?></span>
														<?php endif; ?>

														<div class="whats-included banner_descript">
																<?php echo $content ?>
														</div>
														<?php echo do_shortcode($calc); ?>
														<div data-html2canvas-ignore class="save-buttons">
																<a href="#htmlContent" class="generatePDF">
																		<img src="/wp-content/themes/benefit/img/pdf_btn.svg" alt="">
																		Download
																</a>
														</div>
														<h3 data-html2canvas-ignore >Order digital analytics</h3>
														<div data-html2canvas-ignore > <?php echo do_shortcode('[contact-form-7 id="2019" title="White Label"]'); ?> </div>
												</div>
												
										<?php endwhile; ?>
								<?php endif; ?>
								
						</div>
				</div>
		</div>
		<div class="content_tab">
				<div class="single-service">
						<div class="left">
								<h3>Select SEO type</h3>
								<div class="service-tabs seo_tabs">

										<?php if( have_rows('seo_list') ): 
												$first = 1;
												?>
												<?php while( have_rows('seo_list') ): the_row(); 
														// переменные
														$title = get_sub_field('list_title');
														?>
														<a href="" class="tab-label <?php if ($first == 1): echo('active'); $first = 0; endif;?>">
																<span></span>
																<?php echo $title ?>
														</a>
														
												<?php endwhile; ?>
										<?php endif; ?>

								</div>
								<h3>Need something special?</h3>
								<p>Just <a href="#consult">write to us</a></p>
						</div>

						<div class="right">
								<?php if( have_rows('seo_list') ): 
										$first = 1;
										?>
										
										<?php while( have_rows('seo_list') ): the_row(); 
												
												// переменные
												$title = get_sub_field('list_title');
												$price = get_sub_field('list_price');
												$content = get_sub_field('list_desc');
												$calc = get_sub_field('list_calc');

												?>

												<div class="<?php if ($first == 1): echo('active'); $first = 0; endif; ?> service-tab seo_tab">

														<h3><?php echo $title ?></h3>
														<span class="price">$ <?php echo $price ?></span>
														<div class="whats-included banner_descript">
																<?php echo $content ?>
														</div>
														<?php echo do_shortcode($calc); ?>
														<div data-html2canvas-ignore class="save-buttons">
																<a href="#htmlContent" class="generatePDF">
																		<img src="/wp-content/themes/benefit/img/pdf_btn.svg" alt="">
																		Download
																</a>
														</div>
														<h3 data-html2canvas-ignore >Order <?php echo $title ?></h3>
														<div data-html2canvas-ignore > <?php echo do_shortcode('[contact-form-7 id="2019" title="White Label"]'); ?> </div>
														
										
												</div>
												
										<?php endwhile; ?>
								<?php endif; ?>

						</div>
				</div>
		</div>
		


</div>


<h2 data-html2canvas-ignore class="h2"><?php echo get_field('title_of_acc'); ?></h2>
<div data-html2canvas-ignore class="context_adv">
	<div class="dropdown shadow">
		<?php if( have_rows('list_of_acc') ): ?>

				<?php while( have_rows('list_of_acc') ): the_row(); 

					// переменные
					$ppc_title = get_sub_field('ppc_title');
					$ppc_content = get_sub_field('ppc_content');

					?>
					<div class="dropdown_item">
					<div class="question"><p><?php echo $ppc_title ?></p>
					<div class="plus_minus"></div>
					</div>
					
					<div class="answer"><?php echo $ppc_content ?></div>
				</div>
					
				<?php endwhile; ?>

			<?php endif; ?>
		
	</div>
</div>


<div data-html2canvas-ignore id="consult" class="form-block shadow">
    <h2 class="h2"><?php echo get_field('titleform'); ?></h2>

      <span class="after_title"><?php echo get_field('subtitleform'); ?></span>
      <div class="flex-row item-center justify">
        <div class="col_form"><?php echo do_shortcode('[contact-form-7 id="945" title="Оставить заявку англ"]') ?></div>
        <div class="ore">or</div>
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