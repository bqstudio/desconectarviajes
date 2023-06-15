<?php
/**
 * Buttons part for default page
 *
 * Title:       Example Block
 * Slug:        example-block
 * Description: A custom block.
 * Category:    palermo
 * Icon:        align-full-width
 * Keywords:    example
 * Post Types:  all
 * Multiple:    true
 * Active:      true
 * Styles:      
 * CSS Deps:
 * JS Deps:
 *
 * @package Palermo
 * @subpackage defaultTheme
 * @since defaultTheme  1.0
 */

 do_action( 'palermo_pre_render_block', $block );
?>
 
<section id='<?php echo $block['id']; ?>' class='block-_block <?php echo esc_attr( $block['className'] );?>'>
    _Block
</section>
