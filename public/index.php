<?php
ob_start();

session_start();

require_once '../config.php';
require_once '../libs/helper.php';
require_once '../database/connect.php';

?>
<html lang="<?= $_ENV['LANG'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="SDG icon" href="img/favicon/P17_MerkMiddelen_Favicon_RGB.svg" type="image/svg">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <title><?= $_ENV['TITLE'] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/43032dec1c.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
</head>

<body class="text-primary">
    <?php $page = getPage() ?>

    <?php require_once '../resources/views/components/header.view.php' ?>

    <?php require_once $page ?>

    <?php if ($page != '../resources/views/login.view.php') : ?>
        <?php require_once '../resources/views/components/footer.view.php' ?>
    <?php endif; ?>
</body>

</html>
<?php
ob_end_flush();
?>