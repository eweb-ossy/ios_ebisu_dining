<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>満てん</title>
    <link rel="stylesheet" href="css/manten_top.css?<?= time() ?>">
</head>
<body>
    <?php $page="top"; require('include/header_manten.php'); ?>
    <div class="mv">
        <div class="slider">
            <div class="slide">
                <img src="images/manten_top_mv_photo01.jpg" loading="lazy" alt="">
            </div>
            <div class="slide">
                <img src="images/manten_top_mv_photo02.jpg" loading="lazy" alt="">
            </div>
            <div class="slide">
                <img src="images/manten_top_mv_photo03.jpg" loading="lazy" alt="">
            </div>
            <div class="slide">
                <img src="images/manten_top_mv_photo04.jpg" loading="lazy" alt="">
            </div>
        </div>
        <div class="mv-logo fadein-mv txt01">
            <img src="images/manten_top_mv_logo.png" alt="満てん">
        </div>
        <div class="mv-text">
            <p class="fadein-mv txt02">新鮮魚介と栗原のごちそう</p>
            <p class="fadein-mv txt03">旬の美味しさ味わう</p>
            <p class="fadein-mv txt04">ゆったり満ちる、幸せ時間</p>
        </div>
    </div>
    <section class="news">
        <div class="inner">
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
    <section class="menu">
        <div class="inner">
            <div class="menu-lead">
                <h2 class="manten-heading">メニュー<span>Menu</span></h2>
            </div>
            <div class="menu-images">
                <a href="" class="block">
                    <div class="text">今月のおすすめ</div>
                    <div class="text-sub">Recomend</div>
                </a>
                <a href="" class="block">
                    <div class="text">ランチ</div>
                    <div class="text-sub">Lunch</div>
                </a>
                <a href="" class="block">
                    <div class="text">ディナー</div>
                    <div class="text-sub">Dinner</div>
                </a>
                <a href="" class="block">
                    <div class="text">ドリンク</div>
                    <div class="text-sub">Drink</div>
                </a>
            </div>
            <a href="" class="menu-takeout">
                <picture>
                    <source media="(min-width: 1000px)" srcset="images/manten_top_menu_img05.png">
                    <source media="(max-width: 999px)" srcset="images/manten_top_menu_img05_sp.png">
                    <img src="images/manten_top_menu_img05.png" alt="">
                </picture>
            </a>
        </div>
    </section>
    <section class="concept">
        <div class="inner">
            <div class="lead">
                <h2 class="manten-heading">コンセプト<span>Concept</span></h2>
            </div>
            <div class="movie">
                <iframe src="https://www.youtube.com/embed/QAUqPI4zGWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="block01">
                <div class="text">
                    <h3>職人技が光る、<br>本格和食や創作料理<br>栗原の旬のごちそうを<br class="for-tb">心ゆくまで</h3>
                    <p>栗原の水鳥椎茸など、地元の旬の野菜や鮮度抜群の魚介類、漢方和牛や漢方三元豚を使用した、栗原のごちそうが味わえる「満てん」。ランチ、ディナーとシーンに合わせて豊富なメニューが揃います。食材のおいしさを最大限に引き出す、職人技が光るお料理をお楽しみください。</p>
                </div>
                <div class="image">
                    <img src="images/manten_top_concept_img01.jpg" alt="">
                </div>
            </div>
            <div class="block02">
                <div class="text">
                    <div class="logo">
                        <img src="images/logo_brand_column.svg" alt="">
                    </div>
                    <p>ヘルシーな脂とコクのある旨み、繊細でやわらかな肉質、食べ応えのある赤身が魅力の、漢方和牛・漢方三元豚。14種類のハーブをブレンドしたオリジナル飼料と、ストレスのない環境、人々の愛情で育まれた栗原生まれのごちそうです。</p>
                </div>
                <div class="image">
                    <img src="images/manten_top_concept_img02.jpg" alt="">
                </div>
            </div>
            <div class="block03">
                <div class="image01">
                    <img src="images/manten_top_concept_img03.jpg" alt="">
                </div>
                <div class="image02">
                    <img src="images/manten_top_concept_img04.jpg" alt="">
                </div>
            </div>
            <div class="block04">
                <div class="text">
                    <h3>人目を気にせず<br>個室・半個室でゆったり<br>満たされる時間</h3>
                    <p>和の趣ある店内には、個室と半個室で仕切られたお座敷、テーブル席、庭木を望む小上がりなど、シーンに合わせてゆったりとくつろぐことができる空間が広がります。家族でのご利用はもちろん、宴会や会席などにも幅広くご利用いただけます。</p>
                </div>
                <div class="image">
                    <img src="images/manten_top_concept_img05.jpg" alt="">
                    <p>ご馳走ダイニング 満てん　店長<span>佐藤 奨太</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-rooms">
        <div class="slide">
            <img src="images/manten_top_slider-room_img01.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img02.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img03.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img04.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img05.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img06.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img07.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img08.jpg" loading="lazy" alt="">
        </div>
        <div class="slide">
            <img src="images/manten_top_slider-room_img09.jpg" loading="lazy" alt="">
        </div>
    </section>
    <section class="access">
        <div class="inner">
            <div class="lead">
                <h2 class="manten-heading">アクセス<span>Access</span></h2>
            </div>
            <p>〒987-2252 宮城県栗原市築館薬師4丁目10－16</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.23245883029!2d141.01888531643826!3d38.735427564078115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f891886d3492ff1%3A0x6ec48bf7512219c7!2z5rqA44Gm44KT!5e0!3m2!1sja!2sjp!4v1658909233285!5m2!1sja!2sjp" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <a href="https://www.google.co.jp/maps/place/%E6%BA%80%E3%81%A6%E3%82%93/@38.7354276,141.0188853,17z/data=!4m5!3m4!1s0x5f891886d3492ff1:0x6ec48bf7512219c7!8m2!3d38.7355596!4d141.0210558?hl=ja">Googleマップで見る</a>
        </div>
    </section>
    <div class="top-bottom-image"></div>
    <?php require('include/contact_part_manten.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/manten_top.js?<?= time() ?>"></script>
</body>
</html>