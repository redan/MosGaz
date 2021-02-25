<?php 
/*
Template name: Наши цены
*/
?>
<?php 
    get_header();
?>
    <section class="prices_page">
        <div class="wrapper">
            <h3 class="topline prices_page_title">
                Наши цены
            </h3>
            <div class="prices_flex d-flex">
                <div class="prices_tables">
                    <div class="prices_main_info_table">
                        <h4>Стоимость монтажа отопления</h3>
                        <table class="services_page_table">
                            <thead>
                                <tr>
                                    <th>Наименование работ</th>
                                    <th>Ед.изм.</th>
                                    <th>Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Монтаж радиатора отопления (навес на стену)</td>
                                    <td>шт.</td>
                                    <td><b>1950 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж нестандартных радиаторов: чугунные, Дизайн-радиаторы</td>
                                    <td>шт.</td>
                                    <td><b>от 3000 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж внутрипольного конвектора отопления</td>
                                    <td>шт.</td>
                                    <td><b>2950 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж распределительного коллектора отопления <br> (включая подключение трубопроводов, установку запорной арматуры)</td>
                                    <td>шт.</td>
                                    <td><b>5000 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж труб системы отопления (металлопластик, сшитый полиэтилен) до Ø16-20 мм</td>
                                    <td>м</td>
                                    <td><b>85 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж труб системы отопления (металлопластик, сшитый полиэтилен) Ø25-32 мм</td>
                                    <td>м</td>
                                    <td><b>255 руб.</b></td>
                                </tr>
                                <tr>
                                    <td>Монтаж внутрипольного конвектора отопления</td>
                                    <td>шт.</td>
                                    <td><b>2950 руб.</b></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="yellow">Заказать расчет</button>
                    </div>
                </div>
                <div class="prices_plans">
                    <div class="prices_title">
                        <p class="prices_title_text">Выберете прлощадь:</p>
                        <div class="prices_title_area d-flex">
                            <button class="area_button tablinks active" onclick="openTab(event, '100', 'to100')" id="defaultOpen">100 м<sup>2</sup></button>
                            <button class="area_button tablinks" onclick="openTab(event, '200', 'to200')">200 м<sup>2</sup></button>
                            <button class="area_button tablinks" onclick="openTab(event, '300', 'to300')">300 м<sup>2</sup></button>
                        </div>
                        <p class="prices_title_text_min tabdescriptor" id="to100">* В расчетах заложено отопление площадью до <b>100 м<sup>2</sup></b></p>
                        <p class="prices_title_text_min tabdescriptor" id="to200">* В расчетах заложено отопление площадью до <b>200 м<sup>2</sup></b></p>
                        <p class="prices_title_text_min tabdescriptor" id="to300">* В расчетах заложено отопление площадью до <b>300 м<sup>2</sup></b></p>
                    </div>
                    <div class="wrapper topline_white">
                        <div class="prices_plans_item d-flex tabcontent" id="100">
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
                        <div class="prices_plans_item d-flex tabcontent" id="200">
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
                        <div class="prices_plans_item d-flex tabcontent" id="300">
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
                </div>
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>