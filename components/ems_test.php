<div class="ems-test" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-test-background')) ?>')">
    <div class="ems-test__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-test-title') ?>
        </h1>
        <div class="wow fadeInRight ems-test__text">
            <p>
                <?php echo get_theme_mod('ems-test-text') ?>
            </p>
            <img src="<?php bloginfo('template_directory') ?>/images/header/slider-right.png" alt="arrow">
            <a 
                href="<?php echo get_theme_mod('ems-test-button-link') ?>" target="blank" role="button"
                class="link-button">
                <?php echo get_theme_mod('ems-test-button') ?>
            </a>
        </div>
    </div>
</div>