<?php $solution = get_field('solution'); ?>

<?php if (isset($solution['display_section']) && $solution['display_section']) : ?>
    <section class="part-solution py-5 py-md-9">
        <div class="container">
            <div class="row align-items-center gx-xl-6 gy-7 gy-md-5">
                <?php
                if (have_rows('solution')) :
                    while (have_rows('solution')) : the_row();
                        if (have_rows('support')) : ?>
                            <div class="col-xl-6 col-xxl-5 order-2 order-lg-1">
                                <div class="row g-4" id="support_slider">
                                    <?php $index = 1;
                                    while (have_rows('support')) : the_row(); ?>
                                        <div class="col-md-6">
                                            <article class="folder <?= $index == 1 ? 'bg-secondary' : 'bg-light-grey' ?>">
                                                <p class="fs-24 fw-600"><?= get_sub_field('title') ?></p>
                                                <div class="py-4 d-flex justify-content-center">
                                                    <?= echo_image(get_sub_field('image')) ?>
                                                </div>
                                                <p><?= get_sub_field('description') ?></p>
                                            </article>
                                        </div>
                                    <?php $index++;
                                    endwhile; ?>
                                </div>
                            </div>
                <?php endif;
                    endwhile;
                endif;
                ?>

                <div class="col-xl-6 col-xxl-7 order-1 order-lg-2">
                    <article>
                        <p class="subtitle pb-3"><?= $solution['subtitle'] ?></p>
                        <h3 class="heading text-uppercase font-padaloma"><?= $solution['title'] ?></h3>

                        <article class="col-xxl-8 description py-4">
                            <?= $solution['description'] ?>
                        </article>

                        <div class="row col-md-10 col-xl-11 col-xxl-9 gx-2 gx-md-4">
                            <?php if (!empty($solution['button_1'])) : ?>
                                <div class="col-6">
                                    <a href="<?= $solution['button_1']['url'] ?>" target="<?= $solution['button_1']['target'] ?>" class="btn btn-black text-white rounded-pill text-uppercase"><?= $solution['button_1']['title'] ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($solution['button_1'])) : ?>
                                <div class="col-6">
                                    <a href="<?= $solution['button_2']['url'] ?>" target="<?= $solution['button_2']['target'] ?>" class="btn btn-outline-black border-1 btn-white text-black rounded-pill text-uppercase"><?= $solution['button_2']['title'] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>