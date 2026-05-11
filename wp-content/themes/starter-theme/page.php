<?php get_header(); ?>

<main class="section page-section">
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="page-card reveal">
			<p class="eyebrow"><?php echo esc_html( get_the_title() ); ?></p>
			<h1 class="page-card__title"><?php the_title(); ?></h1>
			<div class="page-card__content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>