<?php get_header();?>
<div class='body-container'>
    <div class='container'>
        <div class="main-container-size">
            <?php get_sidebar('left');?>
            <section class="main-content-size row-40 entry">
                <div class="title row-20">Search result for: <b><?php echo get_search_query();?></b></div>
                <?php if ( have_posts() ): while ( have_posts() ): the_post();?>
                <div class="a-post-container a-post a-post-size row-20">
                    <div class="post-title">
                        <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt_max_charlength(320);?>
                        <?php get_template_part( 'entry-meta' );?>
                    </div>
                </div>
                <?php 
                endwhile; 
                else: ?>
                <div><h6><?php printf( "Sorry, there is no result for '%s'. Please try again with other keywords", get_search_query() )?></h6></div>
                <?php endif;?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
