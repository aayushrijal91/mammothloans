<?php $why_choose_us = get_field('why_choose_us');

if (isset($why_choose_us['display_section']) && $why_choose_us['display_section']) : ?>
    <section class="part-why-us">
        <div class="container-fluid px-xl-4">
            <div class="bg-black rounded-40 rounded-lg-100 py-6 py-lg-9">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-xl-12 col-xxl-11">
                            <div class="row align-items-center gy-4">
                                <div class="col-xl-6">
                                    <h4 class="heading text-white text-uppercase font-padaloma"><?= $why_choose_us['title'] ?><span class="text-secondary">/</span></h4>
                                </div>
                                <div class="col-xl-6">
                                    <article class="fs-20 text-white lh-1_5 description">
                                        <?= $why_choose_us['description'] ?>
                                    </article>
                                </div>
                            </div>

                            <?php
                            if (have_rows('why_choose_us')) :
                                while (have_rows('why_choose_us')) : the_row();
                                    if (have_rows('reasons')) :
                            ?>
                                        <div class="row pt-5 pt-md-7 g-4" id="why_us_slider">
                                            <?php while (have_rows('reasons')) : the_row();
                                                $image = get_sub_field('image');
                                            ?>
                                                <div class="col-lg-4">
                                                    <article class="whyUsCard rounded-40 bg-white h-100">
                                                        <div class="heroImage overflow-hidden rounded-30">
                                                            <?= echo_image($image, "", "w-100 h-100 object-fit-cover") ?>
                                                        </div>
                                                        <div class="row py-4 justify-content-between">
                                                            <div class="col">
                                                                <h5 class="card-heading font-padaloma text-uppercase"><?= get_sub_field('title') ?></h5>
                                                            </div>
                                                            <?php if(!empty(get_sub_field('link'))) : ?>
                                                            <div class="col-auto">
                                                                <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>" class="btn btn-white applyBtn position-relative border border-black rounded-circle">
                                                                    <?= echo_theme_image('/lib/applyNowSmall.png', 'applyNow') ?>
                                                                    <svg class="arrow" width="51" height="9" viewBox="0 0 51 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M50.1768 4.64016C50.3799 4.43708 50.3799 4.10784 50.1768 3.90477L46.8676 0.595502C46.6645 0.39243 46.3353 0.39243 46.1322 0.595502C45.9291 0.798575 45.9291 1.12782 46.1322 1.33089L49.0738 4.27246L46.1322 7.21403C45.9291 7.4171 45.9291 7.74635 46.1322 7.94942C46.3353 8.15249 46.6645 8.15249 46.8676 7.94942L50.1768 4.64016ZM0.118408 4.79246H49.8091V3.75246H0.118408V4.79246Z" fill="black" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <article class="description fs-16"><?= get_sub_field('description') ?></article>
                                                    </article>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                            <?php
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>