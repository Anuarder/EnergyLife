<?php 

add_action('customize_register', 'ems_footer');

function ems_footer($wp_customize) {
    $wp_customize -> add_section('ems-footer', array(
        'title' => 'Футер'
    ));

    $wp_customize -> add_setting('ems-footer-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    
    footer_logo($wp_customize);
    footer_youtube($wp_customize);
    footer_instagram($wp_customize);
    footer_facebook($wp_customize);
    footer_phone($wp_customize);
}

function footer_logo($wp_customize) {
    $wp_customize -> add_setting('ems-footer-logo'); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ems-footer-logo-control', array(
        'label' => 'Логотип',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-logo',
        'width' => 245,
        'heigth' => 40
    ))); 
}

function footer_youtube($wp_customize) {
    $wp_customize -> add_setting('ems-footer-youtube-link', array(
        'default' => 'https://www.youtube.com/channel/UCLJr3VolCBSLWdOSLeRL3Ig'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-youtube-link-control', array(
        'label' => 'Ссылка на youtube',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-youtube-link',
    )));
}

function footer_instagram($wp_customize) {
    $wp_customize -> add_setting('ems-footer-instagram-link', array(
        'default' => 'https://www.instagram.com/energylifekz/'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-instagram-link-control', array(
        'label' => 'Ссылка на instagram',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-instagram-link',
    )));
}

function footer_facebook($wp_customize) {
    $wp_customize -> add_setting('ems-footer-facebook-link', array(
        'default' => 'https://www.facebook.com/energylifekz/?ref=bookmarks'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-facebook-link-control', array(
        'label' => 'Ссылка на facebook',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-facebook-link',
    )));
}

function footer_phone($wp_customize) {
    $wp_customize -> add_setting('ems-footer-phone-headline', array(
        'default' => 'Позвонить'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-phone-headline-control', array(
        'label' => 'Телефон',
        'section' => 'ems-footer',
        'settings' => 'ems-footer-phone-headline',
    ))); 
    
    $wp_customize -> add_setting('ems-footer-phone', array(
        'default' => '+7 (775) 232 44 88'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-footer-phone-control', array(
        'section' => 'ems-footer',
        'settings' => 'ems-footer-phone',
    )));
}