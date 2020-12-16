<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/footer.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/index.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/contacts.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/diagnostic.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/express.css">


    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/slick/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/slick/css/slick-theme.css">
    <title><? if (get_field("title") == null){
        $title = "DИAMED - Тестирование сотрудников";?>
        <?=$title; ?>
       <? } else{ ?>
            <?=get_field("title");?>
      <?  } ?></title>
</head>
<body>
<header>
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12 header__col-logo">
                    <div class="header__logo">
                        <a href="/">
                            <img src="<?php bloginfo('template_directory') ?>/img/logo.svg" alt="diamed-logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="header__email">
                        <a href="mailto:info@diamedcare.ru">
                            <img src="<?php bloginfo('template_directory') ?>/img/mail.svg" alt="email">

                            <span>info@diamedcare.ru</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="header__phone">
                        <a href="tel:+74954192321">8 (495)&nbsp;<strong>419-23-21</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
                    <i class="material-icons">menu</i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Тестирование сотрудников</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/express">Экспресс-тестирование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/diagnostic">Диагностика на дому</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>