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
			<ul class="item-details no-list">
			<?php 
				if( get_field('year') )  echo '<li><span>Year:</span> '. get_field('year') .'</li>';
				if( get_field('price') )  echo '<li><span>Price:</span> $'. get_field('price') .'</li>';
				if( get_field('length') )  echo '<li><span>Length:</span> '. get_field('length') .'</li>';
			?>
			</ul>
		</article><!-- /#block -->

		<?php get_sidebar() ?>
		
	</div><!-- /.wrapper -->
</section><!-- /#main -->

<?php endwhile; ?>
<?php get_footer(); ?>