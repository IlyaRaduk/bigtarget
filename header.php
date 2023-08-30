<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BigTarget
 */

?>
<!DOCTYPE html>
<html <?php bloginfo('language'); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigTarget</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="header__row">
                <div class="header__logo">
					<?php the_custom_logo(); ?>
                </div>
                <div class="header__content">
                    <div class="header__info">
                        <a class="header__word header__tel" href="tel:<?php $phone = get_field("contacts_tel_mob"); $phone = str_replace([' ', '(', ')', '-'], '', $phone); echo $phone; ?>"><?php the_field("contacts_tel_mob"); ?></a>
                        <a class="header__word header__mail" href="mailto:<?php the_field("contacts_email"); ?>"><?php the_field("contacts_email"); ?></a>
                        <p class="header__word header__address"><?php the_field('contacts_address_header'); ?></p>
                        <p class="header__word header__time"><?php the_field('contacts_time'); ?></p>
                        <div class="header__social social">
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
                    <div class="header__menu menuLinks">
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'main_menu',
                                'menu'            => 'main_menu',
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'depth'           => 0,
                                'walker'          => '',
                            ]);
                        ?>
                        <!-- <ul class="menu">
                            <li class="menu__item"><a href="#about">О компании</a></li>
                            <li class="menu__item"><a href="#info">Наши услуги</a></li>
                            <li class="menu__item"><a href="#scheme">Схема работы</a></li>
                            <li class="menu__item"><a href="#calculator">Калькулятор</a></li>
                            <li class="menu__item"><a href="#contacts">Контакты</a></li>
                        </ul> -->
                    </div>
                </div>
                <a class="header__tel-mob" href="tel:<?php $phone = get_field("contacts_tel_mob"); $phone = str_replace([' ', '(', ')', '-'], '', $phone); echo $phone; ?>"><?php the_field("contacts_tel_mob"); ?></a>
                <div class="burger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="burger-menu">
        <?php
            wp_nav_menu([
                'theme_location'  => 'main_menu',
                'menu'            => 'main_menu',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'burger-menu__list menuLinks',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'depth'           => 0,
                'walker'          => '',
            ]);
        ?>
        <div class="burger-menu__info">
            <a class="burger-menu__word burger-menu__tel" href="tel:<?php $phone = get_field("contacts_tel_mob"); $phone = str_replace([' ', '(', ')', '-'], '', $phone); echo $phone; ?>"><?php the_field("contacts_tel_mob"); ?></a>
            <a class="burger-menu__word burger-menu__mail" href="mailto:<?php the_field("contacts_email"); ?>"><?php the_field("contacts_email"); ?></a>
            <p class="burger-menu__word burger-menu__address"><?php the_field('contacts_address_header'); ?></p>
            <p class="burger-menu__word burger-menu__time"><?php the_field('contacts_time'); ?></p>
            <div class="burger-menu__social social">
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