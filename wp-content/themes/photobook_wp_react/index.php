<?php

get_header();
?>
<header am-Header="" am-Flex-Row="between middle">
    <h2>LinguaQuiz</h2>
    <ul am-Header-buttons="" am-Flex-Row="between middle">
        <li am-Flex-Row="middle"><a am-Current-page href="">Главная</a></li>
        <li am-Flex-Row="middle"><a class="js-button__archive">Предыдущие квизы</a></li>
    </ul>
</header>
<article am-Announcements="">
    <div am-Announcements-image="">
        <div am-Announcements-text="" am-Flex-Col="middle">
            <h2>Добро пожаловать на LinguaQuiz!</h2>
            <p>Мы рады приветствовать вас на нашем увлекательном сайте, посвященном языковым квизам. Здесь вы найдете уникальную возможность проверить свои знания и развить навыки в различных языках.
            </p>
            <h1>GO!</h1>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/anonses.jpg" alt="">
    </div>
</article>
<section am-Basic-information="" am-Flex-Col="middle">
    <h1>Основная информация</h1>
    <article am-Flex-Row="middle between">
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
    <article am-Flex-Row="middle between">
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
<section am-Try-quiz="background" am-Flex-Row="center">
    <article am-Try-quiz="container" am-Flex-Row="between middle">
        <div am-Text-mini="try" am-Flex-Col="between">
            <h2>Пробный квиз</h2>
            <p>Вы хотите проверить свои знания и узнать что-то новое? Тогда пройдите наш пробный квиз и получите персональный результат!Ответьте на все вопросы и узнайте свой уровень знаний! Не упустите шанс стать умнее и веселее с нашим пробным квизом!</p>
            <button am-Button="try orange" class="js-button__trial">ПОПРОБОВАТЬ</button>
        </div>
        <div am-Image-mini="try">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/trial_quiz/trial_quiz.png" alt="">
        </div>
    </article>
</section>
<footer am-Contacts="background" am-Flex-Row="center middle">
    <article am-Contacts="container" am-Flex-Row="">
        <section am-Contact-us="" am-Flex-Col="between">
            <div am-Contact-us-sections="small" am-Flex-Col="between">
                <div am-Flex-Row="middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/contact_icon.png" alt="">
                    <h5>КОНТАКТЫ</h5>
                </div>
                <p>+7 (999) 193-64 89,  +7 (959) 222-74 19</p>
            </div>
            <div am-Contact-us-sections="small" am-Flex-Col="between">
                <div am-Flex-Row="middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/gps_icon.png" alt="">
                    <h5>РАСПОЛОЖЕНИЕ</h5>
                </div>
                <p>г. Владивосток, ул. Гоголя, 41.</p>
            </div>
            <div am-Contact-us-sections="large" am-Flex-Col="between">
                <div am-Flex-Row="middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/socials_icon.png" alt="">
                    <h5>СОЦ СЕТИ И МЭССЕНДЖЕРЫ</h5>
                </div>
                <div am-Flex-Row="">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/vk_icon.png" alt=""></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/telegram_icon.png" alt=""></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/footer/contacts_icons/whatsapp_icon.png" alt=""></a>
                </div>
            </div>
        </section>
        <section am-Feedback="" am-Flex-Col="middle">
            <h4>ОБРАТНАЯ СВЯЗЬ</h4>
            <div am-Forms="" am-Flex-Col="between">
                <form am-Form="small">
                    <input id="name" type="text" name="name" placeholder="Enter your Name" >
                </form>
                <form am-Form="small">
                    <input id="email" type="email" name="email" placeholder="Enter a valid email address" >
                </form>
                <form am-Form="large">
                    <textarea id="messege" type="text" name="message" placeholder="Enter your message"></textarea>
                </form>
            </div>
            <button am-Button="blue contacts">ОТПРАВИТЬ</button>
        </section>
    </article>
</footer>



