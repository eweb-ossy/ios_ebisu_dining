<?php if (! isset($page)) { $page = "";} ?>
<header class="header <?= $page === 'top' ? $page : 'fixed' ?>">
    <div class="inner">
        <a href="" class="header-logo">EBISU DINING</a>
        <nav class="header-nav active">
            <ul>
                <li class="for-tb"><a class="" href="">TOP</a></li>
                <li><a class="<?= $page === 'restaurants' ? 'active' : '' ?>" href="restaurants.html">店舗情報</a></li>
                <li><a class="<?= $page === 'corporate_profile' ? 'active' : '' ?>" href="corporate_profile.html">会社情報</a></li>
                <li><a class="" href="">採用情報</a></li>
                <li><a class="<?= $page === 'news' ? 'active' : '' ?>" href="news.html">お知らせ</a></li>
                <li class="for-pc <?= $page === 'contact' ? 'active' : '' ?>"><a href="contact.html">お問い合わせ</a></li>
            </ul>
            <div class="for-tb">
                <?php $path = dirname(__FILE__); ?>
                <?php require($path . '/footer_nav.php'); ?>
                <?php require($path . '/contact_part.php'); ?>
            </div>
        </nav>
        <div class="header-nav-btn">
            <div id="nav_btn" class="btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>