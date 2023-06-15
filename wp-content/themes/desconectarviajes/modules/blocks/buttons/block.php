<?php
/**
 * Buttons part for default page
 *
 * Title:       Buttons
 * Description: A custom block.
 * Category:    palermo
 * Icon:        align-full-width
 * Keywords:    buttons, links
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
<?php if( have_rows('buttons') ):?>
    <section id='<?php echo $block['id']; ?>' class="block-buttons">
        <div class="container">
        <?php while ( have_rows('buttons') ) : the_row(); ?>
            <?php if( $button = get_sub_field('button')): 
            get_template_part( 
                'modules/components/button', 
                null,  
                [
                    'button' => $button
                ]
            );
            endif; ?>
        <?php endwhile; ?>
        </div> 
    </section>
<?php endif; ?>