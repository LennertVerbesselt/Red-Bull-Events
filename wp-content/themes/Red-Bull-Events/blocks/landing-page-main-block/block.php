<div class="main-block">

    <h1 class="main-illustration-title"><?php block_field( 'title' ); ?></h1>
    <p class="main-illustration-text"><?php block_field( 'subtext' ); ?></p>

    <div class="main-illustration-CTA">
        <div class="design-element-1-line"></div>
        <div class="design-element-1-square"></div>
        <div class="design-element-1-four-squares"></div>
        <div class="design-element-1-arrow"></div>
        
        <a href="<?php block_field( 'button-url' ); ?>" >
            <button class="main-illustration-button">
                <span class="main-illustration-button-text"><?php block_field( 'button-text' ); ?></span>
            </button>
        </a>

        <div class="design-element-2-line"></div>
        <div class="design-element-2-square"></div>
        <div class="design-element-2-four-squares"></div>
        <div class="design-element-2-arrow"></div>
    </div>
    <div class="big-illustration">
        <img class="ill-1"  src="<?php block_field( 'main-illustration' ); ?>" />
    </div>

</div>