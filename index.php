<?php get_header( 'modern' ); 
// ccpp( get_queried_object() );
?>

<div class="px-4 sm:px-8 content-start-padding pb-20">
	<?php if ( have_posts() ) : ?>
		<div class="flex flex-wrap gap-[2em] gap-y-[3em] mx-auto max-w-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'blog-cards'); ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<?php
get_footer();
