<?php
/*
*Template name: Galeria
*/
get_header();
?>

<main>
    <?php
    while (have_posts()): the_post();

    ?>
        <div class="hero">
            <div class="container">
                <h1 class="hero-title"><?php the_title(); ?></h1>
            </div>
        </div>

        <?php
        //Obtener la galeria 
        $galeria = get_post_gallery(get_the_id(), false);

        //Obtener los ID`S de un arrey
        $galeria_imagenes_id = explode(",", $galeria["ids"]);
        ?>

        <ul class="galeria-imagenes container">
            <?php
            foreach ($galeria_imagenes_id as $id) {
                $imagen_grande = wp_get_attachment_image_src($id, "large")[0];
                $imagen_full = wp_get_attachment_image_src($id, "full")[0];
            ?>
                <li>
                    <a href="<?php echo $imagen_full; ?>">
                        <img src="<?php echo $imagen_grande; ?>" alt="imagengaleria" />
                    </a>
                </li>

            <?php
            }

            ?>
        </ul>
    <?php
    endwhile;
    ?>

</main>

<?php
get_footer();
?>