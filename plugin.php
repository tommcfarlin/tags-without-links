<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/tommcfarlin/tags-without-links
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Tags Without Links
 * Plugin URI:        https://github.com/tommcfarlin/tags-without-links
 * Description:       Easily to display tags without links.
 * Version:           1.4.0
 * Author:            Tom McFarlin
 * Author URI:        https://tommcfarlin.com
 * Author Email:      tom@tommcfarlin.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace TomMcFarlin;

defined('WPINC') || die;

include_once 'src/TagsWithoutLinks.php';
