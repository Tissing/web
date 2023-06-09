<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>






<p align="center">Лабораторная работа №8 <br> "JS" </p>






<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>







<p align="center">г. Южно-Сахалинск <br> 2023 год</p>




<h2 align="center">Введение</h2>
<p align="justify">Решение задач на JavaScript.</p>

<h2 align="center">Цели и задачи</h2>

1. Напишите оператор `if`, такой, чтобы в качестве выражения в скобках у него были значения `true`, `false `(Например, `if( true )` или `if( false )`). Посмотрите как работает этот оператор, поместив какую-нибудь команду после круглых скобок (Например, `console.log(1)`). 

2.	Создайте переменные m и n. В m поместите произвольное числовое значение. Напишите оператор ветвления `if` так, чтобы если m было больше 50, то в переменную n помещалось слово «большое», иначе — слово «маленькое».

3.	Определите сколько раз выполнится цикл `while`? Примечание: это можно сделать прочитав скрипт или запустив его консоли браузера.
 ```
var i = 2;
while( i < 9 ){
 	console.log( i++ );
}
```


4.	Напишите скрипт, который используя оператор `while` выведет все числа от 45 до 67.

5.	Напишите скрипт, который используя оператор `while` выведет все числа от 45 до 670, кратные 10.

6.	Напишите скрипт, который используя оператор `for` выполнит два предыдущих задания.

7.	Переменная n хранит целое число от 0 до 9. Используя оператор `switch`, написать скрипт, который в зависимости от числа будет выводить слово (Например, если n равно 3, то будет выводиться слово «три»)
```
var n = 5;
switch( n ){
 //Напишите тут свой код
}
```

8.	Используя `document.write()` и любую из циклических конструкций выведите  десять одинаковых изображений (надо выводить `<img src="..." alt="..." />`)

9.	В переменных size и unit хранятся размер и единицы измерения информации 120 и «Кб» соответственно. Зная что могут быть заданные Кб, Мб, Гб (кило-, мега- и гигабайты) и 1килобайт равен 1024 байта, найти количество байт в size.

10.	Постройте при помощи циклов JavaScript скрипт для календаря на HTML. Примечание: выполнить задание для одного месяца, используя HTML-элемент table

11.	Напишите функцию `hello1()`, которая при вызове будет возвращать строку «Привет, JavaScript!».

12.	Напишите функцию `hello2()`, которая при вызове будет принимать переменную name (например, «Василий») и выводить строку (в нашем случае «Привет, Василий»).  В случае отсутствующего аргумента выводить «Привет, гость»

13.	Напишите функцию `mul(n,m)`, которая принимает два аргумента и возвращает произведение этих аргументов. Проверьте ее работу.


14.	Создайте функцию `repeat(str, n)`, которая возвращает строку, состоящую и n повторений строки str. n — по умолчанию 2, str — пустая строка

15.	Создайте функцию `rgb()`, которая будет принимать три числовых аргумента и возвращать строку вида «rgb(23,100,134)». Если аргументы не заданы, считать их равными нулю. Не проверять переменные на тип данных

16.	Создайте функцию `avg()`, которая будет находить среднее значение по всем своим аргументам (аргументы величины числовые).

17.	Создайте функцию `m(a,b)` оболочку для `mul()`. `m()` должна принимать два аргумента а возвращать результат работы `mul()` с этими двумя аргументами После выполнения задания поэкспериментируйте, создайте функцию `log()`, которая будет принимать одно значение, а вызывать  console.`log()` с этим значением.

18.	Напишите функцию `operation(m,n,o)`, в которой m и n — числовые переменные, а o — функциональный литерал, который берет два аргумента и выполняет математическую операцию над ними 


19.	Напишите функцию `addN(n)`, которая вернёт другую функцию. Возвращенная функция должна складывать получаемый аргумент с аргументом n возвращающей функции. 

20.	Напишите функцию `words()`,  которая в зависимости от переданного в нее целочисленного аргумента n, будет выводить слово «товар» в нужно форме («12 товаров», но «22 товара»). По умолчанию аргумент d должен иметь значение 0


