<section class="callback">
    <div class="callback-bg-1">
        <div class="callback-bg-2">
            <div class="callback-bg-3">
                <div class="callback-bg-4">
                    <div class="container">
                        <div class="callback__form">
                            <h2>Оставьте заявку</h2>
                            <p>Оставьте заявку и наш менеджер свяжется с вами</p>
                            <form action="<?php bloginfo('template_directory') ?>/mail/send.php" method="post" id="ajax_form"
                                  class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-xl-4 col-lg-6">
                                        <label for="tel" style="display: none">телефон</label>
                                        <input type="tel" class="form-control" id="tel" name="tel" placeholder="Телефон"
                                               required>
                                        <div class="invalid-feedback">
                                            Пожалуйста введите корректный телефон
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <label for="email" style="display: none">email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="E-mail" required>
                                        <div class="invalid-feedback">
                                            Пожалуйста введите корректный E-mail
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <input type="hidden" name="url" value="<? if (get_field("title") == null) {
                                            $title = "DИAMED - Тестирование сотрудников"; ?>
                                                <?= $title; ?>
                                               <? } else { ?>
                                            <?=get_field("title");?>
                                       <? } ?>">
                                        <?
                                        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                        $url = explode('?', $url);
                                        $url = $url[0];
                                        ?>
                                        <input type="hidden" name="link" value="<?=$url ?>">
                                        <button class="btn" type="submit">Отправить заявку</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form__rules">Отправляя форму, я соглашаюсь с <a href="#">правилами сайта</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="footer__row">
            <div class="row">
                <div class="col-xl-7 footer__col">
                    <div class="row w-100">
                        <div class="col-md-3 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="footer-row__logo">
                                <img src="<?php bloginfo('template_directory') ?>/img/logo.svg" alt="diamed-logo">
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="footer-row__menu1">
                                        <ul>
                                            <li><a href="/">Тестирование сотрудников</a></li>
                                            <li><a href="/express">Экспресс-тестирование</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="footer-row__menu2">
                                        <ul>
                                            <li><a href="/diagnostic">Диагностика на дому</a></li>
                                            <li><a href="/contacts">Контакты</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 footer__col">
                    <div class="footer-row__email">
                        <a href="mailto:info@diamedcare.ru">
                            <img src="<?php bloginfo('template_directory') ?>/img/mail.svg" alt="email">
                            <span>info@diamedcare.ru</span>
                        </a>
                    </div>
                    <div class="footer-row__phone">
                        <i class="material-icons">phone</i>
                        <a href="tel:+74954192321">8 (495)&nbsp;<strong>419-23-21</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer__copyright">
            <p>©2020 DИАМЕD. Все права защищены.</p>
            <p><a href="https://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</p>
        </div>
    </div>
</footer>


<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory') ?>/libs/slick/js/slick.min.js"></script>


<script>
    $(document).ready(function () {
        $('.your-class').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            dots: false
        });
    });
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</body>
</html>