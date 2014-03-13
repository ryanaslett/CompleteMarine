<?php 
/*
|---------------------------------------------------------------------
| Template Name: Video Page
|---------------------------------------------------------------------
*/
get_header();
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/page','title') ?>
				
<section id="main">
	<div class="wrapper clearfix">

		<article id="block">
			<?php the_content() ?>
			<?php get_template_part('partials/page','videos') ?>
		</article><!-- /#block -->

		<?php get_sidebar() ?>
		
	</div><!-- /.wrapper -->
</section><!-- /#main -->

<?php endwhile; ?>
<?php get_footer(); ?>