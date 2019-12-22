<div class="header__slider swiper-container" id="home">
    <div class="header__slider-container swiper-wrapper">
        <div class="header__slide swiper-slide"
            style="background-image: url('<?php bloginfo('template_directory') ?>/images/header/slider1.jpg')">
            <div class="wow fadeIn header__slide-content">
                <div class="header__slide-container container">
                    <div class="header__slide-text">
                        <h1>
                            ЕMS - тренировки
                            <br>
                            <span class="colored">
                                20 МИНУТ В НЕДЕЛЮ!
                            </span>
                        </h1>
                        <h2>
                            Результат чувствуется после первой тренировки
                            и становится заметен уже на пятом занятии!
                        </h2>
                        <div class="header__text">
                            <div class="header__list-title colored">
                                EMS студии Energy Life – это:
                            </div>
                            <div class="header__list">
                                - Европейский стандарт технологии тренировок/Германия
                            </div>
                            <div class="header__list">
                                - Персональные занятия с квалифицированным тренером
                            </div>
                            <div class="header__list">
                                - Уникальный сервис - форма и аксессуары предоставляются в студии
                            </div>
                            <div class="header__list">
                                - После каждой тренировки проводится массаж
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__slide swiper-slide"
            style="background-image: url('<?php bloginfo('template_directory') ?>/images/header/slider2.jpg')">
            <div class="wow fadeIn header__slide-content">
                <div class="header__slide-container container">
                    <div class="header__slide-text">
                        <h1>
                            РАССРОЧКА
                        </h1>
                        <h2>
                            На абонементы 3, 6 и 12 месяцев
                        </h2>
                        <div class="header__text">
                            <div class="header__list-title colored">
                                Занимайся больше, плати меньше!
                            </div>
                            <div class="header__list">
                                - без %
                            </div>
                            <div class="header__list">
                                - без переплат
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__form-content">
        <div class="header__form-container container">
            <div class="wow fadeInRight header__form">
                <form @submit.prevent="sendRequest">
                    <h1>Оставьте заявку</h1>
                    <h2>На пробную тренировку</h2>
                    <input type="text" placeholder="Введите ваше имя" required v-model="requestName">
                    <input type="email" placeholder="Введите ваш e-mail" required v-model="requestEmail">
                    <input v-mask="'+7 (###)-###-##-##'" type="text" placeholder="Введите номер телефона" required
                        v-model="requestPhone">
                    <button type="submit" :disabled="requestLoading">
                        <span v-if="!requestLoading">Записаться</span>
                        <span v-else>Загрузка...</span>
                    </button>
                    <!-- <label>
                                    <input type="checkbox" required>
                                    Я согласен с политикой конфиденциальности
                                </label> -->
                </form>
            </div>
        </div>
    </div>
    <div class="header__slider-pagination swiper-pagination"></div>
    <div class="header__actions">
        <div class="header__actions-container container">
            <div class="header__slider-left slider-arrow">
                <img src="<?php bloginfo('template_directory') ?>/images/header/slider-left.png" alt="slider-left">
            </div>
            <div class="header__slider-right slider-arrow">
                <img src="<?php bloginfo('template_directory') ?>/images/header/slider-right.png" alt="slider-right">
            </div>
        </div>
    </div>
</div>
<div class="header__form-container container in-mobile in-mobile-header">
    <div class="header__form">
        <form @submit.prevent="sendRequest">
            <h1>Оставьте заявку</h1>
            <h2>На пробную тренировку</h2>
            <input type="text" placeholder="Введите ваше имя" required v-model="requestName">
            <input type="email" placeholder="Введите ваш e-mail" required v-model="requestEmail">
            <input v-mask="'+7 (###)-###-##-##'" type="text" placeholder="Введите номер телефона" required
                v-model="requestPhone">
            <button type="submit" :disabled="requestLoading">
                <span v-if="!requestLoading">Записаться</span>
                <span v-else>Загрузка...</span>
            </button>
            <!-- <label>
                        <input type="checkbox" required>
                        Я согласен с политикой конфиденциальности
                    </label> -->
        </form>
    </div>
</div>