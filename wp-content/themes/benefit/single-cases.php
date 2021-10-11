<?php 
	get_header(); 
	get_template_part('template-parts/breadcrumbs');	
?>


<div class="page_banner padding shadow">

		<div class="page_banner_text">
			<h1><?php the_title(); ?></h1>
			<h2><?php the_excerpt(); ?></h2>
			<div class="banner_aim"><?php  echo get_field('cel'); ?></div>
			<div class="banner_result"><?php  echo get_field('result'); ?></div>
			<div class="banner_services"><?php  echo get_field('serv'); ?></div>
		</div>
		
		<div class="page_banner_img">
			<div class="banner_img_img">
			<img src="<?php  echo get_field('caseimg'); ?>" alt="">
			</div>
		</div>
</div>




<div class="case_page_content padding shadow">
	<?php the_content();?>

</div>


<?php
	get_footer();
?>