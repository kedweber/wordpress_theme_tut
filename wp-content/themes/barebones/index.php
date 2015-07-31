<?php
/**
 * The index.php template is the main fallback template for everything. So any calls to the server,
 * which are not otherwise defined will be answered by the index.php.
 * For example, as this simple barebones template does not have a 404 template, and so the index.php will
 * respond for even 404, unfound pages.
 * From here, we import the header template. If have_posts() returns false, then we will return a 404 message
 * and then pull up the search form, which can be customized by creating a file named;
 *
 * searchform.php
 *
 */
  // Include header.php
  get_header();

?>
<section id="content-container"><?php
￼￼// 404 Page Not Found or empty archives etc.
￼￼￼if (!have_posts()) : ?>
  <article id=”post-0” class=”post error404￼not-found”>
￼￼  <h1 class=”entry-title”>404: Not Found</h1
￼￼  <div class=”entry-content”>
      <p>Sorry, there is nothing here. You
            ￼might want to try and search for whatever it
            ￼was you were looking for?</p>
      <?php get_search_form(); ?>
    </div>
  </article>
￼￼<?php￼else:
        ￼// The basic loop
        ￼while (have_posts()) : the_post();
        ￼// Load the appropriate content template
        ￼get_template_part(‘content’, ‘index’);

        
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <div class="meta">
      Date <?php the_time('F Y') ?><br />
      Written by <?php the_author() ?>
    </div>
    <div class="newsExcerpt"><?php the_excerpt(); ?></div>
    <div class="postmetadata">
      Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
    </div>
  </article>


        ￼// End the loop
        ￼endwhile;

        ￼// Navigation bottom
        ￼get_template_part(‘nav’, ‘bottom’);
        ￼?>
  <?php￼endif; ?>
</section>
<?php
// Include the sidebar and the footer
get_sidebar();
get_footer();
?>