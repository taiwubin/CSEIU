<?php get_header();?>
<!-- body container -->
<div class="body-container">
    <div class="container">
        <div class="main-container-size">
        <?php get_sidebar('left');?>
        <section class="main-content-size row-40">

            <!--Welcome Post-->
            <div class="row-20">
                <div class="title row-20">Welcome to our website</div>
                <?php
                $args = array('category_name' => 'welcome');
                $query = new WP_Query($args);
                if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
                ?>
                    <div class="a-post row-20">
                        <a href="<?php the_permalink();?>" class="post-title">
                            <div class="welcome">
                                <?php the_post_thumbnail('entry-size');?>
                            </div>
                            <div class="a-post-size"><?php the_title();?></div>
                        </a>
                        <div class="a-post-size post-excerpt">
                            <?php the_excerpt_max_charlength(320)?>
                            <?php get_template_part('entry-meta');?>
                        </div>
                    </div>
                <?php 
                endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>

            <!--Latest Posts-->
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
                    <a href="<?php the_permalink();?>" class="post-title">
                        <div class="mini-thumb-size">
                            <?php the_post_thumbnail('mini-size');?>
                        </div>
                        <div class="post-excerpt-size columns-0">
                            <?php the_title();?>
                        </div>
                    </a>
                    <div class="post-excerpt post-excerpt-size">
                        <?php the_excerpt_max_charlength(280);?>
                        <?php get_template_part('entry-meta');?>
                    </div>
                </div>

                <?php else: ?>
                
                <div class="a-post-container row-20">
                    <div style="margin: 0px 10px;">
                        <a href="<?php the_permalink();?>" class="post-title">
                            <?php the_title();?>
                        </a>
                        <div class="post-excerpt">
                            <?php the_excerpt_max_charlength(320);?>
                            <?php get_template_part('entry-meta');?>
                        </div>
                    </div>
                </div>
                <?php
                endif; endwhile; 
                else:?>
                <div>There are currently no posts</div>
                <?php
                endif;
                wp_reset_query();
                ?>
                
            </div>
        
        </section>
    </div>
    </div>
</div>
<?php get_footer();?>
