<?php
/*
|---------------------------------------------------------------------
| Timthumb custom sizes
|---------------------------------------------------------------------
*/
function timthumb($src,$w = false,$h = false, $echo = true){

	$base = get_bloginfo('url');
	if($w && $h) 
	{
		$image = $base . "/resize/{$w}x{$h}/r"; 	
	} 
	elseif($w) 
	{
		$image = $base . "/resize/w/{$w}/r"; 
	} 
	elseif($h) 
	{
		$image = $base . "/resize/h/{$h}/r"; 
	}

	$image .= str_replace($base, '', $src);
	
	if( !$echo ) return $image;
	echo $image;
}

function nw_category_array($cat){
	$args = array(
		'hide_empty'   => 0,
		'hierarchical' => 0,
		'parent'       => 0,
		'taxonomy'     => $cat
	);
	$catArray = get_categories($args);
	return $catArray;
}

/*
|---------------------------------------------------------------------
| Trim content set to custom limit
|---------------------------------------------------------------------
*/
function neat_trim($str, $n, $delim='...') {
   $len = strlen($str);
   if ($len > $n) 
   {
       preg_match('/(.{' . $n . '}.*?)\b/', $str, $matches);
       return rtrim($matches[1]) . $delim;
   }
   else 
   {
       return $str;
   } 
}

/*
|---------------------------------------------------------------------
| Retrieve array of post's parent(s)
|---------------------------------------------------------------------
*/
function get_post_parents($post_id){
	$parents = array();
	$parent_search = true;
	
	while($parent_search)
	{
		$parent_id = get_post($post_id)->post_parent;
		if($parent_id != 0)
		{
			$parents[] = $parent_id;
			$post_id = $parent_id;
		}
		else
		{
			$parent_search = false;
		}
	}
	return $parents;
}

/*
|---------------------------------------------------------------------
| Get page's template
|---------------------------------------------------------------------
*/
function get_curr_template($post_id) {
	$template = get_post_meta($post->ID, '_wp_page_template', true);
	return $template;
}