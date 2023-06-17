<?php
/**
 * Contact
 *
 * Title:       Contact
 * Description: Contact
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
<section class="wrapper padding-b wrapper--blue">
    <section class="module contact" id="contacto">
        <div class="container">
            <?php echo ($title = get_field('title'))? '<h2 class="contact__title h3">'.$title.'</h2>':''; ?>
            <?php echo ($text = get_field('text'))? '<div class="contact__text">'.$text.'</div>':''; ?>

            <div class="contact__content">
                <div class="contact__data">
                    <?php echo ($data = get_field('data'))? '<h3 class="contact__subtitle h5">'.$data.'</h3>':''; ?>

                </div>
                <?php if ($form_id = get_field('form_id')): ?> 
                    <div class="contact__form">
                        <div class="formBox" >
                            <?php echo do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="contact__gobar">
                <h3 class="contact__subtitle h5">
                    <p><a href="https://tramitesadistancia.gob.ar/tramitesadistancia/detalle-tipo?id=624" tabindex="0" class="contact__link">denuncia contra la agencia</a></p>
                </h3>
            </div>
        </div>
    </section>
</section>