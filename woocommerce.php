<?php get_header(); ?>
<section class="inside-pages">
	<div class="row">
		<article>
			<div itemscope itemtype ="http://schema.org/CreativeWork">
				<?php woocommerce_content() ?>
			</div><!-- end CreativeWork -->
		</article><!-- end article -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>