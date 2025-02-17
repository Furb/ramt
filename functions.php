
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
Add google fonts
========================================================================== */

function custom_fonts() {
    wp_enqueue_style(
        'googleFonts', 
        'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', 
        array(), 
        null
    );
}

add_action('wp_enqueue_scripts', 'custom_fonts')





?> 