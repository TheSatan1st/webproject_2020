<?php
    /* Архив */
	get_header();
	get_template_part('template-parts/breadcrumbs');
	
?>	
	
	
	<div class="page_cases shadow padding">
		<?php the_archive_title( '<h1>', '</h1>' );?>

		<div class="cases_tabs">
			<a href="" class="tabs_adv">
				<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'ADV';
				}
				else {
					echo 'Реклама';

				}
			 ?>
			</a>
			<a href="" class="tabs_design">
				<?php 
				$post_lang = pll_get_post_language( $post->ID );
				if ( $post_lang == 'en') {
					echo 'Design';
				}
				else {
					echo 'Дизайн';

				}
			 ?>
			</a>
		</div>
		<div class="cases_content active">
		<?php

			$myposts = get_posts( array(
			'posts_per_page' => -1,
			'category' => 58,62
			) );
			foreach( $myposts as $post ){ setup_postdata($post);
				?>
				<div class="story">	
					<a href="<?php the_permalink(); ?>">
						<div class="story_hover"></div>
							<div class="story_img"><?php the_post_thumbnail() ?></div>
							<div class="story_text">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div>
					</a>
					
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
		<div class="cases_content">
		<?php

			$myposts = get_posts( array(
			'posts_per_page' => -1,
			'category' => 60,64
			) );
			foreach( $myposts as $post ){ setup_postdata($post);
				?>
				<div class="story">	
					<a href="<?php the_permalink(); ?>">
						<div class="story_hover"></div>
							<div class="story_img"><?php the_post_thumbnail() ?></div>
							<div class="story_text">
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
						</div>
					</a>
					
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
	</div>	


<?php
	get_footer();
	
	

?>