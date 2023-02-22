<article id="post-<?php the_ID(); ?>" <?php post_class( 'rounded-md w-full lg:w-[402px] lg:bg-neutral-100 lg:dark:bg-neutral-900 lg:shadow-custom dark:shadow-cyan-900 hover:!shadow-teal-500 lg:snap-center lg:hover:-translate-y-1 transition-transform duration-300' ); ?>>

	<header class="entry-header mb-4  h-full relative">
		<?php if( has_post_thumbnail() ) : ?>
			<a href="<?php echo the_permalink();?>">
				<?php echo the_post_thumbnail('medium', $attr = ['class' => 'rounded-md !aspect-[4/3] h-[313px] w-full object-cover group']) ;?>
			</a>
		<?php else: ?>
			<a href="<?php echo the_permalink();?>">
				<div class="rounded-md !aspect-[4/3] h-[313px] w-full bg-light dark:bg-dark !z-50"></div>
			</a>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl mx-1 lg:mx-4 "><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class=" mx-1 lg:mx-4  pb-1">
			<?php echo get_the_excerpt();?>
		</p>
		
		<div class="hidden entry-date absolute bottom-5 left-0 bg-gray-100 dark:bg-dark  p-2 px-3 rounded-lg !text-sm ml-4">
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>	
	</header>

	<hr class="block lg:hidden border-gray-200 dark:border-cyan-900 !w-full">

</article>

