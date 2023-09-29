<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №2 <br> "node.js" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Создание html-страницы на локальном сервере node.js.</p>

<h2 align="center">Цели и задачи</h2>

1. Что выведет этот скрипт?
```javascript
let name = "Ilya";

alert( `hello ${1}` ); // ?

alert( `hello ${"name"}` ); // ?

alert( `hello ${name}` ); // ?
```

2. Создайте страницу, которая спрашивает имя у пользователя и выводит его.

3. Чему будут равны переменные a, b, c и d в примере ниже?

```javascript
let a = 1, b = 1;
let c = ++a; // ?
let d = b++; // ?
```


4. Чему будут равны переменные a и x после исполнения кода в примере ниже?

```javascript
let a = 2;
let x = 1 + (a *= 2);
```


5. Какой результат будет у выражений ниже?

```javascript
"" + 1 + 0
"" - 1 + 0
true + false
6 / "3"
"2" * "3"
4 + 5 + "px"
"$" + 4 + 5
"4" - 2
"4px" - 2
7 / 0
"  -9  " + 5
"  -9  " - 5
null + 1
undefined + 1
" \t \n" – 2
```


6. Ниже приведён код, который запрашивает у пользователя два числа и показывает их сумму. Он работает неправильно. Код в примере выводит 12 (для значения полей по умолчанию). В чём ошибка? Исправьте её. Результат должен быть 3.
```javascript
let a = prompt("Первое число?", 1);
let b = prompt("Второе число?", 2);
alert(a + b); // 12
```


7.  Вывести на экран число Пи с точностью до сотых.

8. Составить программу вывода на экран числа, вводимого с клавиатуры. Выводимому числу должно предшествовать сообщение "Вы ввели число".

9. Составить программу вывода на экран числа, вводимого с клавиатуры. После выводимого числа должно следовать сообщение " - вот какое число Вы ввели".

10. Дана сторона квадрата. Найти его периметр.

11. Дан радиус окружности. Найти ее диаметр.

12. Считая, что Земля — идеальная сфера с радиусом
R 6350 км, определить расстояние до линии горизонта от точки с заданной высотой над Землей.

13. Дана длина ребра куба. Найти объем куба и площадь его боковой поверхности.

14. Дан радиус окружности. Найти длину окружности и площадь круга.

15. Поменять местами значения двух переменных без использования дополнительной переменной.

16. Даны два целых числа. Найти: а) их среднее арифметическое; б) их среднее геометрическое.

17. Известны объем и масса тела. Определить плотность материала этого тела. 

18. Известны количество жителей в государстве и площадь его территории. Определить плотность населения в этом государстве.

19. Даны катеты прямоугольного треугольника. Найти его гипотенузу. 

20. Найти площадь кольца по заданным внешнему и внутреннему радиусам.

21. Даны катеты прямоугольного треугольника. Найти его периметр. 

22. Даны основания и высота равнобедренной трапеции. Найти ее периметр.



<h2 align="center">Решение задач</h2>
Чтобы создать сервер на node.js нужно использовать следующий код:

```javascript
const express = require('express'); // импорт модуля express
const app = express(); // создание приложения

app.use(express.static(`${__dirname}/public`)); // зафиксировали папку public, чтобы html страница могла подхватить script.js

app.get('/', (req, resp) => { 
    resp.sendFile(`${__dirname}/public/index.html`); // при открытии страницыы отправляем html страницу
});

app.listen(3000, ()=>{
    console.log('Server online'); // запуск сервера на порте 3000
});
```


1. 
```javascript
function task1(){
    let name = "Ilya";

    alert( `hello ${1}` ); // ?

    alert( `hello ${"name"}` ); // ?

    alert( `hello ${name}` ); // ?
}
```

2. 
```javascript
function task2(){
    let Name = prompt("Введите имя", "Иван");
    alert(Name);
}
```

3. 
```javascript
function task3(){
    let a = 1, b = 1;
    let c = ++a; // ?
    let d = b++; // ?
    alert(`a = ${a}, b = ${b}, c = ${c}, d = ${d}`);
}
```

4. 
```javascript
function task4(){
    let a = 2;
    let x = 1 + (a *= 2);
    alert(`a = ${a}, x = ${x}`);
}
```

5. 
```javascript
function task5(){
    console.log(`"" + 1 + 0 = ${"" + 1 + 0}`);
    console.log(`true + false = ${true + false}`);
    console.log(` 6 / "3" = ${ 6 / "3"}`);
    console.log(`"2" * "3" = ${"2" * "3"}`);
    console.log(`4 + 5 + "px"= ${4 + 5 + "px"}`);
    console.log(`"$" + 4 + 5 = ${"$" + 4 + 5}`);
    console.log(` "4" - 2 = ${ "4" - 2}`);
    console.log(`"4px" - 2 = ${"4px" - 2}`);
    console.log(`7 / 0= ${7 / 0}`);
    console.log(`"  -9  " + 5= ${"  -9  " + 5}`);
    console.log(` "  -9  " - 5 = ${ "  -9  " - 5}`);
    console.log(`null + 1= ${null + 1}`);
    console.log(`undefined + 1 = ${undefined + 1}`);
    console.log(`" \t \n" – 2 = ${" \t \n" - 2 }`);
}
```

