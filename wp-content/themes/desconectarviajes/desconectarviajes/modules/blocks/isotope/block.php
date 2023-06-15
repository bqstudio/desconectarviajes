<?php
/**
 * Isotope List
 *
 * Title:       Isotope List
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
 
<section id='<?php echo $block['id']; ?>' class='block-isotope'>
    <div class="container">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
    </div>
</section>

<style>
.grid-sizer{
    width: 25%;
}    
.grid-item{
    background: #eee;
    width: 25%;
    aspect-ratio: 1;
    margin-bottom: 10px;
}    
@media only screen and (max-width: 1000px) {
    .grid-sizer{
        width: calc( 50% - 5px );
    }    
}
</style>