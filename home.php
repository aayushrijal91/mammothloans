<?php
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="blogsPage">
    <div class="container-fluid py-5 px-3 p-xxl-5">
        <section class="blogs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <h3 class="font-padaloma text-white fs-64 text-uppercase text-center lh-1">Blogs</h3>
                        <p class="text-white text-center pt-4">
                            With Mammoth Loans, you're not just another application on a desk. You’re an individual with grand dreams, and we’re here to make those dreams tangible. Our expertise is as vast as the horizon, and our commitment to you? Absolutely monumental.
                        </p>

                        <div class="row pt-7">
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'order' => 'DESC',
                            );

                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                                    $post_date = get_the_date('Y-m-d'); // Get the post's publish date in 'Y-m-d' format
                                    $current_date = current_time('Y-m-d'); // Get the current date in 'Y-m-d' format

                                    $post_date = new DateTime($post_date);
                                    $current_date = new DateTime($current_date);

                                    $date_diff = $current_date->diff($post_date);

                                    if ($date_diff->y >= 1) {
                                        $formatted_date = $date_diff->y . ' year' . ($date_diff->y > 1 ? 's' : '') . ' ago';
                                    } elseif ($date_diff->m >= 1) {
                                        $formatted_date = $date_diff->m . ' month' . ($date_diff->m > 1 ? 's' : '') . ' ago';
                                    } elseif ($date_diff->d >= 7) {
                                        $formatted_date = floor($date_diff->d / 7) . ' week' . (floor($date_diff->d / 7) > 1 ? 's' : '') . ' ago';
                                    } elseif ($date_diff->d >= 1) {
                                        $formatted_date = $date_diff->d . ' day' . ($date_diff->d > 1 ? 's' : '') . ' ago';
                                    } else {
                                        $formatted_date = 'Today';
                                    }
                            ?>
                                    <div class="col-md-6 col-lg-4">
                                        <article class="blogCard">
                                            <div class="heroImage">
                                                <img src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                                            </div>
                                            <h5 class="fs-20 font-padaloma text-uppercase pt-4"><?= get_the_title(); ?></h5>
                                            <p class="text-light fs-14 py-3"><?= $formatted_date ?></p>
                                            <p class=""><?= get_field('short_description') ?></p>
                                        </article>
                                        <a href="<?= get_the_permalink() ?>" class="btn btn-secondary rounded-pill font-padaloma text-uppercase fs-14 d-inline-flex px-5 mt-n5 ms-4">Read Now</a>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>