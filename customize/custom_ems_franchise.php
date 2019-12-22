<?php

add_action('customize_register', 'ems_franchise');

function ems_franchise($wp_customize) {
    $wp_customize -> add_section('ems-franchise', array(
        'title' => 'Франшиза'
    ));

    $wp_customize -> add_setting('ems-franchise-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-franchise-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-franchise',
        'settings' => 'ems-franchise-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    franchise_image($wp_customize, 1);
    franchise_image($wp_customize, 2);
    franchise_image($wp_customize, 3);
    franchise_text(
        $wp_customize, 
        'title', 
        'Заголовок', 
        'Инновационный смарт-бизнес <br>
        в формате франшизы с доходом <br>
        <span class="colored">от 3 000 000 тг.</span> в месяц'
    );
    franchise_text(
        $wp_customize, 
        'subtitle', 
        'Подзаголовок', 
        'Мы осуществляем поддержку на всех этапах открытия Вашей студии!'
    );
    franchise_text(
        $wp_customize, 
        'video', 
        'Видео', 
        'Посмотреть видео'
    ); 
    franchise_text(
        $wp_customize, 
        'video-link', 
        '', 
        'https://www.youtube.com/playlist?list=PLrqF-Tbp98X37Qhj8xcjnYWwB5WRXVkqL'
    );

    franchise_text(
        $wp_customize, 
        'button', 
        'Кнопка', 
        'Заказать консультацию'
    ); 

    franchise_text(
        $wp_customize, 
        'text1', 
        'Текст 1', 
        'От 40 м2'
    ); 
    franchise_text(
        $wp_customize, 
        'text1-sub', 
        '', 
        'Необходимо для открытия студии'
    ); 
    franchise_text(
        $wp_customize, 
        'text2', 
        'Текст 2', 
        'От 2-3 месяцев'
    ); 
    franchise_text(
        $wp_customize, 
        'text2-sub', 
        '', 
        'Выход на окупаемость бизнеса'
    ); 
    franchise_text(
        $wp_customize, 
        'text3', 
        'Текст 3', 
        '0%'
    ); 
    franchise_text(
        $wp_customize, 
        'text3-sub', 
        '', 
        'Роялти отсутствует'
    ); 
}


function franchise_image($wp_customize, $number) {
    $wp_customize -> add_setting("ems-franchise-image$number"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-franchise-image$number-control", array(
        'label' => "Фото $number",
        'section' => 'ems-franchise',
        'settings' => "ems-franchise-image$number",
        'width' => 1920,
        'heigth' => 1080
    )));
}

function franchise_text($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-franchise-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-franchise-$type-control", array(
        'label' => "$label",
        'section' => 'ems-franchise',
        'settings' => "ems-franchise-$type",
    )));
}