<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>
            <?php bloginfo('name'); ?> <?php wp_title() ?>
        </title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php wp_head(); ?>
        
        <link rel="alternate" type="application/rss+xml" title="<?= bloginfo('name'); ?> Feed" href="<?php bloginfo('rss2_url'); ?>" />
        
    </head>
    <body>
        <img class="logo" src="<?= bloginfo('template_directory'); ?>/images/brandonsavage-logo.png" />

        <div class="menu"><?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?></div>

