<?php
	get_header();
	get_template_part('breadcrumbs');
	
?>	

	<div class="simple_page padding shadow">
		
		<h1><?php the_title(); ?></h1>
		
		<?php the_content();?>
		
	</div>







<?php 

 get_footer();


?>