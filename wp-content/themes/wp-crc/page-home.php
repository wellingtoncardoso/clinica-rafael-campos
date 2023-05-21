<?php get_header(); ?>
    <?php echo get_template_part( 'template-parts/slider' ); ?>
    <section id="services">
        <div class="container">
            <div class="row pt-3 pb-3 gap-1">
                <div class="col-12 col-6-md">
                    <h2 class="text-secondary font-xl family-secondary text-details mb-2">
                        Atendimentos
                    </h2>
                    <p class="text-black family-secondary">Selecione a modalidade e saiba detalhes como o tipo de serviço e a duração:</p>
                    <div id="accordion">
                        <?php 
                            $args = array( 'post_type' => 'service', 'posts_per_page' => -1 );
                            $list = new WP_Query( $args );
                            if( $list->have_posts() ):
                                while( $list->have_posts() ) : $list->the_post();?>
                                    <div class="accordion-item">
                                        <div class="accordion-item__header text-black">
                                            <?php the_title(); ?>                                
                                        </div>
                                        <div class="accordion-item__body">
                                            <div class="content text-black family-bauhaus">    
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                            else:?>
                            <p><?php esc_html_e( 'Nothing yet to be displaed!','wp-cpw' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <div class="content">
                            <p class="font-size family-exo2 mt-2 mb-2">
                            Atendimento individualizado, humanizado e de acordo com as necessidades de cada paciente.
                            </p>
                        </div>
                        <a href="" class="btn-details btn-details-hover text-primary">
                            Agende sua consulta!
                        </a>
                    </div>
                </div>
                <div class="col-12 col-6-md">
                    <figure><img src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/slide-04.jpg" alt="" class="img-full img-720h"></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->
    <section id="about" class="background-secondary">
        <div class="container">
            <div class="row pt-3 pb-3 gap-1 align-items-center">
                <div class="col-12 col-6-md">
                    <figure><img src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/team.jpg" alt="" class="img-full img-520h"></figure>
                </div>
                <div class="col-12 col-6-md">
                    <h2 class="font-xl family-secondary mb-2">
                        Sobre o <br>
                        <strong class="text-primary ">Centro de Otorrino Betim</strong>
                    </h2>
                    <p class="text-primary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima optio? Tempora nihil minus quod hic consequatur quasi dolor fugit iusto accusantium, veniam aliquid! Harum doloribus dolores placeat obcaecati molestiae? Harum quam incidunt deleniti omnis, neque quisquam iste blanditiis, perferendis nobis assumenda ut consequatur qui, id quae magni explicabo! Dolorum!
                    </p>
                    <p class="text-primary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In, minima optio? Tempora nihil minus quod hic consequatur quasi dolor fugit iusto accusantium, veniam aliquid! Harum doloribus dolores placeat obcaecati molestiae? Harum quam incidunt deleniti omnis, neque quisquam iste blanditiis, perferendis nobis assumenda ut consequatur qui, id quae magni explicabo! Dolorum!
                    </p>
                    <a href="" class="btn-outlined-primary text-primary mt-2">
                        <?php esc_html_e( 'Lead more', 'wp-cpw' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->
    <section id="address">
        <div class="container">
            <div class="row pt-2 pb-2 gap-1 align-items-center">
                <div class="col-12 col-6-md">
                    <h2 class="font-xl family-secondary mb-2">
                        A clínica
                    </h2>
                    <h3 class="font-lg family-bauhaus mb-2">
                        Um centro de especialidades em nariz, ouvido e garganta para te proporcionar qualidade de vida.
                    </h3>
                    <a href="" target="_blank" class="text-black">
                        <i class="fa fa-location-dot"></i>
                        Faça-nos uma visita na Avenida Solimões, <br>108, 3º andar, Bairro Brasileia, Betim - MG.
                    </a>
                    <p class="mt-2">
                        <strong class="family-exo2-bold">Horários de atendimento:</strong> 08h às 18h
                    </p>
                    <div class="">
                        <a href="" class="btn-secondary btn-secondary-hover text-primary">
                        Agende sua consulta pelo WhatsApp <i class="fab fa-whatsapp" style="font-size: 18px;margin-left: 5px"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-6-md">
                    <div class="slick-slider__address">
                        <figure>
                            <img class="img-520h" src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/cob(1).jpg" alt="">
                        </figure>
                        <figure>
                            <img class="img-520h" src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/cob(2).jpg" alt="">
                        </figure>
                        <figure>
                            <img class="img-520h" src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/cob(3).jpg" alt="">
                        </figure>
                        <figure>
                            <img class="img-520h" src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/cob(4).jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end address -->

<?php get_footer(); ?>