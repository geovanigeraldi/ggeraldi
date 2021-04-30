<?php 
/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function elizama_theme_scripts() {

    wp_enqueue_style( 'bootstrap_css', get_theme_file_uri(). '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all' );
  	add_editor_style( '/assets/css/custom-editor-style.css' );
	wp_enqueue_style( 'kiame-block-editor-styles', get_theme_file_uri( '/assets//css/editor-style-block.css' ), '', wp_get_theme()->get( 'Version' ), 'all' );
	wp_enqueue_style( 'elizama-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'ionicons', get_theme_file_uri(). '/assets/fonts/ionicons.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'elizama-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '544', true );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0');

	wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '20181214', true );
	
		if(is_singular() && comments_open() && get_option( 'thread_comments')) {
			wp_enqueue_script( 'comment-reply' );
		}
}
add_action( 'wp_enqueue_scripts', 'elizama_theme_scripts' );
