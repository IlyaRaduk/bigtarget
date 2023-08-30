<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BigTarget
 */

?>

<footer class="footer">
        <div class="container">
            <div class="footer__row">
                <div class="footer__logo">
					<?php the_custom_logo(); ?>
                </div>
                <div class="footer__menu menuLinks">
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'main_menu',
                                'menu'            => 'main_menu',
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'footer__menu',
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
                </div>
                <div class="footer__contacts">
                    <a class="footer__tel" href="tel:<?php $phone = get_field("contacts_tel_mob"); $phone = str_replace([' ', '(', ')', '-'], '', $phone); echo $phone; ?>"><?php the_field("contacts_tel_mob"); ?></a>
                    <div class="footer__social">
                        <p class="footer__social-title">
                            Мы в социальных сетях:
                        </p>
                        <div class="footer__social-list">
                            <div class="footer__social-item">
                                <a href="https://t.me/<?php the_field('contacts_telegram'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/telegramFooter.svg"
                                        alt="telegram"></a>
                            </div>
                            <div class="footer__social-item">
                                <a href="https://api.whatsapp.com/send?phone=<?php $phone = get_field('contacts_tel_whatsapp'); $phone = str_replace([' ', '(', ')', '-','+'], '', $phone); echo $phone; ?>"><img
                                        src="<?php bloginfo('template_url'); ?>/img/whatsappFooter.svg" alt="whatsapp"></a>
                            </div>
                            <div class="footer__social-item">
                                <a href="<?php the_field('contacts_instagram'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/instagramFooter.svg" alt="instagram"></a>
                            </div>
                            <div class="footer__social-item">
                                <a href="viber://chat?number=%2B<?php $phone = get_field('contacts_tel_whatsapp'); $phone = str_replace([' ', '(', ')', '-','+'], '', $phone); echo $phone; ?>"><img src="<?php bloginfo('template_url'); ?>/img/viberFooter.svg" alt="viber"></a>
                            </div>
                        </div>
                    </div>
                    <a class="footer__btn btn-main" href="#calculator">Рассчитать стоимость</a>
                </div>

            </div>

        </div>
    </footer>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./assets/slick.min.js"></script>
    <script src="./js/script.min.js"></script> -->
	<?php wp_footer(); ?>
</body>

</html>