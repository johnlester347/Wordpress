<footer>
    <div class="container">
        <?php

            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    // 'menu' => 'Top bar',
                    'menu_class' => 'footer-bar' // Binabago nya yung class name ng ul default name - menu
                )
            );

            ?>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>