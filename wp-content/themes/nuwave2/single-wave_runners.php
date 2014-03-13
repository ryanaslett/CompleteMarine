<?php 
/*
|---------------------------------------------------------------------
| Default Inventory Layout
|---------------------------------------------------------------------
*/
get_header();
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/inventory','title') ?>
				
<section id="main">
	<div class="wrapper clearfix">

		<article id="block">
			<?php get_template_part('partials/inventory','slider') ?>
			<?php the_content() ?>
		</article><!-- /#block -->

		<?php get_sidebar() ?>
		
	</div><!-- /.wrapper -->
</section><!-- /#main -->

<?php endwhile; ?>
<?php get_footer(); ?>