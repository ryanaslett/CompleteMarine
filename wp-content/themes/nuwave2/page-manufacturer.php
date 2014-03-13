<?php 
/*
|---------------------------------------------------------------------
| Template Name: Manufacturer Boats
|---------------------------------------------------------------------
*/
get_header();
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/page','title') ?>
				
<section id="main">
	<div class="wrapper clearfix">

		<article id="block">
			<?php the_content() ?>
			<?php get_template_part('partials/page','manufacturer') ?>
		</article><!-- /#block -->

		<?php get_sidebar('inventory') ?>
		
	</div><!-- /.wrapper -->
</section><!-- /#main -->

<?php endwhile; ?>
<?php get_footer(); ?>