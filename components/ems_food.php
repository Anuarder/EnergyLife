<div class="ems-food">
    <div class="ems-food__container container">
        <h1 class="wow fadeInLeft">О коуче <span class="colored">по питанию</span></h1>
        <div class="ems-food__content">
            <div class="wow bounceIn ems-food__image">
                <img src="<?php bloginfo('template_directory') ?>/images/food/image.jpg" alt="iamge">
            </div>
            <div class="ems-food__text">
                <h1 class="wow fadeInUp colored" data-wow-delay=".2s">Юлия Халикова</h1>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Сертифицированный тренер по питанию</h2>
                <div class="ems-food__list">
                    <div class="wow fadeInUp  ems-food__list-item" data-wow-delay=".4s">
                        <b>1.</b>Единственный в РК специалист, сертифицированный коуч PN1 Канадской школы
                        Precision Nutrition
                    </div>
                    <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".5s">
                        <b>2.</b>Сертифицированный Health Coach Института Интегративного питания, Нью Йорк
                    </div>
                    <div class="wow fadeInUp ems-food__list-item" data-wow-delay=".6s">
                        <b>3.</b>Для клиентов студии Energy Life действует эксклюзивная скидка на услуги
                    </div>
                </div>
                <div class="ems-food__cards">
                    <div class="wow fadeInLeft ems-food__card-item" data-wow-delay=".7s">
                        <div class="ems-food__card food-card-1">
                            <h2><s>20 000 ТГ</s></h2>
                            <h1>10 000 ТГ</h1>
                            <hr>
                            <h3>
                                Индивидуальная <br>
                                консультация по питанию
                            </h3>
                        </div>
                        <div class="ems-food__card-link">
                            <a class="food-btn">Приобрести</a>
                        </div>
                    </div>
                    <div class="wow fadeInRight ems-food__card-item" data-wow-delay=".8s">
                        <div class="ems-food__card food-card-2">
                            <h2><s>80 000 ТГ</s></h2>
                            <h1>60 000 ТГ</h1>
                            <hr>
                            <h3>
                                Индивидуальная
                                консультация <br>
                                8 недель сопровождения
                            </h3>
                        </div>
                        <div class="ems-food__card-link">
                            <a class="food-btn">Приобрести</a>
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