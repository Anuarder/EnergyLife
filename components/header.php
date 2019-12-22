<?php if(get_theme_mod('ems-header-display') == 'YES') {?>

<div class="header__slider swiper-container" id="home">
    <div class="header__slider-container swiper-wrapper">
        <div class="header__slide swiper-slide"
            style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-header-image1')) ?>')">
            <div class="wow fadeIn header__slide-content">
                <div class="header__slide-container container">
                    <div class="header__slide-text">
                        <h1>
                            <?php echo get_theme_mod('ems-header-slider1-title') ?>
                        </h1>
                        <h2>
                            <?php echo get_theme_mod('ems-header-slider1-subtitle') ?>
                        </h2>
                        <div class="header__text">
                            <div class="header__list-title colored">
                                <?php echo get_theme_mod('ems-header-slider1-list-title') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider1-list1') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider1-list2') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider1-list3') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider1-list4') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__slide swiper-slide"
            style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-header-image2')) ?>')">
            <div class="wow fadeIn header__slide-content">
                <div class="header__slide-container container">
                    <div class="header__slide-text">
                        <h1>
                            <?php echo get_theme_mod('ems-header-slider2-title') ?>
                        </h1>
                        <h2>
                            <?php echo get_theme_mod('ems-header-slider2-subtitle') ?>
                        </h2>
                        <div class="header__text">
                            <div class="header__list-title colored">
                                <?php echo get_theme_mod('ems-header-slider2-list-title') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider2-list1') ?>
                            </div>
                            <div class="header__list">
                                <?php echo get_theme_mod('ems-header-slider2-list2') ?>
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

<?php }?>