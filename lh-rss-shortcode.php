<?php
/**
 * Plugin Name: LH RSS Shortcode
 * Plugin URI: https://lhero.org/portfolio/lh-rss-shortcode/
 * Description: Makes it easy to display an RSS feed on a page
 * Author: Peter Shaw
 * Version: 1.00
 * Author URI: https://shawfactor.com/
 * Requires PHP: 5.6
 * Text Domain: lh_rss_shortcode
 * Domain Path: /languages
*/

if (!class_exists('LH_Rss_shortcode_plugin')) {


class LH_Rss_shortcode_plugin {
    
    private static $instance;
    
static function return_plugin_namespace(){
    
    return 'lh_rss_shortcode';
    
}
    
public function shortcode_output( $atts ) {
	extract(shortcode_atts(array(  
	    "feed" 		=> '',  
		"num" 		=> '5',  
		"template" 	=> 'default.php'
	), $atts));
	require_once(ABSPATH.WPINC.'/rss.php');  
	if ( $feed != "" && $rss = fetch_rss( $feed ) ) {

		if ( $num !== -1 ) {
			$rss->items = array_slice( $rss->items, 0, $num );
		}
		
ob_start();

$dir = get_stylesheet_directory().'/'.self::return_plugin_namespace().'-templates/'.$template;

if (file_exists($dir)){
    
include($dir);
    
    
} else {
    
include( plugin_dir_path( __FILE__ ).self::return_plugin_namespace().'-templates/'.$template);     
    
    
}


$return_string = ob_get_contents();

ob_end_clean();


	}
	return $return_string;
}

public function register_shortcodes(){
    
add_shortcode(self::return_plugin_namespace(), array($this,'shortcode_output')); 




}
    
    
     /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }
    

public function __construct() {
    
//register a shortcodes for displaying feeds in front end
add_action('init', array($this,'register_shortcodes'));
    

    
}
    
    
}

$lh_rss_shortcode_instance = LH_Rss_shortcode_plugin::get_instance();


}





?>