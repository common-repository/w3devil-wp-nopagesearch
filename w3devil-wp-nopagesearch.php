<?php
/*
Plugin Name: WP NoPageSearch
Plugin URI: http://www.example.com/org
Description: Sometimes you wish that the default Wordpress search to not to search the pages of your Blog. And your dreams are now true with w3devil - WP NoPageSearch plugin. 
Author: Kranthi Kiran
Version: 0.1.2
Author URI: http://www.example.com
*/


add_filter(
	'posts_where',
	create_function('$where','return (!empty($GLOBALS["wp_query"]->query_vars["s"]) ? "AND " .$GLOBALS["wpdb"]->posts. ".post_type != \'page\'" : "") . $where;')
          );