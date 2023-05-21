<?php
    // hook wp_cpw_custpm_post_surgery to the init action hooks
    add_action( 'init', 'wp_cpw_custom_post_surgery' );
    // the custom function to register a surgery post type
    function wp_cpw_custom_post_surgery(){
        $label = array(
            'name'                  => esc_html__( 'Surgery', 'wp-cpw' ),
            'singular_name'         => esc_html__( 'Surgery', 'wp-cpw' ),
            'add_new'               => esc_html__( 'Add new surgery', 'wp-cpw' ),
            'add_new_item'          => esc_html__( 'Add new surgery', 'wp-cpw' ),
            'edit_item'             => esc_html__( 'Edit surgery', 'wp-cpw' ),
            'new_item'              => esc_html__( 'New surgery', 'wp-cpw' ),
            'all_item'              => esc_html__( 'All surgery', 'wp-cpw' ),
            'view_item'             => esc_html__( 'View surgery', 'wp-cpw' ),
            'search_items'          => esc_html__( 'Search surgerys', 'wp-cpw' ),
            'featured_image'        => esc_html__( 'Surgery image', 'wp-cpw' ),
            'set_featured_image'    => esc_html__( 'Add image', 'wp-cpw' )
        );
        $args = array(
            'labels'                => $label,
            'description'           => esc_html__( 'Keep our surgery and surgery data', 'wp-cpw' ),
            'public'                => true,
            'taxonomies'            => array( 'category' ),
            'menu_position'         => 5,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'has_archive'           => true,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'has_archive'           => true,
            'query_var'             => true,
            'menu_icon'             => 'dashicons-plus'
        );
        register_post_type( 'surgery', $args );
    }

    // hook wp_cpw_custpm_post_service to the init action hooks
    add_action( 'init', 'wp_cpw_custom_post_service' );
    // the custom function to register a service post type
    function wp_cpw_custom_post_service(){
        $label = array(
            'name'                  => esc_html__( 'Service', 'wp-cpw' ),
            'singular_name'         => esc_html__( 'Service', 'wp-cpw' ),
            'add_new'               => esc_html__( 'Add new service', 'wp-cpw' ),
            'add_new_item'          => esc_html__( 'Add new service', 'wp-cpw' ),
            'edit_item'             => esc_html__( 'Edit service', 'wp-cpw' ),
            'new_item'              => esc_html__( 'New service', 'wp-cpw' ),
            'all_item'              => esc_html__( 'All service', 'wp-cpw' ),
            'view_item'             => esc_html__( 'View service', 'wp-cpw' ),
            'search_items'          => esc_html__( 'Search service', 'wp-cpw' ),
            'featured_image'        => esc_html__( 'Service image', 'wp-cpw' ),
            'set_featured_image'    => esc_html__( 'Add image', 'wp-cpw' )
        );
        $args = array(
            'labels'                => $label,
            'description'           => esc_html__( 'Keep our service and service data', 'wp-cpw' ),
            'public'                => true,
            'menu_position'         => 10,
            'supports'              => array( 'title', 'editor' ),
            'has_archive'           => true,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'has_archive'           => true,
            'query_var'             => false,
            'menu_icon'             => 'dashicons-plus'
        );
        register_post_type( 'service', $args );
    }