<?php get_header(); ?>

<section class="banner-main">
    <div class="container">
        <div class="banner__text">
            <div class="text__title">
                <h2>Команда профессионалов </h2>
                <p>по урегулированию конфликтов <span><br>в имущественной сфере</span></p>
            </div>
            <div class="text__description">
                <p>Мы отделяем конфликт от имущества, разрешаем его, а Вы совершаете
                    с имуществом <span>сделку</span> или пользуетесь им <span>по назначению</span>!</p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services">
    <div class="container">
        <div class="subtitle">
            <p>Перечень наших услуг</p>
            <h2>Наши услуги</h2>
        </div>
        <div class="cards__table">
            <?php
            $id = 5; // Идентификатор нужной рубрики
            $n = 7;   // Количество выводимых записей
            $recent = new WP_Query("cat=$id&showposts=$n"); //Запрашиваем нужные записи
            $count = 0;
            while ($recent->have_posts()) :
                $recent->the_post(); //Если они есть, то выводим в цикле
                ?>
                <?php $count = $count + 1 ?>
                <div class="col-sm-4">
                    <div class="card__ex">
                        <div class="card_top" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                            <div class="card_top_text">
                                <p><?= get_field("title"); ?></p>
                            </div>
                        </div>
                        <?php if (($count % 2) == 0) {
                            $color = '#071629';
                        } else {
                            $color = '#ac956b';
                        } ?>
                        <div class="card_num" style="background-color: <?= $color ?>">
                            <p>0<?= $count ?></p>
                        </div>
                        <div class="card_bot">
                            <div class="card_bot_text">
                                <p><?= get_field("description"); ?></p>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#target<?= $count ?>"
                                   rel="bookmark" alt="<?php the_title(); ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; //Конец цикла вывода ?>
            <?php wp_reset_query(); ?>
        </div>
</section>

<section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 about__left">
                <img src="<?php bloginfo('template_directory') ?>/img/about.png" alt="about-pic">
            </div>
            <div class="col-lg-6 about__right">
                <div class="subtitle">
                    <p>о нас</p>
                    <h2>Кто мы</h2>
                </div>
                <div class="text-top">
                    <p>Региональная общественная организация <span>«Центр защиты
                    прав ветеранов правоохранительных органов и боевых
                    действий»</span> зарегистрирована в 2017 году.</p>
                </div>
                <div class="text-bot">
                    <p>У нас есть два направления деятельности: <span>ветеранское
                и коммерческое</span></p>
                </div>
                <div class="direction">
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/img/who/money.svg" alt="">
                        <h6>На настоящем сайте</h6>
                        <p>представлено коммерческое направление нашей работы</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory') ?>/img/who/home.svg" alt="">
                        <h6>Основное направление </h6>
                        <p>коммерческой деятельности – урегулирование конфликтных ситуаций в имущественной сфере</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="head-manager">
    <div class="row head__title">
        <div class="container">
            <div class="title">
                <div class="title__logo">
                    <img src="<?php bloginfo('template_directory') ?>/img/org/headboss.svg" alt="">
                </div>
                <div class="title__text">
                    <p>Организацию возглавляет генерал-лейтенант ФСБ РФ</p>
                    <h4>Бульбов Александр Аресеньевич</h4>
                </div>

            </div>
        </div>
    </div>
    <div class="row head__down">
        <div class="container">
            <div class="row head__main">
                <div class="col-lg-6 head__left">
                    <div class="photo-headmanager">
                        <img src="<?php bloginfo('template_directory') ?>/img/head-manager.png" alt="">
                    </div>
                    <div class="logo-photo">
                        <img src="<?php bloginfo('template_directory') ?>/img/fsb_logo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 head__right">
                    <div class="head-text">
                        <h4>В нашу анти-конфликтную команду входят </h4>
                        <p>бывшие работники всех известных в России
                            правоохранительных и контролирующих структур, а
                            также предприниматели, арбитражные управляющие,
                            адвокаты, психологи, IT-специалисты, представители
                            силовых видов спорта, национальных диаспор и СМИ.
                        </p>
                        <p>Для урегулирования специфичных конфликтных
                            ситуаций в команду могут быть включены
                            специалисты иных сфер деятельности.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="work">
    <div class="container">
        <div class="col-lg-8 work-left">
            <div class="subtitle">
                <p>О нашей работе</p>
                <h2>Как мы работаем</h2>
            </div>
            <div class="work-text">
                <h5>Свою работу строим исключительно на правовой основе, заключаем договор.</h5>
                <p>Для урегулирования каждого вида конфликтной ситуации в имущественной сфере у нас
                    есть эффективный набор инструментов, позволяющих добиваться положительного
                    результата с учётом лучшего соотношения таких показателей, как время, цена и качество. </p>
            </div>
            <div class="work-direction">
                <div class="col-sm-6">
                    <img src="<?php bloginfo('template_directory') ?>/img/work/licence.svg" alt="">
                    <h6>В нашем арсенале</h6>
                    <p>есть и оригинальные решения, позволяющие
                        решать ряд проблем с минимальными
                        затратами времени и ресурсов.</p>
                </div>
                <div class="col-sm-6">
                    <img src="<?php bloginfo('template_directory') ?>/img/work/serif.svg" alt="">
                    <h6>Работаем честно</h6>
                    <p>профессионально, качественно, оперативно,
                        результативно, держим слово и выполняем
                        свои обязательства! </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 work-right">
            <div class="work-photo">
                <img src="<?php bloginfo('template_directory') ?>/img/work-photo.png" alt="">
            </div>
        </div>
    </div>
    <div class="work-line">
        <div class="container">
            <div class="col-lg-8 work-line-left">
                <img src="<?php bloginfo('template_directory') ?>/img/like.png" alt="">
                <div>
                    <p><span>Сочетание большого опыта работы в правоохранительной и
                        предпринимательской сфере</span> позволяет нам справляться с самыми
                        сложными и неординарными конфликтными ситуациями.</p>
                </div>
            </div>
            <div class="col-lg-4 work-line-right"></div>
        </div>
    </div>
