<?php
/**
 * Buttons part for default page
 *
 * Title:       Tabs
 * Description: A custom block.
 * Category:    palermo
 * Icon:        align-full-width
 * Keywords:    example
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
 <!--  Render block here  -->
<section id='<?php echo $block['id']; ?>' class='block-tabs'>
    Tabs
 </section>