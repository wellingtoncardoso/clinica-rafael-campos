<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
    <!-- add function wp_body_open() -->
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <main id="primary" class="site-main">
