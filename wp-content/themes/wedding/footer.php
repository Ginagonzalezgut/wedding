    <footer class="footer ">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'header-nav', # la clase del <nav>
                'menu_class' => 'header-menu', # la clase del <ul>
            ));
            ?>
        </div>
    </footer>

    <?php
    wp_footer();
    ?>
    </body>

    </html>