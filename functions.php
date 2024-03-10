<?php

// ********************************
// * Shared constants with plugin *
// ********************************

if (!defined('DFH_TEXT_DOMAIN')) {
    define('DFH_TEXT_DOMAIN', 'dfh');
}

// Block categories
if (!defined('DFH_BLOCK_CATEGORY_COMMON')) {
    define('DFH_BLOCK_CATEGORY_COMMON', 'dfh-common');
}
if (!defined('DFH_BLOCK_CATEGORY_DEPRECATED')) {
    define('DFH_BLOCK_CATEGORY_DEPRECATED', 'dfh-deprecated');
}
if (!defined('DFH_BLOCK_CATEGORY_LANDING')) {
    define('DFH_BLOCK_CATEGORY_LANDING', 'dfh-landing');
}
if (!defined('DFH_BLOCK_CATEGORY_LAYOUT')) {
    define('DFH_BLOCK_CATEGORY_LAYOUT', 'dfh-layout');
}
if (!defined('DFH_BLOCK_CATEGORY_MEDIA')) {
    define('DFH_BLOCK_CATEGORY_MEDIA', 'dfh-media');
}
if (!defined('DFH_BLOCK_CATEGORY_CUSTOM_DATA')) {
    define('DFH_BLOCK_CATEGORY_CUSTOM_DATA', 'dfh-custom-data');
}

// Content types
if (!defined('DFH_CONTENT_TYPE_RESOURCE')) {
    define('DFH_CONTENT_TYPE_RESOURCE', 'dfh_resource');
}
if (!defined('DFH_CONTENT_TYPE_TOOLKIT')) {
    define('DFH_CONTENT_TYPE_TOOLKIT', 'dfh_toolkit');
}
if (!defined('DFH_CONTENT_TYPE_DOT_PHRASE')) {
    define('DFH_CONTENT_TYPE_DOT_PHRASE', 'dfh_dot_phrase');
}

// Template block for each content type
if (!defined('DFH_TEMPLATE_BLOCK_PAGE')) {
    define('DFH_TEMPLATE_BLOCK_PAGE', 'dfh/new-page-placeholder');
}
if (!defined('DFH_TEMPLATE_BLOCK_RESOURCE')) {
    define('DFH_TEMPLATE_BLOCK_RESOURCE', 'dfh/resource-detail');
}
if (!defined('DFH_TEMPLATE_BLOCK_TOOLKIT')) {
    define('DFH_TEMPLATE_BLOCK_TOOLKIT', 'dfh/toolkit-detail');
}
if (!defined('DFH_TEMPLATE_BLOCK_DOT_PHRASE')) {
    define('DFH_TEMPLATE_BLOCK_DOT_PHRASE', 'dfh/dot-phrase-detail');
}

// Required block for each content type
if (!defined('DFH_REQUIRED_BLOCK_RESOURCE')) {
    define('DFH_REQUIRED_BLOCK_RESOURCE', 'dfh/resource-detail-description');
}
if (!defined('DFH_REQUIRED_BLOCK_TOOLKIT')) {
    define('DFH_REQUIRED_BLOCK_TOOLKIT', 'dfh/toolkit-detail-metadata');
}
if (!defined('DFH_REQUIRED_BLOCK_DOT_PHRASE')) {
    define('DFH_REQUIRED_BLOCK_DOT_PHRASE', 'dfh/content-copy-area');
}

// Taxonomies
if (!defined('DFH_TAXONOMY_RESOURCE')) {
    define('DFH_TAXONOMY_RESOURCE', 'dfh_resource_classification');
}
if (!defined('DFH_TAXONOMY_RESOURCE_TYPE')) {
    define('DFH_TAXONOMY_RESOURCE_TYPE', 'dfh_resource_content_type');
}
if (!defined('DFH_TAXONOMY_DOT_PHRASE_CATEGORY')) {
    define('DFH_TAXONOMY_DOT_PHRASE_CATEGORY', 'dfh_dot_phrase_category');
}

// ****************************
// * Theme-specific constants *
// ****************************

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
