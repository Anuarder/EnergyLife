<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme() {
    wp_enqueue_style('style', get_template_directory_uri());
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function scripts_theme() {
    wp_enqueue_script('sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js');
    wp_enqueue_script('animate', get_template_directory_uri() . '/lib/wow.min.js');
    wp_enqueue_script('axios', 'https://unpkg.com/axios/dist/axios.min.js');
    wp_enqueue_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js');
    wp_enqueue_script('jquery3.4', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/js/swiper.min.js');
    wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js');
    wp_enqueue_script('vmask', 'https://cdn.jsdelivr.net/npm/v-mask/dist/v-mask.min.js');
    wp_enqueue_script('yandexmap', 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A87093f357b699b525c0dcb8a1c6e05d7bc6c979c7658689f4db5d49ce257192b&amp;width=100%25&amp;height=600&amp;id=mymap&amp;lang=ru_RU&amp;scroll=true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/app.js');
}

include(get_template_directory() . '/customize/custom_ems_about.php');
include(get_template_directory() . '/customize/custom_ems_contacts.php');
include(get_template_directory() . '/customize/custom_ems_footer.php');
include(get_template_directory() . '/customize/custom_ems_test.php');
include(get_template_directory() . '/customize/custom_ems_test2.php');
include(get_template_directory() . '/customize/custom_ems_result_counter.php');
include(get_template_directory() . '/customize/custom_ems_plus.php');
include(get_template_directory() . '/customize/custom_ems_reviews.php');
include(get_template_directory() . '/customize/custom_ems_types.php');
include(get_template_directory() . '/customize/custom_ems_shapes.php');
include(get_template_directory() . '/customize/custom_ems_food.php');
include(get_template_directory() . '/customize/custom_ems_questions.php');
include(get_template_directory() . '/customize/custom_ems_franchise.php');
include(get_template_directory() . '/customize/custom_ems_navigation.php');
include(get_template_directory() . '/customize/custom_ems_header.php');
