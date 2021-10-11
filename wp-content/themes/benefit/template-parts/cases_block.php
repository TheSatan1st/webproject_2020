
<?php
	$mycat = get_field('id_cats');

	$myposts = get_posts( array(
	'posts_per_page' => 3,
	'category' => $mycat
	) );
	foreach( $myposts as $post ){ setup_postdata($post);
		?>
		<div class="story my-slide">	
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
	<div class="navi">
		<?php foreach( $myposts as $post ){ setup_postdata($post);?>
					
				<div>
					<span></span>
				</div>
		<?php
	}
	wp_reset_postdata();
	?>
		</div>	

			