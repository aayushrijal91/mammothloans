<?php
/*
 * Template Name: Asset loans
 * The asset loans page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="assetLoansPage">
    <?php $introduction = get_field('introduction'); ?>

    <?php if (isset($introduction['display_section']) && $introduction['display_section']) : ?>
        <section class="introduction pt-5">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-6">
                        <article>
                            <p class="subtitle pb-3"><?= $introduction['subtitle'] ?></p>
                            <h3 class="heading text-uppercase font-padaloma"><?= $introduction['title'] ?></h3>

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
                    <div class="col-xl-6">
                        <div class="image">
                            <?= echo_image($introduction['image'], '', 'hero') ?>
                            <?= echo_theme_image('/lib/overlay-mammoth.png', "Mammoth", "position-absolute bottom-0") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $solution = get_field('solution'); ?>

    <?php if (isset($solution['display_section']) && $solution['display_section']) : ?>
        <section class="part-solution pt-9">
            <div class="container">
                <?php
                if (have_rows('solution')) :
                    while (have_rows('solution')) : the_row();
                        if (have_rows('list')) :
                            $index = 1;
                ?>

                            <div class="row justify-content-between align-items-center gx-xl-6 gy-5">
                                <div class="col-xl-6 order-2 order-lg-1">
                                    <div class="row g-4">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="col-md-6">
                                                <article class="folder <?= $index == 1 ? 'bg-secondary' : 'bg-light-grey' ?> description fs-14">
                                                    <p class="fs-24 fw-600"><?= get_sub_field('title'); ?></p>
                                                    <?= get_sub_field('description') ?>
                                                </article>
                                            </div>
                                        <?php
                                            $index++;
                                        endwhile;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 order-1 order-lg-2">
                                    <article>
                                        <h3 class="heading text-uppercase font-padaloma"><?= $solution['title'] ?></h3>

                                        <article class="description py-4">
                                            <?= $solution['description'] ?>
                                        </article>

                                        <div class="row col-xl-10 gx-2 gx-md-3">
                                            <?php if (!empty($solution['button_1'])) : ?>
                                                <div class="col-6">
                                                    <a href="<?= $solution['button_1']['url'] ?>" target="<?= $solution['button_1']['target'] ?>" class="btn btn-secondary text-black rounded-pill text-uppercase"><?= $solution['button_1']['title'] ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($solution['button_2'])) : ?>
                                                <div class="col-6">
                                                    <a href="<?= $solution['button_2']['url'] ?>" target="<?= $solution['button_2']['target'] ?>" class="btn btn-outline-black border-1 btn-white text-black rounded-pill text-uppercase"><?= $solution['button_2']['title'] ?></a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </article>
                                </div>
                            </div>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </section>
    <?php endif; ?>

    <div class="pt-9 pb-7">
        <?php get_template_part('parts/section', 'whyus'); ?>
    </div>
</main>

<?php get_footer(); ?>