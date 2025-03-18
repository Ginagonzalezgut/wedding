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

<section class="countdown">

    <div class="countdown-date">
        <div class="countdown-numbers">
            <div>345</div>
            <div class="countdown-label">Días</div>
        </div>
        <div class="countdown-numbers">
            <div>8</div>
            <div class="countdown-label">Horas</div>
        </div>
        <div class="countdown-numbers">
            <div>30</div>
            <div class="countdown-label">Minutos</div>
        </div>

    </div>
</section>

<main class="container">

</main>

<?php
get_footer();
?>