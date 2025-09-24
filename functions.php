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
if (! function_exists('to_starter_theme_post_format_setup')) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_post_format_setup()
	{
		add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));
	}
endif;
add_action('after_setup_theme', 'to_starter_theme_post_format_setup');

// Enqueue built assets from wp-scripts
if (! function_exists('to_starter_theme_enqueue_assets')) :
	/**
	 * Enqueue front-end assets built by wp-scripts.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_enqueue_assets()
	{
		// Load main theme styles
		$theme_asset = include get_theme_file_path('public/css/theme.asset.php');
		if ($theme_asset) {
			wp_enqueue_style(
				'to-starter-theme-style',
				get_theme_file_uri('public/css/theme.css'),
				$theme_asset['dependencies'],
				$theme_asset['version']
			);
		}

		// Load theme JavaScript
		$theme_js_asset = include get_theme_file_path('public/js/theme.asset.php');
		if ($theme_js_asset) {
			wp_enqueue_script(
				'to-starter-theme-script',
				get_theme_file_uri('public/js/theme.js'),
				$theme_js_asset['dependencies'],
				$theme_js_asset['version'],
				true
			);
		}

		// Load tour operator styles if plugin is active
		if (class_exists('Tour_Operator')) {
			$tour_operator_asset = include get_theme_file_path('public/css/tour-operator.asset.php');
			if ($tour_operator_asset) {
				wp_enqueue_style(
					'to-starter-theme-tour-operator',
					get_theme_file_uri('public/css/tour-operator.css'),
					array('to-starter-theme-style'),
					$tour_operator_asset['version']
				);
			}
		}

		// Load block styles
		$blocks_asset = include get_theme_file_path('public/css/blocks.asset.php');
		if ($blocks_asset) {
			wp_enqueue_style(
				'to-starter-theme-blocks',
				get_theme_file_uri('public/css/blocks.css'),
				array('to-starter-theme-style'),
				$blocks_asset['version']
			);
		}
	}
endif;
add_action('wp_enqueue_scripts', 'to_starter_theme_enqueue_assets');

// Enqueue editor assets
if (! function_exists('to_starter_theme_enqueue_editor_assets')) :
	/**
	 * Enqueue block editor assets built by wp-scripts.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_enqueue_editor_assets()
	{
		// Load editor JavaScript
		$editor_asset = include get_theme_file_path('public/js/editor.asset.php');
		if ($editor_asset) {
			wp_enqueue_script(
				'to-starter-theme-editor',
				get_theme_file_uri('public/js/editor.js'),
				$editor_asset['dependencies'],
				$editor_asset['version'],
				true
			);
		}

		// Load editor styles
		$editor_style_asset = include get_theme_file_path('public/css/editor.asset.php');
		if ($editor_style_asset) {
			wp_enqueue_style(
				'to-starter-theme-editor-style',
				get_theme_file_uri('public/css/editor.css'),
				$editor_style_asset['dependencies'],
				$editor_style_asset['version']
			);
		}
	}
endif;
add_action('enqueue_block_editor_assets', 'to_starter_theme_enqueue_editor_assets');

// Load editor stylesheets in block editor
if (! function_exists('to_starter_theme_editor_styles')) :
	/**
	 * Add editor styles for block editor.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_editor_styles()
	{
		// Add built CSS files to editor
		if (file_exists(get_theme_file_path('public/css/theme.css'))) {
			add_editor_style(get_theme_file_uri('public/css/theme.css'));
		}
		if (file_exists(get_theme_file_path('public/css/editor.css'))) {
			add_editor_style(get_theme_file_uri('public/css/editor.css'));
		}
	}
endif;
add_action('after_setup_theme', 'to_starter_theme_editor_styles');

// Enqueue admin assets
if (! function_exists('to_starter_theme_enqueue_admin_assets')) :
	/**
	 * Enqueue admin assets.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_enqueue_admin_assets()
	{
		// Load admin styles
		$admin_style_asset = include get_theme_file_path('public/css/admin.asset.php');
		if ($admin_style_asset) {
			wp_enqueue_style(
				'to-starter-theme-admin',
				get_theme_file_uri('public/css/admin.css'),
				array(),
				$admin_style_asset['version']
			);
		}

		// Load admin JavaScript
		$admin_js_asset = include get_theme_file_path('public/js/admin.asset.php');
		if ($admin_js_asset) {
			wp_enqueue_script(
				'to-starter-theme-admin-js',
				get_theme_file_uri('public/js/admin.js'),
				$admin_js_asset['dependencies'],
				$admin_js_asset['version'],
				true
			);
		}
	}
endif;
add_action('admin_enqueue_scripts', 'to_starter_theme_enqueue_admin_assets');

// Registers custom block styles.
if (! function_exists('to_starter_theme_block_styles')) :
	/**
	 * Registers custom block styles.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_block_styles()
	{
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __('Checkmark', 'to-starter-theme'),
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
add_action('init', 'to_starter_theme_block_styles');

// Registers pattern categories.
if (! function_exists('to_starter_theme_pattern_categories')) :
	/**
	 * Registers pattern categories.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_pattern_categories()
	{

		register_block_pattern_category(
			'to_starter_theme_page',
			array(
				'label'       => __('Pages', 'to-starter-theme'),
				'description' => __('A collection of full page layouts.', 'to-starter-theme'),
			)
		);

		register_block_pattern_category(
			'to_starter_theme_post-format',
			array(
				'label'       => __('Post formats', 'to-starter-theme'),
				'description' => __('A collection of post format patterns.', 'to-starter-theme'),
			)
		);
	}
endif;
add_action('init', 'to_starter_theme_pattern_categories');

// Registers block binding sources.
if (! function_exists('to_starter_theme_register_block_bindings')) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return void
	 */
	function to_starter_theme_register_block_bindings()
	{
		register_block_bindings_source(
			'to-starter-theme/format',
			array(
				'label'              => _x('Post format name', 'Label for the block binding placeholder in the editor', 'to-starter-theme'),
				'get_value_callback' => 'to_starter_theme_format_binding',
			)
		);
	}
endif;
add_action('init', 'to_starter_theme_register_block_bindings');

// Registers block binding callback function for the post format name.
if (! function_exists('to_starter_theme_format_binding')) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since to-starter-theme 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function to_starter_theme_format_binding()
	{
		$post_format_slug = get_post_format();

		if ($post_format_slug && 'standard' !== $post_format_slug) {
			return get_post_format_string($post_format_slug);
		}
	}
endif;
