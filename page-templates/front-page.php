<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'homebanner');
?>

<main class="homepage">
    <?php $introduction = get_field('introduction'); ?>

    <?php if (isset($introduction['display_section']) && $introduction['display_section']) : ?>
        <section class="introduction position-relative py-5 pt-xl-0 pb-md-8">
            <div class="container">
                <article class="col-xl-8">
                    <p class="pb-3 subtitle"><?= $introduction['subtitle'] ?></p>
                    <h3 class="heading text-uppercase font-padaloma"><?= $introduction['title'] ?></h3>

                    <article class="col-xl-5 col-xxl-7 description pt-4">
                        <?= $introduction['description'] ?>
                    </article>

                    <div class="row col-md-10 col-xl-8 pt-4 gx-2 gx-md-4">
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
            <?= echo_theme_image('/lib/mammoth.png', "Mammoth", "d-none d-xl-block position-absolute end-0 bottom-0") ?>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'lenders'); ?>
    <?php get_template_part('parts/section', 'solution'); ?>
    <?php get_template_part('parts/section', 'loancards'); ?>

    <?php $about = get_field('about'); ?>

    <?php if (isset($about['display_section']) && $about['display_section']) : ?>
        <section class="about pt-6 pb-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <article class="col-xl-8">
                            <p class="subtitle pb-3"><?= $about['subtitle'] ?></p>
                            <h3 class="heading text-uppercase font-padaloma"><?= $about['title'] ?></h3>

                            <article class="col-xxl-8 description py-4">
                                <?= $about['description'] ?>
                            </article>

                            <div class="row col-md-10 col-xl-9 gx-2 gx-md-4">
                                <?php if (!empty($about['button_1'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $about['button_1']['url'] ?>" target="<?= $about['button_1']['target'] ?>" class="btn btn-grey text-secondary rounded-pill text-uppercase"><?= $about['button_1']['title'] ?></a>
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
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'video'); ?>

    <div class="mb-5 mb-md-7 mb-xxl-11">
        <?php get_template_part('parts/section', 'whyus'); ?>
    </div>
</main>
<?php get_footer(); ?>