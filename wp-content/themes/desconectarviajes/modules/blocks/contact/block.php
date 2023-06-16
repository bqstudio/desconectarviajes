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
<section class="wrapper padding-b bg-color">
    <section class="module contact">
        <div class="container">
            <h2 class="contact__title h3">Contacto</h2>
            <div class="contact__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu rutrum leo. In a pulvinar lorem, in egestas odio. Mauris sed orci nisl.</p>
            </div>
            <?php if ($form_id = get_field('form_id')): ?> 
                <div class="form_block">
                    <div class="formBox" >
                        <?php echo do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?>
                    </div>
                </div>
                <?php endif; ?>
            <div class="contact__content">
                <div class="contact__data">
                    <h3 class="contact__subtitle h5"><p>razon social: <span>Liliana Liliana</span></p></h3>
                    <h3 class="contact__subtitle h5"><p>cuit: <span>30-12345678-4</span></p></h3>
                    <h3 class="contact__subtitle h5"><p>Vías de comunicación para efectuar reclamos:</p></h3>
                    <h3 class="contact__subtitle h5">
                        <p>Telefono: <a href="+54111234567">+54111234567</a></p>
                    </h3>
                    <h3 class="contact__subtitle h5">
                        <p>Email: <a href="mailto:info@desconectarviajes.tur.ar/">info@desconectarviajes.tur.ar</a></p>
                    </h3>
                </div>
                <div class="contact__form">

                </div>
                <div class="contact__gobar">
                    <h3 class="contact__subtitle h5">
                        <p><a href="https://tramitesadistancia.gob.ar/tramitesadistancia/detalle-tipo?id=624" tabindex="0" class="contact__link">denuncia contra la agencia</a></p>
                    </h3>
                </div>
            </div>
        </div>
    </section>
</section>