### Задачи CodeWars:
1. [Задача 1](https://www.codewars.com/kata/596fd97f65ad2fc072000037)
2. [Задача 2](https://www.codewars.com/kata/5925138effaed0de490000cf)
3. [Задача 3](https://www.codewars.com/kata/59269e371a640c0e98000085)
4. [Задача 4](https://www.codewars.com/kata/5913ffb2cb1475215c000039)

<h2 align="center">Решение задач</h2>

Все решения задач я оформил в виде функций по нажатию по кнопке, а вывод направляю в консоль

1. 
```javascript
function num1()
{
    if(true)
        console.log(true)
    else
        console.log(false)

    if(false)
        console.log(true)
    else
        console.log(false)
}
```
2.  
```javascript
function num2()
{
    let m = Math.floor(Math.random() * 100);
    if (m > 50) console.log("большое " + m)
    else console.log("маленькое " + m)
}
```
3.  
```javascript
function num3()
{
    var i = 2;
    var j = 0;
    while( i < 9 ){
 	    console.log( i++ );
        j++;
    }
console.log("Цикл выполнился "+j+" раз");
}
```
4.  
```javascript
function num4()
{
    for(let i = 45; i < 68; i++ )
        console.log(i);
}
```
5.  
```javascript
function num5()
{
    for(let i = 45; i < 671; i++ )
        if(i % 10 == 0) console.log(i);
}
```
6.  
```javascript
function num6()
{
    for(let i = 45; i < 671; i++ )
        if(i % 10 == 0 || i < 68) console.log(i);
}
```
7.  
```javascript
function num7()
{
    var n = Math.floor(Math.random()*10);
    console.log("Число " + n)
    switch(n){
        case 1: {
            console.log('один')
            break;
        }
        case 2: {
            console.log('два')
            break;
        }
        case 3: {
            console.log('три')
            break;
        }
        case 4: {
            console.log('четыре')
            break;
        }
        case 5: {
            console.log('пять')
            break;
        }
        case 6: {
            console.log('шесть')
            break;
        }
        case 7: {
            console.log('семь')
            break;
        }
        case 8: {
            console.log('восемь')
            break;
        }
        case 9: {
            console.log('девять')
            break;
            }
        case 0: {
            console.log('ноль')
            break;
        }
    }
}
```
8.  
```javascript
function num8()
{
    for(let i = 0; i < 8; i++)
        document.write('<img src="mops.jpg" alt="mops" />')
}
```
9.  
```javascript
function num9()
{
    let size = 120;
    let unit = "Кб";
    switch(unit)
    {
        case "Кб":
            size = size * 1024;
            break;

        case "Мб":
            size = size* 1024 * 1024;
            break;

        case "Гб":
            size = size * 1024 * 1024 * 1024;
            break;
    }
    console.log(size);
}
```
10. 
```javascript
function num10()
{
    let style = "<style>\n table,th,td,caption \n{\n border: 2px solid black;\n border-collapse: collapse; \n}\n</style>\n"
    let str = '<table>\n<caption>Май</caption>\n<tr>\n';
    for(let i = 1; i<=7; i++)
    {
        switch(i){
            case 1:
                str+="<th>Пн</th>\n";
                break;
            case 2:
                str+="<th>Вт</th>\n";
                break;
            case 3:
                str+="<th>Ср</th>\n";
                break;
            case 4:
                str+="<th>Чт</th>\n";
                break;
            case 5:
                str+="<th>Пт</th>\n";
                break;
            case 6:
                str+="<th>Сб</th>\n";
                break;
            case 7:
                str+="<th>Вс</th>\n";
                break;   
        }
    }
    str+="</tr>\n"
    for(let i = 1; i <= 31; i++)
    {
        str+=`<td>${i}</td>\n`;
        if(i % 7 == 0 ) str +="</tr>\n<tr>\n";
        if(i == 31) str += "</tr>"
    }
    str+="</table>";
    document.write(style + str);
}
``` 
11. 
```javascript
function hello1()
{
    return "Привет, JavaScript!";
}

function num11()
{
    console.log(hello1());
}

``` 
12.  
```javascript
function hello2(name)
{
    if(name == "") return "Привет, гость";
    return "Привет, " + name;
}

function num12()
{
    console.log(hello2(prompt("Введите ваше имя")));
}
``` 
13.  
```javascript
function mul(n,m)
{
    return n*m;
}

function num13()
{
    let n = prompt("n=");
    let m = prompt("m=");
    console.log(mul(n,m));
}
``` 
14.  
```javascript
function repeat(str,n)
{
    if(n=="") n = 2;
    let result = "";
    for(let i = 0; i < n; i++)
        result += str;
    return result;
}

function num14()
{
    let str = prompt("str=");
    let n = prompt("n=");
    console.log(repeat(str,n));
}
``` 
15.  
```javascript
function rgb(r=0,g=0,b=0)
{
    return `rgb(${r},${g},${b})`;
}

function num15()
{
    let r = prompt("r=");
    let g = prompt("g=");
    let b = prompt("b=");
    console.log(rgb(r,g,b));
}
``` 
16.  
```javascript
function avg(...args)
{
    let result = 0;
    for(let i = 0; i < args.length; i++)
        result+= args[i];
    return result / args.length;
}

function num16()
{
    console.log(avg(1,2,3,4,5,6));
}

``` 
17.  
```javascript
function m(a,b)
{
    return `${a} * ${b} = ${mul(a,b)}`;
}

function log(str)
{
    console.log(str);
}

function num17()
{
    let a = parseInt(prompt("a="));
    let b = parseInt(prompt("b="));
    log(m(a,b));
}

``` 
18.  
```javascript
function operation(m,n,o)
{
    return o(m,n);
}

function num18()
{
    console.log(operation(5,4,mul));
}
``` 
19.  
```javascript
function addN(n)
{
    return x => x + n; 
}

function num19()
{
    let n = parseInt(prompt("n="));
    let x = parseInt(prompt("x="));
    let func = addN(n);
    console.log(func(x));
}

``` 
20.  
```javascript
function words(n)
{
    let temp = n % 100;
    if(temp == 11 
    || temp == 12 
    || temp == 13 
    || temp == 14 ) return `${n} товаров`;

    temp = n % 10;

    switch(temp)
    {
        case 1: return `${n} товар`;

        case 2:
        case 3: 
        case 4: return `${n} товара`;

        default: return `${n} товаров`;
    } 
}

function num20()
{
    let n = parseInt(prompt("n="));
    console.log(words(n));
}
``` 

### Решение задач CodeWars:

1.   
```javascript
class Converter {
    bytes = 0;

    constructor(size, unit) {
        this.size = size;
        this.unit = unit;

        switch (unit) {
            case "B":
            this.bytes = size;
            break;
            case "KB":
            this.bytes = size * 1024;
            break;
            case "MB":
            this.bytes = size * Math.pow(1024, 2);
            break;
            case "GB":
            this.bytes = size * Math.pow(1024, 3);
            break;
            case "TB":
            this.bytes = size * Math.pow(1024, 4);
            break;
            }
    }

    toB() {
        this.unit = "B";
        this.size = `${this.bytes} ${this.unit}`;
    }

    toKB() {
        this.unit = "KB";
        const size = this.roundNumber(this.bytes / 1024);
        this.size = `${size} ${this.unit}`;
    }

    toMB() {
        this.unit = "MB";
        const size = this.roundNumber(this.bytes / Math.pow(1024, 2));
        this.size = `${size} ${this.unit}`;
    }

    toGB() {
        this.unit = "GB";
        const size = this.roundNumber(this.bytes / Math.pow(1024, 3));
        this.size = `${size} ${this.unit}`;
        }

    toTB() {
        this.unit = "TB";
        const size = this.roundNumber(this.bytes / Math.pow(1024, 4));
        this.size = `${size} ${this.unit}`;
    }

    roundNumber(size) {
        const string = size.toString();
        const indexOfDot = string.indexOf(".");
        return Number(
        string.slice(0, indexOfDot !== -1 ? indexOfDot + 4 : string.length)
        );
    }
}


```
2.   
```javascript
function tiaosheng(failedCount){
  let max = 60;
  let result = 0;
  let temp = 0;
  for(let i =0; i < failedCount.length; i++)
    {
    temp = max;
    max -= i==0 ? failedCount[i] : failedCount[i] - failedCount[i-1];
     if (max < 0)
    {
      result += temp;
      break;
    }
    result += i==0 ? failedCount[i] : failedCount[i] - failedCount[i-1];
    max -= 3;
    if(max<0) break; 
  }
  if(max > 0)
    result+= max;
  return result;
}
```
3.   
```javascript
function xPlusY(n){
    let result = 0;
    while(n.indexOf("1") != n.length - 1 && n.indexOf("1") != -1)
    {
        if(n.indexOf("11") < n.indexOf("10") && n.indexOf("11") != -1) 
        {
             n = n.replace("11","00");
             result++;
        } else if (n.indexOf("10") != -1)
        {
             n = n.replace("10","01");
             result++;
        } else
        {
            n = n.replace("11","00");
            result++;
        }
    }
    if(n[n.length - 1] == "1") result++;
    return result;
}
```
4.   
```javascript
function countTriangles(n){
  return (6*(n**3)+9*(n**2)+2*n-(n%2))/2;
}
```







<h2 align="center">Вывод</h2>
Научился создавать функции.
