<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>店舗情報｜ゑびすダイニング</title>
    <link rel="stylesheet" href="css/restaurants.css?<?= time() ?>">
</head>
<body>
    <?php $page="restaurants"; require('include/header.php'); ?>
    <div class="mv-sub">
        <div class="inner">
            <h2>店舗情報<span>Restaurants</span></h2>
            <div class="image">
                <picture>
                    <source media="(min-width: 1440px)" srcset="images/restaurants_mv_photo.jpg">
                    <source media="(max-width: 1439px)" srcset="images/restaurants_mv_photo_sp.jpg">
                    <img src="images/restaurants_mv_photo.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
    <section class="shop-info">
        <div class="inner">
            <div class="info">
                <div class="image">
                    <img src="images/restaurants_shopinfo_photo01.jpg" alt="">
                </div>
                <div class="text">
                    <h3>旬の美食と肉本来の<br>美味しさを味わう<br>ゆっくり、たっぷり満ちる時間</h3>
                    <div class="logo">
                        <img src="images/logo_manten.png" alt="ご馳走ダイニング 満てん">
                    </div>
                </div>
                <div class="link">
                    <a class="link-arrow2" href="manten_top.html">店舗ページはこちら</a>
                </div>
            </div>
            <div class="info-text">
                <div class="shop-name">ご馳走ダイニング　満てん</div>
                <div class="shop-detail">
                    <table>
                        <tr>
                            <th>住所</th>
                            <td>〒987-2252宮城県栗原市築館薬師4-10-16<br>
                                <a href="">Googleマップで見る</a>
                            </td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td>0228-22-0078</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>ランチ　　11:00-14:00（LO/13:30）<br>ディナー　17:00-23:00（フードLO/21:00)(ドリンクLO/21:30)</td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>火曜日</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="info gyusui">
                <div class="image">
                <img src="images/restaurants_shopinfo_photo02.jpg" alt="">
                </div>
                <div class="text">
                    <h3>粋をつくした空間で<br>ゆうゆうと愉しむ<br>漢方と豊かな自然に磨かれた<br>本物の美味しさ</h3>
                    <div class="logo">
                        <img src="images/logo_gyusui.png" alt="焼肉 牛粋">
                    </div>
                </div>
                <div class="link">
                    <a class="link-arrow2" href="">店舗ページはこちら</a>
                </div>
            </div>
            <div class="info-text">
                <div class="shop-name">漢方和牛 焼肉「牛粋」</div>
                <div class="shop-detail">
                    <table>
                        <tr>
                            <th>住所</th>
                            <td>〒989-6221　宮城県大崎市古川大宮1-1-3<br>
                                <a href="">Googleマップで見る</a>
                            </td>
                        </tr>
                        <tr>
                            <th>TEL</th>
                            <td>0229-24-4129</td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>ランチ　　11:30-14:30（LO/14:00）<br>ディナー　17:00-22:00（フードLO/21:00　ドリンクLO/21:30)</td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td>火曜日</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php require('include/contact_part.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/restaurants.js?<?= time() ?>"></script>
</body>
</html>