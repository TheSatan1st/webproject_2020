<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clearservise
 */

?>

	<div id="post-<?php the_ID(); ?>" class="story">
		<a href="<?php the_permalink(); ?>">
			<div class="story_hover"></div>
				<div class="story_img"><?php the_post_thumbnail() ?></div>
				<div class="story_text">
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
				</div>
		</a>
    </div>