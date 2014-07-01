<?php 
$arch_year = get_the_time('Y');
$arch_month = get_the_time('m');
$arch_day = get_the_time('d');
?>
<div class="entry-meta">
    <ul>
        <li><?php edit_post_link('Edit', "<div class='entry-edit'>", '</div>', '');?></li>
        <li><div class="entry-author"><?php the_author_posts_link()?></div></li>
        <li>
            <div class="entry-date">
                <a href="<?php echo get_day_link($arch_year, $arch_month, $arch_day);?>">
                    <?php echo get_the_date();?>
                </a>
            </div>
        </li>
    </ul>
</div>
