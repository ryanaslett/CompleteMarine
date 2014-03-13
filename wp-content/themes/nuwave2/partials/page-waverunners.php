<div id="inventory" class="wave-runners">
<?php
$manufacturer = isset( $_GET['man'] ) ? $_GET['man'] : '';

$args = array( 'post_type'  => 'wave_runners', 'posts_per_page' => -1 );
if( $manufacturer ) $args['wave_manufacturers'] = $manufacturer;

$boats = get_posts( $args );
foreach( $boats as $boat )
{
	$post_data = get_post( $boat->ID );

	echo '<div class="item clearfix">';
		echo '<a href="'. get_permalink( $boat->ID ) .'"><img class="alignleft" src="'. timthumb( get_field('main_image',$boat->ID), 250, null, false) .'" /></a>';
		echo '<div class="content">';
			echo '<h4>' . get_the_title( $boat->ID ) . '</h4>';
			echo '<p>'. $post_data->post_excerpt .'... <a href="'. get_permalink( $boat->ID ) .'">View Details</a></p>';
			echo '<ul class="item-details no-list clearfix">';
				echo '<li><div><h6>'. get_field('price',$boat->ID) .'</h6><p>Price</p></div></li>';
				echo '<li><div><h6>'. get_field('year',$boat->ID) .'</h6><p>Year</p></div></li>';
			echo '</ul>';
		echo '</div>';
	echo '</div>';
}
?>
</div><!-- /#inventory -->