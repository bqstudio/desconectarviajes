<?php
/**
 * Banner Text Image
 *
 * Title:       Banner Text Image
 * Description: Banner Text Image
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
    <section class="module banner banner--textimage" id="nosotras">
        <div class="container">
            <?php echo ($title = get_field('title'))? '<h2 class="banner__title h3 ">'.$title.'</h2>':'';
            echo ($text = get_field('text'))? '<div class="banner__text">'.$text.'</div>':''; ?>

            <div class="banner__content">
                <div class="banner__left">
                <?php echo ($description = get_field('description'))? '<div class="banner__description">'.$description.'</div>':'';?>
                </div>
                <div class="banner__right">
                    <div class="banner__perfil">
                        <div class="image-background">
                            <?php get_template_part('modules/components/image',NULL,array('image' => get_field('photo_perfil_1')) ); ?>
                        </div>
                        <?php echo ($name_1 = get_field('name_1'))? '<h3 class="banner__name h5">'.$name_1.'</h3>':'';?>
                    </div>
                    <div class="banner__perfil">
                        <div class="image-background">
                            <?php get_template_part('modules/components/image',NULL,array('image' => get_field('photo_perfil_2')) ); ?>
                        </div>
                        <?php echo ($name_2 = get_field('name_2'))? '<h3 class="banner__name h5">'.$name_2.'</h3>':'';?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>