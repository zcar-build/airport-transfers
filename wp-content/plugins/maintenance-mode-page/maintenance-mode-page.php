<?php
/**
 * Plugin Name: Maintenance Mode Page
 * Version: 1.6.3
 * Description: Easy configure and customize maintenance page, coming soon page, under construction page when site in development process, need to update or change something.
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com/plugins
 */
 
define("WPSM_MMR_TEXT_DOMAIN","wpsm_mmr_lang" );
define("wpsm_mmr_PLUGIN_URL", plugin_dir_url(__FILE__));

/**
 * Get Ready Plugin Translation
 */
add_action('plugins_loaded', 'wpsm_mmr_language_translation');
function wpsm_mmr_language_translation() {
	load_plugin_textdomain( WPSM_MMR_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/language/' );
}

###	Run 'Install' script on plugin activation ###
register_activation_hook( __FILE__, 'wpsm_mmr_default_data' );
function wpsm_mmr_default_data()
{
	include('functions/default-data.php');
}

/*
* COMING SOON MENU
*/
add_action('admin_menu','wpsm_maintenance_mode_responsive_menu');

function wpsm_maintenance_mode_responsive_menu()
{
    //plugin menu name for Maintenance Mode plugin
    $menu = add_menu_page('Maintenance Mode', 'Maintenance Mode','administrator', 'wpsm_maintenance_mode','wpsm_maintenance_mode_responsive_content','dashicons-visibility');

    //add hook to add styles and scripts for maintenance mode admin page
    add_action( 'admin_print_styles-' . $menu, 'wpsm_maintenance_mode_responsive_plugin_js_css' );
}
require_once('functions/script.php');

function wpsm_maintenance_mode_responsive_content()
{  
	require_once('includes/content.php');
}

require_once('functions/data-save-post.php');
require_once('functions/data-reset-post.php');
require_once('redirect.php');

// Add settings link on plugin page
function wpsm_mmr_settings_link($links) { 
  $settings_link = '<a href="?page=wpsm_maintenance_mode">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
// plugin menu settings links  
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'wpsm_mmr_settings_link' );

?>