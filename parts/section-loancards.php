<div class="container-fluid position-relative">
    <section class="part-loanCards mx-xl-4 overflow-hidden">
        <div class="container">
            <h3 class="heading text-white text-center text-md-start font-padaloma text-uppercase pb-5"><?= get_field('loan_types_title', 'options'); ?></h3>
        </div>

        <?php if (have_rows('loan_types', 'options')) : ?>
            <div class="loanCards_slider">
                <?php while (have_rows('loan_types', 'options')) : the_row(); ?>
                    <div>
                        <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>">
                            <?= echo_image(get_sub_field('card_image')) ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
</div>