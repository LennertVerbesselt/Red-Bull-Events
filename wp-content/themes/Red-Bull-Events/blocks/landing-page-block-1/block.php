<div class="block-1">

    <div class="block-1-side-elements">
        <div class="side-element-line"></div>
        <div class="side-element-box-1"></div>
        <div class="side-element-box-2"></div>
        <div class="side-element-arrow-1"></div>
        <div class="side-element-arrow-2"></div>
    </div>

    <div class="block-1-main-elements">
        <div class="main-element-square-1"></div>
        <div class="main-element-square-2"></div>
        <div class="main-element-square-3"></div>
        <div class="main-element-square-4"></div>
    </div>

    <span class="block-1-background-text"><?php block_field( 'background-title' ); ?></span>
    <h1 class="block-1-title"><?php block_field( 'title' ); ?></h1>
    <p class="block-1-text"><?php block_field( 'sub-text' ); ?></p>

    <div class="block-1-CTA">
        <a href="<?php block_field( 'button-url' ); ?>" >
            <button class="block-1-button">
                <span class="block-1-button-text"><?php block_field( 'button-text' ); ?></span>
            </button>
        </a>
    </div>
    <div class="small-illustration">  
            <img class="ill-2"  src="<?php block_field( 'small-illustration' ); ?>" />
    </div>

</div>