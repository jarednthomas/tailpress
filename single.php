<?php get_header( 'modern' ); ?>

<div class="px-4 sm:px-8 content-start-padding">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php if ( comments_open() || get_comments_number() ) {comments_template();} ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
	
<?php
get_footer();
