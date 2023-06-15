<?php
/**
 * Animation example block
 *
 * Title:       Animation Exmaple
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
 
<?php 
/*
El parametro data-waypoint es el porcentaje del bloque visible en pantalla para que la animacion se dispare (se aplica la clase "in").
Ademas, se puede mandar un parametro data-funcion con un nombre de funcion que sera disparado al mismo tiempo. (Ver funcion en /jsanimation.js)
*/
?>
<section id='<?php echo $block['id']; ?>' class='block-animation' data-waypoint='.25' data-function='waypoint'>
    <div class="container">
        <div class="image">
            <img src='https://picsum.photos/600/500'>   
        </div>
        <div class="text">
            <h2 class='title'>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </h2>
            <div class="text__content">
                <p>
                    Suspendisse nunc nulla, aliquet a consequat in, viverra eget tortor. Morbi blandit et felis quis consequat. Aenean lacinia viverra tortor, nec auctor urna vestibulum in. Suspendisse sed tortor pretium, vestibulum nulla finibus, mollis leo. Fusce ac lobortis magna. Maecenas et purus at magna fringilla efficitur id ut urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non risus vitae turpis auctor iaculis. Donec a tellus erat.
                </p>
            </div>
            <div class="text__button">
                <a href="#" class="button">Sample Button</a>
            </div>
        </div>
    </div>
</section>
