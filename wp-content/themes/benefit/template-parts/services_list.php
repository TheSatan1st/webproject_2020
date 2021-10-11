<div class="our_services_inner">
	<?php if( have_rows('servises') ): ?>
		<?php while( have_rows('servises') ): the_row(); 

					// переменные
					$serv_ico = get_sub_field('serv_ico');
					$serv_name = get_sub_field('serv_name');
					$serv_link = get_sub_field('serv_link');

					?>

					<div class="service_item"><a href="<?php echo $serv_link ; ?>"><img src="<?php echo $serv_ico ; ?>" alt=""><span><?php echo $serv_name ; ?></span></a></div>
	<?php endwhile; ?>


			<?php endif; ?>
</div>