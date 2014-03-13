<?php

$args = array( 'post_type' => 'inventory', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1 );
$boats = get_posts( $args );

foreach( $boats as $boat )
{
	echo '<div class="sb-inventory">';
		echo '<a href="'. get_permalink( $boat->ID ) .'">';
			echo '<img src="'. timthumb( get_field('main_image', $boat->ID), 270, null, false ) .'" />';
		echo '</a>';
		echo '<div class="content">';
			echo '<h5>'. get_the_title( $boat->ID ) .'</h5>';
			echo '<p>Price: '. get_field('price', $boat->ID) .'</p>';
			echo '<p><a href="'. get_permalink( $boat->ID ) .'">View Details</a></p>';
		echo '</div>';
	echo '</div>';	
}
