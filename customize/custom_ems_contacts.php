<?php

add_action('customize_register', 'ems_contacts');

function ems_contacts($wp_customize) {
    $wp_customize -> add_section('ems-contacts', array(
        'title' => 'Контакты'
    ));

    $wp_customize -> add_setting('ems-contacts-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    contacts_headline($wp_customize);

    // Address1 
    contacts_address1($wp_customize);
   
    //Address2
    contacts_address2($wp_customize);

    //Phone
    contacts_phone($wp_customize);
    
    //Email
    contacts_email($wp_customize);

    //Images
    contacts_images($wp_customize);

}

function contacts_headline($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-headline', array(
        'default' => 'Контакты:'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-headline-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-headline',
    ))); 
    

    $wp_customize -> add_setting('ems-contacts-address', array(
        'default' => 'Адрес:'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-control', array(
        'label' => 'Адрес',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address',
    )));
}

function contacts_address1($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-address-item1', array(
        'default' => 'Достык 97, ЖК Самал Де Люкс'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item1-control', array(
        'label' => 'Адрес 1',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item1',
    )));
    
    $wp_customize -> add_setting('ems-contacts-address-item1-link', array(
        'default' => 'https://yandex.kz/maps/-/CGT3aSjv'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item1-link-control', array(
        'label' => 'Ссылка для адрес 1',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item1-link',
    )));
    
    $wp_customize -> add_setting('ems-contacts-address-item1-button', array(
        'default' => 'Показать на карте'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item1-button-control', array(
        'label' => 'Кнопка для адрес 1',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item1-button',
    )));
}

function contacts_address2($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-address-item2', array(
        'default' => 'Жамакаева, 254/2 блок Д2'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item2-control', array(
        'label' => 'Адрес 2',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item2',
    )));
    
    $wp_customize -> add_setting('ems-contacts-address-item2-link', array(
        'default' => 'https://yandex.kz/maps/-/CGT3aLKS'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item2-link-control', array(
        'label' => 'Ссылка для адрес 2',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item2-link',
    )));
    
    $wp_customize -> add_setting('ems-contacts-address-item2-button', array(
        'default' => 'Показать на карте'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-address-item2-button-control', array(
        'label' => 'Кнопка для адрес 2',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-address-item2-button',
    )));
}

function contacts_phone($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-phone-headline', array(
        'default' => 'Телефон:'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-phone-headline-control', array(
        'label' => 'Телефон',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-phone-headline',
    )));
    
    $wp_customize -> add_setting('ems-contacts-phone', array(
        'default' => '+7 (775) 232 44 88'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-phone-control', array(
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-phone',
    )));
}

function contacts_email($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-email-headline', array(
        'default' => 'Почта:'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-email-headline-control', array(
        'label' => 'Почта',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-email-headline',
    )));
    
    $wp_customize -> add_setting('ems-contacts-email', array(
        'default' => 'energy.life.forever@gmail.com'
    )); 

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-contacts-email-control', array(
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-email',
    )));
}

function contacts_images($wp_customize) {
    $wp_customize -> add_setting('ems-contacts-image1'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-contacts-image1-control', array(
        'label' => 'Картинка 1',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-image1',
        'width' => 550,
        'heigth' => 450
    ))); 
    
    $wp_customize -> add_setting('ems-contacts-image2'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-contacts-image2-control', array(
        'label' => 'Картинка 2',
        'section' => 'ems-contacts',
        'settings' => 'ems-contacts-image2',
        'width' => 550,
        'heigth' => 450
    )));
}