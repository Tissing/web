<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №4 <br> "Модель DOM" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Написание кода на js и загрузка его на сервер.</p>

<h2 align="center">Цели и задачи</h2>

1. Сделайте alert по нажатию на кнопку. 

2. Сделайте изменение текста в input по нажатию кнопки. 

3. Сделайте вывод содержимого input по нажатию кнопки. 

4. Сделайте кнопку по нажатию на нее, она выводит alert содержимое input, возведенное в квадрат. 

5. Сделайте кнопку по нажатию, она осуществляет обмен содержимым между двумя input. 

6. Сделайте кнопку по нажатию на нее поменяется ее текст. 

7. Сделайте кнопку по нажатию на нее, она меняет цвет текста в input, используя свойства CSS. 

8. Сделайте кнопки по нажатию на них, одна из них блокирует input с помощью атрибута disabled, а другая разблокирует. 

9. Сделайте кнопку при наведении на нее появляется alert. 

10. Сделайте кнопку при двойном на нее появляется alert. 

11. Сделайте область с помощью div при наведении на нее появляется alert. 

12. Сделайте кнопку и картинку, при нажатии кнопки картинка меняется. 

13. Сделайте alert по нажатию на кнопку. Используя this. 

14. Сделайте изменение текста в input по нажатию кнопки. Используя this. 

15. Сделайте кнопку, при нажатии кнопки кнопка блокируется. 

16. Сделайте кнопку, при нажатии кнопка считает количество нажатий на нее. 

17. Сделайте кнопку, при нажатии курсор мышки должен измениться. 

18. Используя JavaScript, сделайте так, чтобы при клике на кнопку исчезал элемент с `id=&quot;hide&quot` 
```html
<!DOCTYPE HTML> 

<html> 

<head> 

    <meta charset="utf-8"> 

</head> 

<body> 

    <input type="button" id="hider" value="Нажмите, чтобы спрятать текст"/> 

    <div id="hide">Текст</div> 

<script> 

    /* ваш код */ 

</script> 

</body> 

</html> 

```

19. Создайте кнопку, при клике на которую, она будет скрывать сама себя. 

20. Напишите простой калькулятор. 

 
### Задачи CodeWars: 

1. https://www.codewars.com/kata/the-coupon-code 

2. https://www.codewars.com/kata/unlucky-days 

3. https://www.codewars.com/kata/angle-between-clock-hands 

4. https://www.codewars.com/kata/my-language-skills 

5. https://www.codewars.com/kata/run-length-encoding 

6. https://www.codewars.com/kata/walk-the-object-path 

### Задача
Задача. Написать простой сайт о себе c блоками, header, nav, footer, используете три движка pug, handlebars, EJS 


<h2 align="center">Решение задач</h2>

1. 
```html
<button onclick="alert('alert')">Задача 1</button>
```

2. 
```javascript
let text = prompt("Изменение input");
document.getElementById("input").innerText = text;
```

3. 
```javascript
let text = document.getElementById("input").innerText;
alert(text);
```

4. 
```javascript
let num = parseInt(document.getElementById("input").innerText);
alert(num * num);
```

5. 
```javascript
let text = document.getElementById("input1").innerText; 
document.getElementById("input1").innerText = document.getElementById("input2").innerText;
document.getElementById("input2").innerText = text;
```

6. 
```javascript
document.getElementById("button6").innerText = "Поменял текст";
```

7. 
```javascript
document.getElementById("input3").style.color = 'red';
```

8. 
```javascript
function inputon()
{
    document.getElementById("input4").removeAttribute('disabled');
}

function inputoff()
{
    document.getElementById("input4").setAttribute('disabled', '');
}
```

9. 
```html
<button onmouseenter="func9()">Задача 9</button><br>
```

```javascript
alert("Вы навели мышкой на кнопку!");
```

10. 
```html
<button ondblclick="func10()">Задача 10</button><br>
```

```javascript
alert("Вы дважды нажали на кнопку!");
```

11. 
```html
<div onmouseenter="func11()"></div>
```
```javascript
alert("Вы навели мышкой на элемент div!");
```

12. 
```javascript
var element = document.getElementById("image");
if(element.getAttribute('src') == "cat.jpg")
    element.setAttribute('src','crab.jpg');
else 
    element.setAttribute('src','cat.jpg');
```

