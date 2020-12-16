<?php get_header(); ?>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </div>
    </nav>

    <section class="contacts__main">
        <div class="contacts__main-bg-1">
            <div class="contacts__main-bg-2">
                <div class="contacts__main-bg-3">
                    <div class="container">
                        <h1>Контакты</h1>
                        <p>Наш квалифицированный персонал окажет Вам необходимую медицинскую помощь с выездном на дом. Вы сможете пройти
                            УЗИ или снять кардиограмму, не выходя из дома, а также сдать все необходимые анализы.</p>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div>
                                    <div class="contacts__phone">
                                        <img src="<?php bloginfo('template_directory') ?>/img/red-phone.png" alt="red-phone">
                                        <span>+7 (495) 419-23-21</span>
                                    </div>
                                    <div class="contacts__dop-phones">
                                        <p>Отдел выездного обслуживания – <strong>доб.102</strong></p>
                                        <p> Офис менеджер – <strong>доб.103</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contacts__mail">
                                    <img src="<?php bloginfo('template_directory') ?>/img/red-mail.png" alt="red-mail">
                                    <span>info@diamedcare.ru</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contacts__place">
                                    <img src="<?php bloginfo('template_directory') ?>/img/red-place.png" alt="red-place">
                                    <span>Московская область, Одинцовскийрайон, рабочий поселок Заречье,территория 12 месяцев жилой комплекс, стр. 13</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts__services">
        <div class="services-bg-1">
            <div class="services-bg-2">
                <div class="services-bg-3">
                    <div class="container">
                        <h3>Медицинские услуги</h3>
                        <p>Все наши медицинские услуги Вы можете получить в наших лабораторных отделениях:</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="<?php bloginfo('template_directory') ?>/img/blue-place.png" alt="blue-place">
                                <p>Ул. Бориса Галушкина д. 3 <strong>(м.ВДНХ)</strong></p>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php bloginfo('template_directory') ?>/img/blue-place.png" alt="blue-place">
                                <p>Ул. Беговая д. 24 <strong>(м.Беговая)</strong></p>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php bloginfo('template_directory') ?>/img/blue-place.png" alt="blue-place">
                                <p>Ул Красина д. 9 стр.1 <strong>(м.Маяковская)</strong></p>
                            </div>
                        </div>
                        <h3 class="mt-5">Наши реквизиты</h3>
                        <div class="contacts__reqs">
                            <img src="<?php bloginfo('template_directory') ?>/img/blue-list.png" alt="blue-list">
                            <p>ООО «ДИАМЕД» ИНН 5032297089 / КПП 503201001</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>