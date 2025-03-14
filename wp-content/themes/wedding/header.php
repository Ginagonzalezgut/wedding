<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <a href="<?php echo site_url("/"); ?>">
                <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/wedding.png" alt="logoGiselleandFernando">
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'header-nav', # la clase del <nav>
                'menu_class' => 'header-menu', # la clase del <ul>
            ));
            ?>
        </div>
    </header>