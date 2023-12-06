<?php
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>
<main class="defaultPage py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="lh-2"><?= get_the_content() ?></article>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>