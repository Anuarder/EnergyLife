<div class="ems-plus">
    <div class="ems-plus__container container">
        <div class="ems-plus__girl"
            style="background-image: url('<?php bloginfo('template_directory') ?>/images/plus/girl.png')">
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content1">
                <button @click="showGirlText(1)">
                    <span v-if="girl_button === 1">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 1" class="ems-plus__girl-text">
                    Тонус и рельеф мышц
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content2">
                <button @click="showGirlText(2)">
                    <span v-if="girl_button === 2">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 2" class="ems-plus__girl-text">
                    Антивозрастной эффект
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content3">
                <button @click="showGirlText(3)">
                    <span v-if="girl_button === 3">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 3" class="ems-plus__girl-text">
                    Уменьшение целлюлита
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content4">
                <button @click="showGirlText(4)">
                    <span v-if="girl_button === 4">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 4" class="ems-plus__girl-text">
                    Уменьшение боли в спине
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content5">
                <button @click="showGirlText(5)">
                    <span v-if="girl_button === 5">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 5" class="ems-plus__girl-text">
                    Жиросжигание
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content6">
                <button @click="showGirlText(6)">
                    <span v-if="girl_button === 6">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 6" class="ems-plus__girl-text">
                    Укрепление поясничного отдела
                </div>
            </div>
        </div>
        <div class="ems-plus__content">
            <h1 class="wow fadeInRight">
                <span class="colored">Плюсы</span> наших тренировок
            </h1>
            <div class="ems-plus__list">
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".2s">
                    <img src="<?php bloginfo('template_directory') ?>/images/plus/list1.svg" alt="list1">
                    <p>
                        Предлагаем <b>лучшее соотношение</b> стоимости
                        абонементов, <b>результата и персонализации</b> на рынке
                        EMS в РК
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".4s">
                    <img src="<?php bloginfo('template_directory') ?>/images/plus/list2.svg" alt="list1">
                    <p>
                        Проводим <b>ежегодное обучение</b> ТОП-менеджмента и
                        тренерского состава Energy Life в Германии
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".6s">
                    <img src="<?php bloginfo('template_directory') ?>/images/plus/list3.svg" alt="list1">
                    <p>
                        Мы работаем на оборудовании от мирового лидера
                        рынка EMS - <b>MIHA BODYTECH (Германия)</b>
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".8s">
                    <img src="<?php bloginfo('template_directory') ?>/images/plus/list4.svg" alt="list1">
                    <p>
                        Energy Life - <b>единственная сеть EMS</b> - студий в РК
                        обладающая сертификатов <b> международного образца </b>,
                        выданного в Германии разработчиками технологии и оборудования
                    </p>
                </div>
            </div>
            <a href="#home" role="button" class="wow pulse link-button anchor" data-wow-delay="1s">
                Заказать звонок
            </a>
        </div>
    </div>
</div>