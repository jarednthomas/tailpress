<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<script>
	if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
		document.documentElement.classList.add('dark');
	} else {
  	document.documentElement.classList.remove('dark')
	}
	</script>
</head>

<body <?php body_class( 'bg-light-bg dark:bg-neutral-900 text-light-text dark:text-dark-text antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col ">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="sticky top-0 w-full z-50">

			<div class="flex justify-between items-center bg-light-bg dark:bg-neutral-900 bg-opacity-80 dark:bg-opacity-60 transition-all duration-150 py-4 px-4 pr-6 sm:px-6 sm:pr-10 z-50">
				<div class="flex justify-between items-center">

					<div class="flex items-center">
						<?php // Site Logo
						$site_logo_url = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ) , 'thumbnail' );
						if( !empty( $site_logo_url ) ): ?>
						<a href="/">
							<div class="flex items-center">
								<img class="object-contain w-12 h-12 transition-all ease-linear duration-100 hover:scale-110 rounded-full z-50" src="<?php echo $site_logo_url;?>" alt="" srcset="">
								<h1 class="text-xl font-extrabold mb-0 ml-4 cursor-pointer select-none">
									<span class="menu-item">
										<?php echo "Jared Thomas";?>
									</span>
								</h1>
							</div>
						</a>
						<?php endif; ?>
					</div>

					<div class="hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
					
				</div>

				

				<div class="flex items-center">
					

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'mt-0 p-0 bg-transparent block',
							'menu_class'      => 'flex -mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'mx-4 font-extrabold cursor-pointer',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>

	</header>

	<div id="content" class="site-content flex-grow">

		<?php // Tailpress hero ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
