<?php

add_action('customize_register', 'ems_types');

function ems_types($wp_customize) {
    $wp_customize -> add_section('ems-types', array(
        'title' => 'Абонементы'
    ));

    $wp_customize -> add_setting('ems-types-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-types-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-types',
        'settings' => 'ems-types-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    types_title(
        $wp_customize,
        'title',
        'Заголовок',
        'Виды <span class="colored">абонементов</span>'
    );
    types_title(
        $wp_customize,
        'subtitle',
        'Подзаголовок',
        'У нас есть тариф подходящий именно для вас! <br>
        <b>+5 минутный сеанс массажа всего тела на тренажере MIHA BODYTEC в подарок!</b>'
    );
    
    types_title(
        $wp_customize,
        'button',
        'Кнопка',
        'Приобрести'
    );
    types_item(
        $wp_customize,
        1,
        '1 мес.',
        'За 1 тренировку/5 500тг',
        '4 тренировки',
        'Заморозка 8 дней'
    );
    types_item(
        $wp_customize,
        2,
        'INTENSIVE',
        'За 1 тренировку/5 000 тг',
        '8 тренировок',
        'Заморозка 8 дней'
    );
    types_item(
        $wp_customize,
        3,
        '3 мес.',
        'За 1 тренировку/5 000 тг',
        '12 тренировок',
        'Заморозка 15 дней'
    );
    types_item(
        $wp_customize,
        4,
        '6 мес.',
        'За 1 тренировку/4 500 тг',
        '24 тренировки',
        'Заморозка 20 дней'
    );
    types_item(
        $wp_customize,
        5,
        '12 мес.',
        'За 1 тренировку/4 167 тг',
        '48 тренировок',
        'Заморозка 30 дней'
    );
    types_price(
        $wp_customize, 
        1, 
        'Пробная тренировка', 
        '2 000 тг'
    );
    types_price(
        $wp_customize, 
        2, 
        'Разовое посещение', 
        '7 000 тг'
    );
    types_price(
        $wp_customize, 
        3, 
        'Прокат костюма', 
        '2 000 тг'
    );
    types_price(
        $wp_customize, 
        4, 
        'Носочки', 
        '500 тг'
    );
    
}

function types_title($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-types-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-$type-control", array(
        'label' => "$label",
        'section' => 'ems-types',
        'settings' => "ems-types-$type",
    )));
}

function types_price($wp_customize, $number, $text, $price) {
    $wp_customize -> add_setting("ems-types-price$number-text", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-price$number-text-control", array(
        'label' => "Цена $number",
        'section' => 'ems-types',
        'settings' => "ems-types-price$number-text",
    )));
    $wp_customize -> add_setting("ems-types-price$number-price", array(
        'default' => "$price"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-price$number-price-control", array(
        'section' => 'ems-types',
        'settings' => "ems-types-price$number-price",
    )));
}

function types_item($wp_customize, $number, $title, $subtitle, $list1, $list2) {
    $wp_customize -> add_setting("ems-types-item$number-title", array(
        'default' => "$title"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-item$number-title-control", array(
        'label' => "Карточка $number",
        'section' => 'ems-types',
        'settings' => "ems-types-item$number-title",
    )));


    $wp_customize -> add_setting("ems-types-item$number-subtitle", array(
        'default' => "$subtitle"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-item$number-subtitle-control", array(
        'section' => 'ems-types',
        'settings' => "ems-types-item$number-subtitle",
    )));

    $wp_customize -> add_setting("ems-types-item$number-list1", array(
        'default' => "$list1"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-item$number-list1-control", array(
        'section' => 'ems-types',
        'settings' => "ems-types-item$number-list1",
    )));

    $wp_customize -> add_setting("ems-types-item$number-list2", array(
        'default' => "$list2"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-types-item$number-list2-control", array(
        'section' => 'ems-types',
        'settings' => "ems-types-item$number-list2",
    )));
}