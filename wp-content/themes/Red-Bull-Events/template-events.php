<?php 

/*
Template Name: Events
*/
?>

<?php get_header();?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<section class="page-wrap">
    <div class="container">
        <h1><?php  the_title();?></h1>
        <div class="row">
            <div class="col-lg-6">
                This is blabal
            </div>
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'content');?>
            </div>
        </div>

        </main><!-- .site-main -->
        </div><!-- .content-area -->
    </div>
</section>


<?php get_footer();?>