<?php get_header(); ?>
<section class="inside-pages">
	<div class="row">
	<article>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>