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
            <img src="<?php echo get_template_directory_uri();?>/images/examples/playa.jpg">
        </div>
    </div>
    <div class="hero__content">
        <div class="hero__data">
            <h2 class="hero__uppertitle h4">para tus vacaciones</h2>
            <h1 class="hero__title h1">des conectar viajes!</h1>   
            <a href="#" class="button button--arrow" tabindex="0">Button Inicio</a>
        </div>
    </div>
</section>