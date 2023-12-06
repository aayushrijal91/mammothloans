<?php
/*
 * Template Name: About
 * The about page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="aboutPage">
    <?php $introduction = get_field('introduction'); ?>

    <?php if (isset($introduction['display_section']) && $introduction['display_section']) : ?>
        <section class="introduction pt-5">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <article>
                            <p class="subtitle pb-3"><?= $introduction['subtitle'] ?></p>
                            <h3 class="heading text-uppercase font-padaloma"><?= $introduction['title'] ?></h3>

                            <article class="description pt-4 col-xl-11">
                                <?= $introduction['description'] ?>
                            </article>

                            <div class="row col-xl-11 pt-4 gx-2 gx-md-4">
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
                    <div class="col-lg-6">
                        <div class="image">
                            <?= echo_image($introduction['image'], '', 'hero') ?>
                            <?= echo_theme_image('/lib/overlay-mammoth.png', "Mammoth", "d-none d-md-block position-absolute bottom-0") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div class="pt-6 pt-md-8">
        <?php get_template_part('parts/section', 'lenders'); ?>
    </div>

    <div class="pt-5 pb-6 pb-md-8">
        <?php get_template_part('parts/section', 'loancards'); ?>
    </div>

</main>

<?php get_footer(); ?>