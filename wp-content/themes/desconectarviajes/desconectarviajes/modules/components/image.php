<?php 
$image = ( $args['image'] ? $args['image'] : '' );
$image_id = ( $args['image'] ? $image['id'] : $args['image_id'] );
if ( $image_id ) :

    $cssclass = ( isset($args['cssclass']) ) ? $args['cssclass'] : '';
    $loading = ( isset($args['loading']) ) ? $args['loading'] : 'lazy';

    echo wp_get_attachment_image( $image_id, '', false, [ 
        'class' => $cssclass,
        'loading' => $loading
    ] );
    endif;
