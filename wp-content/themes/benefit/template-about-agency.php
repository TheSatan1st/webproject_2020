<?php
    /* Template Name: Об агентстве */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	

<div class="page_agency shadow padding">
	<h1><?php the_title(); ?></h1>
	<ul>
	<li><a href="<?php  echo get_field('about_link'); ?>"><div class="page_agency_hover"></div><img src="/wp-content/uploads/2021/01/about_us.jpg" alt="About us pic">
		<span><?php  echo get_field('about_title'); ?></span></a></li>
		
	<li><a href="<?php  echo get_field('referal_link'); ?>"><div class="page_agency_hover"></div><img src="/wp-content/uploads/2021/01/vacancies.jpg" alt="Vacancies pic">
		<span><?php  echo get_field('referal_title'); ?></span></a></li>
		
	<li><a href="<?php  echo get_field('vacancy_link'); ?>"><div class="page_agency_hover"></div><img src="/wp-content/uploads/2021/01/ref.jpg" alt="Referral pic">
		<span><?php  echo get_field('vacancy_title'); ?></span></a></li>
	</ul>

</div>
	


	
	
<?php
	get_footer();
	
	

?>