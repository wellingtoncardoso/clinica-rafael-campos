<?php get_header(); ?>
    <header>
        <div id="site-main" class="navigation">
            <div class="display-flex justify-between align-items-center">
                <div class="site-main__logo">
                    <a href="<?php esc_html_e( esc_url( home_url( '/' ) ) ); ?>" aria-label="<?php bloginfo( '' ); ?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/delete/Centro Otorrino - logo 2 b.png" alt="<?php bloginfo( '' ); ?>" class="img-full navigation__item-logo">
                    </a>
                </div>
                <div class="site-main__nav">
                    <span class="material-symbols-outlined text-primary">menu</span>
                    <span class="material-symbols-outlined text-primary">close</span>
                    <!-- <nav class="redes-sociais">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook text-primary"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram text-primary"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter text-primary"></i></a></li>
                        </ul>
                    </nav> -->
                    <nav class="nav-main">
                        <ul>
                            <li class="nav-item"><a href="">Início</a></li>
                            <li class="nav-item"><a href="">Atendimento</a></li>
                            <li class="nav-item"><a href="">Cirurgias</a></li>
                            <li class="nav-item"><a href="">Sobre</a></li>
                            <li class="nav-item"><a href="">Convênios</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="site-main__redes-sociais display-flex justify-between align-items-center gap-1">
                    <div>
                        <nav class="redes-sociais">
                            <ul>
                                <li>
                                    <a href="">
                                        <figure class="text-primary">
                                            <img src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/svg/instagram.svg" alt="<?php esc_html_e( bloginfo('') )?>-instagram">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="divider-vertical"></div>
                    <div>
                        <a href="" class="btn-secondary btn-primary-hover text-primary">
                           <div class="display-flex align-items-center gap-0">
                                <figure>
                                <img src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/svg/phone.svg" alt="<?php esc_html_e( bloginfo('') )?>-phone"></figure> <span> (31) 98888-7777</span>
                           </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="hero" class="site-main__banner"
        style="
            background-image: url( '<?php echo get_template_directory_uri()?>/assets/images/delete/slide-03.jpg' );
        ">
        <div class="container">
            <div class="row">
                <div class="details">
                    <h2 class="text-primary font-xl family-secondary">
                        Sua saúde com o cuidado e com a tecnologia de ponta que você merece!
                    </h2>
                    <p class="text-primary font-size family-bauhaus">
                        <span>
                            Um dos compromissos do Centro de Otorrino Betim é aplicar o que a tecnologia oferece de melhor em diagnóstico e tratamento para cuidar de você com o máximo de zelo. Sobretudo ao se tratar de áreas tão delicadas quanto a otorrinolaringologia atende.        
                        </span>
                    </p>
                    <div class="action">
                        <a href="" class="btn-outlined-primary btn-secondary-hover text-primary">
                            <?php esc_html_e( 'Schedule your appointment', 'wp-cpw' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <section id="services">
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-12 col-6-md">
                    <h2 class="text-secondary font-xl family-secondary text-details">
                        <?php esc_html_e( 'Service', 'wp-cpw' ); ?>
                        <p class="font-md text-black family-bauhaus mt-2 mb-2">Selecione a modalidade e saiba detalhes como o tipo de serviço e a duração:</p>
                    </h2>
                    <div id="accordion">
                        <?php for( $i=0; $i<6; $i++ ){?>
                        <div class="accordion-item">
                            <div class="accordion-item__header text-black">
                                Lorem ipsum dolor sit amet.                                
                            </div>
                            <div class="accordion-item__body">
                                <div class="content text-black">    
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam animi quod illum, quam placeat perspiciatis molestiae, nam, ad voluptatem doloribus adipisci maxime eligendi quasi minus debitis dicta inventore cumque fugit voluptatibus libero? Expedita, minima. Sit alias, nulla dolorem, nam expedita facere velit omnis nemo voluptate tenetur magnam, cumque pariatur? Totam.
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-12 col-6-md">
                    <figure><img src="<?php esc_html_e( get_template_directory_uri() )?>/assets/images/delete/slide-04.jpg" alt="" class="img-full"></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

<?php get_footer(); ?>