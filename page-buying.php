<?php get_header(); ?>
<div class="row-fluid row--hero row--hero__property">
		<header class="main-fluid hero__content">
				<h1 class="hero__title"><?php the_title(); ?></h1>
		</header>
</div>
<div class="main-fluid content-padding--gen">
	<div class="row-fluid">
		<div class="span10">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

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
		</div>
	</div>
</div>
<?php get_footer(); ?>
