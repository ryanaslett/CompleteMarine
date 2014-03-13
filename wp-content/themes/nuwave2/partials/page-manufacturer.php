<div id="inventory">
<?php
$manufacturer = isset( $_GET['man'] ) ? $_GET['man'] : '';
$type = isset( $_GET['wave'] ) ? 'wave_runners' : 'inventory';

$args = array( 'post_type'  => $type );
if( $manufacturer ) $args['manufacturers'] = $manufacturer;

$boats = get_posts( $args );
if( !count($boats) )
{
	echo '<h2>We apologize, we currently do not have this manufacturer in stock.</h2>';
}
else
{
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
					echo '<li><div><h6>'. get_field('length',$boat->ID) .'</h6><p>Length</p></div></li>';
				echo '</ul>';
			echo '</div>';
		echo '</div>';
	}
}
?>
</div><!-- /#inventory -->