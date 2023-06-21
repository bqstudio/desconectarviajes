<?php
/**
 * Home Hero
 *
 * Title:       Hero Internal
 * Description: Hero Internal
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
<section class="hero_simple">
  <div class="hero_simple__cont">
    <div class="hero_simple__image">
        <?php get_template_part('modules/components/image',NULL,array('image' =>get_field('image')) ); ?>
    </div>
    <div class="container_big">
      <div class="hero_simple__text-cont">
          <h1 class="hero_simple__title"><?php the_title(); ?></h1>
      </div>
    </div>  
  </div>

  </section>