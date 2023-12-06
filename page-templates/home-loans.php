<?php
/*
 * Template Name: Home Loans
 * The home loans page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="homeLoansPage">
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
                            <?= echo_theme_image("/lib/overlay-mammoth.png", "Mammoth", "position-absolute bottom-0") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <div class="pt-7">
        <?php get_template_part('parts/section', 'whyus'); ?>
    </div>

    <div class="container-fluid px-xxl-5 pt-7">
        <section class="loanTypes">
            <div class="container">
                <h3 class="heading text-white font-padaloma text-uppercase pb-6">Our Range of Home Loan Services:</h3>
                <?= echo_theme_image('/lib/homeLoanTypes.png') ?>
            </div>
        </section>
    </div>

    <?php $about = get_field('about');
    if (isset($about['display_section']) && $about['display_section']) :
    ?>
        <section class="about py-6 py-md-9">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 text-center">
                        <h3 class="font-padaloma heading text-uppercase"><?= $about['title'] ?></h3>

                        <article class="description pt-5"><?= $about['description'] ?></article>

                        <div class="row justify-content-center pt-4 pt-md-5">
                            <div class="row col-lg-6 gx-2 gx-md-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>