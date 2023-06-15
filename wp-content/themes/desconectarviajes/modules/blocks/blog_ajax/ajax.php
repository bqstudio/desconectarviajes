<?php
add_action( 'wp_ajax_loadBlog', 'loadBlog_callback' );
add_action( "wp_ajax_nopriv_loadBlog", "loadBlog_callback" );


function loadBlog_callback() {
    $check_nonce = check_ajax_referer( 'loadBlog-ajax', 'security' );
    if ( !$check_nonce ) die('Nonce failed');
    
    $cat = ( ( isset($_POST['cat']) AND !empty($_POST['cat']) ) ? addslashes( $_POST['cat'] ) : '' );
    $paged = ( ( isset($_POST['page']) AND !empty($_POST['page']) ) ? addslashes( $_POST['page'] ) : 1 );
    $base = ( ( isset($_POST['base']) AND !empty($_POST['base']) ) ? addslashes( $_POST['base'] ) : 1 );

    $args = [ 
        'posts_per_page' => 3, 
        'post_type'=> "post", 
        'paged' => $paged, 
        'cat' => $cat 
    ];
    $loop = new WP_Query( $args );
    if ( $loop->post_count == 0 ) {
        exit;
    }
    
    ob_start();
    while ( $loop->have_posts() ) : $loop->the_post();
        get_template_part( 'modules/posts/item'  );
    endwhile;    
    $posts = ob_get_contents();
    ob_end_clean();

    $_SERVER['REQUEST_URI'] = $base;
    $pagination = paginate_links( [
        'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
        'format' => '?paged=%#%',
        'current' => $paged,
        'total' => $loop->max_num_pages
    ] );

    echo wp_json_encode( [
        'posts'=> $posts,
        'pagination'=> $pagination
    ]);
    exit;
}