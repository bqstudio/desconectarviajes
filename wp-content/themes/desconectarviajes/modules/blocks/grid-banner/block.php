<?php
/**
 * Grid Banner
 *
 * Title:       Grid Banner
 * Description: Grid Banner
 * Category:    palermo_hero
 * Icon:        align-full-width
 * Keywords:    hero
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:
 * JS Deps:
 *
 * @package Palermo
 * @subpackage defaultTheme
 * @since defaultTheme  1.0
 */

 do_action( 'palermo_pre_render_block', $block );
 ?>
<section class="wrapper padding-b">
    <div class="module grid grid--banner">
        <div class="container">
            <?php echo ($title = get_field('title'))? '<h4 class="grid__title__heading h3">'.$title.'</h4>':''; ?>
            <?php echo ($description = get_field('description'))? '<p class="grid__text">'.$description.'</p>':''; ?>
            
            <?php if (have_rows('items')) : ?>
                <div class="grid__content <?php echo 'n-item-' . count(get_field('items')); ?>">
                    <?php
                    $item_counter = 0;
                    while (have_rows('items')) : the_row();
                        $item_counter++;
                        get_template_part('modules/blocks/items/banner_item');
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>