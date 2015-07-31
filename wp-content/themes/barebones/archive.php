<?php
/**
 * File: archive.php
 *
 * In this file we differentiate how we output the main content depending on whether it is an archive of some form,
 * or a single post. Here we have several conditional tags, like
 * is_archive() and is_search()
 * With the_excerpt(), we’ll only get a 55 word excerpt from our posts, or whatever’s been filled in to the excerpt
 * field on the Edit Post screen in the admin interface.
 */

if (is_home() || is_front_page() || is_archive() || is_search()) :
?>
<div class="entry-summary">
    <?php the_excerpt(); ?>
    <div class="read-more">
        <?php
        // When comments are open we'll  need the comments template
        if (comments_open()) {
            ?>
            <span class="comments-link"><?php
                comments_popup_link('Leave a comment', '1 comment', '% comments');
                ?></span> &bull;
        <?php
        }
        ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            Continue reading &rarr;
        </a>
    </div>
</div>