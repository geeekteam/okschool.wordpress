<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorpinich-school
 */

global $post;

$post_id = $post->ID;
$main_menu = buildTree(wp_get_nav_menu_items('main_menu'));

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="header__toggle">
            <a href="#" class="toggle-header"><i class="fa fa-bars fw-fz-24 fw-color-black"></i></a>
            <a href="/" class=""><img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="" class="fw-height-24 fw-width-24"></a>
            <a href="tel:8 (800) 800-80-80"><i class="fa fa-phone fw-fz-24 fw-color-black"></i></a>
        </div>
        <div class="header__content">
            <div><p class="header__info">Школа иностранных языков</p></div>
            <a href="/" class="b-logo">
                <img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="" class="b-logo__image">
                <p class="b-logo__text">ОКЕЙ <br> ШКОЛА</p>
            </a>

            <ul class="navigation">

                <?php foreach ($main_menu as $item) :?>
                    <li class="navigation__item <?php if(($post_id == $item->object_id)) echo ' navigation__item--active ';

                    if($item->sub) echo ' navigation__item--sub';

                    $sub_items = $item->sub;
                    foreach ($sub_items as $sub_item) :
                        if(($post_id == $sub_item->object_id)) echo ' navigation__item--active ';
                    endforeach;

                    ?>">
                        <a class="navigation__link" href="<?=$item->url;?>">
                            <span><?=$item->title;?></span>
                        </a>
                        <?php if($item->sub) :?>
                            <ul class="navigation__sub">
                                <li class="navigation__item navigation__item--back"><a href="#" class="navigation__link"><span>Назад</span></a></li>
                                <li class="navigation__item navigation__item--header"><a href="#" class="navigation__link"><span><?=$item->title;?></span></a></li>
                                <?php foreach ($sub_items as $sub_item) :?>
                                    <li class="navigation__item <?php if(($post_id == $sub_item->object_id)) echo ' navigation__item--active ';?>">
                                        <a class="navigation__link" href="<?=$sub_item->url; ?>"><?=$sub_item->title;?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </li>
                <?php endforeach;?>

            </ul>

            <div class="fw-mt-auto fw-border-box fw-pl-10 fw-max-width-220">
                <div class="fw-fz-12 fw-font-italic fw-color-grey-dark">
                    <div class="fw-mb-5">г. С-Пб
                        Ленинский проспект, 153
                    </div>
                    <div class="fw-mb-5">г. Гатчина,
                        ул. Коли Подрядчикова, 7
                    </div>
                    <div>п. Сиверский,
                        ул. Строителей, 1А
                    </div>
                </div>
                <div class="fw-border-top-2 fw-border-style-dashed fw-border-color-black-transparent fw-mt-20">
                    <a href="tel:8 (800) 256 28 36"><p
                            class="fw-mt-20 fw-font-roboto-condensed fw-fz-24 fw-text-uppercase fw-color-grey-dark">8
                            (800) 775 65 89</p></a>
                    <div class="fw-mt-20 fw-mb-20">
                        <a href="#" class="button fw-flex fw-flex-middle fw-flex-center js-open-popup"
                           data-popup-target="callback-popup"><i class="fa fa-phone fw-mr-5"></i> ЗАКАЗАТЬ ЗВОНОК</a>
                    </div>
                </div>
            </div>
        </div>
    </header>