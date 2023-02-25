<?php get_header( 'modern' ); 
// ccpp( get_queried_object() );
?>

<div class="px-4 sm:px-8 content-start-padding lg:max-w-content mx-auto pb-24">
	<?php if ( have_posts() ) : ?>
		<div class="flex flex-wrap gap-[2rem] gap-y-[3rem] lg:gap-y-24">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'blog-cards'); ?>
			<?php endwhile; ?>
			<?php if( !empty( paginate_links() ) ): ?>
				<div class="pagination_wrapper text-right w-full snap-center">
					<?php echo paginate_links( array(
						'mid_size' => 2,
						'end_size' => 1,
						'prev_next' => true,
						'prev_text' => 'Previous',
						'next_text' => 'Next'
					)); 
					?>
				</div>
				<?php endif;?>
		</div>
	<?php endif; ?>

</div>

<?php
get_footer();
