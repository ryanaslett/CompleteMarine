<?php
echo '<div id="vid-list">';
	$args = array( 'post_type' => 'yt_videos', 'posts_per_page' => -1 );
	$videos = get_posts( $args );
	foreach( $videos as $video )
	{
		$vid_id = get_field('video_id', $video->ID);
		$vid = get_post( $video->ID );
		echo '<div class="video">';
			echo '<div class="player">';
				echo '<iframe width="560" height="315" src="http://www.youtube.com/embed/'. $vid_id .'" frameborder="0" allowfullscreen></iframe>';
			echo '</div>';
			echo '<h3>'. $vid->post_title .'</h3>';
			echo apply_filters('the_content', $vid->post_content);
		echo '</div>';
	}
echo '</div>';