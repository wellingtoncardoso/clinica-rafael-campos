    <section id="redes">
        <div class="container">
            <div class="row pt-3 pb-3 display-flex justify-center">
                <div class="col">
                    <h2 class="font-xl family-secondary mb-2 text-align-center">
                        Siga-nos nas <span class="text-secondary family-exo2-bold">redes sociais</span>
                    </h2>
                    <nav>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </nav>
                </div>            
            </div>
        </div>
    </section>
    <!-- end redes -->
    <section id="schedule">
        <div class="container">
            <div class="row gap-1 pt-3 pb-3">
                <div class="col-12 col-6-md">
                    <h2 class="font-xl family-secondary mb-2">
                        Agende<br> 
                        <span class="text-details">sua consulta</span>
                    </h2>
                    <p>
                        Atendimento adulto e pediátrico, <br>
                        Cirurgias e Exames; Ouvido, Nariz e <br>
                        Garganta, Audiometria, Teste vestibular, <br>dentre outros.
                    </p>
                </div>
                <div class="col-12 col-6-md">
                    <p>Você pode agendar sua consulta através do nossos contatos <br>ou se preferir faça o agendamento online.</p>
                    <div class="mt-2 mb-2">
                        <a href="" class="text-details font-lg action-phone">
                            <div class="display-flex align-items-center gap-0">
                                <i class="fa fa-phone text-primary" style="font-size: 16px; margin-right:5px"></i>
                                <small class="font-sm">( 31 ) </small> 99545-9767
                            </div>
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="btn-details btn-details-hover text-primary">
                        Agende pelo WhatsApp <i class="fab fa-whatsapp" style="font-size: 18px;margin-left: 5px"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end schedule -->
    <footer>
        <div class="container">
            <div class="row gap-1 pt-3 pb-3 align-items-center">
                <div class="col-12 col-6-sm col-4-md">
                    <a href="<?php esc_html_e( esc_url( home_url( '/' ) ) ); ?>">
                        <figure class="mb-2 display-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/delete/Centro Otorrino - logo 1.png" alt="<?php esc_html_e( bloginfo('') ) ?>">
                        </figure>
                    </a>
                    <div class="content">
                        <p>Betim tem um centro dedicado à saúde do seu ouvido, nariz, garganta e estruturas da cabeça e do pescoço. </p>
                        <p>É um prazer imenso cuidar de você com equipamentos modernos e tecnológicos, mas, sobretudo, com humanidade.</p>
                        <p>A qualidade de vida que você merece está ao seu alcance.</p>
                    </div>
                </div>
                <div class="col-12 col-6-sm col-4-md display-grid align-items-center">
                    <nav class="nav-footer">
                       <?php 
                            wp_nav_menu(
                                array(
                                    'theme_locatin' => 'wp_cpw_footer_menu'
                                )
                            );
                       ?>
                    </nav>
                    <div class="contacts">
                        <p class="mt-2">
                            <strong class="family-exo2-bold">Horários de atendimento:</strong> 08h às 18h
                        </p>
                        <nav>
                            <ul>
                                <li><p class="mt-1"><strong class="family-exo2-bold">Contatos</strong></p></li>
                                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href=""><i class="fa fa-phone"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-6-sm col-4-md">
                    <div class="address-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.9063887430857!2d-44.2072916850848!3d-19.97043868658111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6c384848064e1%3A0x5a1c009598287fb0!2sAv.%20Solim%C3%B5es%2C%20108%20-%203%C2%BA%20andar%20-%20Brasil%C3%A9ia%2C%20Betim%20-%20MG%2C%2032600-320!5e0!3m2!1spt-BR!2sbr!4v1684448361790!5m2!1spt-BR!2sbr" width="360" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div>
                    <a href="" target="_blank" class="text-black">
                        <i class="fa fa-location-dot"></i>
                        Avenida Solimões, 108, 3º andar, Bairro Brasileia, Betim - MG. CEP: 32600-320
                    </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12-sm copyright pt-1 pb-1">
                    <div class="display-flex align-items-center justify-center gap-1">
                        <div><p class="m-0">&copy; <?php esc_html_e( get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ) ); ?></p></div>
                        <div><p><a href="<?php echo esc_url( _e( 'http://4dimensoes.com/', 'wp-cpw' ) ); ?>" target="_blank"><?php echo esc_html_e( 'Developed by - 4 Dimensões', 'wp-cpw' ); ?></a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</main>
<?php wp_footer(); ?>
</div>
</body>
</html>