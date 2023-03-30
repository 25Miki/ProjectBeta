<?php

//  SCRIPTS AND STYLES (AÑADIR MI TEMA)

    function my_scripts_and_styles()
    {
        if ( ! is_admin() )
        {            
            wp_enqueue_style ( 'theme-styles', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_styles' );


//  THEME SETUP

    function my_theme_setup()
    {
        remove_theme_support ( 'core-block-patterns' );
    }

    add_action ( 'after_setup_theme', 'my_theme_setup' );

// CUSTOM GUTEMBERG STYLES

    function my_custom_gutenberg_styles() {
        wp_enqueue_style(
            'my-custom-gutenberg-styles',
            get_stylesheet_directory_uri() . './gutenberg.css',
            false
        );
    }
    add_action('enqueue_block_editor_assets', 'my_custom_gutenberg_styles');



?>


