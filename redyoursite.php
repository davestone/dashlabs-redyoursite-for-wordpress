<?php
/*
Plugin Name: redyoursite.com for WordPress
Plugin URI: http://code.google.com/p/dashlabs-redyoursite-for-wordpress/
Description: The redyoursite.com for WordPress plugin automatically adds the redyoursite.com code to your blog.
Version: 0.1
Author: Dash Labs
Author URI: http://dashlabs.com
License: GPL

Originally based on Rich Boakes' Analytics plugin: http://boakes.org/analytics

*/

add_action('shutdown', 'include_code');

function include_code()
{
	if(get_option("see_disable_plugin")==false && get_option("see_disable_post_videos")==false)
	{
?>
	<script type="text/javascript" src="http://redyoursite.com/red.js"></script>
<?php
	}
}
?>