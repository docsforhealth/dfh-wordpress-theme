<div class="resource-previews__preview">
    <div class="resource-previews__preview__info">
        <h2 class="heading heading--3">
            <a
                class="link"
                href="<?php the_permalink(); ?>"
                title="<?php the_title_attribute(); ?>"
            >
                <?php the_title(); ?>
            </a>
        </h2>
        <?php if ($metadata['description']): ?>
            <p class="text">
                <?php echo esc_html($metadata['description']); ?>
            </p>
        <?php endif ?>
    </div>
    <ul class="resource-previews__preview__tags">
        <?php
            // see https://wordpress.stackexchange.com/a/342262
            $term_names = wp_list_pluck(get_the_terms($id, DFH_TAXONOMY_RESOURCE), 'name');
            foreach ($term_names as $name) {
              echo '<li class="resource-previews__preview__tags__tag tag">' . esc_html($name) . '</li>';
            }
        ?>
        <?php
            // see https://wordpress.stackexchange.com/a/342262
            $term_names = wp_list_pluck(get_the_terms($id, DFH_TAXONOMY_RESOURCE_TYPE), 'name');
            foreach ($term_names as $name) {
              echo '<li class="resource-previews__preview__tags__tag tag tag--notable">' . esc_html($name) . '</li>';
            }
        ?>
    </ul>
</div>
