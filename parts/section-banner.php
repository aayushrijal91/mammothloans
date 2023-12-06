<?php
$banner = get_field('banner');
$bannerHeading = !empty($banner['title']) ? $banner['title'] : get_the_title();

if(is_home()) {
    $bannerHeading = 'Our<br /> Blogs';
}
?>

<div class="commonBannerWrapper">
    <div class="container-fluid px-0">
        <section class="banner">
            <div class="container">
                <article>
                    <h1 class="bannerHeading font-padaloma text-white text-uppercase text-center text-md-start"><?= $bannerHeading ?></h1>
                    <?php wp_nav_menu(array(
                        'menu' => 'Loans',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link btn btn-outline-white border rounded-pill text-white text-uppercase px-4 px-lg-5',
                        'menu_class' => 'px-0 d-flex gap-lg-3 pt-5 flex-row banner-loans-slider'
                    )); ?>
                </article>

                <article class="d-flex gap-3 align-items-center pt-5 pt-md-7 col-md-6 col-lg-4 col-xl-3">
                    <?= echo_theme_image('/icons/awards.png',"awards") ?>
                    <p class="text-white text-uppercase fs-18 lh-1_5"><?= !empty($banner['award_text']) ? $banner['award_text'] : '2021 & 2022 Sydney’s BEST BROKER of the year' ?></p>
                </article>
            </div>
            <?= echo_theme_image('/background/curvature.png', "Curvature", "d-none d-lg-block w-100") ?>
        </section>
    </div>
</div>