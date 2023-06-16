<div class="grid__item">
    <div class="image-background">
        <?php get_template_part('modules/components/image',NULL,array('image' => get_sub_field('image')) ); ?>
    </div>
    <?php echo ($title = get_sub_field('title'))? '<h2 class="grid__title h4">'.$title.'</h2>':'';?>
</div>