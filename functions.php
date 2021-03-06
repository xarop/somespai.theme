<?php
/**
 * somespai engine room
 *
 * @package somespai
 */

/**
 * Set the theme version number as a global variable
 */
$theme				= wp_get_theme( 'somespai' );
$somespai_version	= $theme['Version'];

$theme				= wp_get_theme( 'storefront' );
$storefront_version	= $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-somespai.php' );
require_once( 'inc/class-somespai-customizer.php' );
require_once( 'inc/class-somespai-template.php' );
require_once( 'inc/class-somespai-integrations.php' );

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */


// HOOKS

add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 

function custom_storefront_credit() {
	?>
	<div class="site-info">
        &copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?> · 
        Desenvolupat a Vila de Gràcia, Barcelona per <a href="http://xarop.com" target="_blank">xarop.com</a>
	</div><!-- .site-info -->
	<?php
}