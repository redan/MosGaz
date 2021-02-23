<?php 
/*
Template name: Услуги
*/
?>
<?php 
    get_header();
?>
    <section class="services_page">
        <div class="services_title wrapper d-flex">
            <div class="services_title_sidebar">
                <h3 class="topline">Наши услуги</h3>
            </div>
            <div class="services_title_main d-flex">
                <h3 id="services-page_main_title"> <?= CFS()->get('heat_name')  ?> </h3>
                <a class="link_btn yellow_on_white" href="#contact_modal" rel="modal:open">Заказать расчет</a>
            </div>
        </div>
        <div class="services_main wrapper d-flex">
            <div class="services_main_sidebar">
                <?php $heat_loop = CFS()->get('heat_mount'); ?>
                <div class="services_sidebar_item active" data-type="heat" onclick="changeTab(event, 'heat', 0)">
                    <?php foreach ($heat_loop as $key => $loop) { ?>
                    <?php if($key == 0){ ?>
                        <?= $loop['sub_title_heat']; ?>
                    <?php }} ?>
                </div>
                <div class="services_sidebar_item_list open" data-type="heat">
                    <?php foreach ($heat_loop as $key => $loop) { ?>
                    <?php if($key !== 0){ ?>
                    <div class="sidebar_list_span" data-type="heat" onclick="changeTab(event, 'heat' , '<?= $key ?>')">
                        <?= $loop['sub_title_heat']; ?>
                    </div>
                    <?php }} ?>
                </div>
                
                <?php $water_loop = CFS()->get('water'); ?>
                <div class="services_sidebar_item" data-type="water" onclick="changeTab(event, 'water', 0)">
                    <?php foreach ($water_loop as $key => $loop) { ?>
                    <?php if($key == 0){ ?>
                        <?= $loop['sub_title_water']; ?>
                    <?php }} ?>
                </div>
                <div class="services_sidebar_item_list" data-type="water">
                    <?php foreach ($water_loop as $key => $loop) { ?>
                    <?php if($key !== 0){ ?>
                    <div class="sidebar_list_span" data-type="water" onclick="changeTab(event, 'water' , '<?= $key ?>')">
                        <?= $loop['sub_title_water']; ?>
                    </div>
                    <?php }} ?>
                </div>

                <?php $plumb_loop = CFS()->get('plumb'); ?>
                <div class="services_sidebar_item" data-type="plumb" onclick="changeTab(event, 'plumb' , 0)">
                    <?php foreach ($plumb_loop as $key => $loop) { ?>
                    <?php if($key == 0){ ?>
                        <?= $loop['sub_title_plumb']; ?>
                    <?php }} ?>
                </div>
                <div class="services_sidebar_item_list" data-type="plumb">
                    <?php foreach ($plumb_loop as $key => $loop) { ?>
                    <?php if($key !== 0){ ?>
                    <div class="sidebar_list_span" data-type="plumb" onclick="changeTab(event, 'plumb' ,'<?= $key ?>')">
                        <?= $loop['sub_title_plumb']; ?>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <?php foreach ($heat_loop as $key => $loop) { ?>
                <div class="services_main_info <?php if($key == 0)echo 'active'?>" data-type='heat' data-index='<?= $key ?>'>
                    <div class="services_main_info_first d-flex">
                        <div class="services_main_info_first_text">
                            <p>
                                <?= $loop['heat_first_article'] ?>
                                <div class="services_spacer"><b><?= CFS()->get('heat_name'); ?> включает в себя следующие пункты:</b></div>
                            </p>
                            <?php foreach ($heat_loop as $innerKey => $innerLoop) { ?>
                                <?php if($innerKey !== 0){ ?>
                                <div class="in_text_link" data-heat-index="<?= $innerKey ?>" onclick="changeTab(event, 'heat' , '<?= $innerKey ?>')">
                                    <?= $innerLoop['sub_title_heat']; ?>
                                </div>
                            <?php }} ?>
                        </div>
                            <img src="<?= $loop['heat_mount_img'] ?>" alt="floor">
                    </div>
                    <div class="services_main_info_second">
                        <b><?= $loop['sub_title_heat'] ?> под ключ</b>
                        <br><br>
                        <?= $loop['heat_main_text'] ?>
                    </div>
                    <div class="services_main_info_table">
                        <h4><?= $loop['heat_table_title'] ?></h3>
                        <table class="services_page_table">
                            <thead>
                                <tr>
                                    <th>Наименование работ</th>
                                    <th>Ед.изм.</th>
                                    <th>Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tableLoop = $loop['heat_table_loop'] ?>
                                <?php foreach ($tableLoop as $rowTd) { ?>
                                    <tr>
                                        <td><?= $rowTd['heat_table_item_name'] ?></td>
                                        <td><?= $rowTd['heat_table_unit'] ?></td>
                                        <td><b><?= $rowTd['heat_table_price'] ?></b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a class="link_btn yellow_on_white" href="#contact_modal" rel="modal:open">Заказать расчет</a>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($water_loop as $key => $loop) { ?>
                <div class="services_main_info" data-type='water' data-index='<?= $key ?>'>
                    <div class="services_main_info_first d-flex">
                        <div class="services_main_info_first_text">
                            <p>
                                <?= $loop['heat_first_article'] ?>
                                <div class="services_spacer"><b><?= CFS()->get('water_name'); ?> включает в себя следующие пункты:</b></div>
                            </p>
                            <?php foreach ($water_loop as $innerKey => $innerLoop) { ?>
                                <?php if($innerKey !== 0){ ?>
                                <div class="in_text_link" data-water-index="<?= $innerKey ?>" onclick="changeTab(event, 'water' , '<?= $innerKey ?>')">
                                    <?= $innerLoop['sub_title_water']; ?>
                                </div>
                            <?php }} ?>
                        </div>
                            <img src="<?= $loop['water_mount_img'] ?>" alt="floor">
                    </div>
                    <div class="services_main_info_second">
                        <b><?= $loop['sub_title_water'] ?> под ключ</b>
                        <br><br>
                        <?= $loop['water_main_text'] ?>
                    </div>
                    <div class="services_main_info_table">
                        <h4><?= $loop['water_table_title'] ?></h3>
                        <table class="services_page_table">
                            <thead>
                                <tr>
                                    <th>Наименование работ</th>
                                    <th>Ед.изм.</th>
                                    <th>Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tableLoop = $loop['water_table_loop'] ?>
                                <?php foreach ($tableLoop as $rowTd) { ?>
                                    <tr>
                                        <td><?= $rowTd['water_table_item_name'] ?></td>
                                        <td><?= $rowTd['water_table_unit'] ?></td>
                                        <td><b><?= $rowTd['water_table_price'] ?></b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a class="link_btn yellow_on_white" href="#contact_modal" rel="modal:open">Заказать расчет</a>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($plumb_loop as $key => $loop) { ?>
                <div class="services_main_info" data-type='plumb' data-index='<?= $key ?>'>
                    <div class="services_main_info_first d-flex">
                        <div class="services_main_info_first_text">
                            <p>
                                <?= $loop['plumb_first_article'] ?>
                                <div class="services_spacer"><b><?= CFS()->get('plumb_name'); ?> включает в себя следующие пункты:</b></div>
                            </p>
                            <?php foreach ($plumb_loop as $innerKey => $innerLoop) { ?>
                                <?php if($innerKey !== 0){ ?>
                                <div class="in_text_link" data-plumb-index="<?= $innerKey ?>" onclick="changeTab(event, 'plumb' , '<?= $innerKey ?>')">
                                    <?= $innerLoop['sub_title_plumb']; ?>
                                </div>
                            <?php }} ?>
                        </div>
                            <img src="<?= $loop['plumb_mount_img'] ?>" alt="floor">
                    </div>
                    <div class="services_main_info_second">
                        <b><?= $loop['sub_title_plumb'] ?> под ключ</b>
                        <br><br>
                        <?= $loop['plumb_main_text'] ?>
                    </div>
                    <div class="services_main_info_table">
                        <h4><?= $loop['plumb_table_title'] ?></h3>
                        <table class="services_page_table">
                            <thead>
                                <tr>
                                    <th>Наименование работ</th>
                                    <th>Ед.изм.</th>
                                    <th>Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tableLoop = $loop['plumb_table_loop'] ?>
                                <?php foreach ($tableLoop as $rowTd) { ?>
                                    <tr>
                                        <td><?= $rowTd['plumb_table_item_name'] ?></td>
                                        <td><?= $rowTd['plumb_table_unit'] ?></td>
                                        <td><b><?= $rowTd['plumb_table_price'] ?></b></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a class="link_btn yellow_on_white" href="#contact_modal" rel="modal:open">Заказать расчет</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php 
    get_footer();
?>