<aside id="sidebar">

	<h5>Manufacturers</h5>
	<ul id="cat-list" class="no-list">
		<?php 
		$cats = nw_category_array('wave_manufacturers');
		foreach( $cats as $cat )
		{
			echo '<li><a href="'. get_permalink( $post->ID ) . '?man=' . $cat->slug .'">'. $cat->name .' ('. $cat->count .')</a></li>';
		}
		?>
	</ul><!-- /#cat-list -->

	<h5>Our Location</h5>
	<p class="address"><?php the_field('address','options') ?></p>
	<p class="phone">P: <?php the_field('phone','options') ?></p>

	<h5>Latest Inventory</h5>
	<?php get_template_part('partials/sb','latest') ?>
	
</aside><!-- /#sidebar -->