<article id="post-<?php the_ID(); ?>" <?php post_class( 'pb-12' ); ?>>

	<header class="entry-header pt-8 pb-6">
		<h1 class="entry-title -ml-[2px] !mb-0"><?php echo get_the_title(); ?></h1>
		<p class="entry-excerpt"><?php echo get_the_excerpt(); ?></p>
		<div class="bg-gray-300 inline-block p-2 px-4 rounded-lg">
			<p class="inline-block mr-2 !mb-0">Published: </p><time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( ); ?></time>
		</div>
	</header>

	<div data-aos="fade" class="post_thumbnail_wrapper">
		<?php echo the_post_thumbnail('full',[ 'class' => 'lg:rounded-lg'] ); ?>
	</div>

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
