<article id="post-<?php the_ID(); ?>" <?php post_class( 'rounded-md w-full lg:w-[418px] lg:shadow-custom dark:shadow-cyan-900 hover:!shadow-secondary lg:snap-center' ); ?>>

	<header class="entry-header mb-4  h-full relative">
		<a href="<?php echo the_permalink();?>">
			<?php echo the_post_thumbnail('medium', $attr = ['class' => 'rounded-md !aspect-4/3 h-[313px] w-full object-cover']) ;?>
		</a>
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl mx-4 pb-[80px]"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-date absolute bottom-5 left-0 bg-gray-100 dark:bg-dark inline-block p-2 px-3 rounded-lg !text-sm ml-4">
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>	
	</header>

	<hr class="block lg:hidden border-gray-200 dark:border-cyan-900 !w-full">

</article>

