<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main class="main" role="main">
			<!-- section -->
			<section class="main-section">

				<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('home-article'); ?>>
					
					<div class="page-content">
						<?php the_content(); ?>
					</div>
			
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
		<!-- aside -->
		<?php get_sidebar(); ?>
		<!-- /aside -->
	</main>


<?php get_footer(); ?>
