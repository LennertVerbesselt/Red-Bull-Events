<?php if( have_posts() ) : while( have_posts() ) : the_post();?>

<div class="grid-container">
    <div class="center">
    <div class="property-card">
        <a href="#">
        <div class="property-image" style="background-image:url('<?php the_field('thumbnail') ?>'">
        
            <div class="property-image-icon">
            <img src="<?php the_field('event_icon') ?>" />
            </div>
            
        </div></a>
        <div class="property-description">
        <h5 class="property-title"> Red Bull <?php the_field('name') ?> </h5>
        <div class="date">06/06/2021</div>
        <p class="property-caption"><?php the_field('description') ?></p>
        <a  href="<?php the_permalink();?>" >
        <button class="property-button"><span class="property-button-text">LEARN MORE</span></button></a>
        </div>
        <a href="#">
        <div class="property-social-icons">
            <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
        </div>
        </a>
    </div>
    </div>
</div>

<?php endwhile; else: endif;?>