6. 
```javascript
function task6(){
    let a = prompt("Первое число?", 1);
    let b = prompt("Второе число?", 2);
    alert(parseInt(a) + parseInt(b)); // 12
}
```

7. 
```javascript
function task7(){
    alert(Math.PI.toFixed(2));
}
```

8. 
```javascript
function task8(){
    let num = parseInt(prompt("Введите число", 0));
    alert(`Вы ввели число: ${num}`);
}
```

9. 
```javascript
function task9(){
    let num = parseInt(prompt("Введите число", 0));
    alert(`${num} - вот такое число Вы ввели`);
}
```

10. 
```javascript
function task10(){
    let a = parseInt(prompt("Введите сторону квадрата", 0));
    alert(`Периметр = ${4 * a}`);
}
```

11. 
```javascript
function task11(){
    let rad = parseInt(prompt("Введите радиус окружности", 0));
    alert(`Диаметр = ${2 * rad}`);
}
```

12. 
```javascript
function task12(){
    let h = parseInt(prompt("Введите высоту над Землей ", 1));
    alert(`Расстояние между точками = ${Math.sqrt(6350 * 6350 + h * h)}`);
}
```

13. 
```javascript
function task13(){
    let a = parseInt(prompt("Введите сторону куба", 0));
    alert(`Объем = ${a*a*a} \n Площадь боковой поверх-ти = ${a * a * 4}`);
}
```

14. 
```javascript
function task14(){
    let rad = parseInt(prompt("Введите радиус окружности", 0));
    alert(`Длина = ${2*3.14*rad} \n Площадь круга= ${3.14 * rad * rad}`);
}
```

15. 
```javascript
function task15(){
    let a = parseInt(prompt("Введите a", 0));
    let b = parseInt(prompt("Введите b", 0));
    a = a + b;
    b = a - b;
    a = a - b;
    alert(`a = ${a}, b = ${b}`);
}
```

16. 
```javascript
function task16(){
    let a = parseInt(prompt("Введите a", 0));
    let b = parseInt(prompt("Введите b", 0));
    alert(`Среднее арифметическое = ${(a+b)/2} \n Среднее геометрическое = ${Math.sqrt(a*b)}`);
}
```

17. 
```javascript
function task17(){
    let V = parseInt(prompt("Введите обьем", 0));
    let m = parseInt(prompt("Введите m", 1));
    alert(`Плотность = ${V/m}`);
}
```

18. 
```javascript
function task18(){
    let S = parseInt(prompt("Введите площадь государства", 0));
    let n = parseInt(prompt("Введите число граждан", 1));
    alert(`Плотность = ${S/n}`);
}
```

19. 
```javascript
function task19(){
    let k1 = parseInt(prompt("Введите 1й катет", 0));
    let k2 = parseInt(prompt("Введите 2й катет", 1));
    alert(`Гипотенуза = ${Math.sqrt(k1*k1 + k2*k2)}`);
}
```

20. 
```javascript
function task20(){
    let r1 = parseInt(prompt("Введите радиус внутреннего кольца", 0));
    let r2 = parseInt(prompt("Введите радиус внешнего кольца", 1));
    let s1 = 3.14 * r1 * r1;
    let s2 = 3.14 * r2 * r2;
    alert(`Площадь кольца = ${s2 - s1}`);
}
```

21. 
```javascript
function task21(){
    let k1 = parseInt(prompt("Введите 1й катет", 0));
    let k2 = parseInt(prompt("Введите 2й катет", 1));
    let gip = Math.sqrt(k1*k1 + k2*k2);
    alert(`Периметр = ${k1 + k2 + gip}`);
}
```

22. 
```javascript
function task22(){
    let o1 = parseInt(prompt("Введите 1е основание трапеции", 0));
    let o2 = parseInt(prompt("Введите 2е основание трапеции", 1));
    let h = parseInt(prompt("Введите высоту трапеции", 1));
    let k1 = Math.abs(o2 - o1) / 2;
    let gip = Math.sqrt(k1*k1 + h*h);
    alert(`Периметер трапеции = ${o1 + o2 + 2 * gip}`);
}
```


<h2 align="center">Вывод</h2>
В этой лабораторной работе научился создавать сервер на node.js и загружать на него html страницы.


