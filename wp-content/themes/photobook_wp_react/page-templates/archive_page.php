<?php
/*
Template Name: archive-quiz_page
*/

get_header();
?>

<header am-Header="" am-Flex-Row="between middle">
    <h2>LinguaQuiz</h2>
    <ul am-Header-buttons="" am-Flex-Row="between middle">
        <li am-Flex-Row="middle"><a class="js-button__main">Главная</a></li>
        <li am-Flex-Row="middle"><a am-Current-page href="">Предыдущие квизы</a></li>
    </ul>
</header>

<article am-Announcements="">
    <div am-Announcements-image="">
        <div am-Announcements-text="" am-Flex-Col="middle">
            <h2>Заглянем в прошлое</h2>
            <p>
                Великолепное событие произошло в стенах нашей школы в 2022 году - увлекательный и захватывающий квиз, который взорвал мозги всех участников! Ученики разных классов собрались вместе, чтобы показать свои языковые и общие знания в дружественной атмосфере соревнования.
            </p>
            <a href="">Скачать презентацию</a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/anonses.jpg" alt="">
    </div>
</article>

<section am-gallery="" am-Flex-Col="middle">
    <h1>Фотографии с мероприятия</h1>
    <div class="gallery">
        <?php
        function PhotosInFolder($folderPath)
        {
            $photos = [];

            $files = scandir($folderPath); // Получаем список файлов в папке

            foreach ($files as $file) {
                $extension = pathinfo($file, PATHINFO_EXTENSION);

                // Проверяем, является ли файл изображением (можете изменить условие в зависимости от нужных форматов)
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    $photos[] = $file; // Добавляем файл в массив фотографий
                }
            }

            return $photos;
        }

        $folderPath = get_stylesheet_directory(). '/assets/img/gallery/';

        $chunkedArray = array_chunk(PhotosInFolder($folderPath), ceil(count(PhotosInFolder($folderPath)) / 4));

        $firstArray = $chunkedArray[0];
        $secondArray = $chunkedArray[1];
        $thirdArray = $chunkedArray[2];
        $fourthArray = $chunkedArray[3];
        ?>


        <div class="gallery__column">
            <?php
            foreach ($firstArray as $photo) {
                echo '
                            <div class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="' . get_stylesheet_directory_uri() . '/assets/img/gallery/' . $photo . '" class="gallery__image">
                                </figure>
                            </div>
                        ';
            }
            ?>
        </div>

        <div class="gallery__column">
            <?php
            foreach ($secondArray as $photo) {
                echo '
                            <div class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="' . get_stylesheet_directory_uri() . '/assets/img/gallery/' . $photo . '" class="gallery__image">
                                </figure>
                            </div>
                        ';
            }
            ?>
        </div>

        <div class="gallery__column">
            <?php
            foreach ($thirdArray as $photo) {
                echo '
                            <div class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="' . get_stylesheet_directory_uri() . '/assets/img/gallery/' . $photo . '" class="gallery__image">
                                </figure>
                            </div>
                        ';
            }
            ?>
        </div>

        <div class="gallery__column">
            <?php
            foreach ($fourthArray as $photo) {
                echo '
                            <div class="gallery__link">
                                <figure class="gallery__thumb">
                                    <img src="' . get_stylesheet_directory_uri() . '/assets/img/gallery/' . $photo . '" class="gallery__image">
                                </figure>
                            </div>
                        ';
            }
            ?>
        </div>

    </div>
</section>






