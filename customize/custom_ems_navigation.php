<?php

add_action('customize_register', 'ems_navigation');

function ems_navigation($wp_customize) {
    $wp_customize -> add_section('ems-navigation', array(
        'title' => 'Навигация'
    ));

    $wp_customize -> add_setting('ems-navigation-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-navigation-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-navigation',
        'settings' => 'ems-navigation-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    navigation_image($wp_customize);
    navigation_text(
        $wp_customize, 
        'link1', 
        'Ссылки', 
        'Главная'
    );
    navigation_text(
        $wp_customize, 
        'link2', 
        '', 
        'О нас'
    );
    navigation_text(
        $wp_customize, 
        'link3', 
        '', 
        'Абонементы'
    );
    navigation_text(
        $wp_customize, 
        'link4', 
        '', 
        'Франшиза'
    );
    navigation_text(
        $wp_customize, 
        'link5', 
        '', 
        'Отзывы'
    );
    navigation_text(
        $wp_customize, 
        'link6', 
        '', 
        'Контакты'
    );
    navigation_text(
        $wp_customize, 
        'phone', 
        'Телефон', 
        '+7 (775) 232 44 88'
    );
}


function navigation_image($wp_customize) {
    $wp_customize -> add_setting("ems-navigation-image"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-navigation-image-control", array(
        'label' => "Логотип",
        'section' => 'ems-navigation',
        'settings' => "ems-navigation-image",
        'width' => 1920,
        'heigth' => 1080
    )));
}

function navigation_text($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-navigation-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-navigation-$type-control", array(
        'label' => "$label",
        'section' => 'ems-navigation',
        'settings' => "ems-navigation-$type",
    )));
}