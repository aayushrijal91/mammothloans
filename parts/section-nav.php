<section class="slideMenu d-xl-none">
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-6">
            <a href="<?= home_url() ?>">
                    <?= echo_image(get_field('logo', 'options')) ?>
                </a>
            </div>
            <div class="col-auto">
                <button class="bg-transparent text-white" id="hideSliderMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                </button>
            </div>
        </div>
        <?php wp_nav_menu(array(
            'menu' => 'Primary',
            'item_class' => 'nav-item py-2',
            'link_class' => 'text-white fs-18 fw-500',
            'menu_class' => 'navbar-nav px-0 pt-7 pb-2 d-flex gap-lg-5 justify-content-between'
        )); ?>
    </div>
</section>

<nav>
    <div class="container">
        <div class="row align-items-center justify-content-between gx-2 gx-md-4">
            <div class="col-5 col-lg-auto">
                <a href="<?= home_url() ?>" class="">
                    <?= echo_image(get_field('logo', 'options')) ?>
                </a>
            </div>
            <div class="col-auto d-none d-xl-block">
                <?php wp_nav_menu(array(
                    'menu' => 'Primary',
                    'item_class' => 'nav-item py-4',
                    'link_class' => 'text-white',
                    'menu_class' => 'navbar-nav px-0 d-flex gap-lg-5 flex-row'
                )); ?>
            </div>
            <div class="col col-md-auto d-flex flex-column align-items-center gap-1 gap-md-3">
                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-grey rounded-pill text-white text-uppercase gap-1 gap-md-3 px-3 px-lg-5 navPhonebutton">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.9084 17.4994C20.9084 17.8594 20.8284 18.2294 20.6584 18.5894C20.4884 18.9494 20.2684 19.2894 19.9784 19.6094C19.4884 20.1494 18.9484 20.5394 18.3384 20.7894C17.7384 21.0394 17.0884 21.1694 16.3884 21.1694C15.3684 21.1694 14.2784 20.9294 13.1284 20.4394C11.9784 19.9494 10.8284 19.2894 9.68835 18.4594C8.52646 17.6095 7.43005 16.6735 6.40835 15.6594C5.39712 14.6414 4.46445 13.5483 3.61835 12.3894C2.79835 11.2494 2.13835 10.1094 1.65835 8.9794C1.17835 7.8394 0.938354 6.7494 0.938354 5.7094C0.938354 5.0294 1.05835 4.3794 1.29835 3.7794C1.53835 3.1694 1.91835 2.6094 2.44835 2.1094C3.08835 1.4794 3.78835 1.1694 4.52835 1.1694C4.80835 1.1694 5.08835 1.2294 5.33835 1.3494C5.59835 1.4694 5.82835 1.6494 6.00835 1.9094L8.32835 5.1794C8.50835 5.4294 8.63835 5.6594 8.72835 5.8794C8.81835 6.0894 8.86835 6.2994 8.86835 6.4894C8.86835 6.7294 8.79835 6.9694 8.65835 7.1994C8.52835 7.4294 8.33835 7.6694 8.09835 7.9094L7.33835 8.6994C7.22835 8.8094 7.17835 8.9394 7.17835 9.0994C7.17835 9.1794 7.18835 9.2494 7.20835 9.3294C7.23835 9.4094 7.26835 9.4694 7.28835 9.5294C7.46835 9.8594 7.77835 10.2894 8.21835 10.8094C8.66835 11.3294 9.14835 11.8594 9.66835 12.3894C10.2084 12.9194 10.7284 13.4094 11.2584 13.8594C11.7784 14.2994 12.2084 14.5994 12.5484 14.7794C12.5984 14.7994 12.6584 14.8294 12.7284 14.8594C12.8084 14.8894 12.8884 14.8994 12.9784 14.8994C13.1484 14.8994 13.2784 14.8394 13.3884 14.7294L14.1484 13.9794C14.3984 13.7294 14.6384 13.5394 14.8684 13.4194C15.0984 13.2794 15.3284 13.2094 15.5784 13.2094C15.7684 13.2094 15.9684 13.2494 16.1884 13.3394C16.4084 13.4294 16.6384 13.5594 16.8884 13.7294L20.1984 16.0794C20.4584 16.2594 20.6384 16.4694 20.7484 16.7194C20.8484 16.9694 20.9084 17.2194 20.9084 17.4994Z" stroke="#7DBC18" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>

                    <?= get_field('phone_number', 'options') ?>
                </a>
                <a href="<?= get_field('finance_expert_link', 'options')['url'] ?>" target="<?= get_field('finance_expert_link', 'options')['target'] ?>" class="text-white d-none d-md-block"><?= get_field('finance_expert_link', 'options')['title'] ?></a>
            </div>

            <div class="col-auto d-xl-none">
                <button class="bg-transparent" id="showSliderMenu">
                    <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.96936" y="0.698303" width="28.2482" height="4.03418" rx="2.01709" fill="#7DBC18" />
                        <rect x="0.96936" y="9.73248" width="28.2482" height="4.03418" rx="2.01709" fill="#7DBC18" />
                        <rect x="0.96936" y="18.7667" width="28.2482" height="4.03418" rx="2.01709" fill="#7DBC18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>