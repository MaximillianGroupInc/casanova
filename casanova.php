/*
Plugin Name: Casanova
Plugin URI: https://github.com/MaximillianGroupInc/casanova
Description: Adds a video background to a specific Gutenberg group block.
Author: MaximillianGroup (Max Barrett) <maximilliangroup@gmail.com>
Version: 1.0.0

*/

add_action( 'enqueue_block_editor_assets', 'my_plugin_enqueue_assets' );

function my_plugin_enqueue_assets() {
  // Enqueue the plugin's stylesheet
  wp_enqueue_style( 'my-plugin-video-background', plugin_dir_url( __FILE__ ) . 'video-background.css' );
}

add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue_styles_for_frontend' );

function my_plugin_enqueue_styles_for_frontend() {
  // Enqueue the plugin's stylesheet for the frontend
  wp_enqueue_style( 'my-plugin-video-background', plugin_dir_url( __FILE__ ) . 'video-background.css' );
}
