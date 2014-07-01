<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            wp_title('|', true, 'right');
            bloginfo('name');
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/genericons/genericons.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/layout.css"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <!--header container-->
        <div class="header-container">
            <div class="container">
                <header class='main-container-size'>
                    <div class="banner-container">
                        <div class="logo-size columns-0">
                            <a href="<?php get_option('home')?>"><img src="<?php bloginfo('template_url')?>/images/logo.png" alt="" title="<?php bloginfo('title')?>"></a>
                        </div>
                        <div class="lang-size lang">
                            <div class='content'>
                                <a href="#">Tiếng Việt</a> | <a href="#">English</a>                                
                            </div>
                        </div>
                    </div>
                    <div class='nav-bar row-20'>
                        <div class="main-nav-size">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => 'nav',
                                    'container_class' => 'main-nav'
                                ));?>
                        </div>
                        <?php get_search_form();?>
                    </div>
                    <?php get_template_part('featured-image');?>
                </header>
            </div>
        </div>    