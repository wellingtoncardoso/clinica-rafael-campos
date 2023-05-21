<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- add function wp_body_open() -->
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <main id="primary" class="site-main">
            <header>
                <div id="site-main" class="navigation">
                    <div class="display-flex justify-between align-items-center">
                        <div class="site-main__logo">
                            <?php 
                                if( has_custom_logo() ){
                                    the_custom_logo();
                                }else{?>
                                <a href="<?php esc_attr_e( esc_url( home_url( '/' ) ) ) ?>"><?php bloginfo( 'name' ); ?></a>
                            <?php }?>
                        </div>
                        <div class="site-main__nav">                 
                            <nav class="nav-main">
                                <?php 
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'wp_cpw_main_menu',
                                            'depth' => 2
                                        )
                                    );
                                ?>
                            </nav>
                        </div>
                        <div class="site-main__redes-sociais display-flex justify-between align-items-center gap-1">
                            <div>
                                <nav class="redes-sociais">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="fab fa-instagram text-primary" style="font-size: 22px;"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="divider-vertical"></div>
                            <div>
                                <a href="" class="btn-secondary btn-primary-hover text-primary">
                                <div class="display-flex align-items-center gap-0">
                                <i class="fa fa-phone text-primary" style="font-size: 16px; margin-right:5px"></i> <span> (31) 98888-7777</span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
