<?php if(get_theme_mod('ems-questions-display') == 'YES') {?>

<div class="ems-questions">
    <div class="ems-questions__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-questions-title') ?>
        </h1>
        <div class="ems-questions__content">
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".2s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image1')) ?>">
                <h1 class="colored">01.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question1') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <h1>
                    <?php echo get_theme_mod('ems-questions-question1-title') ?>
                    </h1>
                    <p>
                    <?php echo get_theme_mod('ems-questions-question1-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".3s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image2')) ?>')">
                <h1 class="colored">02.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question2') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question2-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".4s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image3')) ?>')">
                <h1 class="colored">03.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question3') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question3-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".5s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image4')) ?>')">
                <h1 class="colored">04.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question4') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question4-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".6s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image5')) ?>')">
                <h1 class="colored">05.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question5') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question5-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".7s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image6')) ?>')">
                <h1 class="colored">06.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question6') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question6-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".8s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image7')) ?>')">
                <h1 class="colored">07.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question7') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question7-text') ?>
                    </p>
                </div>
            </div>
            <div class="wow fadeInUp ems-questions__card" data-wow-delay=".9s"
                style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-questions-image8')) ?>')">
                <h1 class="colored">08.</h1>
                <h2>
                    <?php echo get_theme_mod('ems-questions-question8') ?>
                </h2>
                <hr>
                <div class="ems-questions__text">
                    <p>
                    <?php echo get_theme_mod('ems-questions-question8-text') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>