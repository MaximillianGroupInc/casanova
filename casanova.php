<?php

namespace casanova;

/**
 * Plugin Name: Casanova
 * Plugin URI: https://github.com/MaximillianGroupInc/casanova
 * Description: Adds a video background to a specific Gutenberg group block.
 * Author: MaximillianGroup (Max Barrett) <maximilliangroup@gmail.com>
 * Requires at least: 6.2
 * Requires PHP: 7.0
 * Author URI: http://starisian.com
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:  https://github.com/MaximillianGroupInc/casanova
 * GitHub Plugin URI:  https://github.com/MaximillianGroupInc/casanova
 * Text Domain: casanova
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action( 'enqueue_block_editor_assets', 'casanova_enqueue_assets' );


function casanova_enqueue_assets(): void {
  // Enqueue the plugin's stylesheet
  wp_enqueue_style( 'casanova-video-background', plugin_dir_url( __FILE__ ) . 'casanova.css' );

  // Enqueue the plugin's script
  wp_enqueue_script( 'casanova-video-background-script', plugin_dir_url( __FILE__ ) . 'casanova.js', array( 'wp-blocks' ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'casanova_enqueue_styles_for_frontend' );

function casanova_enqueue_styles_for_frontend(): void {
  // Enqueue the plugin's stylesheet for the frontend
  wp_enqueue_style( 'casanova-video-background', plugin_dir_url( __FILE__ ) . 'casanova.css' );
}