<?php if(get_theme_mod('ems-reviews-display') == 'YES') {?>

<div class="ems-reviews" id="reviews">
    <div class="ems-reviews__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-reviews-title') ?>
        </h1>
        <h2 class="wow fadeInLeft">
            <a href="<?php echo get_theme_mod('ems-reviews-video-link') ?>" target="blank">
                <?php echo get_theme_mod('ems-reviews-video') ?>
            </a>
        </h2>
        <div class="wow pulse ems-reviews__slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item1-image')) ?>" 
                        alt="review1">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item1-name') ?>
                    </h1>
                    <button onclick="reviewText(1)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-1">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(1)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item1-text') ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item2-image')) ?>" 
                        alt="review2">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item2-name') ?>
                    </h1>
                    <button onclick="reviewText(2)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-2">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(2)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item2-text') ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item3-image')) ?>" 
                        alt="review3">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item3-name') ?>
                    </h1>
                    <button onclick="reviewText(3)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-3">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(3)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item3-text') ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item4-image')) ?>" 
                        alt="review4">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item4-name') ?>
                    </h1>
                    <button onclick="reviewText(4)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-4">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(4)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item4-text') ?>    
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item5-image')) ?>" 
                        alt="review5">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item5-name') ?>
                    </h1>
                    <button onclick="reviewText(5)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-5">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(5)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item5-text') ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item6-image')) ?>" 
                        alt="review6">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item6-name') ?>
                    </h1>
                    <button onclick="reviewText(6)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-6">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(6)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item6-text') ?>
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img 
                        class="ems-reviews__image"
                        src="<?php echo wp_get_attachment_url(get_theme_mod('ems-reviews-item7-image')) ?>" 
                        alt="review6">
                    <h1>
                        <?php echo get_theme_mod('ems-reviews-item7-name') ?>
                    </h1>
                    <button onclick="reviewText(7)">
                        <?php echo get_theme_mod('ems-reviews-button') ?>
                    </button>
                    <div class="ems-reviews__slide-text review-text-7">
                        <div class="ems-reviews__slide-close">
                            <img 
                                onclick="closeReviewText(7)"
                                src="<?php bloginfo('template_directory') ?>/images/reviews/close.svg" 
                                alt="close">
                        </div>
                        <p>
                            <?php echo get_theme_mod('ems-reviews-item7-text') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ems-reviews__actions">
                <div class="reviews__slider-left">
                    <img src="<?php bloginfo('template_directory') ?>/images/reviews/arrow-left.svg" alt="left">
                </div>
                <div class="swiper-pagination2"></div>
                <div class="reviews__slider-right">
                    <img src="<?php bloginfo('template_directory') ?>/images/reviews/arrow-right.svg" alt="right">
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>
