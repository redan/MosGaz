<?php
    add_action( 'wp_enqueue_scripts', 'mosgaz_scripts');

    function mosgaz_scripts(){
        wp_enqueue_style( 'mosgaz_style', get_stylesheet_uri());
        wp_enqueue_script('jquery');
        wp_enqueue_script('mosgaz_script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
    }

    add_theme_support( 'custom-logo' );
?>