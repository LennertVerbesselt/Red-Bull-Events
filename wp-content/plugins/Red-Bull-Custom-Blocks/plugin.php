<?php
/*
Plugin Name: Red Bull Events - Custom Blocks
Description: Custom blocks within the Red Bull Events styling
*/

function mcb_register_blocks() {

	// Check if Gutenberg is active.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	// Add block script.
	wp_register_script(
		'call-to-action',
		plugins_url( 'blocks/call-to-action/call-to-action.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-editor' ],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/call-to-action/call-to-action.js' )
	);
    wp_register_script(
		'main-illustration',
		plugins_url( 'blocks/main-illustration/main-illustration.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-editor' ],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/main-illustration/main-illustration.js' )
	);
    wp_register_script(
		'landing-page-block-1',
		plugins_url( 'blocks/landing-page-block-1/landing-page-block-1.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-editor' ],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/landing-page-block-1/landing-page-block-1.js' )
	);

	// Add block style.
	wp_register_style(
		'call-to-action',
		plugins_url( 'blocks/call-to-action/call-to-action.css', __FILE__ ),
		[],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/call-to-action/call-to-action.css' )
	);
    wp_register_style(
		'main-illustration',
		plugins_url( 'blocks/main-illustration/main-illustration.css', __FILE__ ),
		[],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/main-illustration/main-illustration.css' )
	);
    wp_register_style(
		'landing-page-block-1',
		plugins_url( 'blocks/landing-page-block-1/landing-page-block-1.css', __FILE__ ),
		[],
		filemtime( plugin_dir_path( __FILE__ ) . 'blocks/landing-page-block-1/landing-page-block-1.css' )
	);

	// Register block script and style.
	register_block_type( 'mcb/call-to-action', [
		'style' => 'call-to-action', // Loads both on editor and frontend.
		'editor_script' => 'call-to-action', // Loads only on editor.
	] );
    register_block_type( 'mcb/main-illustration', [
		'style' => 'main-illustration', // Loads both on editor and frontend.
		'editor_script' => 'main-illustration', // Loads only on editor.
	] );
    register_block_type( 'mcb/landing-page-block-1', [
		'style' => 'landing-page-block-1', // Loads both on editor and frontend.
		'editor_script' => 'landing-page-block-1', // Loads only on editor.
	] );
}

add_action( 'init', 'mcb_register_blocks' );