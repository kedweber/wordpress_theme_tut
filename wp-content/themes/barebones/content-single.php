<?php
/**
 * File: content-single.php
 *
 * Everything that isn’t an archive is obviously a single view of some sort. Here we use the_content()
 * instead of the_excerpt() to fetch the content, which means we’ll get all the main content.
 * Sometimes that can be split up into several pages (although it is a nasty habit that should be avoided),
 * so we have wp_link_pages() to manage that.
 */
?>