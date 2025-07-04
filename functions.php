<?php
/**
 * to-starter-theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since to-starter-theme 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'to_starter_theme_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'to_starter_theme_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'to_starter_theme_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'to_starter_theme_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'to_starter_theme_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_enqueue_styles() {
		wp_enqueue_style(
			'to-starter-theme-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'to_starter_theme_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'to_starter_theme_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'to-starter-theme' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'to_starter_theme_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'to_starter_theme_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_pattern_categories() {

		register_block_pattern_category(
			'to_starter_theme_page',
			array(
				'label'       => __( 'Pages', 'to-starter-theme' ),
				'description' => __( 'A collection of full page layouts.', 'to-starter-theme' ),
			)
		);

		register_block_pattern_category(
			'to_starter_theme_post-format',
			array(
				'label'       => __( 'Post formats', 'to-starter-theme' ),
				'description' => __( 'A collection of post format patterns.', 'to-starter-theme' ),
			)
		);
	}
endif;
add_action( 'init', 'to_starter_theme_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'to_starter_theme_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_register_block_bindings() {
		register_block_bindings_source(
			'to-starter-theme/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'to-starter-theme' ),
				'get_value_callback' => 'to_starter_theme_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'to_starter_theme_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'to_starter_theme_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function to_starter_theme_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
