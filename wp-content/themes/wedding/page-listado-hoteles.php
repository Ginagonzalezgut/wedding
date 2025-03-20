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
    <p class="container">Queremos que el día de nuestra boda disfrutes tanto como lo haremos nosotros
        por eso hemos buscado algunos de los mejores hoteles de nuestra querida ciudad
        para ayudarte a encontrar la estancia perfecta si la necesitas</p>
    <div class="hotels container">
        <?php
        $args = array("post_type" => "wedding_hotels");
        $hotels = new WP_Query($args);
        while ($hotels->have_posts()) {
            $hotels->the_post();
        ?>
            <div class="hotel-container">
                <article class="hotel">
                    <div class="hotel-desc">
                        <h2 class="hotel-title"> <?php the_title(); ?></h2>
                        <div class="hotel-address"><?php the_field("direccion"); ?></div>
                        <div><?php the_field("precio_por_noche") ?> por noche</div>
                    </div>
                    <?php the_post_thumbnail('medium_large', ['class' => 'hotel-image']); ?>
                </article>
                <?php
                $hotel_url = get_field("url_hotel");
                if ($hotel_url): ?>
                    <a class="hotel-button" href="<?php echo esc_url($hotel_url)  ?>" target="_blank" rel="noopener noreferrer">
                        Más información
                    </a>
                <?php endif; ?>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
    </div>
</main>

<?php
get_footer();
?>