<?php get_header(); ?>
<div class="row-fluid row--bg-grey">
	<div class="main-fluid content-padding--gen">
		<div class="row-fluid">
			<div class="span12">
				<ul class="grid--posts">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<li class="animated fadeInUp">
						<div class="card__post">
							<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<div class="card__thumb" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></div>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<p class="date"><?php echo get_the_date(); ?></p>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
							</article>
						</div>
					</li>
				<?php endwhile; ?>
				<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
				<?php endif; ?>
				<?php get_template_part('pagination'); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
