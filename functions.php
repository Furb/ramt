
<?php 

/*Removw admin*/

add_filter('show_admin_bar', '__return_false');


/* Add Google Font */
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