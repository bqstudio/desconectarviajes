<?php if( $link = get_sub_field('link')): ?>
    <a class="grid__item" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
        <div class="image-background">
            <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
        </div>
        <?php echo ($title = get_sub_field('title'))? '<h2 class="grid__title h4">'.$title.'</h2>':'';?>
    </a>
<?php endif; ?>