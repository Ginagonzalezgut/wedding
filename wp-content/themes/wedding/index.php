<?php

get_header();

?>

<main class="main">
    <?php
    while (have_posts()): the_post(); ?>
        <div class="hero">
            <div class="container">
                <h1 class="hero-title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php
    endwhile;
    ?>
</main>

<?php

get_footer();

?>