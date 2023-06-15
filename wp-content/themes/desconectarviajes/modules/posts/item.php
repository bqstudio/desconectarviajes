<article class="post-item">
    <?php echo (has_post_thumbnail())? '<a href="'.get_the_permalink().'" class="post-item__image"><div class="image-background">' . get_the_post_thumbnail(null, 'large') . ' </div></a>':''; ?>
    <div class="post-item__text-cont">
        <h3 class="post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="post-item__text"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></div>
        <a class="viewmore" href="<?php the_permalink(); ?>"><?php echo __('Read More','palermo'); ?></a>
    </div>
</article>