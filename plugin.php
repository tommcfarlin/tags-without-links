<?php
/*
Plugin Name: Tags Without Links
Plugin URI: http://tommcfarlin.com/tags-without-links/
Description: A simple plugin used to make it easy to display tags without links.
Version: 1.2
Author: Tom McFarlin
Author URI: http://tommcfarlin.com/
Author Email: tom@tommcfarlin.com
License:

  Copyright 2013 Tom McFarlin (tom@tommcfarlin.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

if( ! defined( 'TAGS_WITHOUT_LINKS_VERSION' ) ) {
	define ( 'TAGS_WITHOUT_LINKS_VERSION', 1.2 );
} // en dif

/**
 * Loops through the existing tags and then echoes them back out to the page
 * using the optional separator.
 *
 * @param	string	$sep	[optional]	What to use as the separator for the tags. A space is the default value.
 * @since	1.0
 */
function wp_the_tags_without_links( $sep = ' ' ) {
	echo trim( wp_get_the_tags_without_links( $sep ) );	
} // end wp_the_tags_without_links

/**
 * Loops through the existing tags and then returns the string with the optional separator
 * to the caller.
 *
 * @param	string 	$sep 		[optional]	What to use as the separator for the tags. A space is the default value.
 * @return	string	$str_tags				The list of tags that exist for the current post.
 * @since	1.0
 */
function wp_get_the_tags_without_links( $sep = ' ' ) {
	
	$tags_list = array();
	
	if ( ( $tags = get_the_tags() ) ) {
		
		foreach ( $tags as $tag ) {
			$tags_list[] = $tag->name;
		} // end foreach
	
	} // end if
	
	return implode( $sep, $tags_list );
	
} // end wp_the_tags_without_links