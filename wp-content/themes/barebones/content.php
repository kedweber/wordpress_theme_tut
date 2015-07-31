<?php
/**
 * File: content.php
 *
 * We place all content in an article tag which has a post_class() template tag within. This is to make
 * sure that WordPress is able to apply the necessary styles.
 *
 * Moving on, the title of the content sits in a header tag, which will either output an h1 or an h2,
 * depending if this is a post or page , or some sort of archive listing.
 *
 * The is_singular() conditional tag tells us this, because it will only return true if the page in
 * question is meant for only one piece of content. We use the_permalink() to get the link to the
 * post should we need it, the_title() to output the post title, and the_title_attribute() to get
 * a suitable title for the title tag.
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if(is_singular()) { ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php
        } else {
        ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php
        }
        ?>
    </header>
</article>