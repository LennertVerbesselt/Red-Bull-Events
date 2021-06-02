<?php if( have_posts() ) : while( have_posts() ) : the_post();?>


    <?php the_content();?>


    <?php
        $tags = get_the_tags();
        if($tags):
            foreach($tags as $tag):?>

            <a href="<?php echo get_tag_link($tag->term_id)?>" class="badge badge-succes">
                <?php echo $tag->name;?>
            </a>
                
        <?php endforeach ?>
    <?php endif ?>
    

<?php endwhile; else: endif;?>