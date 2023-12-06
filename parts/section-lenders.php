<div class="container-fluid ps-lg-4 pe-0">
    <section class="part-lenders bg-black py-5 py-md-7">
        <div class="container">
            <h4 class="fs-24 font-padaloma text-uppercase text-secondary">Partnered with over 40+ Lenders</h4>
            <div class="partner-slider pt-4">
                <?php foreach (get_field('partners', 'options') as $image) : ?>
                    <div><?= echo_image($image) ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>