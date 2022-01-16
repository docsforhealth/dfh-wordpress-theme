<div class="dot-phrase-preview-list__preview dot-phrase-preview">
    <div class="dot-phrase-preview__header">
        <div class="dot-phrase-preview__header__info">
            <h2 class="text text--small text--no-auto-space margin-r-1">
                <?php the_title(); ?>
            </h2>
            <a
                class="link link--expand"
                href="<?php the_permalink(); ?>"
                title="<?php the_title_attribute(); ?>"
            >
                <?php echo esc_html(__('Details', DFH_TEXT_DOMAIN)); ?>
            </a>
        </div>
        <button type="button"
            class="dot-phrase-preview__header__copy"
            data-copy-selector="#dot-phrase-<?php the_ID(); ?>"
            data-copy-active-class="dot-phrase-preview__header__copy--copying"
            data-copy-done-class="dot-phrase-preview__header__copy--copied"
            data-copy-done-text="<?php echo esc_html(__('Copied', DFH_TEXT_DOMAIN)) ?>"
        >
            <?php echo esc_html(__('Copy', DFH_TEXT_DOMAIN)); ?>
        </button>
    </div>
    <div class="dot-phrase-preview__body">
        <div id="dot-phrase-<?php the_ID(); ?>" class="dot-phrase-preview__body__text text text--no-auto-space">
            <?php echo esc_html($metadata['plainTextContent']); ?>
        </div>
        <?php
            // see https://wordpress.stackexchange.com/a/342262
            $term_names = wp_list_pluck(get_the_terms($id, DFH_TAXONOMY_DOT_PHRASE_CATEGORY), 'name');
            if (count($term_names) > 0) {
                echo '<ul class="list list--unstyled">';
                foreach ($term_names as $name) {
                  echo '<li class="tag">' . esc_html($name) . '</li>';
                }
                echo '</ul>';
            }
        ?>
    </div>
</div>
