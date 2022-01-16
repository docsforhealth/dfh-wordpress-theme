<?php
// Template for use with the Ajax Load More plugin
// see https://connekthq.com/plugins/ajax-load-more/docs/repeater-templates/#theme
// see https://developer.wordpress.org/themes/references/list-of-template-tags/
$id = get_the_ID();

// function definitions loaded in DFH plugin
if (!function_exists('dfh_get_block') || !function_exists('dfh_pluralize')) {
    echo 'Unable to display item. Please make sure the Docs for Health plugin is installed.';
    echo '<br />';
    return;
}
?>

<?php if (get_post_type($id) == DFH_CONTENT_TYPE_RESOURCE && has_block(DFH_REQUIRED_BLOCK_RESOURCE, $id)): ?>
    <?php
        $block = dfh_get_block(DFH_REQUIRED_BLOCK_RESOURCE, parse_blocks(get_the_content()));
        $metadata = $block ? $block['attrs'] : null;
        if ($metadata):
            require get_template_directory() . '/alm_templates/templates/resource-preview.php';
        endif
    ?>
<?php elseif (get_post_type($id) == DFH_CONTENT_TYPE_TOOLKIT && has_block(DFH_REQUIRED_BLOCK_TOOLKIT, $id)): ?>
    <?php
        $block = dfh_get_block(DFH_REQUIRED_BLOCK_TOOLKIT, parse_blocks(get_the_content()));
        $metadata = $block ? $block['attrs'] : null;
        if ($metadata):
            require get_template_directory() . '/alm_templates/templates/toolkit-preview.php';
        endif
    ?>
<?php elseif (get_post_type($id) == DFH_CONTENT_TYPE_DOT_PHRASE && has_block(DFH_REQUIRED_BLOCK_DOT_PHRASE, $id)): ?>
    <?php
        $block = dfh_get_block(DFH_REQUIRED_BLOCK_DOT_PHRASE, parse_blocks(get_the_content()));
        $metadata = $block ? $block['attrs'] : null;
        if ($metadata):
            require get_template_directory() . '/alm_templates/templates/dot-phrase-preview.php';
        endif
    ?>
<?php endif ?>

