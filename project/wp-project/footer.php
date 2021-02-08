<footer class="footer">
        <div class="wrapper">
            <div class="d-flex aline-base justify-sb">
                <div class="footer_logo">
                    <div class="logo">
                        <?php the_custom_logo() ?>
                        <!-- <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/Logo_black.png" alt="logo"></a> -->
                    </div>
                    <div class="rights topline">
                        <p>© 2021. All rights reserved. </p>
                    </div>
                </div>
                <div class="tels footer_tels">
                    <a href="tel:<?= CFS()->get('tel_number_1'); ?>"><?= CFS()->get('tel_number_1'); ?></a>
                    <a href="tel:<?= CFS()->get('tel_number_2'); ?>"><?= CFS()->get('tel_number_2'); ?></a>
                    <a href="#" class="color_link">обратный звонок</a>
                </div>
                <div class="adress">
                    <p class="adress_title"><b>123456, г. Москва</b></p>
                    <p><?= CFS()->get('adress'); ?></p>
                    <a href="mailto:<?= CFS()->get('e_mail'); ?>"><?= CFS()->get('e_mail'); ?></a>
                </div>
                <div class="schedule">
                    <p>
                        Работаем ежедневно с <b><?= CFS()->get('work_time'); ?></b><br> Воскресенье - выходной
                    </p>
                    <a href="<?= CFS()->get('instagram_link'); ?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/social/instagram.png" alt="instagram"></a>
                    <a href="<?= CFS()->get('youtube_link'); ?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/social/youtube.png" alt="youtube"></a>
                </div>
            </div>
        </div>
    </footer>
    <?php 
                    $posts = get_posts( array(
                        'numberposts' => 0,
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
                            <div id="ex<?= $int ?>" class="modal">
                                <div class="modal_inner d-flex">
                                    <div class="modal_inner_text">
                                        <div class="modal_inner_text_title">
                                            <p><b>
                                                <?= the_title(  ) ?>
                                            </b></p>
                                        </div>
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
                                        <div class="modal_inner_text_mainText">
                                            <p>
                                                <?php the_field('works_sub_title') ?> 
                                                <br><br>
                                                Объект: <b><?php the_field('works_object_description') ?></b>
                                                <br><br>
                                                <div class="blue"><b><?php the_field('works_title_blue_1') ?></b></div>
                                                <br><br>
                                                <?php the_field('works_text_under_1') ?>
                                                <br><br>
                                                <div class="blue"><b><?php the_field('works_title_blue_2') ?> </b></div>
                                                <br><br>
                                                <?php the_field('works_text_under_2') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal_inner_pics">
                                        <div class="modal_inner_pic">
                                            <img id="modal_main_photo" src="<?= CFS()->get( 'works_foto_prev' );?>" alt="main_img">
                                        </div>
                                        <div class="modal_inner_pics_min d-flex">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/modern-heater.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/kotelnya.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/Layer 38.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/Layer.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_form d-flex">
                                    <div class="modal_form_text">
                                        <div class="modal_form_text_title">
                                            Закажи расчет прямо сейчас <div class="golden">бесплатно</div>
                                        </div>
                                        <p class="topline">
                                            Заполните форму и получите приблизительный <br> расчет стоимости отопления в вашем доме.
                                        </p>
                                    </div>
                                    <div class="modal_form_inputs">
                                        <input type="text" placeholder="Ваше имя">
                                        <input type="text" placeholder="Телефон*">
                                    </div>
                                    <div class="modal_form_submit">
                                        <button class="yellow_on_blue">Отправить</button>
                                        <p>*Поля, отмеченные звездочкой, <br> обязательны к заполнению.</p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    
                    wp_reset_postdata(); // сброс
                ?>
    <!-- <div id="ex1" class="modal">
        <div class="modal_inner d-flex">
            <div class="modal_inner_text">
                <div class="modal_inner_text_title">
                    <p><b>
                        Монтаж системы отопления, теплого пола, 
                        установка котла и бойлера в загородном доме
                    </b></p>
                </div>
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
                        <p class="bold">14 дней</p>
                        <p class="bold">120 м<sup>2</sup></p>
                        <p class="bold blue">165 000 руб.</p>
                    </div>
                </div>
                <div class="modal_inner_text_mainText">
                    <p>
                        Наша компания выполнила реконструкцию системы системы отопления в каменном доме. Общая отапливаемая площадь 450 м² . 
                        <br><br>
                        Объект: <b>Коттедж, отапливаемая площадь 120 м² . Московская обл., Талдомский район, д. Амундсово</b>
                        <br><br>
                        <div class="blue"><b>Реконструкция системы отопления дома:</b></div>
                        <br><br>
                        Заменена полность вся разводка труб. Изначально трубы были из стали и прокладка была внутри стен. Наша команда произвела разводку труб из меди производство Германия, заменили все радитаоры отопления (в количестве 44 шутк). В согласии с хозяином дома выбрали бренд Kermi  (Германия).
                        <br><br>
                        <div class="blue"><b>Реконструкция котельной дома: </b></div>
                        <br><br>
                        Произведён демонтаж всех узлов в котельной кроме отопительного котла. Котел остался, т.к. работал исправно уже 10 лет. (чугунный котел Buderus Logano G234-60). 
                        <br><br>
                        Нами был установлен бойлер для нагрева воды из нержавеющей стали ACV SLEW 240 (Бельгия). Смонтирован распределительный коллектор со смесительными группами Hansa (Германия), Все отопительные контуры в пределах котельной выплнены из меди (Германия). Весь трубопровод по водоснабжению выполнен из полипропилена (Турция). А так же были заменены расширительные баки на отопление и водоснабжение. 
                    </p>
                </div>
            </div>
            <div class="modal_inner_pics">
                <div class="modal_inner_pic">
                    <img id="modal_main_photo" src="<?php echo bloginfo('template_url'); ?>/assets/img/works/modern-heater.jpeg" alt="modern_heater">
                </div>
                <div class="modal_inner_pics_min d-flex">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/modern-heater.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/kotelnya.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/Layer 38.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/works/Layer.jpeg" alt="modern_heater" onclick="ChangePhoto(event)">
                </div>
            </div>
        </div>
        <div class="modal_form d-flex">
            <div class="modal_form_text">
                <div class="modal_form_text_title">
                    Закажи расчет прямо сейчас <div class="golden">бесплатно</div>
                </div>
                <p class="topline">
                    Заполните форму и получите приблизительный <br> расчет стоимости отопления в вашем доме.
                </p>
            </div>
            <div class="modal_form_inputs">
                <input type="text" placeholder="Ваше имя">
                <input type="text" placeholder="Телефон*">
            </div>
            <div class="modal_form_submit">
                <button class="yellow_on_blue">Отправить</button>
                <p>*Поля, отмеченные звездочкой, <br> обязательны к заполнению.</p>
            </div>
        </div>
    </div> -->
    <!-- <script type="text/javascript" src="libs\jquery\jquery351_min.js"></script> -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!-- <script type="text/javascript" src="js/scripts.js" defer></script> -->
    <?php 
        wp_footer();
    ?>
</body>
</html>