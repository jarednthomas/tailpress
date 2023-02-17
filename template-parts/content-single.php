<article id="post-<?php the_ID(); ?>" <?php post_class( 'pb-12' ); ?>>

	<header class="entry-header mb-6">
		<h1 class="entry-title -ml-[2px] !mb-0"><?php echo get_the_title(); ?></h1>
		<p class="entry-excerpt"><?php echo get_the_excerpt(); ?></p>
		<div class="bg-gray-200 dark:bg-dark inline-block p-2 px-4 rounded-lg">
			<p class="inline-block mr-2 !mb-0">Published: </p><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>
	</header>

	<?php if( has_post_thumbnail() ) : ?>
		<div data-aos="fade" data-aos-duration="1000" class="post_thumbnail_wrapper">
			<?php echo the_post_thumbnail('full',[ 'class' => 'lg:rounded-md'] ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
