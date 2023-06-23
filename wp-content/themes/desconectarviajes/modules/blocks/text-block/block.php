<?php
/**
 * Text Block
 *
 * Title:       Text Block
 * Description: Text Block
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

<?php 
    $title = get_field('title');
    $title = ( !empty($title) ) ? $title : '';

    $text = get_field('text');
    $text = ( !empty($text) ) ? $text : '';
?>

<section class="wrapper wrapper--beige padding-b" >
    <section class="module banner text-block" data-waypoint='.25' >
        <div class="container">
            
            <!-- //ifempty -->
            <?php if (!empty($title)) {?>
                <h4 class="banner__title h3"><?php echo wp_kses_post( $title ); ?></h4>
            <?php } ?>

            <?php if (!empty($text)) {?>
                <div class="banner__text">
                    <?php  echo wp_kses_post( $text ); ?>
                </div>
            <?php } ?>
        </div>
    </section>
</section>