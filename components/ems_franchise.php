<?php if(get_theme_mod('ems-franchise-display') == 'YES') {?>

<div class="ems-franchise" id="franchise">
    <div class="ems-franchise__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-franchise-title') ?>
        </h1>
        <h2 class="wow fadeInRight">
            <?php echo get_theme_mod('ems-franchise-subtitle') ?>
        </h2>
        <div class="ems-franchise__content">
            <div class="wow pulse ems-franchise__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-franchise-image1')) ?>"
                            alt="slide1">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-franchise-image2')) ?>"
                            alt="slide2">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-franchise-image3')) ?>"
                            alt="slide3">
                    </div>
                </div>
                <div class="ems-franchise__actions">
                    <div class="ems-franchise__left slider-arrow">
                        <img src="<?php bloginfo('template_directory') ?>/images/franchise/arrow-left.svg" alt="left">
                    </div>
                    <div class="swiper-pagination3"></div>
                    <div class="ems-franchise__right slider-arrow">
                        <img src="<?php bloginfo('template_directory') ?>/images/franchise/arrow-right.svg" alt="right">
                    </div>
                </div>
                <div class="link-video-container">
                    <a class="link-video" href="<?php echo get_theme_mod('ems-franchise-video-link') ?>" target="blank">
                        <?php echo get_theme_mod('ems-franchise-video') ?>
                    </a>
                </div>
            </div>
            <div class="wow flipInX ems-franchise__text">
                <h1 class="colored">
                    <?php echo get_theme_mod('ems-franchise-text1') ?>
                </h1>
                <h2>
                    <?php echo get_theme_mod('ems-franchise-text1-sub') ?>
                </h2>
                <h1 class="colored">
                    <?php echo get_theme_mod('ems-franchise-text2') ?>
                </h1>
                <h2>
                    <?php echo get_theme_mod('ems-franchise-text2-sub') ?>
                </h2>
                <h1 class="colored">
                    <?php echo get_theme_mod('ems-franchise-text3') ?>
                </h1>
                <h2>
                    <?php echo get_theme_mod('ems-franchise-text3-sub') ?>
                </h2>
                <a role="button" class="link-button franchise-btn">
                    <?php echo get_theme_mod('ems-franchise-button')?>
                </a>
            </div>
        </div>
    </div>
    <div class="ems-franchise__dialog dialog">
        <div class="dialog-container">
            <div class="ems-franchise__close dialog-close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.76355" y="0.577148" width="20.1333" height="1.67778"
                        transform="rotate(45 1.76355 0.577148)" fill="#1A1A1A" />
                    <rect x="0.577148" y="14.8135" width="20.1333" height="1.67778"
                        transform="rotate(-45 0.577148 14.8135)" fill="#1A1A1A" />
                </svg>
            </div>
            <h1>Оставьте заявку</h1>
            <h2>По вопросам франшизы</h2>
            <form @submit.prevent="sendFranchiseRequest" class="dialog-form">
                <input class="dialog-input" type="text" required placeholder="Ваше имя" v-model="franchiseName">
                <input v-mask="'+7 (###)-###-##-##'" class="dialog-input" type="text" required placeholder="Ваш номер"
                    v-model="franchisePhone">
                <button class="dialog-button" type="submit" :disabled="franchiseLoading">
                    <span v-if="!franchiseLoading">Отправить</span>
                    <span v-else>Загрузка...</span>
                </button>
            </form>
        </div>
    </div>
</div>

<?php }?>