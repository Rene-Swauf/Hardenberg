<?php get_header(); ?>

<main>
	<div class="hidden-xs">
		<div class="spacer40"></div>
		<div id="contentstart"></div>
	</div>
	<div class="highlighted_accommodations">
		<div class="container">
		<!-- section -->
		<section>
		
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		</div>
	</div>	
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
