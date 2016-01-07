<?php
if ( is_home() ) :
	get_header( 'home' );
else :
	get_header();
endif;
?>
<main>
	<div class="highlighted_accommodations">
		<div class="container">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'DBK' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'DBK' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
		</div>
	</div>	
</main>
<?php
if ( is_home() ) :
	get_sidebar('home');
else :
	get_sidebar();
endif;
?>

<?php get_footer(); ?>
