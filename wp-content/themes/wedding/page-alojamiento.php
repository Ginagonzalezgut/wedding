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

    <main>

    </main>

<?php
endwhile;
?>

<?php
get_footer();
?>