<?php

add_action('customize_register', 'ems_food');

function ems_food($wp_customize) {
    $wp_customize -> add_section('ems-food', array(
        'title' => 'Питание'
    ));

    $wp_customize -> add_setting('ems-food-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-food-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-food',
        'settings' => 'ems-food-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    food_image($wp_customize);
    food_text(
        $wp_customize, 
        'title', 
        'Заголовок', 
        'О коуче <span class="colored">по питанию</span>'
    );
    food_text(
        $wp_customize, 
        'subtitle', 
        'Подзаголовок', 
        'Сертифицированный тренер по питанию'
    );
    food_text(
        $wp_customize, 
        'name', 
        'Имя', 
        'Юлия Халикова'
    );
    food_text(
        $wp_customize, 
        'list1', 
        'Элемент 1', 
        '<b>1.</b>Единственный в РК специалист, сертифицированный коуч PN1 Канадской школы
        Precision Nutrition'
    );
    food_text(
        $wp_customize, 
        'list2', 
        'Элемент 2', 
        '<b>2.</b>Сертифицированный Health Coach Института Интегративного питания, Нью Йорк'
    );
    food_text(
        $wp_customize, 
        'list3', 
        'Элемент 3', 
        '<b>3.</b>Для клиентов студии Energy Life действует эксклюзивная скидка на услуги'
    );
    food_text(
        $wp_customize, 
        'price1-stripped', 
        'Цена 1 (зачеркнутая)', 
        '20 000 ТГ'
    );
    food_text(
        $wp_customize, 
        'price1', 
        'Цена 1', 
        '10 000 ТГ'
    );
    food_text(
        $wp_customize, 
        'price1-text', 
        'Цена 1 (текст)', 
        'Индивидуальная <br>
        консультация по питанию'
    );
    food_text(
        $wp_customize, 
        'button', 
        'Кнопка', 
        'Приобрести'
    );
    food_text(
        $wp_customize, 
        'price2-stripped', 
        'Цена 2 (зачеркнутая)', 
        '80 000 ТГ'
    );
    food_text(
        $wp_customize, 
        'price2', 
        'Цена 2', 
        '60 000 ТГ'
    );
    food_text(
        $wp_customize, 
        'price2-text', 
        'Цена 2 (текст)', 
        'Индивидуальная
        консультация <br>
        8 недель сопровождения'
    );
}

function food_image($wp_customize) {
    $wp_customize -> add_setting("ems-food-image"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-food-image-control", array(
        'label' => "Фото",
        'section' => 'ems-food',
        'settings' => "ems-food-image",
        'width' => 1920,
        'heigth' => 1080
    )));
}

function food_text($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-food-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-food-$type-control", array(
        'label' => "$label",
        'section' => 'ems-food',
        'settings' => "ems-food-$type",
    )));
}