<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all">
</head>
<body class="color-dark font-sans relative">


<header class="fixed top-0 z-50 bg-dark w-screen">
    <div class="container">
    <div class="flex justify-between items-center py-6">
        <a href="#" class="w-24"><img src="/wp-content/uploads/2025/02/logo_green.svg" alt="Tegnestuen RAMT" class="min-h-[2.5rem]"></a>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'container'      => 'false', 
            'menu_class'     => 'main_nav flex space-x-8', 
            'link_before'    => '<span class="btn px-12 py-3 bg-lighterGreen text-white rounded-full hover:bg-white hover:text-dark">', 
            'link_after'     => '</span>',
        )
    );
    ?>
    </div>
    </div>
</header>

