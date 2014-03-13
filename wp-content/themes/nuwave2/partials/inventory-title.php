<div id="page-title">
	<div class="wrapper">
		<?php 
		echo '<h2><img src="'. get_bloginfo('template_url') .'/images/title-inventory.png" alt="' . get_the_title() . '" /></h2>';
		if( get_field('sub_title') )
			echo '<h3 class="sub-title">'. get_field('sub_title') .'</h3>';
		?>
	</div><!-- /.wrapper -->
</div><!-- /#page-title -->