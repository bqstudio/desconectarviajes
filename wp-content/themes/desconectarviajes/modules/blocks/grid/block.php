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
            <h4 class="grid__title__heading h3">Title Destinos</h4>
            <div class="grid__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu rutrum leo. In a pulvinar lorem, in egestas odio. Mauris sed orci nisl.</p>
            </div>
            <div class="grid__content n-item-8">
                <?php get_template_part('modules/blocks/items/banner_item'); ?>
                <?php get_template_part('modules/blocks/items/banner_item'); ?>
                <?php get_template_part('modules/blocks/items/banner_item'); ?>
                <?php get_template_part('modules/blocks/items/banner_item'); ?>
                <?php get_template_part('modules/blocks/items/banner_item'); ?>
                <?php get_template_part('modules/blocks/items/banner_item'); ?> 
                <?php get_template_part('modules/blocks/items/banner_item'); ?> 
                <?php get_template_part('modules/blocks/items/banner_item'); ?> 
            </div>
        </div>
    </div>
</section>