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
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
                    </p>
                </div>
                <form am-Quiz-elements="answers">
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Морковь</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Картофель</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Лук</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_2"><span am-Flex-Row="middle center">Свёкла</span></button>
                </form>
                <div am-Quiz-elements="next">
                    <button><span>Далее</span></button>
                </div>
            </div>
            <div am-Quiz-form="variants" am-Flex-Col="middle">
                <div am-Quiz-elements="number"><span>3/9</span></div>
                <div am-Quiz-elements="text medium" am-Flex-Row="center middle">
                    <p>
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
                    </p>
                </div>
                <form am-Quiz-elements="answers">
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">Морковь</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">Картофель</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">Лук</span></button>
                    <button am-Button="quiz blue-gradient" type="button"><input type="radio" name="answer_3"><span am-Flex-Row="middle center">Свёкла</span></button>
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/quiz/picture_1.png" alt="">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/quiz/picture_1.png" alt="">
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
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
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
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
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
                        Слово (당근) означает определенный корнеплод, но так как первые согласные в слогах слова совпадают с согласными в другом слове (당연), которое переводится на русский как “конечно”, то корейцы часто используют первое вместо второго просто забавы ради. В русском же языке этот овощ идёт рука об руку с любовью.
                        Какой корнеплод используют корейцы в форме согласия?
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


