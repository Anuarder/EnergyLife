<?php if(get_theme_mod('ems-food-display') == 'YES') {?>


<div class="ems-food">
    <div class="ems-food__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-food-title') ?>
        </h1>
        <div class="ems-food__content">
            <div class="wow bounceIn ems-food__image">
                <img src=" <?php echo wp_get_attachment_url(get_theme_mod('ems-food-image')) ?>" alt="iamge">
            </div>
            <div class="ems-food__text">
                <h1 class="wow fadeInUp colored" data-wow-delay=".2s">
                    <?php echo get_theme_mod('ems-food-name') ?>
                </h1>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    <?php echo get_theme_mod('ems-food-subtitle') ?>
                </h2>
                <div class="ems-food__list">
                    <div class="wow fadeInUp  ems-food__list-item" data-wow-delay=".4s">
                        <?php echo get_theme_mod('ems-food-list1') ?>
                    </div>
                    <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".5s">
                        <?php echo get_theme_mod('ems-food-list2') ?>
                    </div>
                    <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".6s">
                        <?php echo get_theme_mod('ems-food-list3') ?>
                    </div>
                </div>
                <div class="ems-food__cards">
                    <div class="wow fadeInLeft ems-food__card-item" data-wow-delay=".7s">
                        <div class="ems-food__card food-card-1">
                            <h2>
                                <s>
                                    <?php echo get_theme_mod('ems-food-price1-stripped') ?>
                                </s>
                            </h2>
                            <h1>
                                <?php echo get_theme_mod('ems-food-price1') ?>
                            </h1>
                            <hr>
                            <h3>
                                <?php echo get_theme_mod('ems-food-price1-text') ?>
                            </h3>
                        </div>
                        <div class="ems-food__card-link">
                            <a class="food-btn">
                                <?php echo get_theme_mod('ems-food-button') ?>
                            </a>
                        </div>
                    </div>
                    <div class="wow fadeInRight ems-food__card-item" data-wow-delay=".8s">
                        <div class="ems-food__card food-card-2">
                            <h2>
                                <s>
                                    <?php echo get_theme_mod('ems-food-price2-stripped') ?>
                                </s>
                            </h2>
                            <h1>
                                <?php echo get_theme_mod('ems-food-price2') ?>
                            </h1>
                            <hr>
                            <h3>
                                <?php echo get_theme_mod('ems-food-price2-text') ?>
                            </h3>
                        </div>
                        <div class="ems-food__card-link">
                            <a class="food-btn">
                                <?php echo get_theme_mod('ems-food-button') ?>
                            </a>
                        </div>
                    </div>
                    <div class="ems-food__dialog dialog">
                        <div class="dialog-container">
                            <div class="ems-food__close dialog-close">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.76355" y="0.577148" width="20.1333" height="1.67778"
                                        transform="rotate(45 1.76355 0.577148)" fill="#1A1A1A" />
                                    <rect x="0.577148" y="14.8135" width="20.1333" height="1.67778"
                                        transform="rotate(-45 0.577148 14.8135)" fill="#1A1A1A" />
                                </svg>
                            </div>
                            <h1>Оставьте заявку</h1>
                            <h2>На консультацию по питанию</h2>
                            <form @submit.prevent="sendFoodRequest" class="dialog-form">
                                <input class="dialog-input" type="text" required placeholder="Ваше имя"
                                    v-model="foodName">
                                <input v-mask="'+7 (###)-###-##-##'" class="dialog-input" type="text" required
                                    placeholder="Ваш номер" v-model="foodPhone">
                                <button class="dialog-button" type="submit" :disabled="foodLoading">
                                    <span v-if="!foodLoading">Отправить</span>
                                    <span v-else>Загрузка...</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }?>