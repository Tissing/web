<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab9</title>
    <style>
        div {
            border: 2px solid black;
            padding: 10px;
        }
        body{
            margin: 10px;
        }
    </style>
</head>
<body>
    <p><?php
        $currentYear = date('Y');
        $newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);
        $seconds = $newYear - time();
        $oneDay = 60 * 60 * 24;
        $days = (int)($seconds / $oneDay);
        echo "Задание1. До нового года осталось $days дней!";
    ?></p>
    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p> Задание 2.</p>
            Год: <input type='text' name='yearLab2'>
            <input type="submit">
            <p><?php
                if(isset($_GET['yearLab2'])) {
                    $year = (int)test_input($_GET['yearLab2']);
                    if($year % 400 == 0 || ($year % 100 != 0 && ($year & 3) == 0))
                        echo "$year - високосный год";
                    else
                        echo "$year - не является високосным годом";
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
            ?><p>
        </form> 
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 3.</p>
            Дата: <input type='text' name='lab3Date'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab3Date'])){
                    $day = date("w", strtotime(test_input($_GET['lab3Date'])));
                    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
                    echo '$days[$day]';
                }
                ?></p>
        </form>
    </div>
    
    <div>
        <p>Задание 4.</p>
        <p>Сегодня <?php 
            $date = getdate();
            $months = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
            $weekdays = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
            $month =  $months[$date['mon'] - 1];
            $day = $date['mday'];
            $year = $date['year'];
            $weekday = $weekdays[$date['wday']];
            echo "$day $month $year года, $weekday";
        ?></p>

    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 5.</p>
            Дата: <input type='text' name='lab5Date'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab5Date'])){
                    if(test_input($_GET['lab5Date']) == "") return;
                    $year = date("Y", strtotime(test_input($_GET['lab5Date'])));
                    $month = date("m", strtotime(test_input($_GET['lab5Date'])));
                    $day = date("d", strtotime(test_input($_GET['lab5Date'])));
                    $birthday = mktime(0,0,0, $month, $day, $year);
                    $oneDay = 60 * 60 * 24;

                    if(time() > $birthday)
                        $birthday = mktime(0,0,0, $month, $day, $year + 1);

                    $seconds = $birthday - time();
                    $days = (int)($seconds / $oneDay);
                    echo "До дня рождения $days дней";
                }
                ?></p>
        </form>
    </div>

    <div>
        <p>Задание 6.</p>
        <p><?php 
            $currentDate = getdate();
            $year = $currentDate['year'];
            if($currentDate['mon'] > 5){
                $year++;
            }
            $day = 0;
            for($i = 31; $i > 0; $i--){
                $temp = date('w',strtotime("$i.05.$year"));
                if($temp == 0)
                {
                    $day= $i;
                    break;
                }
            }
            $seconds = mktime(0,0,0,5,$day,$year) - time();
            $oneDay = 60 * 60 * 24;
            $days = (int)($seconds / $oneDay);
            echo "До масленицы $days дней";
        ?></p>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 7.</p>
            Дата: <input type='text' name='lab7Date'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab7Date'])){
                    $lab7Date =explode('.', test_input($_GET['lab7Date']));
                    $day = $lab7Date[0];
                    $month = $lab7Date[1];
                    switch($month){
                        case 1:
                            if($day <= 20)
                            {
                                echo "Козерог";
                            } else {
                                echo "Водолей";
                            }
                            break;
                        case 2:
                            if($day <= 19){
                                echo "Водолей";
                            } else {
                                echo "Рыбы";
                            }
                            break;
                        case 3:
                            if($day <= 20){
                                echo "Рыбы";
                            } else {
                                echo "Овен";
                            }
                            break;
                        case 4:
                            if($day <= 20){
                                echo "Овен";
                            } else {
                                echo "Телец";
                            }
                            break;
                        case 5:
                            if($day <= 21){
                                echo "Телец";
                            } else {
                                echo "Близнецы";
                            }
                            break;
                        case 6:
                            if($day <= 21){
                                echo "Близнецы";
                            } else {
                                echo "Рак";
                            }
                            break;
                        case 7:
                            if($day <= 22){
                                echo "Рак";
                            } else {
                                echo "Лев";
                            }
                            break;
                        case 8:
                            if($day <= 21){
                                echo "Лев";
                            } else {
                                echo "Дева";
                            }
                            break;
                        case 9:
                            if($day <= 23){
                                echo "Дева";
                            } else {
                                echo "Весы";
                            }
                            break;
                        case 10:
                            if($day <= 23){
                                echo "Весы";
                            } else {
                                echo "Скорпион";
                            }
                            break;
                        case 11:
                            if($day <= 22){
                                echo "Скорпион";
                            } else {
                                echo "Стрелец";
                            }
                            break;
                        case 12:
                            if($day <= 22){
                                echo "Стрелец";
                            } else {
                                echo "Козерог";
                            }
                            break;
                    }
                }
                ?></p>
        </form>
    </div>

    <div>
        <p>Задание 8.</p>
        <?php
            $array = ['01.01', '14.02', '07.01', '23.02', '08.03'];
            $currentDate = date("d.m");
            foreach($array as $day){
                if($day == $currentDate){
                    echo "Поздравляем! Сегодня $currentDate праздник!";
                    return;
                }
            }
            echo 'Сегодня не праздник';
        ?>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 9.</p>
            Дата вашего дня рождения: <input type='text' name='lab9Date'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab9Date'])){
                    $lab7Date = explode('.', test_input($_GET['lab9Date']));
                    $day = $lab7Date[0];
                    $month = $lab7Date[1];
                    $zodiac = "";
                    $predicts = ['Рыбы'=> "Будет все хорошо", 'Овен' => "Будет все круто",
                    'Водолей' => "Будет все весело", 'Козерог' => "Будет все здорово",
                    'Телец' => "Будет все отлично", 'Близнецы' => "Будет все прелестно",
                    'Дева' => "Будет все добротно", 'Весы' => "Будет все классно",
                    'Скорпион' => "Будет все зашибись", 'Стрелец' => "Будет все приятно",
                    'Рак' => "Будет все богато", 'Лев' => "Будет все сказачно"];

                    switch($month){
                        case 1:
                            if($day <= 20)
                            {
                                $zodiac =  "Козерог";
                            } else {
                                $zodiac =  "Водолей";
                            }
                            break;
                        case 2:
                            if($day <= 19){
                                $zodiac =  "Водолей";
                            } else {
                                $zodiac =  "Рыбы";
                            }
                            break;
                        case 3:
                            if($day <= 20){
                                $zodiac =  "Рыбы";
                            } else {
                                $zodiac =  "Овен";
                            }
                            break;
                        case 4:
                            if($day <= 20){
                                $zodiac =  "Овен";
                            } else {
                                $zodiac =  "Телец";
                            }
                            break;
                        case 5:
                            if($day <= 21){
                                $zodiac =  "Телец";
                            } else {
                                $zodiac =  "Близнецы";
                            }
                            break;
                        case 6:
                            if($day <= 21){
                                $zodiac =  "Близнецы";
                            } else {
                                $zodiac =  "Рак";
                            }
                            break;
                        case 7:
                            if($day <= 22){
                                $zodiac =  "Рак";
                            } else {
                                $zodiac =  "Лев";
                            }
                            break;
                        case 8:
                            if($day <= 21){
                                $zodiac =  "Лев";
                            } else {
                                $zodiac =  "Дева";
                            }
                            break;
                        case 9:
                            if($day <= 23){
                                $zodiac =  "Дева";
                            } else {
                                $zodiac =  "Весы";
                            }
                            break;
                        case 10:
                            if($day <= 23){
                                $zodiac =  "Весы";
                            } else {
                                $zodiac =  "Скорпион";
                            }
                            break;
                        case 11:
                            if($day <= 22){
                                $zodiac =  "Скорпион";
                            } else {
                                $zodiac =  "Стрелец";
                            }
                            break;
                        case 12:
                            if($day <= 22){
                                $zodiac =  "Стрелец";
                            } else {
                                $zodiac =  "Козерог";
                            }
                            break;
                    }
                    echo $predicts[$zodiac];
                }
                ?></p>
        </form>
    </div>
    
    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 10.</p>
            <textarea name='lab10Text'></textarea>
            <input type='submit'>
            <p><?php
            if(isset($_GET['lab10Text'])){
                $text = test_input($_GET['lab10Text']);
                $countWords = count(explode(' ', $text));
                $countAllChars = mb_strlen($text);
                $countChars = 0;
                for($i = 0; $i < strlen($text); $i++)
                {
                    if($text[$i] == ' ') $countChars++;
                }
                echo "Слов: $countWords <br> Все символы: $countAllChars <br> Кол-во символов не включая пробел: ".$countAllChars - $countChars;
            }   
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 11.</p>
            <textarea name='lab11Text'></textarea>
            <input type='submit'>
            <p><?php
            if(isset($_GET['lab11Text'])){
                $text = test_input($_GET['lab11Text']);
                $counter = [];
                for($i = 0; $i < strlen($text); $i++){
                    if(!isset($counter[$text[$i]]))
                        $counter[$text[$i]] = 0;
                    $counter[$text[$i]]++;
                }
            
                foreach(array_keys($counter) as $char){
                    echo "$char: ".round($counter[$char] / strlen($text) * 100, 2)."%<br>";
                }
            }  
            ?></p>
        </form>
    </div>
    
    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 12</p>
            <input type='text' name='lab12Chars'></input>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab12Chars'])){
                    $chars = str_split($_GET['lab12Chars'], 2);
                    $array = ['жук', 'кот', 'стол', 'телевизор'];
                    
                    foreach($array as $word){
                        for($i = 0; $i < count($chars); $i++)
                        {
                            if(strpos($word, $chars[$i]) === false){
                                break;
                            }
                            if($i == count($chars) - 1){
                                echo $word."<br>";
                            }
                        }
                    }
                }
            ?></p>
        </form>

    </div>


    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 13.</p>
            <textarea name='lab13Text'></textarea>
            <input type='submit'>
            <p><?php
                if(isset($_GET['lab13Text'])){
                    $array = explode(' ',test_input($_GET['lab13Text']));
                    $char = '';
                    natcasesort($array);
                    foreach($array as $word){
                        $temp = mb_strtolower($word);
                        if($temp[0].$temp[1] != $char){
                            $char = $temp[0].$temp[1];
                            echo "<h2>Слова на букву $char</h2><br>";
                        }
                        echo $word."<br>";
                    }
                }
            ?></p>
        </form>
    </div>
    
    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 14.</p>
            <input type='text' name='lab14input'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab14input'])){
                    $st = test_input($_GET['lab14input']);
                    $st = strtr($st, array(
                        'а' => 'a', 'б' => 'b', 'в' => 'v',
                        'г' => 'g', 'д' => 'd', 'е' => 'e',
                        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
                        'и' => 'i', 'й' => 'y', 'к' => 'k',
                        'л' => 'l', 'м' => 'm', 'н' => 'n',
                        'о' => 'o', 'п' => 'p', 'р' => 'r',
                        'с' => 's', 'т' => 't', 'у' => 'u',
                        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
                        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
                        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
                        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            
                        'А' => 'A', 'Б' => 'B', 'В' => 'V',
                        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
                        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
                        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
                        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
                        'О' => 'O', 'П' => 'P', 'Р' => 'R',
                        'С' => 'S', 'Т' => 'T', 'У' => 'U',
                        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
                        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
                        'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
                        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
                    ));
                    echo $st;
                }

            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 15.</p>
            <input type='text' name='lab15input'><br>
            <input type='radio' id='rad1' name='lab15translit' value='lab15rad1' checked/>
            <label for='rad1'>Транслит</label><br>
            <input type='radio' id='rad2' name='lab15translit'value='lab15rad2' />
            <label for='rad2'>Обратно</label><br>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab15input'])){
                    $letters = array(
                        'а' => 'a', 'б' => 'b', 'в' => 'v',
                        'г' => 'g', 'д' => 'd', 'е' => 'e',
                        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
                        'и' => 'i', 'й' => 'y', 'к' => 'k',
                        'л' => 'l', 'м' => 'm', 'н' => 'n',
                        'о' => 'o', 'п' => 'p', 'р' => 'r',
                        'с' => 's', 'т' => 't', 'у' => 'u',
                        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
                        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
                        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
                        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
                
                        'А' => 'A', 'Б' => 'B', 'В' => 'V',
                        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
                        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
                        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
                        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
                        'О' => 'O', 'П' => 'P', 'Р' => 'R',
                        'С' => 'S', 'Т' => 'T', 'У' => 'U',
                        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
                        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
                        'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
                        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
                    );
                    if(isset($_GET['lab15translit']) && test_input($_GET['lab15translit']) == 'lab15rad2') 
                        $letters = array_flip($letters);
                    $st = test_input($_GET['lab15input']);
                    $st = strtr($st, $letters);
                    echo $st;
                }   
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
        <p>Задание 16.</p>
            <?php
                $questions = ['Год крещения Руси', 'Фамилия нынешнего президента России', 'Столица России'];
                $answer = ['988', 'Путин', 'Москва'];
                if(isset($_GET['lab16answer1']) && isset($_GET['lab16answer2']) && isset($_GET['lab16answer3']))
                {
                    $useranswer = [test_input($_GET['lab16answer1']), test_input($_GET['lab16answer2']), test_input($_GET['lab16answer3'])];
                    for($i = 0; $i < count($useranswer); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p>";
                        if($answer[$i] == $useranswer[$i]){
                            echo "<p><span style='color:green;'>Верно!</span> Ваш ответ: $useranswer[$i] <br> </p>";
                        } else {
                            echo "<p><span style='color:red;'>Неверно!</span> Ваш ответ: $useranswer[$i] <br> Верный ответ: $answer[$i] <br>";
                        }
                    }

                } else {
                    for($i = 0; $i < count($questions); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p><input type='text' name='lab16answer".($i + 1)."' ><br>";
                    }
                    echo "<p><input type='submit'></p>";
                }
            ?>
        </form>

    </div>

    <div>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
        <p>Задание 17.</p>
            <?php
                $questions = ['Год крещения Руси', 'Фамилия нынешнего президента России', 'Столица России'];
                $answer = ['988', 'Путин', 'Москва'];
                $arrayanswers = [['1023','988','658'], ['Медведев','Ельцин','Путин'], ['Москва', 'Санкт-Петербуг', 'Владивосток']];

                if(isset($_GET['lab17rad0']) && isset($_GET['lab17rad1']) && isset($_GET['lab17rad2']))
                {
                    $useranswer = [$arrayanswers[0][(int)test_input($_GET['lab17rad0'])],
                                    $arrayanswers[1][(int)test_input($_GET['lab17rad1'])],
                                    $arrayanswers[2][(int)test_input($_GET['lab17rad2'])]];
                    for($i = 0; $i < count($useranswer); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p>";
                        if($answer[$i] == $useranswer[$i]){
                            echo "<p><span style='color:green;'>Верно!</span> Ваш ответ: $useranswer[$i] <br> </p>";
                        } else {
                            echo "<p><span style='color:red;'>Неверно!</span> Ваш ответ: $useranswer[$i] <br> Верный ответ: $answer[$i] <br>";
                        }
                    }

                } else {
                    for($i = 0; $i < count($questions); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p>";
                        for($j = 0; $j < count($arrayanswers[$i]); $j++)
                        {
                            echo "<input type='radio' id='rad$i$j' name='lab17rad$i' value='$j'>";
                            echo "<label for='rad$i$j'>".$arrayanswers[$i][$j]."</label><br>";
                        }
                        
                    }
                    echo "<p><input type='submit'></p>";
                }
            ?>
        </form>
    </div>

    <div>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
        <p>Задание 18.</p>
            <?php
                $questions = ['Нетипизированные языки программирования', 'Кто был президентом России', 'Города, которые были столицой России'];
                $answer = [['Python'], ['Медведев', 'Путин'], ['Москва','Санкт-Петербург']];
                $arrayanswers = [['C#','Pascal','Python'], ['Медведев','Жириновский','Путин'], ['Москва', 'Санкт-Петербург', 'Владивосток']];

                if((isset($_GET['lab18cb00']) || isset($_GET['lab18cb01']) || isset($_GET['lab18cb02']))
                && (isset($_GET['lab18cb10']) || isset($_GET['lab18cb11']) || isset($_GET['lab18cb12']))
                && (isset($_GET['lab18cb20']) || isset($_GET['lab18cb21']) || isset($_GET['lab18cb22'])))
                {
                    $useranswer = [[],[],[]];
                    for($i = 0; $i < 3; $i++){
                        $c = 0;
                        for($j = 0; $j < 3; $j++){
                            if(isset($_GET["lab18cb$i$j"]))
                            {
                                $useranswer[$i][$c] = $arrayanswers[$i][(int)test_input($_GET["lab18cb$i$j"])];
                                $c++;
                            }
                        } 
                    }                    

                    for($i = 0; $i < count($useranswer); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p>";
                        if(count($useranswer[$i]) != count($answer[$i])){
                            echo "<p><span style='color:red;'>Неверно!</span> Ваш ответ: ".implode(", ", $useranswer[$i])."<br>";
                            echo "Верный ответ: ".implode(", ", $answer[$i])."<br>";
                        } else {
                            for($j = 0; $j < count($useranswer[$i]); $j++){
                                if($answer[$i][$j] != $useranswer[$i][$j]){
                                    echo "<p><span style='color:red;'>Неверно!</span> Ваш ответ: ".implode(", ", $useranswer[$i])."<br>";
                                    echo "Верный ответ: ".implode(", ", $answer[$i])."<br>";    
                                    break;
                                } 
                                if($j == count($useranswer[$i]) - 1){
                                    echo "<p><span style='color:green;'>Верно!</span> Ваш ответ: ".implode(", ", $useranswer[$i])."<br> </p>";
                                }
                            }
                        }   
                    }

                } else {
                    for($i = 0; $i < count($questions); $i++){
                        echo "<p>".($i+1).". $questions[$i]</p>";
                        for($j = 0; $j < count($arrayanswers[$i]); $j++)
                        {
                            echo "<input type='checkbox' id='cb$i$j' name='lab18cb$i$j' value='$j'>";
                            echo "<label for='cb$i$j'>".$arrayanswers[$i][$j]."</label><br>";
                        }
                        
                    }
                    echo "<p><input type='submit'></p>";
                }
            ?>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 19.</p>
            <input type='text' name='lab19input'>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab19input'])){
                    $num = (int)test_input($_GET['lab19input']);
                    $result = 1;
                    for($i = 1; $i <= $num; $i++){
                        $result *= $i;
                    }
                    echo $result;
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'>
            <p>Задание 20.</p>
            <label>a</label>
            <input type='text' name='lab20a'><br>
            <label>b</label>
            <input type='text' name='lab20b'><br>  
            <label>c</label>
            <input type='text' name='lab20c'><br>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab20a']) && isset($_GET['lab20b']) && isset($_GET['lab20c'])){
                    $a = (int)test_input($_GET['lab20a']);
                    $b = (int)test_input($_GET['lab20b']);
                    $c = (int)test_input($_GET['lab20c']);

                    $D = $b * $b - 4 * $a * $c;
                    if($D > 0){
                        $x1 = (-$b + sqrt($D)) / (2 * $a);
                        $x2 = (-$b - sqrt($D)) / (2 * $a);
                        echo "x1 = $x1, x2 = $x2";
                    } else if ($D == 0){
                        $x = -$b / (2 * $a);
                        echo "x = $x";
                    } else {
                        echo "Нет корней.";
                    }
                }
            ?></p>
        </form>
    </div>
    
    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 21.</p>
            Число а <input type='text' name='lab21a'><br>
            Число b <input type='text' name='lab21b'><br>
            Число c <input type='text' name='lab21c'><br>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab21a']) && isset($_GET['lab21b']) && isset($_GET['lab21c'])){
                    $a = (int)test_input($_GET['lab21a']);
                    $b = (int)test_input($_GET['lab21b']);
                    $c = (int)test_input($_GET['lab21c']);
                    
                    if($a * $a == $b * $b + $c * $c 
                    || $b * $b == $a * $a + $c * $c 
                    || $c * $c == $b * $b + $a * $a){
                        echo "Числа $a, $b, $c являются тройкой Пифагора";
                    } else {
                        echo "Числа $a, $b, $c не являются тройкой Пифагора";
                    }
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 22.</p>
            <p>Число <input type='text' name='lab22input'></p>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab22input'])){
                    $num = (int)test_input($_GET['lab22input']);
                    echo "Делители числа $num:<br>";
                    for($i = 1; $i <= $num; $i++)
                    {
                        if($num % $i == 0){
                            echo $i."<br>";
                        }
                    }
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 23.</p>
            <p>Число <input type='text' name='lab23input'></p>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab23input'])){
                    $num = (int)test_input($_GET['lab23input']);
                    $array = [];
                    $del = 2;
                    while($num > 1){
                        if($num % $del == 0){
                            array_push($array, $del);
                            $num /= $del;
                        } else {
                            $del++;
                        }
                    }
                    
                    echo test_input($_GET['lab23input'])." = ".implode(" * ", $array);
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 24.</p>
            <p>Число a <input type='text' name='lab24a'></p>
            <p>Число b <input type='text' name='lab24b'></p>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab24a']) && isset($_GET['lab24b'])){
                    $a = (int)test_input($_GET['lab24a']);
                    $b = (int)test_input($_GET['lab24b']);
                    echo "Общие делители для чисел $a и $b: <br>";
                    for($i = 1; $i <= ($a < $b ? $a : $b); $i++){
                        if($a % $i == 0 && $b % $i == 0){
                            echo $i."<br>";
                        }
                    }
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 25.</p>
            <p>Число a <input type='text' name='lab25a'></p>
            <p>Число b <input type='text' name='lab25b'></p>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab25a']) && isset($_GET['lab25b'])){
                    $a = (int)test_input($_GET['lab25a']);
                    $b = (int)test_input($_GET['lab25b']);
                    echo "Наибольший общий делитель для чисел $a и $b: <br>";
                    $nod = 1;
                    for($i = 2; $i <= ($a < $b ? $a : $b); $i++){
                        if($a % $i == 0 && $b % $i == 0){
                            $nod = $i;
                        }
                    }
                    echo $nod."<br>";
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 26.</p>
            <p>Число a <input type='text' name='lab26a'></p>
            <p>Число b <input type='text' name='lab26b'></p>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab26a']) && isset($_GET['lab26b'])){
                    $a = (int)test_input($_GET['lab26a']);
                    $b = (int)test_input($_GET['lab26b']);
                    $i = ($a < $b ? $a : $b);
                    while(TRUE){
                        if($i % $a == 0 && $i % $b == 0){
                            echo $i."<br>";
                            break;
                        }
                        $i++;
                    }
                    
                }
            ?></p>
        </form>
    </div>

    <div>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='get'> 
            <p>Задание 27.</p>
            <?php
                echo "<p>День: <select name='lab27selectDay'>";
                for($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                echo "</select></p>";

                echo "<p>Месяц: <select name='lab27selectMonth'>";
                for($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                echo "</select></p>";

                echo "<p>Год: <select name='lab27selectYear'>";
                for($i = 1990; $i <= 2025; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                echo "</select></p>";
            ?>
            <input type='submit'>
            <p><?php 
                if(isset($_GET['lab27selectDay']) && isset($_GET['lab27selectMonth']) && isset($_GET['lab27selectYear'])){
                    $day = test_input($_GET['lab27selectDay']);
                    $month = test_input($_GET['lab27selectMonth']);
                    $year = test_input($_GET['lab27selectYear']);
                    $weekday = date("w", strtotime("$day.$month.$year"));
                    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
                    echo "$day.$month.$year - это $days[$weekday]";
                }
            ?></p>
        </form>
    </div>
</body> 
</html>