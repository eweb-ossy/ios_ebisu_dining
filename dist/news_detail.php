<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>お知らせ｜ゑびすダイニング</title>
    <link rel="stylesheet" href="css/news_detail.css?<?= time() ?>">
</head>
<body>
<?php $page="news"; require('include/header.php'); ?>
    <div class="mv-sub">
        <div class="inner">
            <h2>お知らせ<span>News & Topics</span></h2>
            <div class="image">
                <picture>
                    <source media="(min-width: 1440px)" srcset="images/news_mv_photo.jpg">
                    <source media="(max-width: 1439px)" srcset="images/news_mv_photo_sp.jpg">
                    <img src="images/news_mv_photo.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
    <section>
        <div class="inner">
            <div class="post-heading">
                <div class="post-date">2022.00.00</div>
                <div class="post-title">お知らせ入りますタイトルが入りますお知らせ入りますタイトルが入ります</div>
            </div>
            <div class="post-body">
                <p>この文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入ります</p>
                <img src="images/news_detail_photo.jpg" alt="">
                <p>この文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入りますこの文章はダミーですお店の特徴やこだわりが入ります</p>
            </div>
            <div class="post-link">
                <a href="" class="prev">前の記事</a>
                <a href="news.html" class="back">一覧に戻る</a>
                <a href="" class="next">次の記事</a>
            </div>
        </div>
    </section>
    <?php require('include/contact_part.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/news.js?<?= time() ?>"></script>
</body>
</html>