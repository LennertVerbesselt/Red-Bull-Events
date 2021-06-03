
<footer>

<div class="footercontainer"> 
    <div class="companyname">@2021 RED BULL EVENTS</div>
        <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar',
            )
        );?>

        <div class="socialicons">
            <p>INSERT SOCIAL ICONS</p>
        </div>

    </div>
    
    </footer>




<?php wp_footer();?>
</body>
</html>