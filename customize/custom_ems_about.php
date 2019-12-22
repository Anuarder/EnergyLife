<?php

add_action('customize_register', 'ems_about');

function ems_about($wp_customize) {
    $wp_customize -> add_section('ems-about', array(
        'title' => 'О нас'
    ));

    $wp_customize -> add_setting('ems-about-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-about-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-about',
        'settings' => 'ems-about-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    $wp_customize -> add_setting('ems-about-text', array(
        'default' => '<strong>EnergyLife – </strong>
            это сеть EMS-студий с европейской концепцией и
            стандартами проведения тренировок направленных на общее
            развитие всего тела.
            Похудение/ Набор мышечной массы/ Реабилитация и тонус'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-about-text-control', array(
        'label' => 'Текст',
        'section' => 'ems-about',
        'settings' => 'ems-about-text',
        'type' => 'textarea'
    )));
}