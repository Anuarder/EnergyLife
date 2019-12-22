<?php

add_action('customize_register', 'ems_shapes');

function ems_shapes($wp_customize) {
    $wp_customize -> add_section('ems-shapes', array(
        'title' => 'Фигуры'
    ));

    $wp_customize -> add_setting('ems-shapes-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-shapes-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-shapes',
        'settings' => 'ems-shapes-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    shapes_image($wp_customize, 1);
    shapes_image($wp_customize, 2);
    shapes_image($wp_customize, 3);
    shapes_image($wp_customize, 4);
    shapes_image($wp_customize, 5);
}

function shapes_image($wp_customize, $number) {
    $wp_customize -> add_setting("ems-shapes-image$number"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-shapes-image$number-control", array(
        'label' => "Фигура $number",
        'section' => 'ems-shapes',
        'settings' => "ems-shapes-image$number",
        'width' => 550,
        'heigth' => 450
    )));
}