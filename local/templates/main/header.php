<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>КОЛПАКИ</title>
    <?php
        $APPLICATION->ShowHead();
        $APPLICATION->ShowCSS();
        $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/local/php_interface/include/scripts.php",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
</head>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>



<!-- 
<div class="basket-sucsess-mobile js-basket-sucsess-mobile">
    <div class="basket-text-zakaz">
        <div class="finger">👍</div>
        <div class="number-zakaz js-number-order"></div>
        </br>
        <div class="text-zakaz">Спасибо за заказ, мы перезвоним вам в течении 15 минут</div>
        <a class="basket-more-button-href" href="#">
            <div class="basket-more-button js-more-create-order">Заказать еще</div>
        </a>
    </div>
</div>


    <div class="col-12 side-basket js-order-sucsess" style="display: none">
        <div class="basket-text-zakaz">
            <div class="finger">👍</div>
            <div class="number-zakaz js-number-order">Номер заказа #503</div>
            </br>
            <div class="text-zakaz">Спасибо за заказ, мы перезвоним вам в течении 15 минут</div>
            <a class="basket-more-button-href" href="#">
                <div class="basket-more-button">Заказать еще</div>
            </a>
        </div>
    </div> -->

<div class="side-basket-cosen">
    <div class="back-button js-back-button">← Вернуться назад</div>

    <div class="col-12 side-basket js-deleted-cart" style="display: none">
        <div class="basket-text-zakaz">
            <div class="finger">😢</div>
            <div class="number-zakaz">Вы удалили все товары</div>
            </br>
            <div class="text-zakaz">Повод набрать новых :)</div>
            <a class="basket-more-button-href" href="#">
                <div class="basket-more-button">К пиццам</div>
            </a>
        </div>
    </div>

    <div class="col-12 side-basket empty-basket js-cart-empty">
        <svg width="262" height="265" viewBox="0 0 262 265" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4"
                d="M0.831626 45.1935C0.287226 45.1005 -0.0787135 44.5838 0.0142768 44.0394L1.52964 35.1679C1.62263 34.6235 2.13934 34.2575 2.68374 34.3505C3.22814 34.4435 3.59408 34.9602 3.50109 35.5046L2.1541 43.3904L10.0399 44.7374C10.5843 44.8304 10.9502 45.3471 10.8572 45.8915C10.7642 46.4359 10.2475 46.8018 9.70313 46.7088L0.831626 45.1935ZM193.78 263.013C213.982 242.073 219.238 206.886 215.509 179.426C213.645 165.7 209.557 154.081 204.123 147.224C201.412 143.803 198.426 141.641 195.285 140.91C192.174 140.185 188.752 140.827 185.061 143.328L183.939 141.672C187.998 138.923 191.983 138.087 195.739 138.962C199.465 139.83 202.807 142.344 205.69 145.982C211.443 153.241 215.605 165.268 217.491 179.157C221.262 206.925 216.018 242.842 195.22 264.402L193.78 263.013ZM185.061 143.328C177.757 148.276 175.945 156.349 178.042 164.927C180.145 173.531 186.173 182.485 194.299 188.772C202.418 195.052 212.522 198.589 222.768 196.574C232.995 194.561 243.594 186.97 252.623 170.519L254.377 171.481C245.156 188.28 234.13 196.376 223.154 198.536C212.196 200.692 201.519 196.885 193.076 190.353C184.639 183.827 178.323 174.501 176.099 165.402C173.868 156.276 175.743 147.224 183.939 141.672L185.061 143.328ZM252.623 170.519C261.561 154.235 261.443 130.504 253.316 105.869C245.199 81.2671 229.144 55.9339 206.475 36.5514C183.815 17.1763 154.562 3.75873 120.023 2.93283C85.4836 2.1069 45.5653 13.8713 1.57795 45.0238L0.422047 43.3917C44.6847 12.0442 85.0164 0.0951538 120.071 0.933411C155.126 1.77167 184.81 15.3959 207.775 35.0313C230.731 54.6594 246.988 80.3055 255.215 105.243C263.432 130.147 263.689 154.515 254.377 171.481L252.623 170.519Z"
                fill="url(#paint0_linear_1_1013)" />
            <defs>
                <linearGradient id="paint0_linear_1_1013" x1="146.5" y1="-26.9999" x2="194" y2="285"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0.423666" stop-color="#AE968A" />
                    <stop offset="1" stop-color="#AE968A" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
        <div class="basket-text">В корзине ничего нет, <br> добавьте что-нибудь 😋</div>
    </div>

    <div class="col-12 zakaz js-cart-order" style="display: none">
        <div class="basket-text-cosen">
            <div class="sum-price js-title-cart"></div>
            </br>
            <div class="basket-overflow">
                <div class="products-in-basket js-list-products-order">
                    <div></div>
                </div>

            </div>
            <div class="modal-order-button" disabled> К оформлению</div>

        </div>
    </div>

    <div class="col-12 basket-formhidden ">
        <div class="basket-form-mobile">
            <div class="back-button js-back-button">← В корзину</div>
            <div class="basket-form-title">Оформить заказ</div>
            </br>
            <div class="order-modal__payment">
                <div class="order-modal__payment-method active inter">Наличными</div>
                <div class="order-modal__payment-method inter">Картой курьеру</div>
            </div>

            <form class="js-order-create basket-form">


                <input type="text" name="NAME" placeholder="Имя*"
                    class="order-input white order-input__first top-basket-input-name "> <br>
                <input type="text" name="PHONE" placeholder="Телефон*"
                    class="order-input middle-basket-input-phone white"> <br>
                <div class="city-choice">
                    <input type="text" name="LOCATION" placeholder="Город доставки*"
                        class="order-input order-input middle-basket-input-phone white">
                    <div class="city-choice__list white hidden ">
                        <div class="city-choice__content">
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>

                        </div>
                        <div class="basket-overflow__gradient"></div>
                    </div>

                </div>
                <div class="street-choice">
                    <input type="text" name="ADDRESS" placeholder="Адрес доставки*"
                        class="order-input bottom-basket-input-address white"> <br>
                    <div class="street-choice__list hidden white js-list-addresses ">
                        <div class="street-choice__content ">
                            <div class="street-choice__item inter">Войкова</div>
                            <div class="street-choice__item inter">Индустриальная</div>
                            <div class="street-choice__item inter">Калиновская</div>
                            <div class="street-choice__item inter">Ленина</div>
                            <div class="street-choice__item inter">Сутырина</div>
                        </div>
                    </div>
                </div>
                <div class='order-input__exact-adresses'>
                    <input type="text" name="ENTRANCE" placeholder="Подъезд"
                        class="order-input order-input__left order-input__exact-adress white ">
                    <input type="text" name="FLOOR" placeholder="Этаж"
                        class="order-input order-input__exact-adress white">
                    <input type="text" name="FLAT" placeholder="Квартира"
                        class="order-input order-input__right order-input__exact-adress white ">
                </div>
            </form>
            <div class="basket-form-button">
                <button class="modal-order-button inter "> Оформить заказ на 1220 ₽ </button>

                <div class="order-modal__info inter">Нажимая кнопку Оформить заказ, вы соглашаетесь с <span
                        class="privacy-policy">политикой конфиденциальности</span> </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-block hidden">
    <div class="order-modal form-modal">

        <div class="order-modal__title inter">Оформить заказ</div>
        <div class="order-modal__payment">
            <div class="order-modal__payment-method active inter">Наличными</div>
            <div class="order-modal__payment-method inter">Картой курьеру</div>
        </div>

        <div class="order-modal__form">
            <form class="js-order-create basket-form">
                <input type="text" name="NAME" placeholder="Имя*"
                    class="order-input order-input__first top-basket-input-name "> <br>
                <input type="text" name="PHONE" placeholder="Телефон*" class="order-input middle-basket-input-phone ">
                <br>
                <div class="city-choice">
                    <input type="text" name="LOCATION" placeholder="Город доставки*"
                        class="order-input order-input middle-basket-input-phone ">
                    <div class="city-choice__list hidden ">
                        <div class="city-choice__content">
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                            <div class="city-choice__item inter">Кострома</div>
                        </div>
                    </div>
                </div>
                <div class="street-choice">
                    <input type="text" name="ADDRESS" placeholder="Адрес доставки*"
                        class="order-input bottom-basket-input-address"> <br>
                    <div class="street-choice__list hidden js-list-addresses ">
                        <div class="street-choice__content ">
                            <div class="street-choice__item inter">Войкова</div>
                            <div class="street-choice__item inter">Индустриальная</div>
                            <div class="street-choice__item inter">Калиновская</div>
                            <div class="street-choice__item inter">Ленина</div>
                            <div class="street-choice__item inter">Сутырина</div>
                        </div>
                    </div>
                </div>
                <div class='order-input__exact-adresses'>
                    <input type="text" name="ENTRANCE" placeholder="Подъезд"
                        class="order-input order-input__left order-input__exact-adress ">
                    <input type="text" name="FLOOR" placeholder="Этаж" class="order-input order-input__exact-adress">
                    <input type="text" name="FLAT" placeholder="Квартира"
                        class="order-input order-input__right order-input__exact-adress ">
                </div>
            </form>
        </div>

        <button class="modal-order-button inter js-order-submit-buttin "> Оформить заказ на 1220 ₽ </button>
        <div class="order-modal__info inter">Нажимая кнопку Оформить заказ, вы соглашаетесь с <span
                class="privacy-policy">политикой конфиденциальности</span> </div>

        <div class="order-modal__close-btn"><img src="/public/images/modal-close.svg" alt="крестик"></div>

    </div>
</div>


<div class="modal-block hidden">
    <div class="order-modal ">
        <div class="modal-accepted js-order-sucsess">
            <div class="finger">👍</div>
            <div class="modal-accepted__title js-number-order inter">Номер заказа #503</div>
            <div class="modal-accepted__description inter">Спасибо за заказ, мы перезвоним вам в течении 15 минут</div>
            <div class="modal-order-button modal-accepted__btn inter basket-more-button-href"><a>Заказать ещё</a></div>
        </div>
        <div class="order-modal__close-btn js-more-create-order"><img src="/public/images/modal-close.svg" alt="крестик">
        </div>
    </div>
</div>



<div><a id='scrollTo'></a></div>
<div class="contain">
    <?php
            $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/local/php_interface/include/header.php",
                    "AREA_FILE_SUFFIX" => "inc",
                    "AREA_FILE_RECURSIVE" => "N",
                    "EDIT_TEMPLATE" => ""
                )
            );
        ?>