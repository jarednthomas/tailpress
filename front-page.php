<?php get_header( 'modern' ); ?>
<?php get_template_part('template-parts/sections/hero' ); ?>

<div class="hidden px-4 sm:px-8 content-start-padding">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
