<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://phpdocs.com
 * @since             1.0.0
 * @package           Custom_Post_Headings
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Post Headings
 * Plugin URI:        https://phpdocs.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Muhammad Afzal
 * Author URI:        https://phpdocs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-post-headings
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_POST_HEADINGS_VERSION', '1.0.0' );

//Include Add to any Helper File
require_once("add-to-any-helper.php");

//Add Action
add_action("the_content","AddHeadingsToContent");

//Content Header & Footer Addition Function
function AddHeadingsToContent($content){

	if (get_post_type() === 'post') {
		
		$content=ReturnAddtoAny().$content.ReturnAddtoAny();
	}
	return $content;
}


//ShortCode Method Registration
add_shortcode( 'MyCustomHD', 'MyCustomHeadingShortCode' );
//MethodForShortCode
function MyCustomHeadingShortCode(){
	ob_start();
	?>
	<div class="row">
		<div class="col-12 text-center">
			<h1>Quote Calculator</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			Name:
		</div>
		<div class="col-2">
			<input type="text" name="txtUserName" required placeholder="Please Enter Your Name" />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			How Many Chairs do you Need?:
		</div>
		<div class="col-2">
			<input type="Number" name="txtChairs" required  />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			How Many Tables do you Need?:
		</div>
		<div class="col-2">
			<input type="Number" name="txtTables" required  />
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			<input type="reset" value="Clear" class="btn btn-danger" />
		</div>
		<div class="col-2">
			<input type="Submit" value="Submit" class="btn btn-primary" />
		</div>
	</div>
<?php
return ob_get_clean();
}
