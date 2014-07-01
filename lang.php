<?php
// SESSION LANG : 0 = English , 1 = Viet

if (!isset($_SESSION)) {
    session_start();
}

function navmenu() { // top navigation

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function viet() { // Viet 
        wp_nav_menu(array(
            'menu' => 'main-nav-viet', // menu main-nav-viet
            'theme_location' => 'primary',
            'container_class' => 'main-nav-viet',
            'container' => 'nav'));
    }

    function eng() { // English
        wp_nav_menu(array(
            'menu' => 'main-nav', // menu main-nav 
            'theme_location' => 'primary',
            'container_class' => 'main-nav',
            'container' => 'nav'));
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") { //using URL GET method to change language
        $lang = input($_GET["lang"]);

        if ($lang == 'eng') {
            $_SESSION['lang'] = 0;
        } else if ($lang == 'viet') {

            $_SESSION['lang'] = 1;
        }
    }
    if ($_SESSION['lang'] == 0) {       // exec change language
        eng();
    } else
        viet();
}

function sidebar() { // Left Sidebar
    if ($_SESSION['lang'] == 0) {

        wp_nav_menu(array(
            'menu' => 'sidebar-menu',
            'theme_location' => 'secondary',
            'container' => 'nav',
            'container_class' => 'sidebar-menu'
        ));
    } else {
        wp_nav_menu(array(
            'menu' => 'sidebar-menu-viet', // menu sidebar-menu-viet
            'theme_location' => 'secondary',
            'container' => 'nav',
            'container_class' => 'sidebar-menu-viet'
        ));
    }
}

function quickmenu() { //Quick link sidebar
    if ($_SESSION['lang'] == 0) {
        wp_nav_menu(array(
            'menu' => 'quick-menu', //menu quick-menu
            'theme_location' => 'third',
            'container' => 'nav',
            'container_class' => 'sidebar-menu'
        ));
    } else {
        wp_nav_menu(array(
            'menu' => 'quick-menu-viet', //menu quick-menu-viet
            'theme_location' => 'third',
            'container' => 'nav',
            'container_class' => 'sidebar-menu'
        ));
    }
}
?>

<?php

function welcome() { // Welcome Post
    if ($_SESSION['lang'] == 0) {
        ?>
        <div class="title row-20">Welcome to our website</div>
        <?php
        $args = array('category_name' => 'welcome');
        $query = new WP_Query($args);
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                ?>
                <div class="a-post row-20">
                    <a href="<?php the_permalink(); ?>" class="post-title">
                        <div class="welcome">
                <?php the_post_thumbnail('entry-size'); ?>
                        </div>
                        <div class="a-post-size"><?php the_title(); ?></div>
                    </a>
                    <div class="a-post-size post-excerpt">
                        <?php the_excerpt_max_charlength(320) ?>
                <?php get_template_part('entry-meta'); ?>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
    <?php } else { ?>
        <div class="title row-20">Chào Mừng</div>
        <?php
        $args = array('category_name' => 'welcome-viet');
        $query = new WP_Query($args);
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                ?>
                <div class="a-post row-20">
                    <a href="<?php the_permalink(); ?>" class="post-title">
                        <div class="welcome">
                <?php the_post_thumbnail('entry-size'); ?>
                        </div>
                        <div class="a-post-size"><?php the_title(); ?></div>
                    </a>
                    <div class="a-post-size post-excerpt">
                        <?php the_excerpt_max_charlength(320) ?>
                <?php get_template_part('entry-meta'); ?>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
    <?php } ?>

    <?php } ?>

    <?php

    function lastpost() { //  Post
        if ($_SESSION['lang'] == 0) {
            ?>
            <div class="title row-20">Latest News</div>  
            <div class="a-post a-post-size clearfix">

                <?php
                $args = array('category_name' => 'news', 'posts_per_page' => 6);
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                        if (has_post_thumbnail()):
                            ?>
                            <div class="a-post-container row-20">
                                <a href="<?php the_permalink(); ?>" class="post-title">
                                    <div class="mini-thumb-size">
                                        <?php the_post_thumbnail('mini-size'); ?>
                                    </div>
                                    <div class="post-excerpt-size columns-0">
                        <?php the_title(); ?>
                                    </div>
                                </a>
                                <div class="post-excerpt post-excerpt-size">
                        <?php the_excerpt_max_charlength(280); ?>
                        <?php get_template_part('entry-meta'); ?>
                                </div>
                            </div>

                    <?php else: ?>

                            <div class="a-post-container row-20">
                                <div style="margin: 0px 10px;">
                                    <a href="<?php the_permalink(); ?>" class="post-title">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="post-excerpt">
                        <?php the_excerpt_max_charlength(320); ?>
                        <?php get_template_part('entry-meta'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endif;
                    endwhile;
                else:
                    ?>
                    <div>There are currently no posts</div>
                <?php
                endif;
                wp_reset_query();
                ?>

            </div>
        <?php } else { ?>
            <div class="title row-20">Tin Tức</div>  
            <div class="a-post a-post-size clearfix">

                <?php
                $args = array('category_name' => 'news-viet', 'posts_per_page' => 6);
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                        if (has_post_thumbnail()):
                            ?>
                            <div class="a-post-container row-20">
                                <a href="<?php the_permalink(); ?>" class="post-title">
                                    <div class="mini-thumb-size">
                                        <?php the_post_thumbnail('mini-size'); ?>
                                    </div>
                                    <div class="post-excerpt-size columns-0">
                        <?php the_title(); ?>
                                    </div>
                                </a>
                                <div class="post-excerpt post-excerpt-size">
                        <?php the_excerpt_max_charlength(280); ?>
                        <?php get_template_part('entry-meta'); ?>
                                </div>
                            </div>

                    <?php else: ?>

                            <div class="a-post-container row-20">
                                <div style="margin: 0px 10px;">
                                    <a href="<?php the_permalink(); ?>" class="post-title">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="post-excerpt">
                        <?php the_excerpt_max_charlength(320); ?>
                        <?php get_template_part('entry-meta'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endif;
                    endwhile;
                else:
                    ?>
                    <div>There are currently no posts</div>
                <?php
                endif;
                wp_reset_query();
                ?>

            </div>

            <?php
        }
    }
    ?>


    <?php

    function page() {
        $url = $_SERVER['REQUEST_URI'];

        if (strpos($url, '/vision/?lang=viet') !== FALSE) {
            $url = get_permalink(178); //178 = vision page      
            wp_redirect($url);
            exit();
        }

        if (strpos($url, '/tam-nhin/?lang=eng') !== FALSE) {
            $url = get_permalink(93); //93 = tam nhin page
            wp_redirect($url);
            exit();
        }
    }
    ?>
