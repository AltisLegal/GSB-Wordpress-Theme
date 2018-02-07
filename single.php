<?php get_header(); ?>
<div class="row-fluid row--bg-grey">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<div class="post--single">
	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-inner">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			<!-- post title -->
			<h2><?php the_title(); ?></h2>
			<!-- /post title -->
			<!-- post details -->
			<p><?php echo get_the_date(); ?></p>
			<!-- /post details -->
			<?php the_content(); // Dynamic Content ?>
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

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