<?php

/*
 * This file is part of Tags Without Links
 *
 * (c) Tom McFarlin <tom@tommcfarlin.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace TomMcFarlin;

/**
 * Provides functionality for allowing users to display a given post (or post types) tags
 * without having to actually display the link.
 */
class TagsWithoutLinks
{
    /**
     * @var string the string used separate tags if another one isn't sepecified
     */
    private $separator;

    /**
     * Initializes the class.
     *
     * @param string $separator the separator to display between tags
     */
    public function __construct($separator)
    {
        $this->separator = $separator;
    }

    /**
     * Loops through the existing tags and then echoes them back out to the page
     * using the optional separator.
     *
     * Note that the output of this function must still be used using the proper escape
     * functions as provided by the WordPress API.
     */
    public function display()
    {
        echo trim($this->get());
    }

    /**
     * Loops through the existing tags and then returns the string with the optional separator
     * to the caller.
     *
     * Note that the output of this function must still be used using the proper escape
     * functions as provided by the WordPress API.
     *
     * @return string the list of tags that exist for the current post delimited by the separator
     */
    public function get()
    {
        return trim(
            implode(
                $this->separator,
                array_filter(
                    array_map(function ($tag) {
                        return $tag->name;
                    }, get_the_tags())
                )
            )
        );
    }
}
