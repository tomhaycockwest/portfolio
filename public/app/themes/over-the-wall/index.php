<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="page-generic">

			<article <?php post_class() ?>>

				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

			</article>

		</div>

	<?php endwhile; endif; ?>

<?php get_footer();
