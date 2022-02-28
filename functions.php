<?php

// ***********************************************************
// * SEE DFH PLUGIN `docsforhealth.php` FOR SHARED CONSTANTS *
// ***********************************************************

if (!defined('DFH_MENU_HEADER')) {
    define('DFH_MENU_HEADER', 'dfh-menu-nav');
}
if (!defined('DFH_MENU_FOOTER')) {
    define('DFH_MENU_FOOTER', 'dfh-menu-footer');
}
if (!defined('DFH_THEME_MOD_RESOURCE_OVERVIEW_LOCATION')) {
    define('DFH_THEME_MOD_RESOURCE_OVERVIEW_LOCATION', 'dfh_resource_overview_location');
}
if (!defined('DFH_THEME_MOD_TOOLKIT_OVERVIEW_LOCATION')) {
    define('DFH_THEME_MOD_TOOLKIT_OVERVIEW_LOCATION', 'dfh_toolkit_overview_location');
}
if (!defined('DFH_THEME_MOD_DOT_PHRASE_OVERVIEW_LOCATION')) {
    define('DFH_THEME_MOD_DOT_PHRASE_OVERVIEW_LOCATION', 'dfh_dot_phrase_overview_location');
}
if (!defined('DFH_THEME_MOD_FOOTER_CONTENT')) {
    define('DFH_THEME_MOD_FOOTER_CONTENT', 'dfh_footer_content');
}
if (!defined('DFH_THEME_MOD_FOOTER_CONTENT_DEFAULT')) {
    define('DFH_THEME_MOD_FOOTER_CONTENT_DEFAULT', join(array(
        '<p>',
        'Docs for Health is a free community resource developed and ',
        'maintained in Providence, RI.',
        '</p>',
        '<p>',
        'While every resource is thoroughly researched and vetted, ',
        'all resources are provided “as is” without warranty of any ',
        'kind. Use at your own risk.',
        '</p>',
    )));
}

// Theme files
require_once get_template_directory() . '/src/php/add_post_states.php';
require_once get_template_directory() . '/src/php/helpers.php';
require_once get_template_directory() . '/src/php/load_deps.php';
require_once get_template_directory() . '/src/php/setup_customizer.php';
require_once get_template_directory() . '/src/php/setup_theme.php';

// External dependencies for adding TinyMCE editor to customizer
require_once get_template_directory() . '/src/php/vendor/skyrocket_customizer.php';
