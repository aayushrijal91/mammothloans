<section class="part-video py-5 py-md-9">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-10">
                <article class="videoWrapper">
                    <?php if (!empty(get_field('video', 'options')['subtitle'])) : ?>
                        <p class="subtitle"><?= get_field('video', 'options')['subtitle'] ?></p>
                    <?php endif; ?>
                    <div class="row pt-11 align-items-end gy-5">
                        <?php if (!empty(get_field('video', 'options')['title'])) : ?>
                            <div class="col-lg">
                                <h4 class="heading text-uppercase font-padaloma"><?= get_field('video', 'options')['title'] ?></h4>
                            </div>
                        <?php endif; ?>
                        <?php if (isset(get_field('video', 'options')['link']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= get_field('video', 'options')['link']['url'] ?>" target="<?= get_field('video', 'options')['link']['target'] ?>" class="btn btn-secondary rounded-pill playBtn">
                                    <?= echo_theme_image('/lib/apply-now.png', 'applyNow') ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>