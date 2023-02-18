<?php get_header( 'modern' ); 
?>

<div class="flex flex-col flex-grow h-[calc(100vh-185px)] justify-center items-center">
	<h1>Lotta space, only <a class="font-extrabold underline hover:no-underline hover:text-primary underline-offset-8" href="/blog">blog</a></h1>
</div>

<div class="hidden px-4 sm:px-8 content-start-padding">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
