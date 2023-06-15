<?php
/**
 * Banner Text Image
 *
 * Title:       Banner Text Image
 * Description: Banner Text Image
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
    <section class="module banner banner--textimage">
        <div class="container">
            <h2 class="banner__title h3">Nosotras</h2>
            <div class="banner__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu rutrum leo. In a pulvinar lorem, in egestas odio. Mauris sed orci nisl.</p>
            </div>
            <div class="banner__content">
                <div class="banner__left">
                    <h3 class="banner__subtitle h4"><p>Te contamos un poco quienes somos</p></h3>
                    <div class="banner__description"><p> Nulla semper lectus at massa dictum, at sollicitudin enim fermentum. Donec eu aliquam lacus, sed efficitur felis. Ut pretium tortor sit amet magna luctus tristique. Nam iaculis venenatis porttitor. Nullam non lorem porta, consectetur ex sed, maximus massa. Etiam quis est a nisi pharetra ullamcorper. Phasellus vitae pharetra mauris.</p></div>
                    <div class="banner__description"><p> Nulla semper lectus at massa dictum, at sollicitudin enim fermentum. Donec eu aliquam lacus, sed efficitur felis. Ut pretium tortor sit amet magna luctus tristique. Nam iaculis venenatis porttitor. Nullam non lorem porta, consectetur ex sed, maximus massa. Etiam quis est a nisi pharetra ullamcorper. Phasellus vitae pharetra mauris.</p></div>
                </div>
                <div class="banner__right">
                    <div class="banner__perfil">
                        <div class="image-background">
                            <img src="<?php echo get_template_directory_uri();?>/images/examples/perfil.jpg">
                        </div>
                    </div>
                    <div class="banner__perfil">
                        <div class="image-background">
                            <img src="<?php echo get_template_directory_uri();?>/images/examples/perfil.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>