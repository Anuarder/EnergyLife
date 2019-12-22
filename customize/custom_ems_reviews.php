<?php

add_action('customize_register', 'ems_reviews');

function ems_reviews($wp_customize) {
    $wp_customize -> add_section('ems-reviews', array(
        'title' => 'Отзывы'
    ));

    $wp_customize -> add_setting('ems-reviews-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-reviews-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-reviews',
        'settings' => 'ems-reviews-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));

    reviews_title($wp_customize);
    reviews_video($wp_customize);
    reviews_button($wp_customize);
    reviews_item(
        $wp_customize,
        1,
        'Анастасия Балашева, бьюти-блогер',
        '«20 минут в неделю – трудно поверить, но это реально!
        Ощущения после тренировки – бодрость и приятный мышечный тонус!
        Выходишь окрыленной с каждого занятия.
        Большой плюс в том, что тренировки персонализированны,
        нет посторонних при занятиях»'
    );
    reviews_item(
        $wp_customize,
        2,
        'Дильназ Ахмадиева, певица',
        '«Друзья, живите ярко! Приходите в Energy Life!
        Я занимаюсь с удовольствием и успеваю при своем
        графике уделять время спорту и здоровью»'
    );
    reviews_item(
        $wp_customize,
        3,
        'Ася, блогер и визажист',
        '«Уже месяц хожу на EMS в Energy Life и вот мои результаты:
        потеряла 2 кг за месяц занятий и 2 недели правильного питания;
        мышцы после тренировок болят – это хорошо, значит действительно работают!
        Чувствую себя энергичнее! EMS – самый классный вариант для работающих
        и мамочек – всего 1 раз в неделю на 20 минут»'
    ); 
    reviews_item(
        $wp_customize,
        4,
        'Анна, бизнес-леди',
        ' «Всем рекомендую – стройное тело
        гарантировано! 20 минут в неделю меняют
        жизнь к лучшему!»'
    );
    reviews_item(
        $wp_customize,
        5,
        'Анастасия Дирксен, блогер',
        '«Пройдя несколько тренировок, уже стала
        видеть значимый результат. Форму выдают в
        студии, это очень удобно. Мышцы приходят
        в тонус, а еще это ооочень эффективно для
        уменьшения целлюлита! Очень нравится, что
        тренировки персональные, а еще для меня
        было важно, что тренировки проходят на
        самом качественном оборудовании»'
    ); 
    reviews_item(
        $wp_customize,
        6,
        'Евгения, клиентка Energy Life',
        '«Хочу поделиться с Вами
        своим результатом! За три
        месяца занятий EMS в Energy
        Life я похудела на 15 килограмм!»'
    );
    reviews_item(
        $wp_customize,
        7,
        'Умутжан, коуч, мама',
        '«Настоятельно рекомендую EMS мамам!
        Тело приходит в тонус, а еще EMS не
        только не вредит грудному вскармливанию,
        но и стимулирует его! Проверено на себе!»'
    );
}

function reviews_title($wp_customize) {
    $wp_customize -> add_setting('ems-reviews-title', array(
        'default' => 'Вот что о нас говорят <br>
        <span class="colored">наши клиенты</span>'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-reviews-title-control', array(
        'label' => 'Заголовок',
        'section' => 'ems-reviews',
        'settings' => 'ems-reviews-title',
    )));
}

function reviews_button($wp_customize) {
    $wp_customize -> add_setting('ems-reviews-button', array(
        'default' => 'Прочитать отзыв'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-reviews-button-control', array(
        'label' => 'Кнопка',
        'section' => 'ems-reviews',
        'settings' => 'ems-reviews-button',
    )));
}

function reviews_video($wp_customize) {
    $wp_customize -> add_setting('ems-reviews-video', array(
        'default' => 'Посмотреть видео'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-reviews-video-control', array(
        'label' => 'Видео',
        'section' => 'ems-reviews',
        'settings' => 'ems-reviews-video',
    )));

    $wp_customize -> add_setting('ems-reviews-video-link', array(
        'default' => 'https://www.youtube.com/playlist?list=PLrqF-Tbp98X37Qhj8xcjnYWwB5WRXVkqL'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-reviews-video-link-control', array(
        'section' => 'ems-reviews',
        'settings' => 'ems-reviews-video-link',
    )));
}

function reviews_item($wp_customize, $number, $name, $text) {
    $wp_customize -> add_setting("ems-reviews-item$number-name", array(
        'default' => "$name"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-reviews-item$number-name-control", array(
        'label' => "Отзыв$number",
        'section' => 'ems-reviews',
        'settings' => "ems-reviews-item$number-name",
    )));

    $wp_customize -> add_setting("ems-reviews-item$number-text", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-reviews-item$number-text-control", array(
        'section' => 'ems-reviews',
        'settings' => "ems-reviews-item$number-text",
    )));

    $wp_customize -> add_setting("ems-reviews-item$number-image");

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-reviews-item$number-image-control", array(
        'section' => 'ems-reviews',
        'settings' => "ems-reviews-item$number-image",
        'width' => 1920,
        'heigth' => 1080
    )));
}