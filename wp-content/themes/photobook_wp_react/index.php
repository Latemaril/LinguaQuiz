<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photobook
 */
get_header();
?>
<header am-Header="" am-Grid-Row="between middle">
    <h2>LinguaQuiz</h2>
    <ul am-Header-buttons="" am-Grid-Row="between middle">
        <li am-Grid-Row="middle"><a am-Current-page href="">Главная</a></li>
        <li am-Grid-Row="middle"><a href="">Предыдущие квизы</a></li>
    </ul>
</header>
<article am-Announcements="">
    <div am-Announcements-image="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/anonses.jpg" alt="">
    </div>
</article>
<section am-Basic-information="" am-Grid-Col="middle">
    <h1>Основная информация</h1>
    <article am-Grid-Row="middle between">
        <div am-Text-mini="basic">
            <h3>Что такое LinguaQuiz?</h3>
            <p><em>ЛингваКвиз</em> -
                это уникальный конкурс для любителей языков и лингвистики, который проводится в разных школах города и финализируется в университете. Участники конкурса должны решать разнообразные задачи про языки мира, их историю, структуру и культуру.
            </p>
        </div>
        <div am-Image-mini="basic">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/basic/basic_1.png" alt="">
        </div>
    </article>
    <article am-Grid-Row="middle between">
        <div am-Image-mini="basic">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/basic/basic_2.png" alt="">
        </div>
        <div am-Text-mini="basic">
            <h3>Награды победителям</h3>
            <p>
                Победители получают ценные призы и возможность продолжить свое образование в области лингвистики. ЛингваКвиз - это не только проверка знаний, но и развитие логического мышления, творческого подхода и любознательности.
            </p>
        </div>
    </article>
</section>
<section am-Try-quiz="background" am-Grid-Row="center">
    <article am-Try-quiz="container" am-Grid-Row="between middle">
        <div am-Text-mini="try" am-Grid-Col="between">
            <h2>Пробный квиз</h2>
            <p>Вы хотите проверить свои знания и узнать что-то новое? Тогда пройдите наш пробный квиз и получите персональный результат!Ответьте на все вопросы и узнайте свой уровень знаний! Не упустите шанс стать умнее и веселее с нашим пробным квизом!</p>
            <button am-Button="try orange">ПОПРОБОВАТЬ</button>
        </div>
        <div am-Image-mini="try">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/trial_quiz/trial_quiz.png" alt="">
        </div>
    </article>
</section>
<!--<footer id="l-footer">-->
<!--    <article>-->
<!--        <div class="l-contact_us">-->
<!--            <div class="contact_us__container">-->
<!--                <svg width="1227" height="611" viewBox="0 0 1227 611" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M85.8859 63.8038C126.29 19.3954 188.345 -12.52 314.818 4.78557C441.29 22.0912 512.644 77.2845 605.652 37.6229C709.712 -6.75156 866.802 12.4419 950.917 37.6229C1035.03 62.8039 1009.08 57.5914 1135.02 114.835C1260.96 172.078 1227.87 207.135 1206.53 269.702C1185.18 332.27 1198.09 396.816 1206.53 463.175C1213.54 518.275 1204.14 539.127 1159.57 578.105C1115 617.083 1053.91 567.455 932.239 578.105C810.569 588.755 901.822 578.105 669.688 606.061C437.555 634.017 529.875 534.174 346.836 534.174C236.373 542.162 204.355 590.974 99.7608 534.174C-4.83312 477.375 -10.4271 391.288 8.50871 357.12C36.7899 306.089 15.0362 347.866 65.6081 269.702C112.792 212.351 23.9838 134.803 85.8859 63.8038Z" fill="#3222F6"/>-->
<!--                </svg>-->
<!--                <div class="contact_us">-->
<!--                    <div class="communications">-->
<!--                        <div class="contacts">-->
<!--                            <div>-->
<!--                                <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/assets/img/footer/contacts_icons/contact_icon.png" alt="">-->
<!--                                <h5>КОНТАКТЫ</h5>-->
<!--                            </div>-->
<!--                            <p>+7 (999) 193-64 89, +7 (959) 222-74 19</p>-->
<!--                        </div>-->
<!--                        <div class="location">-->
<!--                            <div>-->
<!--                                <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/assets/img/footer/contacts_icons/gps_icon.png" alt="">-->
<!--                                <h5>РАСПОЛОЖЕНИЕ</h5>-->
<!--                            </div>-->
<!--                            <p>г. Владивосток, ул. Гоголя, 41.</p>-->
<!--                        </div>-->
<!--                        <div class="socials">-->
<!--                            <div>-->
<!--                                <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/assets/img/footer/contacts_icons/socials_icon.png" alt="">-->
<!--                                <h5>СОЦ СЕТИ И МЭССЕНДЖЕРЫ</h5>-->
<!--                            </div>-->
<!--                            <div class="social_links"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feedback">-->
<!--                        <h4>ОБРАТНАЯ СВЯЗЬ</h4>-->
<!--                        <form class="m-form form">-->
<!--                            <div class="input-container">-->
<!--                                <input id="name" type="text" name="name" placeholder="Enter your Name" >-->
<!--                            </div>-->
<!--                        </form>-->
<!--                        <form class="m-form form">-->
<!--                            <div class="input-container">-->
<!--                                <input id="email" type="text" name="email" placeholder="Enter a valid email address" >-->
<!--                            </div>-->
<!--                        </form>-->
<!--                        <form class="m-form form-comment">-->
<!--                            <textarea id="comment" name="comment" placeholder="Enter your message"></textarea>-->
<!--                        </form>-->
<!--                        <button class="m-button__feedback button">ОТПРАВИТЬ</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </article>-->
<!--</footer>-->



