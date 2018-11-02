<!DOCTYPE html>
<html lang='ro'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
        <nav>
            <img src='<?php echo get_template_directory_uri();?>/logo.png' alt='logo' id="logo">
            <label for="cmenu" id="meniul">MENIU</label>
            <input type="checkbox" id="cmenu">
            <?php wp_nav_menu( array( 'navmenu' => 'header-menu' ) ); ?>
            <label for="c" id="slabel"><img src="https://alex-wp.000webhostapp.com/wp-content/uploads/2017/10/search.png" alt="s" width="32" id="search"></label>
            <input type="checkbox" id="c">
            <span><?php get_search_form();?></span>
       </nav>
    </header>