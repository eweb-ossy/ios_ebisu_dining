<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>会社情報｜ゑびすダイニング</title>
    <link rel="stylesheet" href="css/corporate_profile.css?<?= time() ?>">
</head>
<body>
    <?php $page="corporate_profile"; require('include/header.php'); ?>
    <div class="mv-sub">
        <div class="inner">
            <h2>会社情報<span>Corporate Profile</span></h2>
            <div class="image">
                <picture>
                    <source media="(min-width: 1440px)" srcset="images/corporate_profile_mv_photo.jpg">
                    <source media="(max-width: 1439px)" srcset="images/corporate_profile_mv_photo_sp.jpg">
                    <img src="images/corporate_profile_mv_photo.jpg" alt="">
                </picture>
            </div>
        </div>
    </div>
    <section class="profile">
        <div class="inner">
            <table>
                <tr>
                    <th>会社名</th>
                    <td>有限会社ゑびす</td>
                </tr>
                <tr>
                    <th>代表者</th>
                    <td>代表取締役　佐藤 勝郎</td>
                </tr>
                <tr>
                    <th>創　業</th>
                    <td>平成9年5月3日</td>
                </tr>
                <tr>
                    <th>設　立</th>
                    <td>平成17年6月1日</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>300万円</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>飲食事業（居酒屋、和食ダイニング、食堂、レストラン）</td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td>正社員 11名　パート・アルバイト 16名</td>
                </tr>
                <tr>
                    <th>本部所在地</th>
                    <td>〒987-2252 宮城県栗原市築館薬師4丁目10-16<br>TEL 0228-22-6030　　FAX 0228-23-2470</td>
                </tr>
                <tr>
                    <th>関連会社</th>
                    <td>株式会社ダイチ<a href="https://kanpogyu-daichi.com/">https://kanpogyu-daichi.com/</a></td>
                </tr>
            </table>
            <div class="link">
                <a href="" target="_blank">ゑびすグループサイトはこちら</a>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.232458830292!2d141.01888531642618!3d38.73542756407805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f891886d3492ff1%3A0x6ec48bf7512219c7!2z5rqA44Gm44KT!5e0!3m2!1sja!2sjp!4v1658822284136!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="link">
                <a href="https://www.google.co.jp/maps/place/%E6%BA%80%E3%81%A6%E3%82%93/@38.7354276,141.0188853,17z/data=!4m5!3m4!1s0x5f891886d3492ff1:0x6ec48bf7512219c7!8m2!3d38.7355596!4d141.0210558?hl=ja" target="_blank">Googleマップで見る</a>
            </div>
        </div>
    </section>
    <?php require('include/contact_part.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/restaurants.js?<?= time() ?>"></script>
</body>
</html>