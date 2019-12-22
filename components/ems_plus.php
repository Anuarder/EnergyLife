<?php if(get_theme_mod('ems-plus-display') == 'YES') {?>

<div class="ems-plus">
    <div class="ems-plus__container container">
        <div class="ems-plus__girl"
            style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-girl')) ?>">
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content1">
                <button @click="showGirlText(1)">
                    <span v-if="girl_button === 1">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 1" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item1') ?>
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content2">
                <button @click="showGirlText(2)">
                    <span v-if="girl_button === 2">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 2" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item2') ?>
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content3">
                <button @click="showGirlText(3)">
                    <span v-if="girl_button === 3">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 3" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item3') ?>
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content4">
                <button @click="showGirlText(4)">
                    <span v-if="girl_button === 4">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 4" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item4') ?>
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content5">
                <button @click="showGirlText(5)">
                    <span v-if="girl_button === 5">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 5" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item5') ?>
                </div>
            </div>
            <div class="wow fadeIn ems-plus__girl-content ems-plus__girl-content6">
                <button @click="showGirlText(6)">
                    <span v-if="girl_button === 6">-</span>
                    <span v-else>+</span>
                </button>
                <div v-show="girl_button === 6" class="ems-plus__girl-text">
                    <?php echo get_theme_mod('ems-plus-item6') ?>
                </div>
            </div>
        </div>
        <div class="ems-plus__content">
            <h1 class="wow fadeInRight">
                <?php echo get_theme_mod('ems-plus-title') ?>
            </h1>
            <div class="ems-plus__list">
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".2s">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-text1-image')) ?>" alt="list1">
                    <p>
                        <?php echo get_theme_mod('ems-plus-text1') ?>
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".4s">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-text2-image')) ?>" alt="list2">
                    <p>
                        <?php echo get_theme_mod('ems-plus-text2') ?>
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".6s">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-text3-image')) ?>" alt="list3">
                    <p>
                        <?php echo get_theme_mod('ems-plus-text3') ?>
                    </p>
                </div>
                <div class="wow fadeInUp ems-plus__list-item" data-wow-delay=".8s">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-text4-image')) ?>" alt="list4">
                    <p>
                        <?php echo get_theme_mod('ems-plus-text4') ?>
                    </p>
                </div>
            </div>
            <a href="#home" role="button" class="wow pulse link-button anchor" data-wow-delay="1s">
                <?php echo get_theme_mod('ems-plus-button') ?>
            </a>
        </div>
    </div>
</div>

<?php }?>