</section>

<section id="geography" class="geo">
    <div class="geo-line">
        <img src="<?php bloginfo('template_directory') ?>/img/geo.svg" alt="">
        <div class="subtitle">
            <p>Страны, с которыми мы сотрудничаем</p>
            <h2>География наших услуг</h2>
        </div>
    </div>
    <div class="container">
        <div class="geo-blocks">
            <div class="col-sm-5">
                <div class="geo-text-block">
                    <p class="text__title">Помогаем урегулировать
                        конфликтные ситуации в
                        следующих странах:</p>
                    <p>Австрия, Англия, Белорусия, Венгрия,
                        Вьетнам, Германия, Гонконг, Греция, Грузия,
                        Испания, Италия, Казахстан, Кипр, Китай,
                        Ливан, Литва, Латвия, ОАЭ, Польша,
                        Сингапур, Словакия, США, Тайланд, Турция,
                        Узбекистан, Украина, Финляндия, Франция,
                        Хорватия, Черногория, Чехия, Швейцария.</p>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="geo-text-block">
                    <p class="text__title">В России можем оказать услуги в любом
                        регионе, включая следующие города: </p>
                    <p>Астрахань, Барнаул, Белгород, Владивосток, Владимир,
                        Волгоград, Воронеж, Грозный, Екатеринбург, Ижевск,
                        Иркутск, Казань, Калининград, Кемерово, Краснодар,
                        Красноярск, Курск, Магас, Махачкала, Москва, Мурманск,
                        Нальчик, Нижний Новгород, Новосибирск, Оренбург,
                        Петрозаводск, Ростов, Рязань, Санкт-Петербург, Саратов,
                        Севастополь, Смоленск, Сочи, Ставрополь, Тюмень,
                        Ульяновск, Хабаровск, Челябинск, Элиста, Ярославль. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="recomendation" class="recomend">
    <div class="container">
        <div class="subtitle">
            <p>Рекомендации о нашей работе</p>
            <h2>Важные рекомендации</h2>
        </div>
        <div class="rec">
            <?php
            $id = 6; // Идентификатор нужной рубрики
            $n = 9;   // Количество выводимых записей
            $recent = new WP_Query("cat=$id&showposts=$n"); //Запрашиваем нужные записи
            $count = 0;
            while ($recent->have_posts()) :
                $recent->the_post(); //Если они есть, то выводим в цикле
                ?>
                <?php $count = $count + 1 ?>
                <?php if (($count % 2) == 0) {
                $color = '#071629'; ?>
                <div class="row chet">
                    <div class="col-sm-2">
                        <div class="card_num">
                            <p>0<?= $count ?></p>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="rec__text">
                            <h3><?php the_title(); //заголовок записи ?></h3>
                            <p><?php the_content(); // вывод текста записи ?></p>
                        </div>
                    </div>
                </div>
            <? } else {
                $color = '#ac956b'; ?>
                <div class="row nechet">
                    <div class="col-sm-2">
                        <div class="card_num">
                            <p>0<?= $count ?></p>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="rec__text">
                            <h3><?php the_title(); //заголовок записи ?></h3>
                            <p><?php the_content(); // вывод текста записи ?></p>
                        </div>
                    </div>
                </div>
            <? } ?>


            <?php endwhile; //Конец цикла вывода ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<section id="callback" class="form">

    <div class="container">
        <div class="subtitle">
            <p>Рекомендации о нашей работе</p>
            <h2>Форма обратной связи</h2>
            <p class="form__subtext">Заполните форму обратной связи и мы оперативно свяжемся с Вами для обсуждения
                стоящих перед Вами задач</p>
        </div>
        <div class="row form-fields">
            <?php echo do_shortcode('[contact-form-7 id="123" title="contact"]'); ?>
            <!--                <div class="col-lg-6 form-left">-->
            <!--                    <input type="text" name="name" id="name" placeholder="Имя*">-->
            <!--                    <input type="email" name="email" id="email" placeholder="E-mail*">-->
            <!--                </div>-->
            <!--                <div class="col-lg-6 form-right">-->
            <!--                    <input type="text" name="phone" id="phone" placeholder="Телефон">-->
            <!--                    <button type="submit" id="submit" class="btn-orange">Отправить</button>-->
            <!--                </div>-->
        </div>
        <div class="row">
            <p>Отправляя данную форму вы соглашаетесь с Политикой в отношении обработки персональных данных</p>
        </div>
    </div>

