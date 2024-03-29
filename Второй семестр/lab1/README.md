<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №1 <br> "node.js" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Начало работы с node.js</p>

<h2 align="center">Цели и задачи</h2>

1. Создайте переменную str и присвойте ей значение `'hdfgv'`. Обращаясь к отдельным символам этой строки выведите на экран символ `'h'`, символ `'d'`, символ `'v'`.
2. Напишите скрипт, который считает количество секунд в часе.
3. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:

```javascript
var num = 1;
num = num + 12;
num = num - 14;
num = num * 5;
num = num / 7;
num = num + 1;
num = num - 1;
alert(num);
```


4. Создайте переменную num и присвойте ей значение 3. Выведите значение этой переменной на экран с помощью метода alert.
5. Создайте переменные a=10 и b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
6. Создайте переменные c=15 и d=2. Просуммируйте их, а результат присвойте переменной result. Выведите на экран значение переменной result.
7. Создайте переменные a=10, b=2 и c=5. Выведите на экран их сумму.
8. Создайте переменные a=17 и b=10. Отнимите от a переменную b и результат присвойте переменной c. Затем создайте переменную d, присвойте ей значение 7. Сложите переменные c и d, а результат запишите в переменную result. Выведите на экран значение переменной result.
9. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
10. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
11. Создайте переменную, присвойте ей число. Возведите это число в квадрат. Выведите его на экран.
12. Напишите однострочное решение, которое вычисляет сумму квадратных корней для всех чётных чисел целочисленного массива.
13. Яблоко стоит `1.15`, апельсин стоит `2.30`. Сколько они стоят вместе – чему равна сумма `1.15` + `2.30` с точки зрения JavaScript?
14. Какое будет выведено значение: `let x = 5; alert(x++);` ?
15. Чему равно такое выражение: `[ ] + false - null + true` ?
16. Что выведет этот код: `let y = 1; let x = y = 2; console.log(x);` ?
17. Чему равна сумма `[ ] + 1 + 2`?
18. Создайте переменные a6, a7, a8, a9, a10. Поместите в них результат выражений:

```javascript
5 % 3,
3 % 5,
5 + '3',
'5' - 3,
75 + 'кг'
```

19. Напишите скрипт, который находит площадь прямоугольника высота 23см. (в числовую переменную height), шириной 10см (в числовую переменную width), значение площади должно хранится в числовой переменной s.
20. Напиши скрипт, который находит объем цилиндра высотой 10м (переменная heightC) и диаметром основания 4м (dC), результат поместите в переменную v.
21. Даны размер ипотечного кредита (S — 2 млн.руб), процентная ставка (p  — 10%), кол-во лет (years — 5). Найти переплату по кредиту, значение переплаты должно содержаться в переменной perepl.
22. Определите переменные str, num, flag и txt со значениями «Привет», 123, true, «true». При помощи оператора определения типа убедитесь, что переменных принадлежат типам: string, number, boolean.
23. Дано число, необходимо вернуть противоположное число.

<h2 align="center">Решение задач</h2>

1. Вызываем по индексу символа в строке.
```javascript
let str = 'hdfgv'
console.log(str[0])
console.log(str[1])
console.log(str[4])
```
2. В часе 60 * 60 секунд.
```javascript
console.log(60*60)
``` 
3. 
```javascript
var num = 1;
num += 12;
num -= 14;
num *= 5;
num /= 7;
num++;
num--;
console.log(num);
```
4. 
```javascript
let num = 3
console.log(num)
``` 
5. 
```javascript
let a = 10, b = 2
console.log('a+b=' + (a+b))
console.log('a*b=' + (a*b))
console.log('a/b=' + (a/b))
``` 
6. 
```javascript
let c = 15, d = 2
let result = c + d
console.log(result)
```

7. 
```javascript
let a=10,
    b=2,
    c=5;

console.log(a+b+c)
``` 
8. 
```javascript
let a=17, b=10
let c = a-b
let d = 7
let result = c + d
console.log(result)
```
9. 
```javascript
hour = 60*60
day = 24*hour
month = day*31
console.log(hour)
console.log(day)
console.log(month)
```
10. Для вывода строки использовалось форматированние строки ${}.
```javascript
let hour = 15, minute=30, second=10
console.log(`${hour}:${minute}:${second}`) 
```
11. 
```javascript
let num = 5
num *= num
console.log(num)
``` 
12. Для решения этой задачи использовались функции массивов filter и reduce. Первая функция возвращает отфильтрованный массив, в этом случае вернул массив четных чисел. Вторая функция проходится по массиву и храня перменную total, в которую мы суммируем все квадратные корни чисел. Для реализации однострочного решения также использовались lambda-функции.

```javascript
console.log([1, 2, 4, 5, 9, 10].filter(num=> {if(num % 2 == 0) return num}).reduce((total, num)=> total + Math.sqrt(num), 0))

``` 
13. Ответ не будет 3.45. Объясняется это логикой представления чисел с плавующей точкой.

```javascript
console.log(1.15 + 2.30)
``` 
14. Выводется число 5, т.к. оператор ++ происходит в последнюю очередь.
```javascript
let x = 5
console.log(x++)
console.log(x)
``` 
15. 
```javascript
console.log([ ] + false - null + true )
```
16. 
```javascript
let y = 1;
let x = y = 2;
console.log(x);
``` 
17. 
```javascript
console.log( [ ] + 1 + 2)
``` 
18. 
```javascript
let a6 = 5 % 3
let a7 = 3 % 5
let a8 = 5 + '3'
let a9 = '5' - 3
let a10 = 75 + 'кг'
console.log(a6)
console.log(a7)
console.log(a8)
console.log(a9)
console.log(a10)
``` 
19. 
```javascript
let height = 23, width = 10
let s = 0.5 * height * width
console.log(s)
``` 
20. 
```javascript
let heightC = 10, dC = 4
let v = heightC * (dC/2)* (dC/2) * 3.14
console.log(v)
```
21. 
```javascript
let S = 2000000, p = 10, years = 5
let perepl = 0
for(let i = 0; i < years; i++)
{
    perepl += S * (p / 100)
    S = S * (p/1 + 1)
}

console.log(perepl)
```
22. 
```javascript
let str = "Привет",
    num = 123,
    flag = true,
    txt = "true"

console.log(typeof(str))
console.log(typeof(num))
console.log(typeof(flag))
console.log(typeof(txt))
```
23. 
```javascript
console.log(-1 * num)
```

<h2 align="center">Вывод</h2>
Повторил лабораторную по JS, только выполнил его в Node.js



