<?php
    /* Архив вакансий */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	
	
	<div class="page_cases shadow padding">
		<?php the_archive_title( '<h1>', '</h1>' );?>
		
		<div class="cases_content active">
		<?php if ( have_posts() ) : 
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>	
		</div>
	</div>	
		<?php the_posts_navigation(); ?>

<?php
	get_footer();
	
	

?>