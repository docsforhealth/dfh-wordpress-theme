<div class="toolkit-previews__preview">
    <div class="toolkit-previews__preview__info">
        <div class="toolkit-previews__preview__header">
            <h2 class="heading heading--3 toolkit-previews__preview__header__title">
                <a
                    class="link"
                    href="<?php the_permalink(); ?>"
                    title="<?php the_title_attribute(); ?>"
                >
                    <?php the_title(); ?>
                </a>
            </h2>
            <ul class="toolkit-previews__preview__header__metadata">
                <?php if ($metadata['numAudio']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numAudio']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numAudio'],
                            __('track', DFH_TEXT_DOMAIN),
                            __('tracks', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
                <?php if ($metadata['numDocuments']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numDocuments']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numDocuments'],
                            __('documents', DFH_TEXT_DOMAIN),
                            __('documents', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
                <?php if ($metadata['numImages']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numImages']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numImages'],
                            __('image', DFH_TEXT_DOMAIN),
                            __('images', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
                <?php if ($metadata['numPolls']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numPolls']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numPolls'],
                            __('poll', DFH_TEXT_DOMAIN),
                            __('polls', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
                <?php if ($metadata['numSlideshows']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numSlideshows']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numSlideshows'],
                            __('slideshow', DFH_TEXT_DOMAIN),
                            __('slideshows', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
                <?php if ($metadata['numVideos']): ?>
                    <li class="tag">
                        <?php echo esc_html($metadata['numVideos']); ?>
                        <?php echo dfh_pluralize(
                            $metadata['numVideos'],
                            __('video', DFH_TEXT_DOMAIN),
                            __('videos', DFH_TEXT_DOMAIN)); ?>
                    </li>
                <?php endif ?>
            </ul>
        </div>
        <?php if ($metadata['description']): ?>
            <p class="text">
                <?php echo esc_html($metadata['description']); ?>
            </p>
        <?php endif ?>
    </div>
    <?php if ($metadata['previewVideoUrl'] && $metadata['previewImageUrl']): ?>
        <div class="toolkit-previews__preview__video">
            <a
                href="<?php echo esc_url($metadata['previewVideoUrl']); ?>"
                class="toolkit-previews__preview__video__thumbnail video-thumbnail"
                data-lity
            >
                <img
                    class="toolkit-previews__preview__video__image video-thumbnail__image"
                    src="<?php echo esc_url($metadata['previewImageUrl']); ?>"
                    alt="Video thumbnail"
                />
                <button type="button" class="video-thumbnail__control">
                    <?php echo esc_html_e("Preview", DFH_TEXT_DOMAIN); ?>
                </button>
            </a>
        </div>
    <?php endif ?>
</div>
