<?php

add_action('wp_enqueue_scripts', 'dfh_load_theme_files');
function dfh_load_theme_files() {
    // `style.css` MUST BE in the root directory in order to qualify as a theme
    // see https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
    dfh_enqueue_style('dfh_theme_style', 'style.css');
    dfh_enqueue_script('dfh_theme_scripts', 'dist/theme.js');
    // Use the version of jQuery bundled with WordPress for max compatibility
    // see https://wordpress.stackexchange.com/a/140310
    wp_enqueue_script('jquery');
}
