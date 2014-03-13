<div id="page-title">
	<div class="wrapper">
		<?php 
		if( get_field('page_title') )
			echo '<h2><img src="'. get_field('page_title') .'" alt="' . get_the_title() . '" /></h2>';
		else
			echo '<h2>'. get_the_title() .'</h2>';

		if( get_field('sub_title') )
			echo '<h3 class="sub-title">'. get_field('sub_title') .'</h3>';
		?>
	</div><!-- /.wrapper -->
</div><!-- /#page-title -->