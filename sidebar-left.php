<!-- sidebar -->
<aside class="sidebar-left-size row-40">
    <div class="title">Explore</div>
    <?php 
    wp_nav_menu(array(
        'theme_location' => 'secondary',
        'container' => 'nav',
        'container_class' => 'sidebar-menu'
        ));
    ?>
    <div class="row-20"></div>
    <div class="title">Quick Links</div>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'third',
        'container' => 'nav',
        'container_class' => 'sidebar-menu'
    ));
    ?>
</aside>

