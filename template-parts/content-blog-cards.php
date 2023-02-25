<article id="post-<?php the_ID(); ?>" <?php post_class( 'rounded-md w-full lg:w-[402px] bg-transparent ' ); ?>>

	<header class="entry-header mb-4  h-full relative">
		<?php if( has_post_thumbnail() ) : ?>
			<a href="<?php echo the_permalink();?>">
				<?php echo the_post_thumbnail('medium', $attr = ['class' => 'shadow shadow-neutral-900 dark:shadow-light rounded-md !aspect-[16/9] h-auto w-full object-cover']) ;?>
			</a>
		<?php else: ?>
			<a href="<?php echo the_permalink();?>">
				<div class="rounded-md !aspect-[16/9] h-auto w-full bg-light dark:bg-dark !z-50"></div>
			</a>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<p class="hidden ">
			<?php echo get_the_excerpt();?>
		</p>
		<a class=" underline hover:no-underline" href="<?php echo the_permalink();?>">
			Read More
		</a>
		
		<div class="hidden entry-date absolute bottom-5 left-0 bg-gray-100 dark:bg-dark  p-2 px-3 rounded-lg !text-sm ml-4">
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>	
	</header>

	<hr class="hidden border-neutral-300 dark:border-neutral-800 !w-full">

</article>

