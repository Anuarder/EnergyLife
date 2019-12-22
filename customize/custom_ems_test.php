<?php

add_action('customize_register', 'ems_test');

function ems_test($wp_customize) {
    $wp_customize -> add_section('ems-test', array(
        'title' => 'Тест1'
    ));

    $wp_customize -> add_setting('ems-test-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-test',
        'settings' => 'ems-test-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    $wp_customize -> add_setting('ems-test-title', array(
        'default' => 'Узнайте подходят ли Вам <br>
            <span class="colored">ЕМС тренировки?</span>'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test-title-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-test',
        'settings' => 'ems-test-title',
        'type' => 'textarea'
    )));

    $wp_customize -> add_setting('ems-test-text', array(
        'default' => 'Мы подготовили короткий тест, в конце которого <br>
            вы узнаете подходят ли Вам ЕМС-тренировки'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test-text-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-test',
        'settings' => 'ems-test-text',
        'type' => 'textarea'
    )));

    $wp_customize -> add_setting('ems-test-button', array(
        'default' => 'Узнать!'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test-button-control', array(
        'label' => 'Ссылка на тест',
        'section' => 'ems-test',
        'settings' => 'ems-test-button',
    )));

    $wp_customize -> add_setting('ems-test-button-link', array(
        'default' => 'https://mrqz.me/5d5e81c52ad2e80044ff9da4'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-test-button-link-control', array(
        'section' => 'ems-test',
        'settings' => 'ems-test-button-link',
    )));

    $wp_customize -> add_setting('ems-test-background'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-test-background-control', array(
        'label' => 'Фон',
        'section' => 'ems-test',
        'settings' => 'ems-test-background',
        'width' => 1920,
        'heigth' => 1080
    ))); 
}