<?php 

/* ==========================================================================
Remove adminbar
========================================================================== */

add_filter('show_admin_bar', '__return_false');


/* ==========================================================================
Theme default support
========================================================================== */

if (!function_exists('base_setup')) {
    function base_setup()
    {

        /* post thumbnail support */
        add_theme_support('post-thumbnails');

        /* Menuer */
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu'),
                'mobil_menu' => __('Mobile Menu'),
            )
        );
        
    }
}

add_action('after_setup_theme', 'base_setup');



/* ==========================================================================
Temaets JS
========================================================================== */


function custom_scripts() {
    wp_enqueue_script(
        'custom-js',  
        get_template_directory_uri() . '/scripts.js', 
        NULL, 
        1.0, 
        true 
    );
}

// Ensure function is declared before adding the action
add_action('wp_enqueue_scripts', 'custom_scripts');


/* ==========================================================================
Add google fonts + material icons
========================================================================== */

function custom_fonts() {
    wp_enqueue_style(
        'googleFonts', 
        'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', 
        array(), 
        null
    );

    wp_enqueue_style(
        'materialSymbols', 
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700', 
        array(), 
        null
    );
}

add_action('wp_enqueue_scripts', 'custom_fonts');





?> 