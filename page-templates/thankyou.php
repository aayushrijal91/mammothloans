<?php
/*
 * Template Name: Thank You
 * The thank you page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="thankyouPage">
    <div class="container py-6 py-lg-7">
        <?= get_the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>