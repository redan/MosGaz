<?php 
/*
Template name: Главная
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); echo " | "; bloginfo( 'description' ); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- jQuery Modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- jQuery Modal -->
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php
        wp_head();
    ?>
</head>
<body>
    <header class="header_index">
        <div class="header_img">
            <?php $slider_index = CFS()->get('slider_index'); ?>
                <?php foreach ($slider_index as $loop) { ?>
                <div class="promo_sl" style="background-image: url('<?php echo $loop['slider_index_img'] ?>')">
                </div>
            <?php } ?>
        </div>
        <div class="header_fixer">
            <div class="header_block wrapper d-flex">
                <div class="logo">
                    <a href="#"><img id='main_logo' src="<?php echo bloginfo('template_url'); ?>/assets/img/Logo.png" alt="logo"></a>
                </div>
                <div class="navigation">
                    <a href="nashi-raboty">Наши работы</a>
                    <a href="nashi-ceny">Цены</a>
                    <a href="uslugi">Услуги</a>
                    <a href="rasschitat-stoimost">Рассчитать стоимость</a>
                    <a href="kontakty">Контакты</a>
                </div>
                <div class="tels">
                    <a href="tel:<?= CFS()->get('tel_number_1'); ?>"><?= CFS()->get('tel_number_1'); ?></a>
                    <a href="tel:<?= CFS()->get('tel_number_2'); ?>"><?= CFS()->get('tel_number_2'); ?></a>
                    <a href="#contact_modal" rel="modal:open" class="color_link">обратный звонок</a>
                </div>
                <!-- burger menu -->
                <div class="bg_container">
                    <div class="menu-toggle burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="menu" class="burger-menu__wrap">
                    <div class="burger-menu__cont wrapper">
                        <ul class="burger-menu">
                            <li class="burger__link">
                                <a href="nashi-raboty">Наши работы</a>
                            </li>
                            <li class="burger__link">
                                <a href="nashi-ceny">Цены</a>
                            </li>
                            <li class="burger__link">
                                <a href="uslugi">Услуги</a>
                            </li>
                            <li class="burger__link">
                                <a href="rasschitat-stoimost">Рассчитать стоимость</a>
                            </li>
                            <li class="burger__link">
                                <a href="kontakty">Контакты</a>
                            </li>
                            <li class="burger__link">
                                <a href="tel:<?= CFS()->get('tel_number_1'); ?>"><?= CFS()->get('tel_number_1'); ?></a>
                                <a href="tel:<?= CFS()->get('tel_number_2'); ?>"><?= CFS()->get('tel_number_2'); ?></a>
                                <a href="#contact_modal" rel="modal:open" class="color_link">обратный звонок</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo">
            <div class="left_arrow arrow">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="wrapper">
                <?php $i = 0; ?>
                <?php foreach ($slider_index as $loop) { ?>
                <?php $i++; ?>
                <?php if ($i == 1){ ?>
                <div class="promo_info current">
                    <h1><?= $loop['slider_index_text_main'] ?></h1>
                    <p class="topline"> <?= $loop['slider_index_text'] ?></p>
                    <a class="link_btn colored" href="#contact_modal" rel="modal:open">Рассчитать стоимость</a>
                </div>
                <?php } else { ?>
                <div class="promo_info">
                    <h1><?= $loop['slider_index_text_main'] ?></h1>
                    <p class="topline"> <?= $loop['slider_index_text'] ?></p>
                    <a class="link_btn colored" href="#contact_modal" rel="modal:open">Рассчитать стоимость</a>
                </div>
                <?php }} ?>
            </div>
            <div class="rigth_arrow arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </header>
    <section class="works">
        <div class="wrapper">
            <div class="works_title">
                <h3 class="topline">
                    Наши работы
                </h3>
                <a href="nashi-raboty">Посмотреть все</a>
            </div>
            <div class="works_items d-flex">
                <?php 
                    $posts = get_posts( array(
                        'numberposts' => 8,
                        'category_name'    => 'works',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    $int = 0;
                    foreach( $posts as $post ){
                        setup_postdata($post);
                        $int++;
                        ?> 
                            <div class="works_item">
                                <img src="<?= CFS()->get( 'works_foto_prev' );?>" alt="kotelnaya">
                                <p class="bold works_item_title"> <?= the_title(  ) ?></p>
                                <div class="works_item_info d-flex">
                                    <div class="works_item_parametrs">
                                        <p>
                                            Срок:
                                        </p>
                                        <p>
                                            Площадь:
                                        </p>
                                        <p>
                                            Стоимость работ:
                                        </p>
                                    </div>
                                    <div class="works_item_parametrs_value">
                                        <p class="bold"> <?php the_field('works_delay') ?></p>
                                        <p class="bold"> <?php the_field('works_area') ?>  м<sup><small>2</small></sup></p>
                                        <p class="bold blue"> <?php the_field('works_price') ?> </p>
                                    </div>

                                </div>
                                <div class="works_item_button center_button">
                                    <a href="#ex<?=$int?>" rel="modal:open"><button class="colored">Подробнее</button></a>
                                </div>
                            </div>
                        <?php
                    }
                    
                    wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </section>
    <section class="prices">
        <div class="prices_title">
            <h3>Цены</h3>
            <div class="prices_title_area d-flex">
                <p>Выберете прлощадь:</p>
                <button class="area_button tablinks active" onclick="openTab(event, '100', 'to100')" id="defaultOpen">100 м<sup>2</sup></button>
                <button class="area_button tablinks" onclick="openTab(event, '200', 'to200')">200 м<sup>2</sup></button>
                <button class="area_button tablinks" onclick="openTab(event, '300', 'to300')">300 м<sup>2</sup></button>
            </div>
            <p class="prices_title_text_min tabdescriptor" id="to100">* В расчетах заложено отопление площадью до 100 м<sup>2</sup></p>
            <p class="prices_title_text_min tabdescriptor" id="to200">* В расчетах заложено отопление площадью до 200 м<sup>2</sup></p>
            <p class="prices_title_text_min tabdescriptor" id="to300">* В расчетах заложено отопление площадью до 300 м<sup>2</sup></p>
        </div>
        <div class="wrapper topline_white">
            <div class="prices_plans d-flex tabcontent" id="100">
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_100_ec')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_100_ec')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_100_ec')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_100_ec')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_100_ec')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_100_ec')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_100_ec')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_100_ec')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_100_st')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_100_st')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_100_st')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_100_st')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_100_st')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_100_st')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_100_st')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_100_st')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_100_pr')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_100_pr')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_100_pr')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_100_pr')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_100_pr')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_100_pr')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_100_pr')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_100_pr')?></p>
                </div>
            </div>
            <div class="prices_plans d-flex tabcontent" id="200">
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_200_ec')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_200_ec')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_200_ec')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_200_ec')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_200_ec')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_200_ec')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_200_ec')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_200_ec')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_200_st')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_200_st')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_200_st')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_200_st')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_200_st')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_200_st')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_200_st')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_200_st')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_200_pr')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_200_pr')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_200_pr')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_200_pr')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_200_pr')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_200_pr')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_200_pr')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_200_pr')?></p>
                </div>
            </div>
            <div class="prices_plans d-flex tabcontent" id="300">
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_300_ec')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_300_ec')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_300_ec')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_300_ec')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_300_ec')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_300_ec')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_300_ec')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_300_ec')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_300_st')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_300_st')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_300_st')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_300_st')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_300_st')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_300_st')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_300_st')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_300_st')?></p>
                </div>
                <div class="prices_plan">
                    <h3>
                        <?= CFS()->get('name_300_pr')?>
                    </h3>
                    <div class="prices_plan_float topline">
                        <p><b>Монтажные работы</b></p>
                        <p><b>Комплектующие и материалы:</b> <?= CFS()->get('parts_300_pr')?></p>
                        <p><b>Трубы:</b> <?= CFS()->get('tube_300_pr')?></p>
                        <p><b>Радиаторы:</b><?= CFS()->get('radiators_300_pr')?></p>
                        <p><b>Теплый пол:</b> <?= CFS()->get('heat_floor_300_pr')?></p>
                        <p><b>Регулирование температуры:</b> <?= CFS()->get('control_300_pr')?></p>
                    </div>
                    <p class="prices_plans_price"><?= CFS()->get('price_300_pr')?> руб.</p>
                    <p><b>Срок выполнения работ:</b> <?= CFS()->get('time_300_pr')?></p>
                </div>
            </div>
            <div class="center_button">
                <a class="link_btn yellow_on_blue" href="#contact_modal" rel="modal:open">Заказать расчет</a>
            </div>
        </div>
    </section>
    <section class="services">
        <h3>Услуги</h3>
        <p>Монтаж отопления включает в себя следующие этапы:</p>
        <div class="wrapper topline_center">
            <div class="services_inner d-flex">
                <div class="services_item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services/project.jpeg" alt="services">
                    <p><b>Проектирование системы отопления</b></p>
                </div>
                <div class="services_item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services/mount.jpeg" alt="services">
                    <p><b>
                        Монтаж теплых полов, 
                        радиаторов отопления, 
                        котлов отопления
                    </b></p>
                </div>
                <div class="services_item">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/services/maintenance.jpeg" alt="services">
                    <p><b>
                        Сервисное обслуживание
                    </b></p>
                </div>
            </div>
        </div>
        <div class="center_button">
            <a class="link_btn colored" href="#contact_modal" rel="modal:open">Оставить заявку</a>
        </div>
        <div class="services_link">
            <a href="uslugi" class="services_allServices">Все услуги</a>
        </div>
    </section>
    <section class="form">
        <div class="wrapper">
            <div class="form_full">
                <?php echo do_shortcode( '[contact-form-7 id="69" title="Большая форма рассчитать стоимость"]' ) ?>
            </div>
        </div>
    </section>
    <section class="steps">
        <h3>
            Этапы работы<br>с нами
        </h3>
        <div class="wrapper topline_center">
            <div class="steps_thumbnails">
                <div class="step"  aria-hidden="true" tabindex="0">
                    <div class="num_circle num_circle_one">
                        <div class="num">01</div>
                    </div>
                    <p class="step_title"><b>Оставляете<br> заявку</b></p>
                    <p>Наш менеджер уточняет детали объекта и отвечает на ваши вопросы.</p>
                </div>
                <div class="step" aria-hidden="true" tabindex="-1">
                    <div class="num_circle num_circle_two">
                    <div class="num">02</div>
                    </div>
                    <p class="step_title"><b>Замер и расчет<br> объекта</b></p>
                    <p>Наш мастер приезжает на объект и производит необходимые замеры - составляется смета.</p>
                </div>
                <div class="step" aria-hidden="true" tabindex="-1">
                    <div class="num_circle num_circle_three">
                    <div class="num">03</div>
                    </div>
                    <p class="step_title"><b>Привозим оборудование,<br>устанавливаем котлы и<br>прочее</b></p>
                    <p>Делаем все точно в срок, после работы оплата.</p>
                </div>
                <div class="step" aria-hidden="true" tabindex="-1">
                    <div class="num_circle num_circle_four">
                    <div class="num">
                        04            </div>
                    </div>
                    <p class="step_title"><b>Гарантийный<br>срок</b></p>
                    <p>Следим за качественной работой отопления, исправляем ошибки если есть.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        let logo = document.getElementById('main_logo');
        
        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 60) {
                jQuery('.header_fixer').addClass("sticky");
                logo.src = logo.src.replace(/Logo.png/i, 'Logo_black.png');
            } else {
                jQuery('.header_fixer').removeClass("sticky");
                logo.src = logo.src.replace(/Logo_black.png/i, 'Logo.png');
            }
        })
    </script>
    <style>
        .header_fixer.sticky span {
            background: #000000;
        }
    </style>
<?php 
    get_footer();
?>