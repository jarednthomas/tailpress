<?php get_header( 'modern' ); 
// ccpp( get_queried_object() );
?>

<div class="px-4 sm:px-8 content-start-padding lg:container mx-auto pb-12">
	<?php if ( have_posts() ) : ?>
		<div class="flex flex-wrap gap-[2rem] gap-y-[3rem] lg:gap-y-24 mx-auto !max-w-content pt-2 lg:pt-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'blog-cards'); ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>

<?php
get_footer();
