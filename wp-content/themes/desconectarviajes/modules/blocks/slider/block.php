<?php
/**
 * Buttons part for default page
 *
 * Title:       Slider
 * Description: A slider  block.
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
 
<section id='<?php echo $block['id']; ?>' class='block-slider'>
    
    <div class="container">
    <div class="swiper">

        <div class="swiper-wrapper">
        <?php 
        if ( $images = get_field('images') ) {
          if ( is_array($images) AND !empty($images) ){
            foreach( $images AS $k => $i ) { ?>        
            <div class="swiper-slide">
                <img src='https://picsum.photos/1200/500'>                   
            </div>
            
            <?php 
            }
          }
        }
        ?>
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">Prev</div>
        <div class="swiper-button-next">Next</div>

    </div>
    </div>
</section>

