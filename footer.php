<footer>
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 footer__logo-col">
                    <div class="logo-img">
                        <a href="">
                        <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="footer__logo-text">
                        <h6>РОО «Центр защиты прав ветеранов</h6>
                        <h6>правоохранительных органов и боевых действий»</h6>
                        <p>Коммерческое направление</p>
                    </div>
                </div>
                <div class="col-lg-6 footer__phone-callback">
                    <div class="col-lg-6 footer__phone-col">
                        <div class="footer__phone-img">
                            <a href="tel:8 (985) 222-05-35">
                            <img src="<?php bloginfo('template_directory') ?>/img/header/phone.svg" alt="phone_icon">
                            </a>
                        </div>
                        <div class="footer__phone-text">
                            <p class="phone">Телефон</p>
                            <a href="tel:8 (985) 222-05-35"><p class="numbers">8 (985) 222-05-35</p></a>
                        </div>
                    </div>
                    <div class="col-lg-6 footer__callback-col">
                        <div class="footer__callback">
                            <a href="#callback">
                            <button class="btn">
                                Обратная связь
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="divier">
                    <p><a href="https://divier.ru">Создание сайта</a> ДиВиЕР</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="libs/slick/js/slick.min.js"></script>


<script>
    $(document).ready(function () {
        $('.your-class').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
        });
    });
</script>
<?php wp_footer() ?>
</body>
</html>