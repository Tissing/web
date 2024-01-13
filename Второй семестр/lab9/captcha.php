<?php
function random_generate(){
    $str = "";
    $digits = "0123456789";
    $letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    for($i = 0; $i < 4; $i++){
        if(rand(0,1) == 0){
            $str .= $digits[rand(0, strlen($digits))];
        } else {
            $str .= $letters[rand(0, strlen($letters))];
        }
    }
    return $str;
}
session_start();

// Создание изображения
$image = imagecreatetruecolor(120, 40);

// Установка цветов
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

// Заполнение фона
imagefill($image, 0, 0, $bg_color);

// Генерация случайного текста для CAPTCHA
$captcha_text = random_generate();

// Запись значения CAPTCHA в сессию
$_SESSION["captcha"] = $captcha_text;

// Рисование текста на изображении
imagettftext($image, 20, 0, 10, 30, $text_color, 'Arial.ttf', $captcha_text);

// Отправка заголовков для изображения
header('Content-Type: image/png');

// Вывод изображения в поток
imagepng($image);

// Очистка памяти
imagedestroy($image);
?>