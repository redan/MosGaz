<?php 
/*
Template name: Наши работы
*/
?>
<?php 
    get_header();
?>
<section class="works">
        <div class="wrapper">
            <div class="works_title_page">
                <h3 class="topline">
                    Наши работы
                </h3>
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
<?php 
    get_footer();
?>