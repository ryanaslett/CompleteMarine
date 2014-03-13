<aside id="sidebar">
	<h5>Our Location</h5>
	<p class="address"><?php the_field('address','options') ?></p>
	<p class="phone">P: <?php the_field('phone','options') ?></p>

	<p><a href="<?php echo get_permalink( 84 ) ?>" class="btn">Contact Us</a></p>

	<h5>Latest Inventory</h5>
	<?php get_template_part('partials/sb','latest') ?>
	
</aside><!-- /#sidebar -->