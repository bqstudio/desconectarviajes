<?php
/**
 * Banner Text
 *
 * Title:       Banner Text
 * Description: Banner Text
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

    $button = get_field('button');
    $button = ( !empty($button) ) ? $button : '';
?>

<section class="wrapper padding-b bg-color" >
    <section class="module banner banner--text" id="servicios" data-waypoint='.25' >
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

            <?php if (!empty($button)) {?>
                <a href="<?php echo esc_attr($button['url']); ?>" class="button button--arrow" tabindex="0" target='<?php echo $button['target']?>'>
                    <?php echo wp_kses_post ($button['title']); ?>
                </a>
            <?php } ?>

        </div>
    </section>
</section>