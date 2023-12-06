<?php
/*
 * Template Name: Online Application
 * The Online Application page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="onlineApplicationPage">
    <section class="form">
        <div class="container">
            <?= do_shortcode('[contact-form-7 id="5fa776d" title="Online Application"]') ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>