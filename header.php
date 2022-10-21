<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pavlovec.net">
    <title>ThePandaVerse</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#009411">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <?php $file = 'assets/css/dist/tailwind.css'; ?>
    <link rel="stylesheet" href="<?= $file ?>?v=<?= filectime($file) ?>">

    <!-- <?php $file = 'assets/css/dist/slick.min.css'; ?>
    <link rel="stylesheet" href="<?= $file ?>?v=<?= filectime($file) ?>"> -->

    <!-- <?php $file = 'assets/css/dist/lity.min.css'; ?>
    <link rel="stylesheet" href="<?= $file ?>?v=<?= filectime($file) ?>"> -->

    <?php $file = 'assets/css/dist/style.css'; ?>
    <link rel="stylesheet" href="<?= $file ?>?v=<?= filectime($file) ?>">


    <?php $file = 'assets/js/jquery-1.12.4.min.js'; ?>
    <script src="<?= $file ?>?v=<?= filectime($file) ?>"></script>

    <?php $file = 'assets/js/jquery-migrate-1.4.1.min.js'; ?>
    <script src="<?= $file ?>?v=<?= filectime($file) ?>"></script>

    <!-- <?php $file = 'assets/js/slick.min.js'; ?>
    <script src="<?= $file ?>?v=<?= filectime($file) ?>"></script> -->

    <!-- <?php $file = 'assets/js/lity.min.js'; ?>
    <script src="<?= $file ?>?v=<?= filectime($file) ?>"></script> -->


</head>


<body class="body">
    <div class="body-inner" id="top">
        <section class="header-wrap">
            <header class="header">
                <div class="header-inner">
                    <div class="header__logo">
                        <a href="#top">
                            <img src="assets/img/logo-pandaverse.png" alt="logo: PandaVerse" width="28">
                            <p>ThePandaVerse</p>
                        </a>
                    </div>

                    <div class="header__menu">
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#how">Buy $WangWoo</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <div class="header__menu__btn">
                            <a href="" id="buy_pandaverse_nfts" onclick="event.preventDefault();alert('Pandaverse land, pandas and much more will soon be available for purchase with $WangWoo');"><span>Buy Pandaverse NFTs</span></a>
                        </div>
                    </div>

                    <div class="header__burger">
                        <div class="header__burger-inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </header>
        </section>