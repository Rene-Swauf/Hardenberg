<?php
if ( is_home() ) :
	get_header( 'home' );
else :
	get_header();
endif;
?>
<main>
	<div class="hidden-xs">
		<div class="spacer40"></div>
		<div id="contentstart"></div>
	</div>
	<div class="highlighted_accommodations">
		<div class="container">
			<?php get_template_part('section-accommodaties'); ?>
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
