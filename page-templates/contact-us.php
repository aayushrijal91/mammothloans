<?php
/*
 * Template Name: Contact Us
 * The contact us page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="contactUsPage">
    <section class="introduction pt-7">
        <div class="container">
            <div class="row align-items-center gy-5">
                <?php $introduction = get_field('introduction'); ?>

                <?php if (isset($introduction['display_section']) && $introduction['display_section']) : ?>
                    <div class="col-xl-6">
                        <article>
                            <p class="fs-24 pb-3"><?= $introduction['subtitle'] ?></p>
                            <h3 class="fs-64 text-uppercase font-padaloma"><?= $introduction['title'] ?></h3>

                            <article class="description pt-4 col-xl-11">
                                <?= $introduction['description'] ?>
                            </article>

                            <div class="row col-xl-11 pt-4 gx-2 gx-md-3">
                                <?php if (!empty($introduction['button_1'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $introduction['button_1']['url'] ?>" target="<?= $introduction['button_1']['target'] ?>" class="btn btn-secondary text-black rounded-pill text-uppercase"><?= $introduction['button_1']['title'] ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($introduction['button_2'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $introduction['button_2']['url'] ?>" target="<?= $introduction['button_2']['target'] ?>" class="btn btn-outline-black border-1 btn-white text-black rounded-pill text-uppercase"><?= $introduction['button_2']['title'] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                <?php endif; ?>

                <div class="col">
                    <?= do_shortcode('[contact-form-7 id="ea2fbc2" title="Contact Us"]') ?>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-9 pb-7">
        <?php get_template_part('parts/section', 'whyus'); ?>
    </div>
</main>

<?php get_footer(); ?>