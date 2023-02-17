<article data-aos="fade-up" data-aos-duration="700" id="post-<?php the_ID(); ?>" <?php post_class( 'rounded-md w-full sm:w-[calc((theme(screens.lg)/2)-2rem)] shadow-lg dark:shadow-[#161616]' ); ?>>

	<header class="entry-header mb-4  h-full relative">
		<a href="<?php echo the_permalink();?>">
			<?php echo the_post_thumbnail('large', $attr = ['class' => 'rounded-md !aspect-4/3 h-[313px] w-full object-cover']) ;?>
		</a>
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl mx-4 pb-[80px]"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="entry-date absolute bottom-5 left-0 bg-gray-200 dark:bg-dark inline-block p-2 px-4 rounded-lg !text-sm ml-4">
			<p class=" inline-block mr-2 !mb-0 !text-sm">Published: </p><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>	
	</header>

</article>
