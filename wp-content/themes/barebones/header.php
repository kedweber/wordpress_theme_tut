<?php
$bWPEnvironment = true; //TODO test for WP environment
$languageAttributes = ($bWPEnvironment)?language_attributes():'en-GB';
$bgInfoCharset = ($bWPEnvironment)? bloginfo('charset'):''; //TODO charset
$pgTitle = 'Welcome';
if ($bWPEnvironment) {
    global $page, $paged;
    wp_title('|', true, 'right');
    bloginfo('name');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
        $pgTitle = " | $site_description";
    if ($paged >= 2 || $page >= 2)
        $pgTitle = ' | ' . sprintf(__('Page %s'), max($paged, $page));
}
?>
<!DOCTYPE HTML>
<html <?php $languageAttributes; ?>>
  <head>￼￼￼
    <meta name="description" content="<?php bloginfo(‘description’); ?>” />
    <meta name=”author” content=”<?php bloginfo(‘name’); ?>”>
    <meta name=”viewport” content=”initial- scale = 1,user-scalable=no,maximum- scale=1.0”>
    <meta name=”HandheldFriendly” content=”true”/>
    <meta charset="<?php $bgInfoCharset; ?>">

    <title><?php $pgTitle?></title>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel=”pingback” href=”<?php bloginfo(‘pingback_url’); ?>” />
    <!--[if lt IE 9]>
    <script src=”http://html5shiv.googlecode.com/svn/trunk/html5.js”></script>
    <![endif]-->

    <!—add the following comments statement (to keep commenting to blog posts only) -->
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php
    /**
     * kickoff wordpress with the following command
     */
        wp_head();
    ?>
</head>
<div id="outer-wrap">
  <div id="innner-wrap">

    <header id="header-container">
    <nav id=”header-navigation”><?php
      // Main navigation
     wp_nav_menu(array(
      ‘theme_location’ => ‘main-menu’
     ));
    ?></nav>
    </header>