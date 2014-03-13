<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bx_styles.css" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
			
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
	
		<header role="banner" class="clearfix">
			<div class="wrapper">
			
			<h1><a class="replace" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?></a></h1>

			<ul id="social-media" class="alignright">
				<li><a href="<?php the_field('facebook','options') ?>" class="facebook replace" target="_blank">Facebook</a></li>		
				<li><a href="<?php the_field('twitter','options') ?>" class="twitter replace" target="_blank">Twitter</a></li>
			</ul><!-- /#social -->
		
			<nav id="access" role="navigation" class="shadow">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu', 'menu_class' => 'clearfix no-list' ) ); ?>
			</nav><!-- #access -->

			</div><!-- /.wrapper -->
		</header>