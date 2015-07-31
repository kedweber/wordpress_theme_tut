<?php
/***
 * Display the pagination and navigation at the bottom when available. This section was orginially
 * suggested to be a separate file named nav-bottom.php as it is helpful on nearly all archive pages.
 */
if ( $wp_query->max_num_pages > 1 ) :
?>
<div id=”nav-below” class=”navigation”>
    <div class=”nav-previous”>
        <?php next_posts_link(‘<span class=”meta-nav”>&larr;</span> Older posts’); ?>
    </div>
    <div class=”nav-next”>
        <?php previous_posts_link(‘Newer posts <span class=”meta-nav”>&rarr;</span>’); ?>
    </div>
</div>
<?php endif; ?>


<footer id=”footer-container”>
  <p>
    <a href=”<?php echo home_url(); ?>” title=”<?php bloginfo(‘title’); ?>”><?php bloginfo(‘title’); ?></a>
      is powered by <a href=”http://wordpress.org” title=”WordPress”>WordPress</a> and
        <a href=”http://tdh.me/wordpress/kihon/” title=”Kihon”>Kihon</a> by <a href=”http://tdh.me” title=”TDH”>TDH</a>
  </p>
</footer>

    </div><!-- #inner-wrap -->
  </div><!-- #outer-wrap -->
<?php wp_footer(); ?>

</body>
</html>