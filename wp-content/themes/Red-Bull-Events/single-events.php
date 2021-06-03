<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('event-large')?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <h1><?php  the_title();?></h1>

    <?php get_template_part('includes/section', 'events');?>

    <div class="col-lg-6">
        <ul>
            <li>
                Name: <?php the_field('name') ?>
            </li>
            <li>
                Description: <?php the_field('description') ?>
            </li>
            <li>
                Extra: <?php the_field('extra_text') ?>
            </li>
            <li>
                Date: <?php the_field('date') ?>
            </li>
            <li>
                Location: <?php the_field('location') ?>
            </li>
            <li>
                CTA: <?php the_field('cta') ?>
            </li>
            <li>
                <img src="<?php the_field('promo_image_1') ?>" />
            </li>
            <li>
                <img src="<?php the_field('promo_image_2') ?>" />
            </li>
            <li>
                <img src="<?php the_field('promo_image_3') ?>" />
            </li>
        </ul>
    </div>

</div>
</section>

<?php get_footer();?>