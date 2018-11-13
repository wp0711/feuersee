<?php
/**
 * Template Name: Meta Page
 *
 * This is the page template for displaying Custom Featured Page. It's basically the same that
 * front-page.php template. I leave this just in case someone wants to have same kind landing page.
 *
 * @package Checathlon
 */

get_header(); ?>

	<div id="primary" class="content-area main-padding">
		<main id="main" class="site-main main-width" role="main">

			<?php
				while ( have_posts() ) : the_post();
			?>

				<header class="page-header">

					<?php the_title( '<h1 class="page-title title-font no-margin-bottom text-center text-italic">', '</h1>' ); ?>

					<?php
					$content = trim( get_the_content() ); // Get page content.
					if( '' !== $content ) : ?>
						<div class="entry-front-page-content archive-description text-center soft-color">
							<?php the_content(); ?>
						</div><!-- .entry-front-page-content -->
					<?php endif; ?>

				</header><!-- .page-header -->

			<?php
			endwhile; // End of the loop.

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
