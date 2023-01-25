<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChistoBistro</title>
    <link rel="stylesheet" href="lib/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/global.css">
    <?php
        switch($page){
            case 'index':
                echo '<link rel="stylesheet" href="css/main.css">';
            break;
            case 'thesis':
                echo '<link rel="stylesheet" href="css/thesis.css">';
            break;
        }
    ?>
</head>
<body>
    

    <header class="header d-flex align-items-center justify-content-between">

        <a href="#!">
            <img src="img/logo.svg" alt="">
        </a>

        <nav>
            <ul class="header__nav d-none d-lg-flex align-items-center">
                <li><a href="#!">Наши услуги</a></li>
                <li><a href="/thesis.php">Преимущества</a></li>
                <li><a href="#!">О нас</a></li>
                <li><a href="#!">отзывы</a></li>
                <li><a href="#!">Контакты</a></li>
            </ul>
        </nav>

        <div class="header__buttons d-none d-lg-flex align-items-center">
            <a href="#!" class="header__buttons--phone">
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.29146 8.52039C7.21923 9.44686 8.34181 10.1622 9.58035 10.616L11.2559 9.30352C11.3056 9.26984 11.3645 9.25181 11.4248 9.25181C11.4851 9.25181 11.544 9.26984 11.5937 9.30352L14.7048 11.2766C14.8229 11.3465 14.9229 11.4425 14.9968 11.557C15.0708 11.6715 15.1167 11.8013 15.1309 11.9362C15.1451 12.0712 15.1273 12.2075 15.0788 12.3345C15.0303 12.4615 14.9525 12.5756 14.8515 12.6679L13.3937 14.0854C13.1849 14.2885 12.9283 14.4375 12.6468 14.5192C12.3653 14.6008 12.0676 14.6126 11.7803 14.5535C8.91466 13.9709 6.2733 12.6064 4.15813 10.616C2.0899 8.60582 0.658693 6.04802 0.038127 3.2529C-0.023177 2.97449 -0.010382 2.68521 0.0752719 2.4131C0.160926 2.14099 0.316534 1.89528 0.527016 1.69977L2.03813 0.26477C2.13164 0.170177 2.24568 0.0976339 2.3717 0.0525727C2.49773 0.0075115 2.63248 -0.00890026 2.76586 0.00456637C2.89925 0.018033 3.02781 0.061029 3.14192 0.130335C3.25603 0.199641 3.35274 0.293461 3.42479 0.40477L5.4959 3.42789C5.53163 3.47537 5.55091 3.53288 5.55091 3.59196C5.55091 3.65103 5.53163 3.70855 5.4959 3.75602L4.13146 5.37039C4.60505 6.56518 5.3429 7.6412 6.29146 8.52039V8.52039Z" fill="white"/>
                </svg>
                +998 99 646 87 90
            </a>
            <a href="#!" class="header__buttons--btn">
                Связаться
            </a>
        </div>

        <div class="header__burger d-flex d-lg-none">
            <span></span>
        </div>
        
    </header>