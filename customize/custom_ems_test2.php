<?php

add_action('customize_register', 'ems_test2');

function ems_test2($wp_customize) {
    $wp_customize -> add_section('ems-test2', array(
        'title' => 'Тест2'
    ));

    $wp_customize -> add_setting('ems-test2-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test2-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-test2',
        'settings' => 'ems-test2-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    $wp_customize -> add_setting('ems-test2-title', array(
        'default' => '<span class="colored">Получите небольшой подарок,</span>
            <br> ответив всего на 5 вопросов'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test2-title-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-test2',
        'settings' => 'ems-test2-title',
        'type' => 'textarea'
    )));

    $wp_customize -> add_setting('ems-test2-button', array(
        'default' => 'Получить!'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test2-button-control', array(
        'label' => 'Ссылка на тест',
        'section' => 'ems-test2',
        'settings' => 'ems-test2-button',
    )));

    $wp_customize -> add_setting('ems-test2-button-link', array(
        'default' => 'https://docs.google.com/forms/d/e/1FAIpQLSd3_xW3k3gfkGRD1TmFHjcuYjivi30AVkHReOXy-C6G3fnfCQ/viewform'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test2-button-link-control', array(
        'section' => 'ems-test2',
        'settings' => 'ems-test2-button-link',
    )));

    $wp_customize -> add_setting('ems-test2-background'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-test2-background-control', array(
        'label' => 'Фон',
        'section' => 'ems-test2',
        'settings' => 'ems-test2-background',
        'width' => 1920,
        'heigth' => 1080
    ))); 
}