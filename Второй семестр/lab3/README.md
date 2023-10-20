<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №3 <br> "node.js" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Написание кода на js и загрузка его на сервер.</p>

<h2 align="center">Цели и задачи</h2>

1. Что выведет код ниже?
```javascript
alert( null || 2 || undefined );1
```

2. Что выведет код ниже?
```javascript
alert( alert(1) || 2 || alert(3) );
```

3. Что выведет код ниже?
```javascript
alert( 1 && null && 2 );
```

4. Что выведет alert (И)?
```javascript
alert( alert(1) && alert(2) );
```

5. Что выведет этот код?
```javascript
alert( null || 2 && 3 || 4 );
```

6. Напишите условие `if` для проверки, что переменная age находится в диапазоне между 14 и 90 включительно. «Включительно» означает, что значение переменной age может быть равно 14 или 90.

7. Напишите условие `if` для проверки, что значение переменной age НЕ находится в диапазоне 14 и 90 включительно. Напишите два варианта: первый с использованием оператора НЕ !, второй – без этого оператора.

8. Какие из перечисленных ниже `alert` выполнятся?
Какие конкретно значения будут результатами выражений в условиях `if(...)`?

```javascript
if (-1 || 0) alert( 'first' );
if (-1 && 0) alert( 'second' );
if (null || -1 && 1) alert( 'third' );
```

9. Проверка логина
важность: 3
Напишите код, который будет спрашивать логин с помощью prompt.

Если посетитель вводит «Админ», то prompt запрашивает пароль, если ничего не введено или нажата клавиша Esc – показать «Отменено», в противном случае отобразить «Я вас не знаю».

Пароль проверять так:

Если введён пароль «Я главный», то выводить «Здравствуйте!»,
Иначе – «Неверный пароль»,
При отмене – «Отменено».
Блок-схема:

Для решения используйте вложенные блоки `if`. Обращайте внимание на стиль и читаемость кода.

Подсказка: передача пустого ввода в приглашение prompt возвращает пустую строку ''. Нажатие клавиши Esc во время запроса возвращает `null`.

10. Какое последнее значение выведет этот код? Почему?

```javascript
let i = 3;
while (i) {
  alert( i-- );
}
```

11. Для каждого цикла запишите, какие значения он выведет. Потом сравните с ответом.

Оба цикла выводят `alert` с одинаковыми значениями или нет?

Префиксный вариант `++i`:

```javascript
let i = 0;
while (++i < 5) alert( i );
```

Постфиксный вариант `i++`

```javascript
let i = 0;
while (i++ < 5) alert( i );
```

12. Для каждого цикла запишите, какие значения он выведет. Потом сравните с ответом. Оба цикла выведут alert с одинаковыми значениями или нет?

Постфиксная форма:
```javascript
for (let i = 0; i < 5; i++) alert( i );
```

Префиксная форма:
```javascript
for (let i = 0; i < 5; ++i) alert( i );
```

13. При помощи цикла `for` выведите чётные числа от 2 до 10.

14. Перепишите код, заменив цикл `for` на `while`, без изменения поведения цикла.
```javascript
for (let i = 0; i < 3; i++) {
  alert( `number ${i}!` );
}
```

15. Напишите цикл, который предлагает prompt ввести число, большее 100. Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее. Цикл должен спрашивать число пока либо посетитель не введёт число, большее 100, либо не нажмёт кнопку Отмена (ESC). Предполагается, что посетитель вводит только числа. Предусматривать обработку нечисловых строк в этой задаче необязательно.

16. Натуральное число, большее 1, называется простым, если оно ни на что не делится, кроме себя и 1. Другими словами, n > 1 – простое, если при его делении на любое число кроме 1 и n есть остаток. Например, 5 — это простое число, оно не может быть разделено без остатка на 2, 3 и 4. Напишите код, который выводит все простые числа из интервала от 2 до n. Для n = 10 результат должен быть 2,3,5,7.

17. Напишите `if..else`, соответствующий следующему `switch`:
```javascript
switch (browser) {
  case 'Edge':
    alert( "You've got the Edge!" );
    break;
  case 'Chrome':
  case 'Firefox':
  case 'Safari':
  case 'Opera':
    alert( 'Okay we support these browsers too' );
    break;

  default:
    alert( 'We hope that this page looks ok!' );
}
```

18. Перепишите код с использованием одной конструкции `switch`:
```javascript
const number = +prompt('Введите число между 0 и 3', '');

if (number === 0) {
  alert('Вы ввели число 0');
}

if (number === 1) {
  alert('Вы ввели число 1');
}

if (number === 2 || number === 3) {
  alert('Вы ввели число 2, а может и 3');
}
```

19. Следующая функция возвращает `true`, если параметр `age` больше 18. В ином случае она запрашивает подтверждение через `confirm` и возвращает его результат:

```javascript
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    // ...
    return confirm('Родители разрешили?');
  }
}
```
Будет ли эта функция работать как-то иначе, если убрать `else`?

```javascript
function checkAge(age) {
  if (age > 18) {
    return true;
  }
  // ...
  return confirm('Родители разрешили?');
}
```
Есть ли хоть одно отличие в поведении этого варианта?

