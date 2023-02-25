<article id="post-<?php the_ID(); ?>" <?php post_class( 'pb-12' ); ?>>

	<?php if( !is_home() && !is_front_page() ) : ?>

		<header data-aos="fade" class="entry-header pb-5 mb-12 border-b border-neutral-300 dark:border-neutral-700">
			<h1 id="text" class="entry-title -ml-[2px] !mb-1"><?php echo get_the_title(); ?></h1>
			<div id="cursor"></div>
			<p class="entry-excerpt"><?php echo get_the_excerpt(); ?></p>
			<?php if( has_post_thumbnail() ) : ?>
				<div data-aos="fade" data-aos-duration="1000" class="post_thumbnail_wrapper">
					<?php echo the_post_thumbnail( 'full',  $attr = [ 'class' => 'rounded-md'] ); ?>
				</div>
			<?php endif; ?>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date( 'M d, Y' ); ?></time>

		</header>

		<script>
			// const title = document.querySelector('.entry-title');
      // const config = {
      //       wait : 300,
      //       speed : 74,
      // }
      // const content = title.textContent.trim();
      // title.textContent = '';

      // let count = 0;
      // setTimeout(() => {
      //       const counter = setInterval(() =>{
      //             title.textContent += content[count];
      //             count++;
      //             if(count >= content.length) {
      //                   clearInterval(counter)
      //                   }
      //       },config.speed);
      // },config.wait)
		</script>

		


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