</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="subtitle">
            <p>Где мы находимся</p>
            <h2>Контакты </h2>
        </div>
        <div class="contact-phone-email">
            <div class="contact-elem">
                <a href="tel:8 (985) 222-05-35">
                    <img src="<?php bloginfo('template_directory') ?>/img/contact/phone.svg" alt="">
                </a>
                <div class="con-elem">
                    <p>Телефон:</p>
                    <a href="tel:8 (985) 222-05-35" style="color: black;">
                        <p><span>8 (985) 222-05-35</span></p>
                    </a>
                </div>
            </div>
            <div class="contact-elem">
                <a href="mailto:anti-conflict@mail.ru">
                    <img src="<?php bloginfo('template_directory') ?>/img/contact/email.svg" alt="">
                </a>
                <div class="con-elem">
                    <p>E-mail:</p>
                    <a href="mailto:anti-conflict@mail.ru" style="color: black;">
                        <p><span>anti-conflict@mail.ru</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="office">
        <div class="container">
            <p>Наши офисы в Москве:</p>
            <div class="row">
                <div class="col-lg-4">
                    <p>01</p>
                    <div class="office-text">
                        <p>Новоданиловская набережная, д.4а</p>
                        <p><span>м.Тульская</span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p>02</p>
                    <div class="office-text">
                        <p>Новоданиловская набережная, д.4а</p>
                        <p><span>м.Тульская</span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p>03</p>
                    <div class="office-text">
                        <p>Новоданиловская набережная, д.4а</p>
                        <p><span>м.Тульская</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1124.1474804978059!2d37.6237739048421!3d55.70124453011519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b4ff00f0097%3A0xb2aba84a08991c35!2z0J3QvtCy0L7QtNCw0L3QuNC70L7QstGB0LrQsNGPINC90LDQsS4sIDTQkCwg0JzQvtGB0LrQstCwLCAxMTcxMDU!5e0!3m2!1sru!2sru!4v1606914236923!5m2!1sru!2sru"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
    </div>
</section>

<?php
$id = 5; // Идентификатор нужной рубрики
$n = 7;   // Количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n"); //Запрашиваем нужные записи
$count = 0;
while ($recent->have_posts()) :
    $recent->the_post(); //Если они есть, то выводим в цикле
    ?>
    <?php $count = $count + 1 ?>
    <div class="modal fade" id="target<?= $count ?>" tabindex="-1" aria-labelledby="modalService1Label"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content">
                        <div class="modal-up">
                            <div class="modal-img">
                                <?php the_post_thumbnail() ?>

                            </div>
                            <div class="modal-lefttext">
                                <h4><?php the_title(); ?></h4>
                                <?= get_field("list_point"); ?>
                            </div>
                        </div>
                        <div class="modal-down">
                            <div class="modal-textdown">
                                <?= get_field("text_field"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; //Конец цикла вывода ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>

