<script>
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>
<section class="featured-bg">
    <div class="flexslider">
        <ul class="slides">
            <?php 
            $args = array('category_name' => 'uncategorized', 'posts_per_page' => 3);
            $query = new WP_Query($args);
            while ($query->have_posts()): $query->the_post();
            ?>
            <li>
                <?php the_post_thumbnail('featured')?>
            </li>
            <?php 
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </div>
</section>
