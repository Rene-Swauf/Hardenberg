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

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		</div>
	</div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
