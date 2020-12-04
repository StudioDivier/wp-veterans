<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--    <link href="--><?php //bloginfo('template_directory') ?><!--/css/bootstrap.css" rel="stylesheet">-->

    <link href="<?php bloginfo('template_directory') ?>/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/slick/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/slick/css/slick-theme.css">
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 header__logo-col">
                    <div class="logo-img">
                        <a href="">
                        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="header__logo-text">
                        <h6>РОО «Центр защиты прав ветеранов</h6>
                        <h6>правоохранительных органов и боевых действий»</h6>
                        <p>Коммерческое направление</p>
                    </div>
                </div>
                <div class="col-lg-6 header__phone-callback">
                    <div class="col-lg-6 header__phone-col">
                        <div class="header__phone-img">
                            <a href="tel:8 (985) 222-05-35">
                            <img src="<?php bloginfo('template_directory') ?>/img/header/phone.svg" alt="phone_icon">
                            </a>
                        </div>
                        <div class="header__phone-text">
                            <p class="phone">Телефон</p>
                            <a href="tel:8 (985) 222-05-35">
                            <p class="numbers">8 (985) 222-05-35</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 header__callback-col">
                        <div class="header__callback">
                            <a href="#callback">
                            <button class="btn">
                                Обратная связь
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Наши услуги</a>
                        <!-- <span class="sr-only">(current)</span> -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">Кто мы</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#work">Как мы работаем</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#geography">География наших услуг</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#recomendation">Важные рекомендации</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#callback">Обратная связь</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
