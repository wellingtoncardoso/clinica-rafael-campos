<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage CPW
 * @since CPW 1.0
 */

get_header(); ?>
    <main>
        <?php if( have_posts() ):
            while( have_posts() ) : the_post();
                the_title( '<h1 class="font-xl family-secondary mb-2"',' </h1>' );?>
                <div class="mt-1 mb-1">    
                    <?php if( has_post_thumbnail( $post ) ){
                        the_post_thumbnail( 'large' );
                    }?>
                </div>
                <?php 
                the_content();
            endwhile;
            else: ?>
            <p class="mb-2"><?php esc_html_e( 'Nothing yet to be displayed', 'wp-cpw' ); ?></p>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>