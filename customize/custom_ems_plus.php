<?php

add_action('customize_register', 'ems_plus');

function ems_plus($wp_customize) {
    $wp_customize -> add_section('ems-plus', array(
        'title' => 'Плюсы'
    ));

    $wp_customize -> add_setting('ems-plus-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    plus_images($wp_customize);
    plus_item1($wp_customize);
    plus_item2($wp_customize);
    plus_item3($wp_customize);
    plus_item4($wp_customize);
    plus_item5($wp_customize);
    plus_item6($wp_customize);
    plus_title($wp_customize);
    plus_text(
        $wp_customize, 
        'Предлагаем <b>лучшее соотношение</b> стоимости
        абонементов, <b>результата и персонализации</b> на рынке
        EMS в РК', 
        1
    );
    plus_text(
        $wp_customize, 
        'Проводим <b>ежегодное обучение</b> ТОП-менеджмента и
        тренерского состава Energy Life в Германии', 
        2
    );
    plus_text(
        $wp_customize, 
        'Мы работаем на оборудовании от мирового лидера
        рынка EMS - <b>MIHA BODYTECH (Германия)</b>', 
        3
    );
    plus_text(
        $wp_customize, 
        'Energy Life - <b>единственная сеть EMS</b> - студий в РК
        обладающая сертификатов <b> международного образца </b>,
        выданного в Германии разработчиками технологии и оборудования', 
        4
    );
    plus_button($wp_customize);
}

function plus_item1($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item1', array(
        'default' => 'Тонус и рельеф мышц'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item1-control', array(
        'label' => 'Плюсы',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item1',
    )));
}

function plus_item2($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item2', array(
        'default' => 'Антивозрастной эффект'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item2-control', array(
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item2',
    )));
}

function plus_item3($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item3', array(
        'default' => 'Уменьшение целлюлита'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item3-control', array(
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item3',
    )));
}

function plus_item4($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item4', array(
        'default' => 'Уменьшение боли в спине'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item4-control', array(
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item4',
    )));
}

function plus_item5($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item5', array(
        'default' => 'Жиросжигание'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item5-control', array(
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item5',
    )));
}

function plus_item6($wp_customize) {
    $wp_customize -> add_setting('ems-plus-item6', array(
        'default' => 'Укрепление поясничного отдела'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-item6-control', array(
        'section' => 'ems-plus',
        'settings' => 'ems-plus-item6',
    )));
}

function plus_images($wp_customize) {
    $wp_customize -> add_setting('ems-plus-girl'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-plus-girl-control', array(
        'label' => 'Картинка',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-girl',
        'width' => 550,
        'heigth' => 670
    )));

    $wp_customize -> add_setting('ems-plus-girl-opacity'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-plus-girl-opacity-control', array(
        'label' => 'Картинка мобильная',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-girl-opacity',
        'width' => 1920,
        'heigth' => 1080
    )));
}

function plus_title($wp_customize) {
    $wp_customize -> add_setting('ems-plus-title', array(
        'default' => '<span class="colored">Плюсы</span> наших тренировок '
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-title-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-title',
    )));
}

function plus_button($wp_customize) {
    $wp_customize -> add_setting('ems-plus-button', array(
        'default' => 'Заказать звонок'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-plus-button-control', array(
        'label' => 'Кнопка',
        'section' => 'ems-plus',
        'settings' => 'ems-plus-button',
    )));
}

function plus_text($wp_customize, $text, $number) {
    $wp_customize -> add_setting("ems-plus-text$number", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-plus-text$number-control", array(
        'label' => "Текст$number",
        'section' => 'ems-plus',
        'settings' => "ems-plus-text$number",
        'type' => 'textarea'
    )));

    $wp_customize -> add_setting("ems-plus-text$number-image"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-plus-text$number-image-control", array(
        'label' => "Картинка для текст$number",
        'section' => 'ems-plus',
        'settings' => "ems-plus-text$number-image"
    )));
}