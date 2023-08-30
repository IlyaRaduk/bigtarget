<?php
/*
Template Name: Главная страница
*/

// … остальной код шаблона
?>

<?php get_header(); ?>
<main>
    <section class="main-slider">
        <?php if(get_field('slider_item')): ?>
            <?php while(has_sub_field('slider_item')) : ?>
                <div class="main-slider__item">
                    <div class="main-slider__photo">
                        <img src="<?php the_sub_field('slider_item_img'); ?>" alt="photo">
                    </div>
                    <div class="main-slider__photo main-slider__photo-mob">
                        <img src="<?php the_sub_field('slider_item_img_mob'); ?>" alt="photo">
                    </div>
                    <div class="container">
                        <div class="main-slider__content">
                            <div class="main-slider__subtitle">
                                <?php the_sub_field('slider_item_subtitle'); ?>
                            </div>
                            <div class="main-slider__title">
                                <?php the_sub_field('slider_item_title'); ?>
                            </div>
                            <div class="main-slider__text">
                                <?php the_sub_field('slider_item_text'); ?>
                            </div>
                            <a class="main-slider__btn btn-main" href="#calculator">Рассчитать доставку</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <section id="info" class="info">
        <div class="container">
            <h2 class="info__title title-main"><?php the_field('perevozki_title'); ?></h2>
            <div class="info__list">
                <?php if(get_field('perevozki_item')): ?>
                    <?php while(has_sub_field('perevozki_item')) : ?>
                        <div class="info__item">
                        <div class="info__photo">
                            <img src="<?php the_sub_field('perevozki_item_img'); ?>" alt="photo">
                        </div>
                        <div class="info__content">
                            <div class="info__item-title">
                                <?php the_sub_field('perevozki_item_title'); ?>
                            </div>
                            <div class="info__description">
                                <?php the_sub_field('perevozki_item_text'); ?>
                            </div>
                            <a class="info__btn btn-main" href="#calculator">Рассчитать стоимость</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="scheme" class="scheme">
        <div class="container">
            <h2 class="scheme__title title-main"><?php the_field('schema_title'); ?></h2>
            <div class="scheme__list">
                <?php if(get_field('schema_item')): ?>
                    <?php while(has_sub_field('schema_item')) : ?>
                    <div class="scheme__item">
                        <div class="scheme__number">
                            <?php the_sub_field('schema_item_number'); ?>
                        </div>
                        <div class="scheme__arrow">
                            <img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow">
                        </div>
                        <div class="scheme__text">
                            <?php the_sub_field('schema_item_text'); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>   
            </div>
        </div>
    </section>
    <section id="calculator" class="calculator">
        <div class="container">
            <h2 class="calculator__title title-main"><?php the_field('calculator_title'); ?></h2>
            <div class="calculator__text-container">
                <p class="calculator__text">
                    <?php the_field('calculator_text'); ?>
                </p>
            </div>
            <form action="#" class="calculator__form">
                <div class="calculator__form-container">
                    <div class="calculator__route">
                        <p class="calculator__label">Маршрут</p>
                        <!-- <div class="calculator__route-row">
                            <div class="calculator__route-item">
                                <select name="from" id="routeFrom">
                                    <option disabled selected value="Minsk">Выбрать город</option>
                                    <option value="Minsk">Минск</option>
                                    <option value="Grodno">Гродно</option>
                                    <option value="Brest">Брест</option>
                                </select>
                            </div>
                            <div class="calculator__route-item">
                                <select name="to" id="routeTo">
                                    <option disabled selected value="Minsk">Выбрать город</option>
                                    <option value="Minsk">Минск</option>
                                    <option value="Grodno">Гродно</option>
                                    <option value="Brest">Брест</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="calculator__route-row">
                            <p>Укажите количество км</p>
                            <div class="calculator__route-item calculator__route-item2">
                                <input id="distance" type="number" placeholder="0">
                                <p class="calculator__km">км</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__type">
                        <p class="calculator__label">Тип груза</p>
                        <div class="calculator__type-row">
                            <label for="#"><input data-price="2" name="type" type="checkbox">Не температурный</label>
                            <label for="#"><input data-price="3" name="type" type="checkbox">Температурный</label>
                        </div>
                        <p class="calculator__label">Дополнительне услуги</p>
                        <div class="calculator__type-row">
                            <label for="#"><input data-price="4" name="serv" type="checkbox">Срочная доставка</label>
                            <label for="#"><input data-price="5" name="serv" type="checkbox">Экспедирование</label>
                        </div>
                    </div>
                    <div class="calculator__weight">
                        <p class="calculator__label">Вес груза, тонн: <span class="calculator__cur1"> 0</span></p>
                        <div class="calculator__weight-row">
                            <input id="r1" data-price="2" name="range-weight" type="range" min="0" max="20" step="1" value="0">
                            <span class="calculator__min">0</span>
                            <span class="calculator__max">20</span>
                        </div>
                        <p class="calculator__label">Объем груза, м3: <span class="calculator__cur2"> 0</span></p>
                        <div class="calculator__weight-row">
                            <input id="r2" name="range-size" type="range" min="0" max="100" step="2" value="0">
                            <span class="calculator__min">0</span>
                            <span class="calculator__max">100</span>
                        </div>
                    </div>
                    <div class="calculator__price">
                        <button class="calculator__btn btn-main">Рассчитать стоимость</button>
                        <div class="calculator__price-text">
                            <p class="calculator__label">Ориентировочная стоимость:</p>
                            <p class="calculator__sum"><span></span> RUB</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="callback">
        <div class="container">
            <h2 class="callback__title title-main"><?php the_field('form_title'); ?></h2>
            <div class="callback__text">
                <?php the_field('form_text'); ?>
            </div>
            <form class="callback__form" action="#">
                <div class="callback__row">
                    <input class="callback__item" type="text" placeholder="Ваше имя">
                    <input class="callback__item" type="text" placeholder="Ваш номер">
                    <button class="callback__btn btn-main">Получить консультацию</button>
                </div>
            </form>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="about__row">
                <div class="about__photo">
                    <img src="<?php the_field('about_img'); ?>" alt="photo">
                </div>
                <div class="about__content">
                    <h2 class="about__title title-main"><?php the_field('about_title'); ?></h2>
                    <div class="about__text">
                        <?php the_field('about_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="case">
        <div class="container">
            <h2 class="case__title title-main">	
                <?php the_field('facts_title'); ?>
            </h2>
            <div class="case__list">
                <?php if(get_field('facts_item')): ?>
                    <?php while(has_sub_field('facts_item')) : ?>
                        <div class="case__item">
                            <div class="case__item-title">
                                <span data-number="<?php the_sub_field('facts_item_number'); ?>" class="animated-number"><?php the_sub_field('facts_item_number'); ?></span><?php the_sub_field('facts_item_text_after'); ?>
                            </div>
                            <div class="case__text">
                                <?php the_sub_field('facts_item_text'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="container">
            <div class="contacts__content">
                <h2 class="contacts__title title-main">Свяжитесь с нами</h2>
                <div class="contacts__list">
                    <div class="contacts__item">
                        <p class="contacts__label">Телефон:</p>
                        <p class="contacts__text"><a href="tel:<?php $phone = get_field("contacts_tel_mob"); $phone = str_replace([' ', '(', ')', '-'], '', $phone); echo $phone; ?>"><?php the_field("contacts_tel_mob"); ?></a></p>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__label">Почта:</p>
                        <p class="contacts__text"><a href="mailto:<?php the_field("contacts_email"); ?>"><?php the_field("contacts_email"); ?></a></p>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__label">Время работы:</p>
                        <p class="contacts__text"><?php the_field('contacts_time'); ?></p>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__label">Адрес:</p>
                        <p class="contacts__text"><?php the_field('contacts_address'); ?></p>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__label">Реквизиты:</p>
                        <p class="contacts__text">
                            <?php the_field('contacts_rekvizity'); ?>
                        </p>
                    </div>
                </div>
                <div class="contacts__social">
                    <p>Мы в социальных сетях:</p>
                    <div class="social">
                        <div class="social__item">
                            <a href="https://t.me/<?php the_field('contacts_telegram'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/telegram.svg" alt="telegram"></a>
                        </div>
                        <div class="social__item">
                            <a href="https://api.whatsapp.com/send?phone=<?php $phone = get_field('contacts_tel_whatsapp'); $phone = str_replace([' ', '(', ')', '-','+'], '', $phone); echo $phone; ?>"><img src="<?php bloginfo('template_url'); ?>/img/whatsapp.svg"
                                    alt="whatsapp"></a>
                        </div>
                        <div class="social__item">
                            <a href="<?php the_field('contacts_instagram'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="instagram"></a>
                        </div>
                        <div class="social__item">
                            <a href="viber://chat?number=%2B<?php $phone = get_field('contacts_tel_whatsapp'); $phone = str_replace([' ', '(', ')', '-','+'], '', $phone); echo $phone; ?>"><img src="<?php bloginfo('template_url'); ?>/img/viber.svg" alt="viber"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts__map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A6cb5b6692ee48a6075ab92659f4127bdd7b14fb5c2452174c08054890a4851bb&amp;source=constructor"
                    width="100%" height="720" frameborder="0"></iframe>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>