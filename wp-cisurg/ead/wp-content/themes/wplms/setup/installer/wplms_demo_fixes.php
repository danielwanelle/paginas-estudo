<?php
/**
 * FILTER functions for WPLMS
 *
 * @author      VibeThemes
 * @category    Admin
 * @package     Initialization
 * @version     2.0
 */

if ( !defined( 'ABSPATH' ) ) exit;

class WPLMS_Demo_Fixes{

    public static $instance;
    
    public static function init(){

        if ( is_null( self::$instance ) )
            self::$instance = new WPLMS_Demo_Fixes();

        return self::$instance;
    }

    private function __construct(){
    	add_action('wplms_envato_setup_design_save',array($this,'fix_demo_14_first_image'));
    	
    }

    function fix_demo_14_first_image(){
    	if(!function_exists('vibe_get_site_style'))
    		return;
    	$demo = vibe_get_site_style();
    	if(!empty($demo) && $demo=='demo14'){
    		global $wpdb;
    		//elementor first image fix 
			$photo_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE guid LIKE '%photo-e%' AND post_type=%s LIMIT 1", "attachment" ) );
			
			if(empty($photo_id)){
				$photo_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE post_type=%s LIMIT 1","attachment" ) );
			}
			if(!empty($photo_id)){
				$frontpage_id = get_option( 'page_on_front' );

				$elemetnor_data = get_post_meta($frontpage_id,'_elementor_data',true);
				$elemetnor_data_decoded = json_decode($elemetnor_data,1);
				if(!empty($elemetnor_data_decoded)){
					$elemetnor_data = $elemetnor_data_decoded;
				}
				if(!empty($elemetnor_data) && !empty($elemetnor_data[0]['elements'][0]['elements'][0]['elements'][1]['elements'][0]['settings']['image']['id'])){
					$elemetnor_data[0]['elements'][0]['elements'][0]['elements'][1]['elements'][0]['settings']['image']['id'] = $photo_id;
					$elemetnor_data = addslashes(json_encode($elemetnor_data));
					update_post_meta($frontpage_id,'_elementor_data',$elemetnor_data);
				}
			}
    	}
    }
}

WPLMS_Demo_Fixes::init();