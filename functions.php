<?php

define('DFH_MENU_HEADER', 'dfh-menu-nav');
define('DFH_MENU_FOOTER', 'dfh-menu-footer');
define('DFH_THEME_MOD_RESOURCE_OVERVIEW_LOCATION', 'dfh_resource_overview_location');
define('DFH_THEME_MOD_TOOLKIT_OVERVIEW_LOCATION', 'dfh_toolkit_overview_location');
define('DFH_THEME_MOD_FOOTER_CONTENT', 'dfh_footer_content');
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

// Can be defined by either the Docs for Health theme or plugin
if (!defined('DFH_TEXT_DOMAIN')) {
    define('DFH_TEXT_DOMAIN', 'dfh');
}
if (!defined('DFH_CONTENT_TYPE_RESOURCE')) {
    define('DFH_CONTENT_TYPE_RESOURCE', 'dfh_resource');
}
if (!defined('DFH_CONTENT_TYPE_TOOLKIT')) {
    define('DFH_CONTENT_TYPE_TOOLKIT', 'dfh_toolkit');
}
if (!defined('DFH_REQUIRED_BLOCK_RESOURCE')) {
    define('DFH_REQUIRED_BLOCK_RESOURCE', 'dfh/resource-detail-description');
}
if (!defined('DFH_REQUIRED_BLOCK_TOOLKIT')) {
    define('DFH_REQUIRED_BLOCK_TOOLKIT', 'dfh/toolkit-detail-metadata');
}
if (!defined('DFH_TAXONOMY_RESOURCE')) {
    define('DFH_TAXONOMY_RESOURCE', 'dfh_resource_classification');
}

// Theme files
require_once get_template_directory() . '/inc/php/add_post_states.php';
require_once get_template_directory() . '/inc/php/helpers.php';
require_once get_template_directory() . '/inc/php/load_deps.php';
require_once get_template_directory() . '/inc/php/setup_customizer.php';
require_once get_template_directory() . '/inc/php/setup_theme.php';

// External dependencies for adding TinyMCE editor to customizer
require_once get_template_directory() . '/inc/php/vendor/skyrocket_customizer.php';
