<?php 
	get_header(); 
	get_template_part('template-parts/breadcrumbs');	
?>


<div class="vacancy_banner padding shadow">

		<div class="vacancy_left">
			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
		</div>
		
		<div class="vacancy_right">
			<?php echo get_the_post_thumbnail() ?>
		</div>
</div>




<div class="vacancy_conditions">
	<div class="vacancy_requirements padding shadow"><?php  echo get_field('vc-col1'); ?></div>
	<div class="vacancy_duties padding shadow"><?php  echo get_field('vc-col2'); ?></div>

</div>

<div id="vacancy-form" class="form-block shadow">
    

    <h2 class="h2">
			<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'Apply for job';
				}
				else {
					echo 'Откликнуться на вакансию';

				}
			 ?>    	
    </h2>

      <span class="after_title">
 			<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'Fill the form or contact us in the convenient way';
				}
				else {
					echo 'Заполните форму или свяжитесь с нами любым удобным способом';

				}
			 ?>     	
      </span>
      <div class="flex-row item-center justify">
      	<div class="col_form">
			<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo do_shortcode( '[contact-form-7 id="1708" title="Ответ на вакансию англ"]' );
				}
				else {
					echo do_shortcode( '[contact-form-7 id="1707" title="Ответ на вакансию"]' );
				}
			 ?>
        	
        </div>
        <div class="ore">			
        	<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'or';
				}
				else {
					echo 'или';

				}
			 ?>
        </div>
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