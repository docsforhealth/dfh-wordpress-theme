<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class("root"); ?>>
    <?php wp_body_open(); ?>
    <a class="sr-only" href="#content">
        <?php esc_html_e('Skip to content', DFH_TEXT_DOMAIN); ?>
    </a>
    <div class="root__contents">
        <nav class="nav">
            <div class="nav__contents">
                <div class="nav__logo-container">
                    <?php get_template_part("inc/php/partials/home-link") ?>
                </div>
                <button type="button" class="nav__menu-toggle"></button>
            </div>
            <div class="nav__links-container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => DFH_MENU_HEADER,
                    'menu_class'     => 'nav__links',
                    'container'      => '',
                    'depth'          => 1,
                ));
                ?>
            </div>
        </nav>
        <div id="content" class="root__contents__content">

