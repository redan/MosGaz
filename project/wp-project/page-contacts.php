<?php 
/*
Template name: Контакты
*/
?>
<?php 
    get_header();
?>
    <section class="contacts">
        <div class="wrapper">
            <div class="contacts_title topline">
                <h3>Наши контакты</h3>
            </div>
            <div class="contacts_compan_name">
                ООО “МосГазОтопление”
            </div>
            <div class="contacts_info d-flex">
                <div class="contacts_info_address">
                    <p class="adress_title"><img src="<?php echo bloginfo('template_url');?>/assets/img/icons/location.png" alt="location" class="icon_img"><b>123456, г. Москва</b></p>
                    <p><?= CFS()->get('adress'); ?></p>
                    <div class="e-mail_link">
                        <a href="mailto:<?= CFS()->get('e_mail'); ?>"><?= CFS()->get('e_mail');?></a>
                    </div>
                </div>
                <div class="contacts_info_phones">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/phone.png" alt="phone" class="icon_img">
                    <a href="tel:<?= CFS()->get('tel_number_1'); ?>"><?= CFS()->get('tel_number_1'); ?></a>
                    <a href="tel:<?= CFS()->get('tel_number_2'); ?>"><?= CFS()->get('tel_number_2'); ?></a>
                    <a href="#contact_modal" rel="modal:open"  class="color_link">обратный звонок</a>
                </div>
                <div class="contacts_info_shedule">
                    <p>
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/time.png" alt="time" class="icon_img">
                        Работаем ежедневно с <b><?= CFS()->get('work_time'); ?></b><br> Воскресенье - выходной
                    </p>
                    <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/social/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/social/youtube.png" alt="youtube"></a>
                </div>
            </div>
        </div>
    </section>
<?php 
    get_footer();
?>