<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №7 <br> "Разработка серверных скриптов" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Работа с PHP и Node.js</p>

<h2 align="center">Цели и задачи</h2>

1.  Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
2.	Напишите скрипт, который считает количество секунд в часе.
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
```php
<?php
	$var = 1;
	$var = $var + 12;
	$var = $var - 14;
	$var = $var * 5;
	$var = $var / 7;
	$var = $var + 1;
	$var = $var - 1;
	echo $var;
?>
```
4.	 Создайте переменную `$a` и присвойте ей значение 3. Выведите значение этой переменной на экран.
5.	Создайте переменные `$a=10` и `$b=2`. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6.	Создайте переменные `$c=15` и `$d=2`. Просуммируйте их, а результат присвойте переменной `$result`. Выведите на экран значение переменной `$result`.
7.	Создайте переменные `$a=10`, `$b=2` и `$c=5`. Выведите на экран их сумму.
8.	 Создайте переменные `$a=17` и `$b=10`. Отнимите от `$a` переменную `$b` и результат присвойте переменной `$c`. Затем создайте переменную `$d`, присвойте ей значение 7. Сложите переменные `$c` и `$d`, а результат запишите в переменную `$result`. Выведите на экран значение переменной `$result`.
9.	Создайте переменную `$text` и присвойте ей значение `'Привет, Мир!'`. Выведите значение этой переменной на экран.
10.	 Создайте переменные `$text1='Привет, '` и `$text2='Мир!'`. С помощью этих переменных и операции сложения строк выведите на экран фразу `'Привет, Мир!'`.
11.	 Создайте переменную `$name` и присвойте ей ваше имя. Выведите на экран фразу `'Привет, %Имя%!'`. Вместо `%Имя%` должно стоять ваше имя.
12.	 Создайте переменную `$age` и присвойте ей ваш возраст. Выведите на экран `'Мне %Возраст% лет!'`.
13.	Создайте переменную `$text` и присвойте ей значение `'abcde'`. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
15.	 Создайте переменную `$num` и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
```
20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
```php
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
```
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;
```
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
```

### CodeWars
* https://www.codewars.com/kata/534ea96ebb17181947000ada
* https://www.codewars.com/kata/5552101f47fc5178b1000050
* https://www.codewars.com/kata/52988f3f7edba9839c00037d
* https://www.codewars.com/kata/5506b230a11c0aeab3000c1f
* https://www.codewars.com/kata/57bf599f102a39bb1e000ae5
* https://www.codewars.com/kata/5901f361927288d961000013
* https://www.codewars.com/kata/546f922b54af40e1e90001da
* https://www.codewars.com/kata/5679aa472b8f57fb8c000047
* https://www.codewars.com/kata/57a2013acf1fa5bfc4000921
* https://www.codewars.com/kata/5a995c2aba1bb57f660001fd
* https://www.codewars.com/kata/57ed30dde7728215300005fa
* https://www.codewars.com/kata/582746fa14b3892727000c4f
* https://www.codewars.com/kata/5b39e3772ae7545f650000fc



<h2 align="center">Решение задач</h2>

1. 
```php
$var = 'hello';
echo $var[0];
echo $var[1];
echo $var[4];
```

2. 
```php
$seconds = 60 * 60;
echo $seconds;
```

3. 
```php
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;
```

4. 
```php
$a = 3;
echo $a;
```

5. 
```php
$a = 10;
$b = 2;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
```

6. 
```php
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
```

7. 
```php
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c;
```

8. 
```php
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
```

9. 
```php
$text = 'Привет, Мир!';
echo $text;
```

10. 
```php
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1 + $text2;
echo $text1 . $text2;
```

11. 
```php
$name = 'Вячеслав';
echo 'Привет, '. $name . '!';
```

12. 
```php
$age = '20';
echo 'Мне '. $age . ' лет!';
```

13. 
```php
$text = 'abcde';
echo $text[0] . '<br>';
echo $text[2] . '<br>';
echo $text[4] . '<br>';
```

14. 
```php
$text = 'abcde';
$text[0] = '!';
echo $text;
```

15. 
```php
$num = '12345';
echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
```

16. 
```php
$sec_in_hour = 60 * 60;
$sec_in_day = 24 * $sec_in_hour;
$sec_in_month = 31 * $sec_in_day;
echo "Секунд в часе " . $sec_in_hour . "<br>";
echo "Секунд в дне " . $sec_in_day . "<br>";
echo"Секунд в месяце " . $sec_in_month . "<br>";
```

17. 
```php
$hour = 12;
$min = 47;
$sec = 50;
echo $hour .':'. $min .':'. $sec
```

18. 
```php
$num = 5;
$num*=$num;
echo $num;
```

19. 
```php
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
```

20. 
```php
$text = 'Я';
$text .=' хочу';
$text .=' знать';
$text .=' PHP!';
echo $text;
```

21. 
```php
$var = 10;
$var++;
$var++;
$var--;
echo $var;
```

22. 
```php
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;

