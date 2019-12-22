<?php if(get_theme_mod('ems-contacts-display') == 'YES') {?>

<div class="ems-contacts" id="contacts">
    <div id="mymap"></div>
    <div class="mymap-container">
        <div class="wow jackInTheBox ems-contacts__container container">
            <div class="ems-contacts__content">
                <div class="flexible">
                    <div>
                        <h1> <?php echo get_theme_mod('ems-contacts-headline') ?> </h1>
                        <h2 class="colored"> <?php echo get_theme_mod('ems-contacts-address') ?> </h2>
                        <p>
                            <?php echo get_theme_mod('ems-contacts-address-item1') ?>
                        </p>
                        <a href="<?php echo get_theme_mod('ems-contacts-address-item1-link') ?>" target="blank">
                            <?php echo get_theme_mod('ems-contacts-address-item1-button') ?>
                        </a>
                        <p>
                            <?php echo get_theme_mod('ems-contacts-address-item2') ?>
                        </p>
                        <a href="<?php echo get_theme_mod('ems-contacts-address-item2-link') ?>" target="blank">
                            <?php echo get_theme_mod('ems-contacts-address-item2-button') ?>
                        </a>
                    </div>
                    <div class="flexible-image flexible-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-contacts-image1')) ?>" alt="slide1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-contacts-image2')) ?>" alt="slide2">
                            </div>
                        </div>
                        <div class="swiper-pagination9"></div>
                    </div>
                </div>
                <div class="ems-contacts__items">
                    <div class="ems-contacts__item">
                        <h2 class="colored">
                            <?php echo get_theme_mod('ems-contacts-phone-headline') ?>
                        </h2>
                        <a href="tel:<?php echo get_theme_mod('ems-contacts-phone') ?>">
                            <?php echo get_theme_mod('ems-contacts-phone') ?>
                        </a>
                    </div>
                    <div class="ems-contacts__item">
                        <h2 class="colored">
                            <?php echo get_theme_mod('ems-contacts-email-headline') ?>
                        </h2>
                        <a href="mailto:<?php echo get_theme_mod('ems-contacts-email') ?>">
                            <?php echo get_theme_mod('ems-contacts-email') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>
