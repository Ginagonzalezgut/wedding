<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <?php the_custom_logo();  ?>
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