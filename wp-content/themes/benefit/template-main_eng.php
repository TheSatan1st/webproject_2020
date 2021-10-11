<?php
    /* Template Name: Главная англ. */
	get_header();


?>
<div class="banner shadow banner_main">
			<div class="banner_text">
				<?php  echo get_field('bannertext'); ?>
				<a href="#consult" class="primary_button_l"><?php  echo get_field('button1'); ?></a>
				<a href="/services-en/" class="secondary_button_l"><?php  echo get_field('button2'); ?></a>
			</div>
			<div class="banner_img_parent">
    <div class="container">
        <div class="cir"></div>
        <svg id="logo" width="100%" height="100%" viewBox="0 0 168 168" fill="none"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M157.908 0L168 0.181813V77.2729L0.00171124 77.2729L0.00171463 0.181806L10.0935 0.181806L10.0935 67.9092H78.0052V11.5455L87.8595 11.5455V67.9092L157.908 67.9092V0ZM157.907 100.273L87.2641 100.273V158.909H77.1724V100.273H0L1.37726e-05 90.9089L167.998 90.9089V168H157.907V100.273ZM45.7933 34.1694C44.6841 35.1027 43.0438 35.5694 40.8722 35.5694H34.6552V25.1394H40.8897C41.9288 25.1394 42.857 25.2561 43.6742 25.4894C44.4915 25.7227 45.1803 26.0611 45.7407 26.5044C46.3011 26.9361 46.7273 27.4669 47.0192 28.0969C47.3227 28.7152 47.4745 29.4152 47.4745 30.1969C47.4745 31.9002 46.9141 33.2244 45.7933 34.1694ZM34.6552 23.8269V13.6594H39.979C42.1856 13.6594 43.8143 14.0911 44.8651 14.9544C45.9275 15.8061 46.4588 17.0661 46.4588 18.7344C46.4588 19.3761 46.3362 20.0002 46.091 20.6069C45.8458 21.2136 45.4605 21.7561 44.9351 22.2344C44.4214 22.7127 43.756 23.0977 42.9387 23.3894C42.1331 23.6811 41.1582 23.8269 40.0141 23.8269H34.6552ZM43.6567 12.6619C42.6176 12.3819 41.3917 12.2419 39.979 12.2419H32.8514V37.0044H40.8897C42.209 37.0044 43.3882 36.8527 44.4273 36.5494C45.4664 36.2344 46.342 35.7852 47.0542 35.2019C47.7664 34.6186 48.3093 33.9069 48.6829 33.0669C49.0565 32.2269 49.2433 31.2819 49.2433 30.2319C49.2433 28.5869 48.7179 27.2627 47.6671 26.2594C46.628 25.2444 45.1336 24.5969 43.1839 24.3169C43.9895 24.1186 44.7016 23.8327 45.3204 23.4594C45.9509 23.0744 46.4763 22.6252 46.8966 22.1119C47.3286 21.5986 47.6554 21.0386 47.8773 20.4319C48.1108 19.8252 48.2275 19.1952 48.2275 18.5419C48.2275 17.5502 48.0641 16.6636 47.7372 15.8819C47.4103 15.1002 46.9082 14.4411 46.2311 13.9044C45.5539 13.3561 44.6958 12.9419 43.6567 12.6619ZM138.865 12.2419V37.0044H138.025C137.873 37.0044 137.745 36.9811 137.64 36.9344C137.546 36.8761 137.453 36.7827 137.359 36.6544L121.265 15.1644C121.3 15.5144 121.318 15.8469 121.318 16.1619V37.0044H119.742V12.2419L120.635 12.2419C120.798 12.2419 120.921 12.2652 121.002 12.3119C121.096 12.3469 121.195 12.4344 121.3 12.5744L137.359 34.0119C137.324 33.6619 137.307 33.3294 137.307 33.0144L137.307 12.2419H138.865ZM39.3483 132.965H41.1521L41.1521 108.202H39.3483L39.3483 132.965ZM132.334 114.775H123.63V138.015H121.826V114.775H113.07V113.253H132.334V114.775Z" fill="url(#paint0_linear)" />
            <defs>
                <linearGradient id="paint0_linear" x1="125.477" y1="-62.087" x2="-53.3899" y2="-10.7908" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EFA9C6" stop-opacity="0.9"/>
                    <stop offset="0.239583" stop-color="#AB9EE1" stop-opacity="0.85"/>
                    <stop offset="0.479167" stop-color="#BA99FF" stop-opacity="0.85"/>
                    <stop offset="0.739583" stop-color="#A1B4F7" stop-opacity="0.85"/>
                    <stop offset="1" stop-color="#8BABDA" stop-opacity="0.85"/>
                </linearGradient>
            </defs>
        </svg>
    </div>
			</div>
		</div>

		<div class="stories shadow padding">
		<h2 class="h2"><?php  echo get_field('title_case'); ?></h2>

		<div class="stories_inner">
		<?php get_template_part('template-parts/cases_block');?>
		</div>
			<a href="/agency/cases-en/" class="secondary_button_s getCases"><?php  echo get_field('button3'); ?></a>
		</div>

		<div class="our_services shadow padding">
		<h2 class="h2"><?php  echo get_field('title_of_our_services'); ?></h2>

		<?php get_template_part('template-parts/services_list');?>

		</div>





		<h2 class="h2"><?php  echo get_field('title_of_q_and_a'); ?></h2>
		<div class="dropdown shadow">

		<?php if( have_rows('faq') ): ?>


				<?php while( have_rows('faq') ): the_row();

					// переменные
					$faq_title = get_sub_field('faq_title');
					$content = get_sub_field('faq_question');

					?>

					<div class="dropdown_item">
						<div class="question"><span><?php echo $faq_title ; ?></span><div class="plus_minus"></div>
						</div>

						<div class="answer"><?php echo $content; ?></div>
					</div>

				<?php endwhile; ?>


			<?php endif; ?>
			</div>




	<div class="certificates padding shadow">

	<h2 class="h2"><?php  echo get_field('title_of_certificates'); ?></h2>

		<div class="certificates_inner">
		<?php if( have_rows('certificates') ): ?>


				<?php while( have_rows('certificates') ): the_row();

					// переменные
					$sert_ico = get_sub_field('sert_ico');
					$sert_title = get_sub_field('sert_title');
					$sert_link = get_sub_field('sert_link');

					?>

					<div class="certificates_item">
						<a href="<?php echo $sert_link; ?>" target="_blank"><img src="<?php echo $sert_ico; ?>"><span><?php echo $sert_title; ?></span></a>
					</div>

				<?php endwhile; ?>


			<?php endif; ?>

		</div>
	</div>



	<div id="consult" class="form-block shadow">

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
					<?php $all_options = get_option('true_options');?>
						<div class="form_social">
						<a href="<?php echo $all_options['facebook']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"></a>
						<a href="<?php echo $all_options['telegram']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg"></a>
						<a href="<?php echo $all_options['messenger']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg"></a>
						<a href="<?php echo $all_options['mail']; ?> "><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg"></a>
						</div>
				</div>
			</div>

	</div>

<?php get_footer();?>
