<?php
/*
 * Template Name: Business Loans
 * The business loans page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="businessLoansPage">
    <?php $introduction = get_field('introduction');
    if (isset($introduction['display_section']) && $introduction['display_section']) :
    ?>
        <section class="introduction pt-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center">
                        <p class="subtitle"><?= $introduction['subtitle'] ?></p>
                        <h3 class="font-padaloma heading text-uppercase py-4 py-lg-5"><?= $introduction['title'] ?></h3>

                        <article class="description"><?= $introduction['description'] ?></article>

                        <div class="row justify-content-center pt-3 pt-md-4 pt-lg-5">
                            <div class="row col-lg-6 gx-2 gx-md-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('process')) : ?>
        <section class="process pt-7">
            <div class="container">
                <div class="row g-4" id="business_loan_slider">
                    <?php
                    $index = 1;
                    while (have_rows('process')) : the_row(); ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <article class="processCard <?= $index < 5 ? 'bg-light-grey' : 'bg-secondary' ?> position-relative rounded-30 text-center">
                                <p class="fs-24 pb-4 fw-600"><?= get_sub_field('title') ?></p>
                                <article class="description fs-14">
                                    <?= get_sub_field('description') ?>
                                </article>
                            </article>
                        </div>
                    <?php
                        $index++;
                    endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $about = get_field('about'); ?>

    <?php if (isset($about['display_section']) && $about['display_section']) : ?>
        <section class="about position-relative">
            <div class="container">
                <article class="col-xl-7 col-xxl-8">
                    <p class="subtitle pb-3"><?= $about['subtitle'] ?></p>
                    <h3 class="heading text-uppercase font-padaloma"><?= $about['title'] ?></h3>

                    <article class="col-xl-6 col-xxl-7 description pt-4">
                        <?= $about['description'] ?>
                    </article>

                    <div class="row col-xl-8 pt-4 gx-2 gx-md-3">
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
            <?= echo_theme_image('/lib/mammoth.png', "Mammoth", "mammothImage") ?>
        </section>
    <?php endif; ?>

    <div class="pb-5 pb-md-8">
        <?php get_template_part('parts/section', 'lenders'); ?>
    </div>
</main>

<?php get_footer(); ?>