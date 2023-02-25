
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-white dark:bg-neutral-900 py-3" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<div class="text-gray-500 dark:text-light flex items-center w-full pl-2">
		<div id="darkModeToggle" class="rounded-full w-8 h-8 m-4 bg-gray-100 dark:bg-dark hover:cursor-pointer transition-all ease-in-out relative"></div>

		<p class="mb-0 !text-sm">&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?></p>
	</div>

</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
