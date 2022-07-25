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
    <?php require('include/header.php'); ?>
    <div class="mv">
        <ul id="mv_slide" class="slide-wrap">
            <li class="slide-item"></li>
            <li class="slide-item"></li>
            <li class="slide-item"></li>
        </ul>
    </div>
    <?php require('include/contact_part.php'); ?>
    <?php require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <script src="js/index.js?<?= time() ?>"></script>
</body>
</html>