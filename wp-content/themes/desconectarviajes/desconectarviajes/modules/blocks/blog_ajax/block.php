<?php
/**
 * List with ajax filters
 *
 * Title:       Blog ajax filters
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
 $ajax_nonce = wp_create_nonce( "loadBlog-ajax" );
?>
 
<section id='<?php echo $block['id']; ?>' class='block-blog_ajax'>
    <div class="container">

        <div class="filters">
            <button data-id='0' class='active'>All</button>
            <?php
            $terms = get_terms('category');
            foreach ($terms as $t) {
                ?>
                <button data-id='<?php echo $t->term_id; ?>'><?php echo $t->name; ?></button>
                <?php
            }
            ?>
        </div>

        <div class="bloglist" data-security='<?php echo $ajax_nonce; ?>'>
            <?php
            $args = [
                'posts_per_page' => 3, //this needs to be replicated in ajax.php
                'post_type'=> "post", 
                'paged' => 1 
            ];
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                get_template_part( 'modules/posts/item'  );
            endwhile;            
            ?>
        </div>
        <div class="blogpagination">
            <?php            
            echo paginate_links( [
                'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
                'format' => '?paged=%#%',
                'total' => $loop->max_num_pages
            ] );
            wp_reset_query();
            ?>
        </div>

    </div>
</section>
