<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

  add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
	add_post_type_support ('page', 'excerpt');
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );



/**
 * Theme Enqueue Scripts | Animate on Scroll (AOS) JS 
 * https://github.com/michalsnik/aos/tree/v2
 */
function cc_theme_aos_enqueue() {
	if ( wp_get_environment_type() === 'local' || true ) {
			wp_enqueue_style('AOS_animate', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false, null);
			wp_enqueue_script('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, null, true);
			wp_enqueue_script('aos-init', get_template_directory_uri() . '/js/aos-init.js', array( 'AOS' ), null, true);
	}

}
add_action( 'wp_enqueue_scripts', 'cc_theme_aos_enqueue' );




/**
 * Commission Creative Pretty Printer
 *
 * @param  mixed $obj
 * @param  mixed $label
 * @return void
 */
function ccpp( $obj, $label = '' ) {

	$data = json_encode( print_r( $obj,true ) );

	?>
	<style type="text/css">
		#bsdLogger {
		border-right: 2px solid #eee;
		position: fixed;
		top: 0;
		left: 0px;
		border-left: 4px solid #bbb;
		padding: 6px;
		background: white;
		color: #444;
		z-index: 999;
		font-size: 1rem;
		width: 450px;
		height: 100vh;
		overflow: scroll;
		}

		.admin-bar #bsdLogger {
			top: 32px;
			height: calc( 100vh - 32px );
		}
	</style>

	<script type="text/javascript">

		var doStuff = function(){
            
			var obj = <?php echo $data; ?>;
			var logger = document.getElementById('bsdLogger');

			if (!logger) {
				logger = document.createElement('div');
				logger.id = 'bsdLogger';
				document.body.appendChild(logger);
			}

            var pre = document.createElement('pre');
			var h2 = document.createElement('h2');
			pre.innerHTML = obj;
			h2.innerHTML = '<?php echo addslashes($label); ?>';
			logger.appendChild(h2);
			logger.appendChild(pre);
		};

		window.addEventListener ("DOMContentLoaded", doStuff, false);

	</script>

	<?php
}
