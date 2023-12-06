<?php
$banner = get_field('banner');
$bannerHeading = !empty($banner['title']) ? $banner['title'] : get_the_title();
?>

<div class="homepageBannerWrapper">
    <div class="container-fluid px-0">
        <section class="banner">
            <div class="container">
                <article>
                    <h1 class="font-padaloma text-white fs-70 text-center text-md-start"><?= $bannerHeading ?></h1>
                    <?php wp_nav_menu(array(
                        'menu' => 'Loans',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link btn btn-outline-white border rounded-pill text-white text-uppercase px-4 px-lg-5',
                        'menu_class' => 'px-0 d-flex gap-lg-3 pt-5 flex-row banner-loans-slider'
                    )); ?>
                </article>

                <div class="row justify-content-between pt-5 pt-md-7 gy-5">
                    <?php if (!empty($banner['award_text'])) : ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <article class="d-flex gap-3 align-items-center">
                                <?= echo_theme_image('/icons/awards.png', "awards") ?>
                                <p class="text-white text-uppercase fs-18 lh-1_5"><?= $banner['award_text'] ?></p>
                            </article>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-6 col-xl-4">
                        <article>
                            <?php if (!empty($banner['description'])) : ?>
                                <p class="text-white fs-18 lh-1_5">
                                    <?= $banner['description'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($banner['banner_button'])) : ?>
                                <div class="pt-4">
                                    <a href="<?= $banner['banner_button']['url'] ?>" target="<?= $banner['banner_button']['target'] ?>" class="btn btn-grey text-white rounded-pill text-uppercase w-100"><?= $banner['banner_button']['title'] ?></a>
                                </div>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            </div>
            <div class="text-center mt-7 mt-md-5 mt-lg-7 mt-xl-0">
                <?= echo_theme_image('/lib/paymentCards.png', 'Payment Cards', 'd-none d-md-inline') ?>
                <?= echo_theme_image('/lib/paymentCards_sm.png', 'Payment Cards', 'd-md-none') ?>
            </div>
        </section>
        <a href="<?= home_url() ?>/online-application" class="circular-button">
            <svg width="79" height="87" viewBox="0 0 79 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M73.3555 34.8307C80.0221 38.6797 80.0221 48.3022 73.3555 52.1512L15.8223 85.368C9.15561 89.217 0.822292 84.4057 0.822292 76.7077L0.822295 10.2741C0.822295 2.57613 9.15563 -2.23511 15.8223 1.61389L73.3555 34.8307Z" fill="white" />
            </svg>
            <?= echo_theme_image('/lib/apply-now.png', "apply now", "applyNow") ?>
        </a>
    </div>
</div>