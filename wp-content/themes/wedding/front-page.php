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
            <div id="days">345</div>
            <div class="countdown-label">Días</div>
        </div>
        <div class="countdown-numbers">
            <div id="hours">8</div>
            <div class="countdown-label">Horas</div>
        </div>
        <div class="countdown-numbers">
            <div id="minutes">30</div>
            <div class="countdown-label">Minutos</div>
        </div>
    </div>
</section>

<script>
    function countDown() {
        const fechaBoda = new Date("2025-08-09T19:00:00.000-05:00");
        const ahora = new Date();
        const diferencia = fechaBoda - ahora; // cuánto falta en milisegundos

        const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
        const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));

        document.getElementById('days').innerHTML = dias;
        document.getElementById('hours').innerHTML = horas;
        document.getElementById('minutes').innerHTML = minutos;
    }

    countDown();
</script>
<main class="container">

</main>

<?php
get_footer();
?>