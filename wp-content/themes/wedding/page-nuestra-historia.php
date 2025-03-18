<?php
get_header();
?>

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

<div class="container">
    <section class="history">
        <div class="moment">
            <?php
            $momento_1 = get_field("momento_1");
            $imagen = $momento_1["imagen"]["sizes"]["medium"];
            $texto = $momento_1["texto"];
            ?>
            <div>
                <img class="moment-image" src="<?php echo $imagen ?>" alt="">
            </div>
            <p class="moment-text">
                <?php
                echo esc_html($texto);
                ?>
            </p>
        </div>
        <div class="moment">
            <?php
            $momento_2 = get_field("momento_2");
            $imagen = $momento_2["imagen"]["sizes"]["medium"];
            $texto = $momento_2["texto"];
            ?>
            <p class="moment-text">
                <?php
                echo esc_html($texto);
                ?>
            </p>
            <div><img class="moment-image" src="<?php echo $imagen ?>" alt=""></div>

        </div>
        <div class="moment">
            <?php
            $momento_3 = get_field("momento_3");
            $imagen = $momento_3["imagen"]["sizes"]["medium"];
            $texto = $momento_3["texto"];
            ?>
            <div>
                <img class="moment-image" src="<?php echo $imagen ?>" alt="">
            </div>
            <p class="moment-text">
                <?php
                echo esc_html($texto);
                ?>
            </p>
        </div>
        <div class="moment">
            <?php
            $momento_4 = get_field("momento_4");
            $imagen = $momento_4["imagen"]["sizes"]["medium"];
            $texto = $momento_4["texto"];
            ?>
            <p class="moment-text">
                <?php
                echo esc_html($texto);
                ?>
            </p>
            <div>
                <img class="moment-image" src="<?php echo $imagen ?>" alt="">
            </div>

        </div>
    </section>
</div>

<?php
get_footer();
?>