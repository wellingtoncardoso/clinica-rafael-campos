<?php get_header(); ?>
    <?php echo get_template_part( 'template-parts/slider' ); ?>

    <section>
        <div class="container pt-2 pb-2">
            <div class="row gap-1">
                <?php
                $args = array( 'post_type' => 'surgery', 'posts_per_page' => -1 );
                $list = new WP_Query( $args );
                if( $list->have_posts() ):
                    while( $list->have_posts() ) : $list->the_post();?>
                            <article id="post-<?php the_ID(); ?>" class="col-12 col-6-sm col-3-md">
                                <?php 
                                echo '<div class="article-header">';
                                    if( has_post_thumbnail() ){
                                        the_post_thumbnail( 'medium' );
                                    }    
                                    echo '<span>'; the_category( '' ); echo '</span>';
                                echo '</div>';
                                echo '<div class="article-body">';
                                    the_title( '<h2 class="family-exo2-bold font-lg mb-1 mt-1">','</h2>' );
                                    the_excerpt();
                                echo '</div>';
                                ?>
                                <a href="<?php the_permalink(); ?>" class="btn-outlined-details text-details "><?php esc_html_e( 'Lead more', 'wp-cpw' ); ?></a>
                            </article>
                            <?php
                        endwhile;
                    wp_reset_postdata();
                    else:?>
                        <p><?php esc_html_e( 'Nothing yet to be displaed!','wp-cpw' ); ?></p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>