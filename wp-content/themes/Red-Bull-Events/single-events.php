<?php get_header();?>


<div class="container">


    <?php get_template_part('includes/section', 'events');?>
        <!--
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
    </div> -->

</div>

<div class="event-container">
    <div class="event-header" style="background:url(<?php the_field('header') ?>);background-size:cover;background-repeat:no-repeat;width:100%;height:660px;">
        <div class="event-gradient"></div>
       
        <span class="event-header-name"><?php the_field('name') ?></span>
        <div class="event-header-icon">
            
            <div class="event-1-line"></div>
            <div class="event-1-square"></div>
            <div class="event-1-four-squares"></div>
            <div class="event-1-arrow"></div>
            
            <div class="event-icon-container"></div>
            <img class="event-icon" src="<?php the_field('event_icon') ?>" />

            <div class="event-2-line"></div>
            <div class="event-2-square"></div>
            <div class="event-2-four-squares"></div>
            <div class="event-2-arrow"></div>
            </div>
        </div>
    </div>

    <div class="event-body">
        <div class="event-body-design">
        <div class="event-body-square-1"></div>
        <div class="event-body-square-2"></div>
        <div class="event-body-square-3"></div>
        <div class="event-body-square-4"></div>
        <div class="event-body-square-5"></div>
        <div class="event-body-square-6"></div>
        <div class="event-body-square-7"></div>
        <div class="event-body-square-8"></div>
        <div class="event-body-square-9"></div>

        <div class="event-body-arrow-1"></div>
        <div class="event-body-arrow-2"></div>

        <div class="event-body-line"></div>

        <div class="event-body-skewed-1"></div>
        <div class="event-body-skewed-2"></div>

        <div class="event-body-background-title-rotate">
            <div class="event-body-background-title"><?php echo $namecaps = strtoupper(the_field('name')); ?></div>
        </div>
        </div>
        <div class="event-description">

        </div>
        <div class="event-extra">

        </div>
        <div class="event-promo-images">
            <div class="promo-image-1">

            </div>
            <div class="promo-image-2">
                
            </div>
            <div class="promo-image-3">
                
            </div>
        </div>
        <div class="event-cta">
            <div class="event-cta-text">

            </div>
            <div class="event-cta-button">

            </div>
        </div>
    </div>
</div>


<?php get_footer();?>