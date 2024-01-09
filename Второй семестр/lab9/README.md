<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №9 <br> "Разработка серверных скриптов" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Разработка на языке PHP.</p>

<h2 align="center">Цели и задачи</h2>

1. По заходу на страницу выведите сколько дней осталось до нового года. 

2. Дан инпут и кнопка. В этот инпут вводится год. По нажатию на кнопку выведите на экран, високосный он или нет. 

3. Дан инпут и кнопка. В этот инпут вводится дата в формате '01.12.1990'. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, 'воскресенье'. 

4. По заходу на страницу выведите текущую дату в формате '12 мая 2015 года, воскресенье'. 

5. Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '01.12.1990'. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя. 

6. По заходу на страницу выведите сколько дней осталось до ближайшей масленницы (последнее воскресенье весны). 

7. Дан инпут и кнопка. В этот инпут вводится дата рождения в формате '31.12'. По нажатию на кнопку выведите знак зодиака пользователя. 

8. Дан массив праздников. По заходу на страницу, если сегодня праздник, то поздравьте пользователя с этим праздником. 

9. Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов на несколько дней вперед для каждого знака зодиака. По заходу на страницу спросите у пользователя дату рождения, определите его знак зодиака и выведите предсказание для этого знака зодиака на текущий день. 

10. Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов в тексте, количество символов в тексте, количество символов за вычетом пробелов. 

11. Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте. 

12. Дан массив слов, инпут и кнопка. В инпут вводится набор букв. По нажатию на кнопку выведите на экран те слова, которые содержат в себе все введенные буквы. 

13. Дан текстареа и кнопка. В текстареа через пробел вводятся слова. По нажатию на кнопку выведите слова в таком виде: сначала заголовок 'слова на букву а' и под ним все слова, которые начинаются на 'а', потом заголовок 'слова на букву б' и все слова на 'б' и так далее. Буквы должны идти в алфавитном порядке. Брать следует только те буквы, на которые начинаются наши слова. То есть: если нет слов, к примеру, на букву 'в' - такого заголовка тоже не будет. 

14. Дан инпут и кнопка. В этот инпут вводится строка на русском языке. По нажатию на кнопку выведите на экран транслит этой строки. 

15. Дан инпут, 2 радиокнопочки и кнопка. В инпут вводится строка, а с помощью радиокнопочек выбирается - нужно преобразовать эту строку в транслит или из транслита обратно. 

16. Дан массив с вопросами и правильными ответами. Реализуйте тест: выведите на экран все вопросы, под каждым инпут. Пользователь читает вопрос, пишет свой ответ в инпут. Когда вопросы заканчиваются - он жмет на кнопку, страница обновляется и вместо инпутов под вопросами появляется сообщение вида: 'ваш ответ: ... верно!' или 'ваш ответ: ... неверно! Правильный ответ: ...'. Правильно отвеченные вопросы должны гореть зеленым цветом, а неправильно - красным. 

17. Модифицируем предыдущую задачу: пусть теперь тест показывает варианты ответов и радиокнопочки. Пользователь должен выбрать один и вариантов. 

18. Модифицируем предыдущую задачу: пусть теперь на один вопрос может быть несколько правильных ответов. Пользователь должен отметить один или несколько чекбоксов. 

19. Напишите скрипт, который будет считать факториал числа. Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат. 

20. Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения. 

21. Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных. 

22. Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа. 

23. Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку разложите число на простые множители. 

24. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел. 

25. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наибольший общий делитель этих двух чисел. 

26. Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите наименьшее число, которое делится и на одно, и на второе из введенных чисел. 

27. Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31, второй селект - это месяцы от января до декабря, а третий - это годы от 1990 до 2025. С помощью этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате, например, ‘воскресенье'. 


<h2 align="center">Решение задач</h2>

1. 
```php
$currentYear = date('Y');
$newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1);
$seconds = $newYear - time();
$oneDay = 60 * 60 * 24;
$days = (int)($seconds / $oneDay);
echo "Задание1. До нового года осталось $days дней!";
```

2. 
```php
if(isset($_GET['yearLab2'])) {
    $year = (int)test_input($_GET['yearLab2']);
    if($year % 400 == 0 || ($year % 100 != 0 && ($year & 3) == 0))
        echo "$year - високосный год";
    else
        echo "$year - не является високосным годом";
}
```

3. 
```php
if(isset($_GET['lab3Date'])){
    $day = date("w", strtotime(test_input($_GET['lab3Date'])));
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    echo $days[$day];
}
```

4. 
```php
$date = getdate();
$months = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
$weekdays = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
$month =  $months[$date['mon'] - 1];
$day = $date['mday'];
$year = $date['year'];
$weekday = $weekdays[$date['wday']];
echo "$day $month $year года, $weekday";
```

5. 
```php
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
```

6. 
```php
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
```

7. 
```php
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
```

8. 
```php
$array = ['01.01', '14.02', '07.01', '23.02', '08.03'];
$currentDate = date("d.m");
foreach($array as $day){
    if($day == $currentDate){
        echo "Поздравляем! Сегодня $currentDate праздник!";
        return;
    }
}
echo 'Сегодня не праздник';
```

9. 
```php
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
```

10. 
```php
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
```

11. 
```php
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
```

12. 
```php
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
```

13. 
```php
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
```

14. 
```php
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
```

15. 
```php
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
```

16. 
```php
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
```

17. 
```php
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
```

18. 
```php
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
```

19. 
```php
if(isset($_GET['lab19input'])){
    $num = (int)test_input($_GET['lab19input']);
    $result = 1;
    for($i = 1; $i <= $num; $i++){
        $result *= $i;
    }
    echo $result;
}
```

20. 
```php
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
```

21. 
```php
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
```

22. 
```php
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
```

23. 
```php
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
```

24. 
```php
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
```

25. 
```php
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
```

26. 
```php
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
```

27. 
```php
if(isset($_GET['lab27selectDay']) && isset($_GET['lab27selectMonth']) && isset($_GET['lab27selectYear'])){
    $day = test_input($_GET['lab27selectDay']);
    $month = test_input($_GET['lab27selectMonth']);
    $year = test_input($_GET['lab27selectYear']);
    $weekday = date("w", strtotime("$day.$month.$year"));
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    echo "$day.$month.$year - это $days[$weekday]";
}
```


<h2 align="center">Вывод</h2>