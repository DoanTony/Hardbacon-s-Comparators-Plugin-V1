<?php 
/*
Plugin Name: Harbacon Comparator
Author: Tony Doan
Description: Brokerages and Robo Advisors Comparator
Version: 2.0
*/

if( ! defined('ABSPATH'))
{
	exit;
}

require_once (plugin_dir_path(__FILE__).'objects/brokerage-class.php');
require_once (plugin_dir_path(__FILE__).'objects/category-class.php');
require_once (plugin_dir_path(__FILE__).'objects/robo-class.php');
require_once (plugin_dir_path(__FILE__).'comparator-table.php');
require_once (plugin_dir_path(__FILE__).'brokerage-render-admin.php');
require_once (plugin_dir_path(__FILE__).'brokerage-table-fields.php');
require_once (plugin_dir_path(__FILE__).'robo-table-fields.php');


function tabledata_theme() {
	global $pagenow , $typenow;

	if(($pagenow == "post.php" || $pagenow == "post-new.php") && ($typenow =="brokerages" || $typenow =="robos"))
    {
  	wp_register_style('hardbacon_comparator_theme', plugins_url('css/datatable-css.css', __FILE__));
	wp_enqueue_style('hardbacon_comparator_theme');
	}

}

function front_end_theme()
{
	
	wp_register_script('comparatorjs',  plugins_url('js/comparator.js', __FILE__));
	wp_enqueue_script('comparatorjs');
}

function brokers_table()
{
  include(plugin_dir_path(__FILE__).'front-end-views/brokerage-table.php');
}

function robos_table()
{
	 include(plugin_dir_path(__FILE__).'front-end-views/robo-advisor-table.php');
}

add_action("wp_enqueue_scripts","front_end_theme");
add_action("admin_enqueue_scripts","tabledata_theme");
add_shortcode("brokerage-table","brokers_table");
add_shortcode("robo-advisor-table","robos_table");