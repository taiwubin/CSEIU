<?php get_header();?>
<div class="body-container">
    <div class="container">
        <div class='main-container-size'>
        
            <?php get_sidebar('left');?>
            <div class="main-content-size row-40 entry">
                    <?php if (have_posts()): while (have_posts()): the_post();?>
                    <div class="title"><?php the_title();?></div>
                    <div class="nine-custom columns-20">
                        <?php the_post_thumbnail('post-thumb');?>
                        <div class="entry-content"><?php the_content();?></div>
                        <?php get_template_part('entry-meta');?>
                    </div>
                    <?php 
                    endwhile; 
                    else:
                    ?>
                    <div class="title">There are currently no posts</div>
                    <?php endif;?>
            </div>
        
        </div>
    </div>
</div>
<?php get_footer();?>
