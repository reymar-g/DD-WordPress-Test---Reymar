<?php
$post_ID = get_the_ID();
// echo $post_ID;
$start_date = get_field('start_date', $post_ID);
$end_date = get_field('end_date', $post_ID);
$description = get_field('description', $post_ID);
$cover_image = get_field('cover_image', $post_ID);
// fix_print($cover_image);
$application_link = get_field('application_link', $post_ID);
// fix_print($application_link);
?>


<?php get_header(); ?>

<section id="section-1" class="section-single-post">
    <div class="container">
        <div class="row">
            <?php if ($cover_image): ?>
                <div class="post-image">
                    <img src="<?= $cover_image['url']; ?>" alt="<?= $cover_image['title']; ?>">
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php if ($description): ?>
                    <p><?= $description; ?></p>
                <?php endif; ?>

                <?php if ($start_date): ?>
                    <p><?= $start_date; ?></p>
                <?php endif; ?>

                <?php if ($end_date): ?>
                    <p><?= $end_date; ?></p>
                <?php endif; ?>

                <?php if ($application_link): ?>
                    <a href="<?= $application_link['url']; ?>">
                        <?= $application_link['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>