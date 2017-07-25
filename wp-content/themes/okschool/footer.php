<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorpinich-school
 */

$footer_menu_1 = buildTree(wp_get_nav_menu_items('footer_menu_1'));
$footer_menu_2 = buildTree(wp_get_nav_menu_items('footer_menu_2'));
$footer_menu_3 = buildTree(wp_get_nav_menu_items('footer_menu_3'));
$footer_menu_4 = buildTree(wp_get_nav_menu_items('footer_menu_4'));

?>


<footer class="footer">
    <div class="container">
        <div class="footer__top fw-grid fw-grid-20">
            <?php if ($footer_menu_1):?>
                <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                    <ul class="footer__list">
                        <?php foreach ($footer_menu_1 as $item):?>
                            <?php if ($item->menu_order == 1){?>
                                <li><?=$item->title;?></li>
                            <?php } else {?>
                                <li><a href="<?=$item->url?>"><?=$item->title;?></a></li>
                            <?php }?>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <?php if ($footer_menu_2):?>
                <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                    <ul class="footer__list">
                        <?php foreach ($footer_menu_2 as $item):?>
                            <?php if ($item->menu_order == 1){?>
                                <li><?=$item->title;?></li>
                            <?php } else {?>
                                <li><a href="<?=$item->url?>"><?=$item->title;?></a></li>
                            <?php }?>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <?php if ($footer_menu_3):?>
                <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                    <ul class="footer__list">
                        <?php foreach ($footer_menu_3 as $item):?>
                            <?php if ($item->menu_order == 1){?>
                                <li><?=$item->title;?></li>
                            <?php } else {?>
                                <li><a href="<?=$item->url?>"><?=$item->title;?></a></li>
                            <?php }?>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <?php if ($footer_menu_4):?>
                <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                    <ul class="footer__list">
                        <?php foreach ($footer_menu_4 as $item):?>
                            <?php if ($item->menu_order == 1){?>
                                <li><?=$item->title;?></li>
                            <?php } else {?>
                                <li><a href="<?=$item->url?>"><?=$item->title;?></a></li>
                            <?php }?>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <div class="fw-width-1-1 fw-width-1-2@m fw-width-1-4@l">
                <ul class="footer__list">
                    <li>Магазин</li>
                    <li>
                        <a href=" https://vk.com/gorpinich_school" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.vk.png" alt=""></a>
                        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.facebook.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCPqnErNfSIVqAJYi676m3Hw" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/icons/icon.footer.social.youtube.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="footer__copyright">&copy; 2016 – 2017  Школа иностранных языков Веры Горпинич</p>
    </div>
</footer>

<div class="popup-wrapper js-popup" data-popup="callback-popup">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Первый результат – бесплатно!</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <?php echo do_shortcode('[contact-form-7 id="108" title="Callback" html_class="fw-width-1-1"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="popup-wrapper js-popup" data-popup="callback-sale">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Скидка 20 % до 22 апреля на курс всем участникам пробного вебинара!</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <?php echo do_shortcode('[contact-form-7 id="110" title="Callback sale" html_class="fw-width-1-1"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="popup-wrapper js-popup" data-popup="ask-question">
    <div class="popup">
        <a href="#" class="popup__close js-close-popup"></a>
        <div class="fw-grid fw-grid-15 fw-grid-30@m fw-grid-50@l">
            <div class="fw-width-1-1 fw-width-2-5@m fw-flex fw-flex-column">
                <p class="fw-fz-24 fw-font-medium fw-color-black fw-text-uppercase fw-line-height-1-2">Задать вопрос</p>
                <p class="fw-font-light fw-fz-15 fw-color-black fw-mt-30 fw-line-height-1-2">Оставьте заявку, и мы перезвоним Вам, чтобы рассказать, как получить доступ к бесплатному вебинару!</p>
            </div>
            <div class="fw-width-1-1 fw-width-3-5@m">
                <?php echo do_shortcode('[contact-form-7 id="109" title="Ask question" html_class="fw-width-1-1 fw-width-2-3@s"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php
wp_enqueue_script('custom', get_template_directory_uri() . '/js/common.js', true);
wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js');

wp_footer();
?>

</body>
</html>