20. Следующая функция возвращает `true`, если параметр age больше 18. В ином случае она задаёт вопрос `confirm` и возвращает его результат.

```javascript
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    return confirm('Родители разрешили?');
  }
}
```
Перепишите функцию, чтобы она делала то же самое, но без `if`, в одну строку.

Сделайте два варианта функции `checkAge`:

Используя оператор ?
Используя оператор ||

21. Напишите функцию `min(a,b)`, которая возвращает меньшее из чисел a и b.

Пример вызовов:
```javascript
min(2, 5) == 2
min(3, -1) == -1
min(1, 1) == 1
```
22. Напишите функцию `pow(x,n)`, которая возвращает x в степени n. Иначе говоря, умножает x на себя n раз и возвращает результат.
```javascript
pow(3, 2) = 3 * 3 = 9
pow(3, 3) = 3 * 3 * 3 = 27
pow(1, 100) = 1 * 1 * ...* 1 = 1
```
Создайте страницу, которая запрашивает x и n, а затем выводит результат `pow(x,n)`.

23. 7 kyu https://www.codewars.com/kata/highest-and-lowest
24. 7 kyu https://www.codewars.com/kata/disemvowel-trolls
25. 7 kyu https://www.codewars.com/kata/isograms
26. 7 kyu https://www.codewars.com/kata/digits-explosion
27. 6 kyu https://www.codewars.com/kata/handshake-problem
28. 6 kyu https://www.codewars.com/kata/duplicate-encoder
29. 6 kyu https://www.codewars.com/kata/n-th-fibonacci
30. 6 kyu https://www.codewars.com/kata/multiples-of-3-or-5


31. Придумайте просто Telegram бота, при создании используйте Node JS, ,библиотеку использующую Telegram API,  express

<h2 align="center">Решение задач</h2>

1. Вывод этого кода: 2.

2. Сначала будет вывод 1, затем 2.

3. Выведется значение `null`.

4. Сначала будет вывод 1, затем `undefined`.

5. Выведется значение 3.

6. 
```javascript
age = prompt("Введите возраст", 14);
if (age >= 14 || age <= 90){
    alert(true);
} else {
    alert(false);
}
```

7. 
```javascript
age = prompt("Введите возраст", 14);
if (!(age >= 14 || age <= 90)){
    alert(true);
} else {
    alert(false);
}
/* Альтернативное условие
if (age < 14 || age > 90) {
    alert(true);
} else {
    alert(false);
}
  */
```

8. Выражения и их значения:

* `-1 || 0` будет равно `-1`
* `-1 && 0` будет равно `0`
* `null || -1 && 1` будет равно `1`

Выполнится же только первое и третье условия.

9. 
```javascript
let response = prompt("Кто там?");
if (response == "Админ")
{
    let password = prompt("Пароль?");

    if (password == "Я Главный"){
        alert("Здравствуйте!");
    } else if (password == null) {
        alert("Отменено");
    } else {
        alert("Неверный пароль.")
    }
} 
else if (response == null){
    alert("Я вас не знаю.");
} else {
    alert("Отменено");
}
```

10. Будут выведены числа 3, 2, 1, т.к. в коде используется посткремент, то уменьшение переменной `i` происходит после работы функции `alert()`. А цикл работает до 1 потому, что 0 воспринимается как аналогичным значением `false`.

11. Префиксный вариант выведет значения: 1, 2, 3, 4. Постфиксный вариант выведет значения: 1, 2, 3, 4, 5.

12. Постфиксная форма выведет: 0, 1, 2, 3, 4. Префиксная форма выведет: 0, 1, 2, 3, 4.

13. 
```javascript
for(let i = 2; i <= 10; i+=2) alert(i);
```

14. 
```javascript
// for (let i = 0; i < 3; i++) {
//     alert( `number ${i}!` );
//   }
let i = 0;
while (i < 3){
    alert(`number ${i}!`);
    i++;
}
```

15. 
```javascript
let resp = prompt("Введите число");
while(resp <= 100 && resp != null)
{
    resp = prompt("Введите число");
}
```

16. 
```javascript
let n = prompt("Введите n");
let array = [2];
for(let i = 3; i <= n; i++){
    for(let j = 0; j < array.length; j++){
        if(i % array[j] == 0){
            break;
        }
        if(j == array.length - 1)
        {
            array.push(i)
        }
    }
}
alert(array);
```

17. 
```javascript
/**switch (browser) {
     case 'Edge':
        alert( "You've got the Edge!" );
        break;
    case 'Chrome':
    case 'Firefox':
    case 'Safari':
    case 'Opera':
        alert( 'Okay we support these browsers too' );
        break;

    default:
        alert( 'We hope that this page looks ok!' );
}
*/
let browser = prompt("Какой у вас браузер?");
if (browser == 'Edge')
{
    alert("You've got the Edge!");
} else if (browser == "Chrome" || browser == 'Firefox'
            || browser =='Safari' || browser == 'Opera'){
    alert('Okay we support these browsers too');
} else {
    alert('We hope that this page looks ok!');
}
```

