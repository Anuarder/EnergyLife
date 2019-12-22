<?php

add_action('customize_register', 'ems_header');

function ems_header($wp_customize) {
    $wp_customize -> add_section('ems-header', array(
        'title' => 'Шапка'
    ));

    $wp_customize -> add_setting('ems-header-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-header-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-header',
        'settings' => 'ems-header-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    header_slide_image($wp_customize, 1);

    header_text(
        $wp_customize, 
        'slider1-title', 
        'Слайдер 1', 
        'ЕMS - тренировки
        <br>
        <span class="colored">
            20 МИНУТ В НЕДЕЛЮ!
        </span>'
    );

    header_text(
        $wp_customize, 
        'slider1-subtitle', 
        '', 
        'Результат чувствуется после первой тренировки
        и становится заметен уже на пятом занятии!'
    );

    header_text(
        $wp_customize, 
        'slider1-list-title', 
        '', 
        'EMS студии Energy Life – это:'
    );

    header_text(
        $wp_customize, 
        'slider1-list1', 
        '', 
        '- Европейский стандарт технологии тренировок/Германия'
    );
    header_text(
        $wp_customize, 
        'slider1-list2', 
        '', 
        '- Персональные занятия с квалифицированным тренером'
    );
    header_text(
        $wp_customize, 
        'slider1-list3', 
        '', 
        '- Уникальный сервис - форма и аксессуары предоставляются в студии'
    ); 
    header_text(
        $wp_customize, 
        'slider1-list4', 
        '', 
        '- После каждой тренировки проводится массаж'
    );

    header_slide_image($wp_customize, 2);

    header_text(
        $wp_customize, 
        'slider2-title', 
        'Слайдер 2', 
        'Рассрочка'
    );

    header_text(
        $wp_customize, 
        'slider2-subtitle', 
        '', 
        'На абонементы 3, 6 и 12 месяцев'
    );

    header_text(
        $wp_customize, 
        'slider2-list-title', 
        '', 
        'Занимайся больше, плати меньше!'
    );

    header_text(
        $wp_customize, 
        'slider2-list1', 
        '', 
        '- без %'
    );
    header_text(
        $wp_customize, 
        'slider2-list2', 
        '', 
        '- без переплат'
    );
}

function header_slide_image($wp_customize, $number) {
    $wp_customize -> add_setting("ems-header-image$number"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-header-image$number-control", array(
        'label' => "Фото $number",
        'section' => 'ems-header',
        'settings' => "ems-header-image$number",
        'width' => 1920,
        'heigth' => 1080
    )));
}

function header_text($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-header-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-header-$type-control", array(
        'label' => "$label",
        'section' => 'ems-header',
        'settings' => "ems-header-$type",
    )));
}