<?php get_header();?>
<div class="body-container">
    <div class="container">
        <div class="main-container-size">
            <?php get_sidebar('left');?>
            <section class="main-content-size row-40">
                <?php if (have_posts()): while (have_posts()): the_post();?>
                <div class="entry">
                    <div class="entry-title"><?php the_title();?></div>
                    <?php get_template_part('entry-meta');?>
                    <div class="entry-content">
                        <div class="row-20"><?php the_post_thumbnail('entry-size');?></div>
                        <?php the_content();?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </section>
        </div>
    </div>
</div>
<?php get_footer();?>
