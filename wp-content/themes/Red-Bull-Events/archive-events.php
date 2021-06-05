<?php get_header();?>

<div class="archive-title">

        <div class="design-element-1-line"></div>
        <div class="design-element-1-square"></div>
        <div class="design-element-1-four-squares"></div>
        <div class="design-element-1-arrow"></div>
        
        <h1 class="archive-title-title">EVENTS</h1>
        

        <div class="design-element-2-line"></div>
        <div class="design-element-2-square"></div>
        <div class="design-element-2-four-squares"></div>
        <div class="design-element-2-arrow"></div>

</div>

<p class="archive-title-text">Discover worldwide Red Bull events. Explore the event calendar to see past and upcoming events: bike, motorsport, surfing, winter sport, music, gaming and much more.</p>


    

<section class="page-wrap">
<div class="events-container">

    <?php get_template_part('includes/section', 'archive');?>

    <?php 
	    	global $wp_query;

	    	$big = 999999999; // need un unlikely integer

	    	echo paginate_links(array(
	    		'base'		=> str_replace($big, '%#%', esc_url( get_pagenum_link($big))),
	    		'format'	=> '?paged=%#%',
	    		'current'	=> max( 1, get_query_var('paged')),
	    		'total'		=> $wp_query->max_num_pages
	    	));
	     ?>

</div>
</section>

<?php get_footer();?>