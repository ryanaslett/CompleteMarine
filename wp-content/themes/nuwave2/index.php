<?php
/*
|---------------------------------------------------------------------
| Homepage Template
|---------------------------------------------------------------------
*/

get_header(); ?>

<?php 
	$the_query = new WP_Query( "page_id=2" );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<section id="main-home">

	<div class="wrapper">

		<div id="hero">
			<h3 class="replace welcome">Welcome To</h3>
			<h2 class="replace cm">Complete Marine</h2>
			<p>Complete Marine is a full service, new and used boat dealership located in Phoenix, Arizona. Complete Marine offers five brands of boats and jet ski’s: Bayliner, Hurricane, Skeeter, Triton, Yamaha and WaveRunner PWC’s. From entry level boaters to the experienced boating professional, we have a wide range of boats that will fit the needs and budgets of our clients.</p>
		</div><!-- /#hero -->

		<nav id="quicklinks">
			<ul class="no-list clearfix bebas">
				<li><a href="<?php echo get_permalink( 102 ) ?>?man=bayliner" class="bayliner replace"><span>Bayliner</span></a></li>
				<li><a href="<?php echo get_permalink( 102 ) ?>?man=lowe" class="lowe replace"><span>Lowe</span></a></li>
				<li><a href="<?php echo get_permalink( 102 ) ?>?man=skeeter" class="skeeter replace"><span>Skeeter</span></a></li>
				<li><a href="<?php echo get_permalink( 102 ) ?>?man=triton" class="triton replace"><span>Triton</span></a></li>
				<li><a href="<?php echo get_permalink( 102 ) ?>?man=yamaha" class="yamaha replace"><span>Yamaha</span></a></li>
				<li><a href="<?php echo get_permalink( 102 ) ?>?wave=1" class="used replace"><span>Used</span></a></li>
			</ul>
		</nav><!-- /#quicklinks -->

        <p style="font-size:14px;">We offer numerous services in order to keep your boat running the way it should. From regular maintenance to major repairs, Complete Marine has a team of certified mechanics that specialize in repairing your boat. We are committed to ensuring your boating is trouble free by performing thorough inspections on all used boats, correcting any issues before the boat leaves our dealership.</p>

	</div><!-- /.wrapper -->

</section><!-- /#main -->

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>