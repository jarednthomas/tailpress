<?php get_header( 'modern' ); 
// ccpp( get_queried_object() );
?>

<div class="px-4 sm:px-8 pt-4">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'blog-cards'); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
