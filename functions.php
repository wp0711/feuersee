<?php
/**
 * Setup function.  All child themes should run their setup within this function. The idea is to add/remove
 * filters and actions after the parent theme has been set up. This function provides you that opportunity.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function feuersee_theme_setup() {

	// Load child theme text domain.
	load_child_theme_textdomain( 'checathlon-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'feuersee_theme_setup', 11 );


function feuersee_remove_scripts() {

	wp_dequeue_style( 'checathlon-fonts' );

}
add_action( 'wp_enqueue_scripts', 'feuersee_remove_scripts', 11 );


function feuersee_remove_page_templates( $templates ) {
    unset( $templates['templates/account-page.php'] );
    unset( $templates['templates/featured-page.php'] );
    unset( $templates['templates/pricing-page.php'] );
    // unset( $templates['templates/team-page.php'] );

    return $templates;
}
add_filter( 'theme_page_templates', 'feuersee_remove_page_templates' );




/**
 * Custom functions that act independently of the theme templates.
 */
require get_theme_file_path() . '/inc/extras.php';
