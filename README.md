# Tags Without Links

## Plugin Meta

* [Tom McFarlin](http://tommcfarlin.com)
* [Donate](http://tommcfarlin.com/donate/)
* [Homepage](http://tommcfarlin.com/tags-without-links/)
* Tags: tags

## Requirements

* Requires at least: 3.5.1
* Tested up to: 3.5.1
* Stable Tag: 1.3

## License 

> This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
[License URI](http://www.gnu.org/licenses/gpl-2.0.html)

## Plugin Description

This plugin is targeted primarily for developers to make it easier for developers to display tags without any links associated with them.

The plugin includes two functions:

* `wp_the_tags_without_the_links()` that will echo the tags for the associated post back to the template
* `wp_get_the_tags_without_the_links()` that will return the string of tags back to the template invoking the call.

Each function acceptions an optional parameter that can be used to separate each tag with the default separator being a space.


## Installation

### Using The WordPress Dashboard

1. Navigate to the 'Add New' plugin dashboard
2. Select `master.zip` from your computer
3. Upload
4. Activate the plugin in the WordPress Plugin Dashboard

### Using FTP

1. Extract `master.zip` to your computer
2. Upload the `tags-without-links` directory to your `wp-content/plugins` directory
3. Navigate to the WordPress Plugin Dashboard
4. Activate the plugin from this page

## Frequently Asked Questions

### Is the a user interface for this plugin?

No - the plugin is primarily written for developers to easily render tags without links in their page templates.

### Why isn't this plugin localized?

There are no strings to localize :).

## Changelog

### 1.3

* Changing the function prefix from `wp` to `twl`

### 1.2

* Removing a commented line of code
* Prefixing the functions with `wp`

### 1.1

* Merging pull request for cleaning up the code
* Removing whitespace at the end of the plugin file
* Defining a constant for the version of the plugin

### 1.0

* Initial Release
