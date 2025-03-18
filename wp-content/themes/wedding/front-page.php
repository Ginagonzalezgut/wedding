<?php
get_header();
?>

<section class="landing-hero" style="background-image: url(<?php the_field('imagen_bienvenida') ?>);">
    <div class="container">
        <h1 class="landing-hero-title">
            <?php the_field('encabezado_de_bienvenida'); ?>
        </h1>
        <p class="landing-hero-text">
            <?php the_field('texto_bienvenida'); ?>
        </p>
    </div>
    <div class="landing-hero-overlay"></div>
</section>



<main class="container">
</main>

<?php
get_footer();
?>