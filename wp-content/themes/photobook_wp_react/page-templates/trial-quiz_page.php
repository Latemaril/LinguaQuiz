<?php
/*
Template Name: trial-quiz_page
*/

get_header();

?>
<main am-Quiz="background" am-Flex-Row="center">
    <div am-Quiz="container" am-Flex-Col="middle">
        <h1 class="quiz-main-title">Time to Quiz</h1>
        <div am-Quiz-forms="" am-Flex-Col="middle">


            <div am-Quiz-form="variants" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>1/9</span></div>
                <div am-Quiz-elements="text medium" am-Flex-Row="center middle">
                    <p>
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
                    </p>
                </div>
                <form am-Quiz-elements="answers">
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_1"><span am-Flex-Row="middle center">Морковь</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_1"><span am-Flex-Row="middle center">Картофель</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_1"><span am-Flex-Row="middle center">Лук</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_1"><span am-Flex-Row="middle center">Свёкла</span></button>
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="variants" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>2/9</span></div>
                <div am-Quiz-elements="text medium" am-Flex-Row="center middle">
                    <p>
                        Этот персонаж диснеевского мультсериала знаменит своей отвагой и непреодолимой тягой к сыру, и даже его имя означает определённый сорт. В оригинальной версии его звали Монти (Монтерей Джек), но из-за малой известности этого сыра в СССР, персонажа переименовали в другой вид сыра.
                        Как звали персонажа в русском дубляже?
                    </p>
                </div>
                <form am-Quiz-elements="answers">
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Чеддер</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Атлет</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Рокфор</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Брынза</span></button>
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="variants" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>3/9</span></div>
                <div am-Quiz-elements="text medium" am-Flex-Row="center middle">
                    <p>
                        Самым сложным иероглифом в китайском языке считается архаичное слово "болтливый". <br>
                        Угадайте, из скольких черточек оно состоит?
                    </p>
                </div>
                <form am-Quiz-elements="answers">
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">12</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">24</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">64</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">50</span></button>
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>


            <div am-Quiz-form="pictures" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>4/9</span></div>
                <div am-Quiz-elements="picture" am-Flex-Row="center middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/quiz/picture_1.png" alt="">
                </div>
                <div am-Quiz-elements="text small" am-Flex-Row="center middle">
                    <p>Разгадайте зашифрованное слово. (Англ.язык)</p>
                </div>
                <form am-Quiz-elements="answer picture">
                    <input type="text" placeholder="Введите ответ" name="answer_4">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="pictures" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>5/9</span></div>
                <div am-Quiz-elements="picture" am-Flex-Row="center middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/quiz/picture_2.png" alt="">
                </div>
                <div am-Quiz-elements="text small" am-Flex-Row="center middle">
                    <p>Разгадайте зашифрованное слово. (Англ.язык)</p>
                </div>
                <form am-Quiz-elements="answer picture">
                    <input type="text" placeholder="Введите ответ" name="answer_5">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>

            <div am-Quiz-form="pictures" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>6/9</span></div>
                <div am-Quiz-elements="picture" am-Flex-Row="center middle">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/quiz/picture_3.png" alt="">
                </div>
                <div am-Quiz-elements="text small" am-Flex-Row="center middle">
                    <p>Разгадайте зашифрованное слово. (Англ.язык)</p>
                </div>
                <form am-Quiz-elements="answer picture">
                    <input type="text" placeholder="Введите ответ" name="answer_6">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>



            <div am-Quiz-form="open-answer" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>7/9</span></div>
                <div am-Quiz-elements="text large" am-Flex-Row="center middle">
                    <p>
                        В романе Джоан Роулинг «Гарри Поттер и философский камень» фигурирует Зеркало, которое отражает заветные мечты людей. В одном из переводов этой книги на русский язык оно названо «Зеркало Еиналеж», в другом — «Зеркалом Джедан», в оригинале — «Mirror of Erised».
                        <br>
                        По какому принципу даны названия этому объекту?
                    </p>
                </div>
                <form am-Quiz-elements="answer open-answer">
                    <input type="text" placeholder="Введите ответ" name="answer_6">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="open-answer" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>8/9</span></div>
                <div am-Quiz-elements="text large" am-Flex-Row="center middle">
                    <p>
                        Определённые слова, встречающиеся в разговорной речи наших предков до XIV века, назывались “нелепый глагол”.
                        <br>
                        Назовите эту группу слов.
                    </p>
                </div>
                <form am-Quiz-elements="answer open-answer">
                    <input type="text" placeholder="Введите ответ" name="answer_8">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="open-answer" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>9/9</span></div>
                <div am-Quiz-elements="text large" am-Flex-Row="center middle">
                    <p>
                        Самая популярная русская фамилия – Иванов. Какая фамилия самая популярная в английском языке, если в Великобритании эту фамилию носят 800 тысяч человек, а в США – 1 миллион 700 тысяч?
                    </p>
                </div>
                <form am-Quiz-elements="answer open-answer">
                    <input type="text" placeholder="Введите ответ" name="answer_9">
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>


        </div>
        <button am-Button="final">ЗАВЕРШИТЬ</button>
    </div>
</main>


