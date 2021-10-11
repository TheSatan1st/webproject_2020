<?php
    /* Template Name: Услуги */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	
	
	<div class="page_services shadow padding">
	<h1><?php the_title(); ?></h1>
			<?php get_template_part('template-parts/services_list');?>	
	</div>	
		
	
<?php
	get_footer();
	
	

?>