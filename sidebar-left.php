<!-- sidebar -->
<aside class="sidebar-left-size row-40">
    <?php if ($_SESSION['lang'] == 0) { ?>
        <div class="title">Explore</div>
        <?php sidebar(); ?>
    <?php } else { ?>
        <div class="title">THÔNG TIN CẦN BIÉT</div>
        <?php sidebar(); ?>
    <?php } ?>
    <div class="row-20"></div>
    <?php if ($_SESSION['lang'] == 0) { ?>
        <div class="title">Quick Links</div>
        <?php quickmenu(); ?>
    <?php } else { ?>
        <div class="title">LIÊN KẾT</div>
        <?php quickmenu(); ?>
    <?php } ?>
</aside>

