<?php
/**
 * Wrapper example block
 *
 * Title:       Block Wrapper
 * Slug:        wrapper
 * Description: Wrapper example bloc
 * Category:    palermo
 * Icon:        align-full-width
 * Keywords:    example
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * CSS Deps:
 * JS Deps:
 * InnerBlocks: true
 * Styles:      White, Grey, Dark
 *
 * @package Palermo
 * @subpackage defaultTheme
 * @since defaultTheme  1.0
 */

 do_action( 'palermo_pre_render_block', $block );

 /*
 List oc core blocks: https://developer.wordpress.org/block-editor/reference-guides/core-blocks/#top
 ACF blocks are named "acf/{block-slug}"
 */
 $allowed_blocks = array( 'core/image', 'core/paragraph', 'core/heading', 'core/list' );
 ?>
 <!--  Render block here  -->
<section id='<?php echo $block['id']; ?>' class='block-wrapper <?php echo esc_attr( $block['className'] );?>'>
    <?php    
    echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />';
    ?>
</section>