13. 
```html
<button onclick="alert(this)">Задача 13</button><br>
```

14. 
```javascript

```

15. 
```javascript
this.setAttribute('disabled','');
```

16. 
```javascript

```

17. 
```javascript
document.body.style.cursor = 'pointer';
```

18. 
```javascript
document.getElementById('hide').style.visibility = 'hidden';
```

19. 
```javascript
this.style.visibility = 'hidden'
```

20. 
```html
<p>a: <input type="number" id="a"></p>
<p>b: <input type="number" id="b"></p>
<p><button onclick="sum()">+</button><button onclick="difference()">-</button></p>
<p><button onclick="multiply()">*</button><button onclick="division()">/</button></p>
<p id="result"></p>
```

```javascript
function sum(){
    let a = parseInt(document.getElementById('a').value);
    let b = parseInt(document.getElementById('b').value);
    document.getElementById('result').innerText = `${a} + ${b} = ${a+b}`;
}

function difference(){
    let a = parseInt(document.getElementById('a').value);
    let b = parseInt(document.getElementById('b').value);
    document.getElementById('result').innerText = `${a} - ${b} = ${a-b}`;
}

function multiply(){
    let a = parseInt(document.getElementById('a').value);
    let b = parseInt(document.getElementById('b').value);
    document.getElementById('result').innerText = `${a} * ${b} = ${a*b}`;
}

function division(){
    let a = parseInt(document.getElementById('a').value);
    let b = parseInt(document.getElementById('b').value);
    document.getElementById('result').innerText = `${a} / ${b} = ${a/b}`;
}
```

### Codewars


1. 
```javascript
function checkCoupon(enteredCode, correctCode, currentDate, expirationDate){
  let date1 = new Date(currentDate);
  let date2 = new Date(expirationDate);
  return enteredCode === correctCode && date1 <= date2;
}
```

2. 
```javascript
function unluckyDays(year){
  let result = 0;
  for(let i = 0; i < 12; i++)
  {
    if(new Date(year, i, 13).getDay() == 5)
      result++;
  }
  return result;
}
```

3. 
```javascript
function handAngle (date) {
  var pi2 = Math.PI*2;
  var m = date.getMinutes()/60, h = (date.getHours()+m)/12;
  
  var angle = Math.abs(h-m)*pi2;
  return Math.min( angle, pi2-angle )

}
```

4. 
```javascript
function myLanguages(results) {
  let array = [];
  
  for(var i in results){
    if(results[i] >= 60) array.push(i);
  }
 
  for(var i = 0; i < array.length - 1; i++)
  {
    for(var j = i + 1; j < array.length; j++)
      {
        if(results[array[i]] < results[array[j]])
        {
          temp = array[i];
          array[i] = array[j];
          array[j] = temp;
        }
      }
  }
   return array;
  
}
```

5. 
```javascript
var runLengthEncoding = function(str){
  if(str.length == 0) return [];
  let result = [];
  let count = 1;
  let char = '';
  for(let i = 0; i < str.length - 1; i++)
  {
    char = str[i];
    if (char == str[i + 1]) count++;
    else{
      result.push([count, char]);
      count = 1;
      char = str[i+1];
    }
  }
  
  result.push([count, char]);
  
  return result; 
}
```

6. 
```javascript
function find(object, path) {
    let array_path = path.split('.');
    let current_obj = object;
    for(let i = 0; i < array_path.length; i++)
    {
      if(Object.keys(current_obj).includes(array_path[i]))
        current_obj = current_obj[array_path[i]];
      else
        return undefined;
    }
    return current_obj;
}
```

### Задача

#### app.js
```javascript
const express = require('express');
const hbs = require('hbs');
const pug = require('pug');
const ejs = require('ejs');
const app = express();

hbs.registerPartials(__dirname + "/views/partials");

app.use(express.static(__dirname + "/public"));

app.get("/", function(request, response) {
    response.sendFile("public/index.html");
});

app.get("/about_me", function(req, resp){
    resp.render('about.hbs');
});

app.get("/about_me/pug", function(req, resp){
    resp.render('pug/about_me.pug');
});

app.get("/about_me/EJS", function(req, resp){
    resp.render('about_me.ejs');
});

app.listen(3000, function(req, resp){
    console.log("Server online.")
});
```

<h2 align="center">Вывод</h2>
Научился работать с pug, hbs и ejs.
