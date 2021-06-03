<div class="block-world">

    <div class="block-world-side-elements">
        <div class="world-side-element-vertical-box-skewed"></div>
        <div class="world-side-element-line"></div>
        <div class="world-side-element-box-1"></div>
        <div class="world-side-element-box-2"></div>
    </div>

    <div class="block-world-main-elements">

        <div class="world-main-element-background"></div>

        <div class="world-main-element-square-dark-1"></div>
        <div class="world-main-element-square-dark-2"></div>
        <div class="world-main-element-square-dark-3"></div>
        <div class="world-main-element-square-dark-4"></div>
        <div class="world-main-element-square-dark-5"></div>

        <div class="world-main-element-square-light-1"></div>
        <div class="world-main-element-square-light-2"></div>
        <div class="world-main-element-square-light-3"></div>
        <div class="world-main-element-square-light-4"></div>
        <div class="world-main-element-square-light-5"></div>
    </div>

    <div class="rotate-text">
        <span class="block-world-background-text"><?php block_field( 'background-text'); ?></span>
    </div>

    <h1 class="block-world-title"><?php block_field( 'title' ); ?></h1>

    <div class="markers">

        <div class="world-map">  
                <img class="map"  src="<?php block_field( 'world-image' ); ?>" />
                <img class="logo"  src="<?php block_field( 'logo-image' ); ?>" />
        </div>

        <p class="block-world-text-events"><?php block_field( 'events' ); ?></p>
        <p class="block-world-text-challenges"><?php block_field( 'challenges' ); ?></p>
        <p class="block-world-text-prizes"><?php block_field( 'prizes' ); ?></p>
    

    
    </div>

</div>