<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>ゑびすダイニング</title>
    <link rel="stylesheet" href="css/index.css?<?= time() ?>">
</head>
<body>
    <?php $page="top"; require('include/header.php'); ?>
    <div class="mv">
        <ul id="mv_slide" class="slide-wrap">
            <li class="slide-item"></li>
            <li class="slide-item"></li>
            <li class="slide-item"></li>
        </ul>
        <div class="mv-heading">
            <div class="logo">14種類の漢方飼料で育った<img src="images/logo_brand_column_white.svg" alt="漢方和牛&漢方三元豚 ダイチ"></div>
            <div class="text">宮城県栗原の地元食材で<br>おもてなしいたします。</div>
        </div>
        <div class="mv-scroll">Scroll</div>
    </div>
    <section id="info" class="info">
        <div class="inner">
            <div class="lead">宮城県栗原の地元食材にこだわった <br class="for-tb">ゑびすグループ 飲食サービス事業部</div>
            <div class="logo">健康と、おいしさを、「愉しむ」<img src="images/logo_dining_column_color.svg" alt="EBISU DINING"></div>
        </div>
    </section>
    <section class="concept">
        <div class="inner">
            <h3>Concept</h3>
            <h4>食の宝庫、栗原の<br>新鮮な食材を</h4>
            <p>雄大な栗駒山を望む山麓の里、栗原にはごちそうがたくさん。豊かな自然と雪も深まる冬の厳しい気候の中、のびやかに、たくましく育つ野菜やお米、そして栄養をたっぷり蓄えた漢方和牛や漢方三元豚。栗原の大地が磨き上げたおいしさをそのままに、素材の旨みを最大限に引き立てた逸品をお届けします。<br>漢方和牛や漢方三元豚をはじめ、地元の旬の野菜や鮮度抜群の魚介類までが楽しめるお店で、栗原の魅力を味わう至福のひと時をお楽しみください。</p>
        </div>
    </section>
    <section class="news">
        <div class="inner">
            <h3>News & Topics</h3>
            <div class="title">
                <h4>お知らせ</h4>
                <a class="link-arrow for-pc" href="news.html">一覧をみる</a>
            </div>
            <div class="news-list">
                <a class="news-block" href="news_detail.html">
                    <div class="date">2022.00.00</div>
                    <p>お知らせ入りますタイトルが入りますお知らせ入りますタイトルが入ります</p>
                </a>
                <a class="news-block" href="news_detail.html">
                    <div class="date">2022.00.00</div>
                    <p>お知らせ入りますタイトルが入りますお知らせ入りますタイトルが入ります</p>
                </a>
                <a class="news-block" href="news_detail.html">
                    <div class="date">2022.00.00</div>
                    <p>お知らせ入りますタイトルが入りますお知らせ入りますタイトルが入ります</p>
                </a>
            </div>
            <div class="link for-tb">
                <a class="link-arrow" href="news.html">一覧をみる</a>
            </div>
        </div>
    </section>
    <section class="restaurant manten">
        <div class="bg-img"></div>
        <div class="inner">
            <h3>Restaurant</h3>
            <div class="catch-text">
                <p>新鮮魚介と栗原のごちそう</p>
                <p>旬の美味しさ味わう</p>
                <p>ゆったり満ちる、幸せ時間</p>
            </div>
            <div class="image">
                <img src="images/top_restaurant_photo01.jpg" alt="">
            </div>
            <div class="logo">
                <img src="images/logo_manten.png" alt="ご馳走ダイニング 満てん">
            </div>
            <div class="link">
                <a class="link-arrow2" href="manten_top.html">店舗ページはこちら</a>
            </div>
        </div>
    </section>
    <section class="restaurant gyusui">
        <div class="bg-img"></div>
        <div class="inner">
            <div class="catch-text">
                <p>粋をつくした空間で</p>
                <p>ゆうゆうと愉しむ</p>
                <p>漢方と豊かな自然に磨かれた</p>
                <p>本物の美味しさ</p>
            </div>
            <div class="image">
                <img src="images/top_restaurant_photo02.jpg" alt="">
            </div>
            <div class="logo">
                <img src="images/logo_gyusui.png" alt="焼肉 牛粋">
            </div>
            <div class="link">
                <a class="link-arrow2" href="">店舗ページはこちら</a>
            </div>
        </div>
    </section>
    <section class="meet">
        <div class="inner">
            <h3>丹精込めて育てた<br>自慢のお肉です。</h3>
            <div class="logo">
                <picture>
                    <source media="(min-width: 1440px)" srcset="images/top_meet_logo.png">
                    <source media="(max-width: 1439px)" srcset="images/top_meet_logo_sp.png">
                    <img src="images/top_meet_logo.png" alt="漢方和牛＆漢方三元豚 ダイチ">
                </picture>
            </div>
            <p>14種類の漢方飼料を与えて育てた<br>健康と美味しさにこだわった<br>ゑびすグループのブランド肉です。</p>
        </div>
    </section>
    <?php require('include/contact_part.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/index.js?<?= time() ?>"></script>
</body>
</html>