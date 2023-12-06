<?php
/*
 * Template Name: Services
 * The services page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="services">
    <div class="pt-5">
        <?php get_template_part('parts/section', 'loancards'); ?>
    </div>

    <?php get_template_part('parts/section', 'solution'); ?>
</main>

<?php get_footer(); ?>