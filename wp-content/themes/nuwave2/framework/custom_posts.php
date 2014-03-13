<?php
register_post_type(
	'inventory', 
	array(	
		'label' => 'Inventory',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'inventory'),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array(
			'title','editor','excerpt'
		)
	) 
);

register_post_type(
	'wave_runners', 
	array(	
		'label' => 'Wave Runner',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'wave-runners'),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array(
			'title','editor','excerpt'
		)
	) 
);

register_post_type(
	'yt_videos', 
	array(	
		'label' => 'YouTube Videos',
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug' => 'yt-videos'),
		'query_var' => true,
		'exclude_from_search' => false,
		'supports' => array(
			'title','editor'
		)
	) 
);

register_taxonomy(
	'manufacturers',
	array (
		0 => 'inventory',
	),
	array( 
		'hierarchical' => true, 
		'label' => 'Manufacturers',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'manufacturers'),
		'singular_label' => 'Manufacturer'
	) 
);

register_taxonomy(
	'wave_manufacturers',
	array (
		0 => 'inventory',
	),
	array( 
		'hierarchical' => true, 
		'label' => 'Manufacturers',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'wave-manufacturers'),
		'singular_label' => 'Manufacturer'
	) 
);