<div class="container-fluid px-0">
    <footer>
        <div class="container">
            <div class="text-center pt-5 pt-md-7 px-4 px-md-0">
                <?= echo_image(get_field('logo', 'options')) ?>

                <div class="pt-4 d-md-none">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-grey rounded-pill text-white text-uppercase gap-3 px-4 px-md-5">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.9084 17.4994C20.9084 17.8594 20.8284 18.2294 20.6584 18.5894C20.4884 18.9494 20.2684 19.2894 19.9784 19.6094C19.4884 20.1494 18.9484 20.5394 18.3384 20.7894C17.7384 21.0394 17.0884 21.1694 16.3884 21.1694C15.3684 21.1694 14.2784 20.9294 13.1284 20.4394C11.9784 19.9494 10.8284 19.2894 9.68835 18.4594C8.52646 17.6095 7.43005 16.6735 6.40835 15.6594C5.39712 14.6414 4.46445 13.5483 3.61835 12.3894C2.79835 11.2494 2.13835 10.1094 1.65835 8.9794C1.17835 7.8394 0.938354 6.7494 0.938354 5.7094C0.938354 5.0294 1.05835 4.3794 1.29835 3.7794C1.53835 3.1694 1.91835 2.6094 2.44835 2.1094C3.08835 1.4794 3.78835 1.1694 4.52835 1.1694C4.80835 1.1694 5.08835 1.2294 5.33835 1.3494C5.59835 1.4694 5.82835 1.6494 6.00835 1.9094L8.32835 5.1794C8.50835 5.4294 8.63835 5.6594 8.72835 5.8794C8.81835 6.0894 8.86835 6.2994 8.86835 6.4894C8.86835 6.7294 8.79835 6.9694 8.65835 7.1994C8.52835 7.4294 8.33835 7.6694 8.09835 7.9094L7.33835 8.6994C7.22835 8.8094 7.17835 8.9394 7.17835 9.0994C7.17835 9.1794 7.18835 9.2494 7.20835 9.3294C7.23835 9.4094 7.26835 9.4694 7.28835 9.5294C7.46835 9.8594 7.77835 10.2894 8.21835 10.8094C8.66835 11.3294 9.14835 11.8594 9.66835 12.3894C10.2084 12.9194 10.7284 13.4094 11.2584 13.8594C11.7784 14.2994 12.2084 14.5994 12.5484 14.7794C12.5984 14.7994 12.6584 14.8294 12.7284 14.8594C12.8084 14.8894 12.8884 14.8994 12.9784 14.8994C13.1484 14.8994 13.2784 14.8394 13.3884 14.7294L14.1484 13.9794C14.3984 13.7294 14.6384 13.5394 14.8684 13.4194C15.0984 13.2794 15.3284 13.2094 15.5784 13.2094C15.7684 13.2094 15.9684 13.2494 16.1884 13.3394C16.4084 13.4294 16.6384 13.5594 16.8884 13.7294L20.1984 16.0794C20.4584 16.2594 20.6384 16.4694 20.7484 16.7194C20.8484 16.9694 20.9084 17.2194 20.9084 17.4994Z" stroke="#7DBC18" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>

                        <?= get_field('phone_number', 'options') ?>
                    </a>

                    <div class="pt-3 text-center">
                        <a href="<?= get_field('finance_expert_link', 'options')['url'] ?>" target="<?= get_field('finance_expert_link', 'options')['target'] ?>" class="text-white fs-14 d-md-none"><?= get_field('finance_expert_link', 'options')['title'] ?></a>
                    </div>
                    <?php if (have_rows('socials', 'options')) : ?>
                        <div class="row justify-content-center align-items-center">
                            <?php while (have_rows('socials', 'options')) : the_row(); ?>
                                <div class="col-auto">
                                    <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['url'] ?>"><?= echo_image(get_sub_field('icon')) ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php wp_nav_menu(array(
                'menu' => 'Loans',
                'item_class' => 'nav-item',
                'link_class' => 'nav-link btn btn-outline-white border rounded-pill text-white text-uppercase px-4 px-lg-5',
                'menu_class' => 'navbar-nav px-0 d-flex gap-2 gap-lg-3 pt-5 flex-row justify-content-center flex-wrap'
            )); ?>

            <div class="row align-items-center justify-content-md-center justify-content-xl-between gy-5 py-5 py-lg-7">
                <div class="col-xl-8 col-xxl-7">
                    <div class="row justify-content-between align-items-center text-white gy-4">
                        <div class="col-6 col-md-4 col-lg-3">
                            <p class="fs-30 pb-3 pb-md-4">Quick Links</p>
                            <?php wp_nav_menu(array(
                                'menu' => 'Quick Links',
                                'item_class' => 'nav-item py-2',
                                'link_class' => 'text-white',
                                'menu_class' => 'p-0 columns-md-2'
                            )); ?>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <p class="fs-30 pb-3 pb-md-4">Loan Types</p>
                            <?php wp_nav_menu(array(
                                'menu' => 'Loans',
                                'item_class' => 'nav-item py-2',
                                'link_class' => 'text-white',
                                'menu_class' => 'p-0 columns-md-2'
                            )); ?>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <p class="fs-30 pb-3 pb-md-4">Connect</p>
                            <?php wp_nav_menu(array(
                                'menu' => 'Connect',
                                'item_class' => 'nav-item py-2',
                                'link_class' => 'text-white',
                                'menu_class' => 'p-0'
                            )); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 col-xl-3 d-none d-md-block">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-grey rounded-pill text-white text-uppercase gap-3 px-4 px-md-5">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.9084 17.4994C20.9084 17.8594 20.8284 18.2294 20.6584 18.5894C20.4884 18.9494 20.2684 19.2894 19.9784 19.6094C19.4884 20.1494 18.9484 20.5394 18.3384 20.7894C17.7384 21.0394 17.0884 21.1694 16.3884 21.1694C15.3684 21.1694 14.2784 20.9294 13.1284 20.4394C11.9784 19.9494 10.8284 19.2894 9.68835 18.4594C8.52646 17.6095 7.43005 16.6735 6.40835 15.6594C5.39712 14.6414 4.46445 13.5483 3.61835 12.3894C2.79835 11.2494 2.13835 10.1094 1.65835 8.9794C1.17835 7.8394 0.938354 6.7494 0.938354 5.7094C0.938354 5.0294 1.05835 4.3794 1.29835 3.7794C1.53835 3.1694 1.91835 2.6094 2.44835 2.1094C3.08835 1.4794 3.78835 1.1694 4.52835 1.1694C4.80835 1.1694 5.08835 1.2294 5.33835 1.3494C5.59835 1.4694 5.82835 1.6494 6.00835 1.9094L8.32835 5.1794C8.50835 5.4294 8.63835 5.6594 8.72835 5.8794C8.81835 6.0894 8.86835 6.2994 8.86835 6.4894C8.86835 6.7294 8.79835 6.9694 8.65835 7.1994C8.52835 7.4294 8.33835 7.6694 8.09835 7.9094L7.33835 8.6994C7.22835 8.8094 7.17835 8.9394 7.17835 9.0994C7.17835 9.1794 7.18835 9.2494 7.20835 9.3294C7.23835 9.4094 7.26835 9.4694 7.28835 9.5294C7.46835 9.8594 7.77835 10.2894 8.21835 10.8094C8.66835 11.3294 9.14835 11.8594 9.66835 12.3894C10.2084 12.9194 10.7284 13.4094 11.2584 13.8594C11.7784 14.2994 12.2084 14.5994 12.5484 14.7794C12.5984 14.7994 12.6584 14.8294 12.7284 14.8594C12.8084 14.8894 12.8884 14.8994 12.9784 14.8994C13.1484 14.8994 13.2784 14.8394 13.3884 14.7294L14.1484 13.9794C14.3984 13.7294 14.6384 13.5394 14.8684 13.4194C15.0984 13.2794 15.3284 13.2094 15.5784 13.2094C15.7684 13.2094 15.9684 13.2494 16.1884 13.3394C16.4084 13.4294 16.6384 13.5594 16.8884 13.7294L20.1984 16.0794C20.4584 16.2594 20.6384 16.4694 20.7484 16.7194C20.8484 16.9694 20.9084 17.2194 20.9084 17.4994Z" stroke="#7DBC18" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>

                        <?= get_field('phone_number', 'options') ?>
                    </a>

                    <div class="pt-4 text-center">
                        <a href="<?= get_field('finance_expert_link', 'options')['url'] ?>" target="<?= get_field('finance_expert_link', 'options')['target'] ?>" class="text-white fs-18"><?= get_field('finance_expert_link', 'options')['title'] ?></a>
                    </div>

                    <?php if (have_rows('socials', 'options')) : ?>
                        <div class="row justify-content-center align-items-center pt-4">
                            <?php while (have_rows('socials', 'options')) : the_row(); ?>
                                <div class="col-auto">
                                    <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['url'] ?>"><?= echo_image(get_sub_field('icon')) ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <section class="pt-md-5">
                <h4 class="fs-24 font-padaloma text-uppercase text-secondary">Partnered with over 40+ Lenders</h4>
                <div class="partner-slider pt-4">
                    <?php foreach (get_field('partners', 'options') as $image) : ?>
                        <div><?= echo_image($image) ?></div>
                    <?php endforeach; ?>
                </div>
            </section>

            <div class="row justify-content-center justify-content-md-between align-items-center pt-7 pb-5 gy-5">
                <div class="col-12 col-md-auto">
                    <article class="text-white fs-14 d-flex gap-3 gap-md-4 text-center">
                        <p class="fw-600"><?= bloginfo('name') ?></p>
                        <p class="fw-200">Copyright © <?= date('Y') ?></p>
                        <p class="fw-200">All Rights Reserved</p>
                        <a href="<?= home_url() ?>/privacy-policy" class="text-secondary fw-600">Privacy Policy</a>
                    </article>
                </div>
                <div class="col-auto">
                    <a href="https://aiims.com.au/this-is-us/" target="_blank"><?= echo_theme_image('/icons/aiims.png') ?></a>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>

</html>