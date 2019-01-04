# Tags Without Links

## Requirements

* Requires at least: 3.5.1
* Tested up to: 5.0.2
* Stable Tag: 1.4

## About

Easily to display tags without links.

## Instructions

### Note

This plugin is targeted primarily for developers to make it easier to display tags without any links associated with them.

### How To Use This Plugin

1. In your template, create an instance of the plugin by instantiating the class.
    - You may want to place the `use TomMcFarlin;` statement at the top of your file.
    - If not, you can instantiate the plugin by using `TomMcFarlin\TagsWithoutLinks(' | ')`
2. Make sure you specify a separator in the constructor the class.
3. Use the `display()` function to automatically echo the results of the function.
4. Use the `get()` function to read the contents into a variable that you can use later.

### An Example

Note that before reading the examples below, if you need to place the output of the plugin into an attribute, if it contains HTML, or simply requires any type of sanitization, remember to use
the appropriate [WordPress Escape Function](https://security.stackexchange.com/questions/199372/are-esc-functions-enough-safe-in-wordpress-like-esc-url-esc-attr-esc-title).

##### Using display()

In your template, enter something like the following:

```php
use TomMcFarlin;

// Other code here...

$tagsWithoutLinks = new TagsWithoutLinks(' | ' );
$tagsWithoutLinks->display();

// Other code here...
```

##### Using get()

In your template, enter something like the following:

```php
use TomMcFarlin;

// Other code here...

$tagsWithoutLinks = new TagsWithoutLinks(',');
$tags = $tagsWithoutLinks->get();

// Other code here...

echo $tags;

// Other code here...
```

## Installation

### Using The WordPress Dashboard

1. Navigate to the 'Add New' plugin dashboard
2. Select `tags-without-links.zip` from your computer (you may need to rename `master.zip`)
3. Upload
4. Activate the plugin in the WordPress Plugin Dashboard

### Using FTP

1. Extract `tags-without-links.zip` to your computer
2. Upload the `tags-without-links` directory to your `wp-content/plugins` directory
3. Navigate to the WordPress Plugin Dashboard
4. Activate the plugin from this page

## Other Notes

* This plugin requires PHP 7.1.
* This plugin uses Composer for code quality but it's not required to run in production.
* This is a freely available plugin. I do not guarantee support for it.
