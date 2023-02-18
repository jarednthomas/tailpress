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

<body <?php body_class( 'bg-white dark:bg-black text-gray-900 dark:text-light antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="sticky top-0 w-full z-50">

			<div class="sm:flex sm:justify-between sm:items-center bg-white dark:bg-black transition-all duration-150 py-6 px-4 pr-6 sm:px-6 sm:pr-10">
				<div class="flex justify-between items-center">

					<div class="flex items-center">

						<?php // Site Logo
						$site_logo_url = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ) , 'thumbnail' );
						if( !empty( $site_logo_url ) ): ?>
						<a href="/">
							<div class="flex items-center">
								<img class="object-contain w-12 h-12 transition-all ease-linear duration-100 hover:scale-110 rounded-full z-50" src="<?php echo $site_logo_url;?>" alt="" srcset="">
								<h1 class="text-xl font-bold mb-0 ml-4 cursor-pointer select-none">
									<span class="bg-clip-text text-transparent bg-gradient-to-r from-primary dark:from-secondary to-secondary dark:to-primary">
										<?php echo "Jared Thomas";?>
									</span>
								</h1>
							</div>
						</a>
						<?php endif; ?>

						<div class="flex justify-center px-4">
							<div class="w-10 h-5 relative">
								<div id="darkModeToggle" class="absolute bg-white dark:bg-black hover:bg-light rounded-md w-full h-full hover:cursor-pointer transition-all ease-in-out"></div>
							</div>
						</div>

					</div>


					<div class="sm:hidden">
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
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 sm:mt-0 sm:p-0 sm:bg-transparent sm:block',
							'menu_class'      => 'sm:flex sm:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'sm:mx-4 font-bold cursor-pointer',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>

			<div data-aos="remove-shadow" data-aos-anchor-placement="top-top" data-aos-duration="100" data-aos-offset="20" class="absolute inset-0 z-10 h-[96px]"></div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php // Tailpress hero ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
