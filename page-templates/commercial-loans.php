<?php
/*
 * Template Name: Commercial Loans
 * The commercial loans page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="commercialLoansPage">
    <?php $introduction = get_field('introduction');
    if (isset($introduction['display_section']) && $introduction['display_section']) :
    ?>
        <section class="introduction pt-6 pb-4">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <article class="">
                            <p class="subtitle pb-3"><?= $introduction['subtitle'] ?>s</p>
                            <h3 class="heading text-uppercase font-padaloma"><?= $introduction['title'] ?></h3>

                            <article class="description py-4 col-xl-11 ">
                                <?= $introduction['description'] ?>
                            </article>

                            <div class="row col-xl-9 gx-2 gx-md-3">
                                <?php if (!empty($introduction['button_1'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $introduction['button_1']['url'] ?>" target="<?= $introduction['button_1']['target'] ?>" class="btn btn-grey text-secondary rounded-pill text-uppercase"><?= $introduction['button_1']['title'] ?></a>
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
                            <?= echo_theme_image('/lib/overlay-mammoth.png', "Mammoth", "position-absolute bottom-0") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'video'); ?>

    <div class="pb-6">
        <?php get_template_part('parts/section', 'whyus'); ?>
    </div>

    <?php get_template_part('parts/section', 'loancards'); ?>

    <?php
    $about = get_field('about');

    if (isset($about['display_section']) && $about['display_section']) : ?>
        <section class="about py-9">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <article>
                            <p class="fs-24 pb-3"><?= $about['subtitle'] ?></p>
                            <h3 class="fs-54 text-uppercase font-padaloma"><?= $about['title'] ?></h3>

                            <article class="description pt-4 col-xl-11">
                                <?= $about['description'] ?>
                            </article>

                            <div class="row col-xl-11 pt-4 gx-2 gx-md-3">
                                <?php if (!empty($about['button_1'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $about['button_1']['url'] ?>" target="<?= $about['button_1']['target'] ?>" class="btn btn-secondary text-black rounded-pill text-uppercase"><?= $about['button_1']['title'] ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($about['button_2'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $about['button_2']['url'] ?>" target="<?= $about['button_2']['target'] ?>" class="btn btn-outline-black border-1 btn-white text-black rounded-pill text-uppercase"><?= $about['button_2']['title'] ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <div class="image">
                            <?= echo_image($about['image'], '', 'hero') ?>
                            <?= echo_theme_image('/lib/overlay-mammoth.png', "Mammoth", "position-absolute bottom-0") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>