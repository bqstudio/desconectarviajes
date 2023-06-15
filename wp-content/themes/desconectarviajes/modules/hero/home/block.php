<?php
/**
 * Home Hero
 *
 * Title:       Home Hero
 * Description: Home Hero
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
<section class="hero hero--home">
    <div class="hero__image">
        <div class="image-background">
            <?php get_template_part('modules/components/image',NULL,array('image' => get_field('hero_image')) ); ?>
        </div>
    </div>
    <div class="hero__content">
        <div class="hero__data">
            <?php 
            echo ($upper_title = get_field('upper_title'))? '<h2 class="hero__uppertitle h4">'.$upper_title.'</h2>':'';
            echo ($title = get_field('title'))? '<h1 class="hero__title h1">'.$title.'</h1>':'';
            if( $button = get_field('button')): ?>
                <a class="button button--arrow" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>