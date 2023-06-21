<?php
/**
 * Banner Image
 *
 * Title:       Banner Image
 * Description: Banner Image
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
<section class="wrapper padding-b bg-color">
    <div class="module banner banner--image" id="ofertas">
        <div class="container">
            <div class="banner__content">
                <div class="banner__flyer">
                    <div class="image-background">
                        <?php get_template_part('modules/components/image',NULL,array('image' => get_field('image')) ); ?>
                    </div>
                </div>
                <div class="banner__description">
                    <div class="banner__text">
                        <?php echo ($title = get_field('title'))? '<h2 class="bannerimage__title h3 ">'.$title.'</h2>':'';
                        echo ($text = get_field('text'))? '<div class="banner__text">'.$text.'</div>':''; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>