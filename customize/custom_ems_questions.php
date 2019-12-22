<?php

add_action('customize_register', 'ems_questions');

function ems_questions($wp_customize) {
    $wp_customize -> add_section('ems-questions', array(
        'title' => 'Вопросы'
    ));

    $wp_customize -> add_setting('ems-questions-display', array(
        'default' => 'YES'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'ems-questions-display-control', array(
        'label' => 'Показывать этот блок?',
        'section' => 'ems-questions',
        'settings' => 'ems-questions-display',
        'type' => 'select',
        'choices' => array(
            'YES' => 'YES',
            'NO' => 'NO'
        )
    )));
    questions_text(
        $wp_customize, 
        'title', 
        'Заголовок', 
        'Часто задаваемые <span class="colored">вопросы</span>'
    );
    questions_image($wp_customize, 1);
    questions_text(
        $wp_customize, 
        'question1', 
        'Вопрос 1', 
        'Какие противопоказания есть к EMS?'
    );
    questions_text(
        $wp_customize, 
        'question1-title', 
        '', 
        'Полный список противопоказаний:'
    );
    questions_text(
        $wp_customize, 
        'question1-text', 
        '', 
        'туберкулёз;
        беременность;
        наличие электронного кардиостимулятора;
        эпилепсия;
        злокачественная опухоль;
        тяжелые нарушения местного кровообращения;
        лихорадочные заболевания, острые бактериальные и вирусные процессы;
        диабет;
        грыжа брюшной стенки паха;
        шунты, установленные менее 6 месяцев назад;
        операции, проведённые менее 2 месяцев назад'
    );
    questions_image($wp_customize, 2);
    questions_text(
        $wp_customize, 
        'question2', 
        'Вопрос 2', 
        'Почему тренировка длится только 20 минут?'
    );
    questions_text(
        $wp_customize, 
        'question2-text', 
        '', 
        'EMS-тренировка на тренажерах
        miha bodytec – это высокоинтенсивный вид
        тренировки для всего тела.
        Согласно исследованиям Университета
        Байройта (Universität Bayreuth),
        15-минутная EMS-тренировка всего тела
        может вызвать в 18 раз более ускоренные
        процессы адаптации, чем 60-минутные
        интенсивные силовые тренировки с отягощениями.'
    );
    questions_image($wp_customize, 3);
    questions_text(
        $wp_customize, 
        'question3', 
        'Вопрос 3', 
        'Что нужно брать на тренировку?'
    );
    questions_text(
        $wp_customize, 
        'question3-text', 
        '', 
        'На тренировку можно приходить налегке – все
        необходимое имеется в студиях. Душевые кабинки,
        полотенца, принадлежности для душа.
        Форма для тренировок также предоставляется в
        студии'
    );
    questions_image($wp_customize, 4);
    questions_text(
        $wp_customize, 
        'question4', 
        'Вопрос 4', 
        'Достаточно ли тренироваться 1 раз в неделю?'
    );
    questions_text(
        $wp_customize, 
        'question4-text', 
        '', 
        'Поскольку EMS задействует за одну тренировку
        до 90% мышц всего тела, включая глубокие
        мышцы, период восстановления составляет 4-5 дней.
        За каждую тренировку организм получает нагрузку,
        эквивалентную 3 посещениям обычного спортзала,
        однако не чувствует недомоганий – поскольку EMS
        воздействует только на мышцы.'
    );
    questions_image($wp_customize, 5);
    questions_text(
        $wp_customize, 
        'question5', 
        'Вопрос 5', 
        'В каком возрасте можно заниматься EMS-тренировками?'
    );
    questions_text(
        $wp_customize, 
        'question5-text', 
        '', 
        'Заниматься можно с 18 лет. Верхнего порога
        ограничений не существует – EMS безопасен
        для людей пожилого возраста.'
    );
    questions_image($wp_customize, 6);
    questions_text(
        $wp_customize, 
        'question6', 
        'Вопрос 6', 
        'Как быстро можно похудеть?'
    );
    questions_text(
        $wp_customize, 
        'question6-text', 
        '', 
        'Процесс похудания – индивидуальный, и зависит
        от многих факторов: питание, обмен веществ,
        образ жизни, особенности организма и метаболизма.
        Тренировки EMS персональны – тренер составляет
        программу индивидуально для Вас и предлагает
        рекомендации, которые способствуют наискорейшему
        достижению целей.'
    );
    questions_image($wp_customize, 7);
    questions_text(
        $wp_customize, 
        'question7', 
        'Вопрос 7', 
        'Как EMS борется с целлюлитом?'
    );
    questions_text(
        $wp_customize, 
        'question7-text', 
        '', 
        'Тренировки EMS – эффективно и интенсивно
        воздействуют на организм, разгоняют лимфу,
        повышают общий тонус и укрепляют мышцы.
        При активизации метаболических процессов
        и дренаже происходит выведение жидкости,
        которая и формирует целлюлит. EMS является
        достаточно эффективным средством против целлюлита.'
    );
    questions_image($wp_customize, 8);
    questions_text(
        $wp_customize, 
        'question8', 
        'Вопрос 8', 
        'Как проходит массаж и для чего он нужен?'
    );
    questions_text(
        $wp_customize, 
        'question8-text', 
        '', 
        'Массаж производится на тренажере miha bodytec
        после каждой тренировки. Он выполняет дренажную
        и расслабляющую функцию. Благодаря
        применению массажа, смягчается мышечная
        боль после тренировок, а также положительное
        воздействие оказывается на нервную систему'
    );
}

function questions_image($wp_customize, $number) {
    $wp_customize -> add_setting("ems-questions-image$number"); 

    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "ems-questions-image$number-control", array(
        'label' => "Фото $number",
        'section' => 'ems-questions',
        'settings' => "ems-questions-image$number",
        'width' => 1920,
        'heigth' => 1080
    )));
}

function questions_text($wp_customize, $type, $label, $text) {
    $wp_customize -> add_setting("ems-questions-$type", array(
        'default' => "$text"
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "ems-questions-$type-control", array(
        'label' => "$label",
        'section' => 'ems-questions',
        'settings' => "ems-questions-$type",
    )));
}