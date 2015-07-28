<?php
$bWPEnvironment = true; //TODO test for WP environment
$languageAttributes = ($bWPEnvironment)?language_attributes():'en-GB';
$bgInfoCharset = ($bWPEnvironment)? bloginfo('charset'):''; //TODO charset
$pgTitle = 'Welcome';
if ($bWPEnvironment) {
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $pgTitle = " | $site_description";
    if ( $paged >= 2 || $page >= 2 )
        $pgTitle = ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
}
?>
<!DOCTYPE HTML>
<html <?php $languageAttributes; ?>>
<meta charset="<?php $bgInfoCharset; ?>">
<title><?php $pgTitle?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!—add the following comments statement (to keep commenting to blog posts only) -->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<!-- add the following before </head> -->
<?php wp_head(); ?>