<?php get_header(); ?>
<section class="inside-pages">
	<div class="row">
		<article>
			<div itemscope itemtype ="http://schema.org/CreativeWork">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
					<?php get_template_part('meta','data'); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div><!-- end CreativeWork -->
		</article><!-- end Article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>