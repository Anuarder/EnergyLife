<?php

add_action('customize_register', 'ems_result_counter');

function ems_result_counter($wp_customize) {
    $wp_customize -> add_section('ems-result-counter', array(
        'title' => 'Счетчик'
    ));

    $wp_customize -> add_setting('ems-result-counter-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    item1($wp_customize);
    item2($wp_customize);
    item3($wp_customize);
    item4($wp_customize);
    item5($wp_customize);
}

function item1($wp_customize) {
    $wp_customize -> add_setting('ems-result-counter-item1', array(
        'default' => '0.<span class="count">28</span>%'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item1-control', array(
        'label' => 'Первый',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item1',
    )));

    
    $wp_customize -> add_setting('ems-result-counter-item1-text', array(
        'default' => 'Столько процентов Вашего времени в месяц требуется на занятие'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item1-text-control', array(
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item1-text',
    )));
}

function item2($wp_customize) {
    $wp_customize -> add_setting('ems-result-counter-item2', array(
        'default' => '<span class="count">64</span> 000 тг'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item2-control', array(
        'label' => 'Второй',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item2',
    )));

    
    $wp_customize -> add_setting('ems-result-counter-item2-text', array(
        'default' => 'Вы экономите при покупке годового абонемента'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item2-text-control', array(
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item2-text',
    )));
}

function item3($wp_customize) {
    $wp_customize -> add_setting('ems-result-counter-item3', array(
        'default' => '<span class="count">30</span> <span class="count">700</span>'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item3-control', array(
        'label' => 'Третьи',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item3',
    )));

    
    $wp_customize -> add_setting('ems-result-counter-item3-text', array(
        'default' => 'Проведено персональных тренировок'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item3-text-control', array(
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item3-text',
    )));
}

function item4($wp_customize) {
    $wp_customize -> add_setting('ems-result-counter-item4', array(
        'default' => '<span class="count">-8</span> кг'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item4-control', array(
        'label' => 'Четвертый',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item4',
    )));

    
    $wp_customize -> add_setting('ems-result-counter-item4-text', array(
        'default' => 'Лучший результат за месяц'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item4-text-control', array(
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item4-text',
    )));
}

function item5($wp_customize) {
    $wp_customize -> add_setting('ems-result-counter-item5', array(
        'default' => '<span class="count">100</span>%'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item5-control', array(
        'label' => 'Пятый',
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item5',
    )));

    
    $wp_customize -> add_setting('ems-result-counter-item5-text', array(
        'default' => 'Результат при выполнении рекомендации тренера'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-result-counter-item5-text-control', array(
        'section' => 'ems-result-counter',
        'settings' => 'ems-result-counter-item5-text',
    )));
}