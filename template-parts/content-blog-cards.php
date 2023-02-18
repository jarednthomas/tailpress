<article id="post-<?php the_ID(); ?>" <?php post_class( 'rounded-md w-full lg:w-[402px] lg:bg-gray-100 lg:dark:bg-dark lg:shadow-custom dark:shadow-cyan-900 hover:!shadow-secondary lg:snap-center lg:hover:-translate-y-1 transition-transform duration-300' ); ?>>

	<header class="entry-header mb-4  h-full relative">
		<a href="<?php echo the_permalink();?>">
			<?php echo the_post_thumbnail('medium', $attr = ['class' => 'rounded-md !aspect-4/3 h-[313px] w-full object-cover group']) ;?>
		</a>
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl mx-1 lg:mx-4 pb-[80px]"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="hidden entry-date absolute bottom-5 left-0 bg-gray-100 dark:bg-dark  p-2 px-3 rounded-lg !text-sm ml-4">
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>	
	</header>

	<hr class="block lg:hidden border-gray-200 dark:border-cyan-900 !w-full">

</article>

