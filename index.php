<?php get_header(); ?>
<!-- body container -->
<div class="body-container">
    <div class="container">
        <div class="main-container-size">
            <?php get_sidebar('left'); ?>
            <section class="main-content-size row-40">

                <!--Welcome Post-->

                <div class="row-20">
                    <?php welcome(); ?>
                    </div>

                    <!--Latest Posts-->
                   <?php lastpost();?>
                </section>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