18. 
```javascript
switch(parseInt(prompt("Введите число между 0 и 3"))){
  case 0:
      alert('Вы ввели число 0');
      break;
  case 1:
      alert('Вы ввели число 1');
      break;
  case 2:
  case 3:
      alert('Вы ввели число 2, а может и 3');
      break;
}
```

19. Отличий в этих вариантов нет. Блок `else` в первом варианте проходит, если условие `age>18` выдает `false`. Оператор `return` выполняется только в том случае, когда условие `age > 18` тоже выдает `false`, в обратном же случае функция завершает свою работу, когда выполняется `return` в блоке после `if`.

20. 
```javascript
function func20(){
    alert("Вариант 1 с оператором ?");
    checkAge3(parseInt(prompt("Введите возраст:")));
    alert("Вариант 2 с оператором ||");
    checkAge4(parseInt(prompt("Введите свой возраст:")));
}

function checkAge3(age) {
    return age > 18 ? true : confirm('Родители разрешили?');
}

function checkAge4(age) {
    return age > 18 || confirm('Родители разрешили?');
}
```

21. 
```javascript
function min(a, b){
    if (a > b) return b;
    else if (a < b) return a;
    else return a;
}
```

22. Javascript:
```javascript
function func22(){
    let x = parseInt(document.getElementById('x').value);
    let n = parseInt(document.getElementById('n').value);
    alert(`Число ${x} в степени ${n} равно ${pow(x,n)}`);
}

function pow(x, n){
    for(let i = 1; i < n; i++)
        x*=x;
    return x;
}
```

HTML: 
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <form>
        <input type="number" id="x">
        <br>
        <input type="number" id="n">
        <button onclick="func22()">Рассчет</button>
    </form>
</body>
</html>
```

<h3>Задачи CodeWars</h3>

23. 
```javascript
function highAndLow(numbers){
  let array = numbers.split(" ");
  let min = parseInt(array[0]);
  let max = parseInt(array[0]);
  
  for(let i = 1; i < array.length; i++)
   {
     let element = parseInt(array[i]);
     if (min > element)
       min = element;
     if (max < element)
       max = element;
   }
  
  return `${max} ${min}`;
}
```

24. 
```javascript
function disemvowel(str) {
  str = str.replaceAll(/[aieouAIEOU]/g, "");
  return str;
}
```

25. 
```javascript
function isIsogram(str){
  str = str.toLowerCase();
  let array = [];
  for(let i = 0; i < str.length; i++)
  {
    if (array.indexOf(str[i]) == -1)
        array.push(str[i]);
    else
        return false;
  }
  return true;
}
```

26. 
```javascript
function explode(s) {
  let str = ""
  for (let i=0; i < s.length; i++)
    {
      for (let j=0; j < parseInt(s[i]); j++)
        {
          str+=s[i];
        }
    }
  return str;
}
```

27. 
```javascript

```

28. 
```javascript
function duplicateEncode(word){
  word = word.toLowerCase();
  let str = "";
  for(let i = 0; i < word.length; i++){
    let element = word[i];
    for(let j = 0; j < word.length; j++)
      {
        if (i!=j && word[i] == word[j]){
          str += ")";
          element = null;
          break;
        }
      }
    if (element != null) {
      str += "(";
    }
  }
  return str;
}
```

29. 
```javascript
function nthFibo(n) {
  if(n == 1) return 0;
  if(n == 2) return 1;
  let first = 0;
  let second = 1;
  for(let i = 2; i < n; i++)
    {
      let third = first + second;
      first = second;
      second = third;
    }
  return second;
}
```

30. 
```javascript
function solution(number){
  let sum = 0;
  for(let i = 1; i < number; i++)
  {
    if (i % 3 == 0 || i % 5 == 0 || i % 6 ==0 || i % 9 ==0)
      sum += i;
  }
  return sum;
}
```

31. 
```javascript
const TelegramBot = require("node-telegram-bot-api");
const token = "there must be token";

const bot = new TelegramBot(token, {
    polling: {
        interval: 300,
        autoStart: true
    },
});

bot.on("polling_error", err => console.log(err.message.toString()));
bot.on('text', async msg => {
    if (msg.text == "/start")
    {
        await bot.sendMessage(msg.chat.id, "Вы запустили бота");
        await bot.sendMessage(msg.chat.id, "Бот возвращает json вашего сообщения.");
    }
    else{
        let json = `{
    message_id: ${msg.message_id},
    from: {
        id: ${msg.from.id},
        first_name: ${msg.from.first_name},
        username: ${msg.from.username},
        language_code: ${msg.from.language_code}
        },
    chat: {
        id: ${msg.chat.id},
        first_name: ${msg.chat.first_name},
        username: ${msg.chat.username},
        type: ${msg.chat.type}
        },
    date: ${msg.date},
    text: ${msg.text}
}`
        await bot.sendMessage(msg.chat.id, `Вот json твоего сообщения: \n ${json}`);
    }
});
```

<h2 align="center">Вывод</h2>
В этой лабораторной работе я научился создавать бота в телеграмм на javascript.
