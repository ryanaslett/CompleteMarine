
	<?php if( !is_home() ): ?>
	<div class="footer-top">
		<div class="wrapper clearfix">

			<div class="col left">
				<h3>Complete Marine</h3>
				<p><?php the_field('footer_description','options') ?></p>
			</div><!-- /.col -->

			<div class="col right">
				<div class="used-boats">
					<img src="<?php timthumb(get_bloginfo('template_url') . '/images/used_boats.jpg',270, 150) ?>" alt="">
					<h5>Used Boats</h5>
					<p><a href="<?php echo get_permalink( 6 ) ?>">View Our Inventory</a></p>
				</div><!-- /.used-boats -->
			</div>

		</div><!-- /.wrapper -->
	</div><!-- /.footer-top -->
	<?php endif ?>

	<footer role="contentinfo">
		<div class="wrapper">
			<p class="pull-right"><a href="http://nuwavecommerce.com" class="nuwave"><span>Website Designed and Developed By: 
			</span>NuWave Commerce</a></p>
			<p class="copyright">Copyright &copy; <?= date('Y') ?> Complete Marine. All Right Reserved</p>
		</div>
	</footer><!-- footer -->
		
	<?php wp_footer(); ?>
	
	</body>
</html>