```

### CodeWars

1. 
```javascript
function breakChocolate(n,m) {
  
  return (n * m === 0) ? 0 : n * m - 1;
}
```

2. 
```javascript
function digPow(n, p){
  let sum = 0;
  for(let i = 0, j = p; i < n.toString().length; i++, j++){
    sum += Math.pow(parseInt(n.toString()[i]), j);
  }
  
  return sum % n == 0 ? sum / n : -1;

}
```
3. 
```javascript
function reject(array, predicate) {
  let result = [];
  for(let i in array){
    if(!predicate(array[i])) result.push(array[i]);
  }
  return result;
}
```
4. 
```javascript
function evaporator(content, evap_per_day, threshold){ 
  let days = 0;
  threshold = threshold * 0.01 * content
  
  while(content >= threshold){
    content *= ((100 - evap_per_day) * 0.01);
    days++;
  }
  return days;
}
```
5. 
```javascript
var fibsFizzBuzz = function(n) {
    let array = [];
    for(let i = 0; i < n; i++){
      if (i == 0 || i == 1) {
        array.push(1);
      }
      else {
        array.push(array[i - 2] + array[i - 1]);
      }
    }
    for(let i = 0; i < n; i++)
    {
        if(array[i] % 3 == 0 & array[i] % 5 == 0) array[i] = 'FizzBuzz';
        if(array[i] % 3 == 0) array[i] = 'Fizz';
        if(array[i] % 5 == 0) array[i] = 'Buzz';
    }
    return array;
  }
```
6. 
```javascript
function product(values) {
  let mp = 1;
  for(let i in values){
    mp *= values[i];
  }
  return values == null || values.length == 0 ? null : mp;
}
```
7. 
```javascript
function alphabetPosition(text) {
  let result = "";
  for (let i = 0; i < text.length; i++){
    let code = text.toUpperCase().charCodeAt(i)
    if (code > 64 && code < 91) result += (code - 64) + " ";
  }

  return result.slice(0, result.length-1);
}
```
8. 
```javascript
function findEvenIndex(arr)
{
  for(let i = 0; i < arr.length; i++){
    let sum1 = 0;
    for(let j = 0; j < i; j++){
      sum1 += arr[j];
    }
    
    let sum2 = 0;
    for(let j = i + 1; j < arr.length; j++){
      sum2 += arr[j];
    }
    
    if(sum1 == sum2) return i;
  }
  
  return -1;
}
```
9. 
```javascript
function findAverage(array) {
  let avarage = 0;
  for(let i in array)
    avarage += array[i];
  return array.length == 0 ? 0 : avarage / array.length;
}
```
10. 
```javascript
function scrollingText(text){
  text = text.toUpperCase();
  let array = [text];
  for(let i = 0; i < text.length - 1; i++){
    let texttemp = text.split("");
    texttemp.push(texttemp.shift());
    text = texttemp.join("");
    array.push(text);
  }
  return array;
}
```
11. 
```javascript
function bump(str){
  let sum = 0;
  let array = str.split("");
  for(let i in array){
    if(array[i] == "n") sum++;
    if(sum > 15) return "Car Dead";
  }
  return "Woohoo!";
}
```
12. 
```javascript
function countDevelopers(list) {
  let count = 0;
  for(let i in list)
    if(list[i].continent === 'Europe' && list[i].language === 'JavaScript') count++;
  return count;
}
```

13. 
```javascript
function removeDuplicateWords (s) {
  let array = s.split(" ");
  let result = [];
  for(let i in array){
    if(result.indexOf(array[i]) == -1)
      result.push(array[i]);
  }
  return result.join(" ");
}
```

### QR-код
```javascript
const url = req.query.url;
  
if (!url) {
  return resp.status(400).send('URL не указан.');
}

try {
  const qr = await QRCode.toDataURL(url);
  resp.send(`<img src="${qr}" />`);
} catch (err) {
  resp.status(500).send('Ошибка при создании QR-кода.');
}
```

### Отправка email
```javascript
const email = req.query.email;
let transporter = nodemailer.createTransport({
    service: 'Gmail',
    auth: {
        user: '',
        pass: ''
    }
}); 

var mailOptions = {
    from: '',
    to: email,
    subject: 'Hello',
    html: '<h1>Test</h1>'
};

transporter.sendMail(mailOptions);
```

### Парсинг
```javascript

```
<h2 align="center">Вывод</h2>
Ознакомился с синтаксисом PHP.