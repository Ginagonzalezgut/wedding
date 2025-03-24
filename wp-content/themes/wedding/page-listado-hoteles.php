<?php
/*
*Template Name: Listado de Hoteles
*/
get_header();
?>

<main class="">
    <?php
    while (have_posts()): the_post(); ?>
        <div class="hero">
            <div class="container">
                <h1 class="hero-title"><?php the_title(); ?></h1>
            </div>
        </div>
    <?php
    endwhile;
    ?>
    <div class="container accommodation">
        <h2 class="accommodation-title">Hoteles</h2>
        <p class="accommodation-subtitle">Hemos buscado algunos de los mejores hoteles de nuestra querida ciudad
            para ayudarte a encontrar la estancia perfecta si la necesitas</p>
        <div class="owl-carousel">
            <?php
            $args = array("post_type" => "wedding_hotels");
            $hotels = new WP_Query($args);
            while ($hotels->have_posts()) {
                $hotels->the_post();
            ?>
                <div class="hotel-container">
                    <article class="hotel">
                        <div class="hotel-desc">
                            <h3 class="hotel-title"> <?php the_title(); ?></h3>
                            <p class="hotel-address small-text"><?php the_field("direccion"); ?></p>
                            <p class="small-text"><?php the_field("precio_por_noche") ?> por noche</p>
                        </div>
                        <?php the_post_thumbnail('medium_large', ['class' => 'hotel-image']); ?>
                    </article>
                    <?php
                    $hotel_url = get_field("url_hotel");
                    if ($hotel_url): ?>
                        <a class="button" href="<?php echo esc_url($hotel_url)  ?>" target="_blank" rel="noopener noreferrer">
                            Más información
                        </a>
                    <?php endif; ?>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>


    <script>
        $ = jQuery;
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                nav: true,
                loop: true,
                // autoplay: true,
                // autoplayTimeout: 3000,
                // fluidSpeed: true,
                // autoplaySpeed: 1000,
                // autoplayHoverPause: true
            });
        });
    </script>
    <h2>Actividades</h2>
</main>

<?php
get_footer();
?>