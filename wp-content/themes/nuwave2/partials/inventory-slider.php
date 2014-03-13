<?php

if( get_field('gallery') )
{
	echo '<div id="gallery" class="royalSlider rsDefault">';
	while( has_sub_field('gallery') )
	{
		$thumb = timthumb( get_sub_field('gallery_image'), 75, 75, false );
		echo '<img src="'. get_sub_field('gallery_image') .'" class="rsImg" ata-rsTmb="'. $thumb .'" />';
	}
	echo '</div>';
}