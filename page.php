<?php get_header(); ?>
<div class="row-fluid row--bg-grey">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<div class="post--single">
					<main role="main">
						<!-- section -->
						<section>
							<h1><?php the_title(); ?></h1>
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
						</section>
						<!-- /section -->
					</main>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
