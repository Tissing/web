<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №9 <br> "JS" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Решение задач на JavaScript</p>

<h2 align="center">Цели и задачи</h2>

1. Есть некоторая строка `(var str = 'fgfggg';)`, что будет, если мы возьмем `str[0]`?
2. Дана функция, она принимает в качестве аргументов строки '*, '1', 'b', '1c', реализуйте ее так, что бы она вернула строку '1*b\*1c'
3. Дано дерево, надо найти сумму всех вершин.
4. Нарисовать стилями полукруг.
5. Есть массив в котором лежат объекты с датами, отсортировать по датам.
6. Есть несколько слов, определить состоят ли они из одних и тех же букв('кот', 'ток', 'окт')
7. От них же. Числа от 1 до 100 лежат в массиве, они хаотично перемешанные, от туда изъяли одно число, надо найти, что это за число. алгоритм не должен превышать O(n^2) сложности.
8. Реализовать сортировку пузырьком.
9. Обратная польская нотация.
10. Реализовать функцию является ли слово палендром.

<h2 align="center">Решение задач</h2>

Все решения задач я оформил в виде функций по нажатию по кнопке, а вывод направляю в консоль

1.

```javascript
function num1() {
  var str = "fgfggg";
  console.log(str[0]);
}
```

2.

```javascript
function cb(str1, str2, str3, str4) {
  return str2 + str1 + str3 + str1 + str4;
}

function num2() {
  console.log(cb("*", "1", "b", "1c"));
}
```

3.

```javascript

```

4.

```javascript
function num4() {
  let style =
    "<style>\ndiv{\nborder: 2px solid black;\nbackground-color: black;\nborder-radius: 100% 0 0 100% / 50% 0 0 50%;\nwidth: 100px;\nheight: 200px;\n}\n</style>\n<div></div>";
  document.write(style);
}
```

5.

```javascript
function num5() {
  let array = [
    new Date("1.1.2023"),
    new Date("3.3.2020"),
    new Date("2.2.2019"),
    new Date("4.4.2023"),
  ];

  for (let i = 0; i < array.length; i++) {
    for (let j = i + 1; j < array.length; j++) {
      if (array[j].getTime() < array[i].getTime()) {
        let temp = array[i];
        array[i] = array[j];
        array[j] = temp;
      }
    }
  }

  for (let i = 0; i < array.length; i++) {
    console.log(array[i].toString());
  }
}
```

6.

```javascript
function equals(str1, str2, str3) {
  let temp = [];
  for (let i = 0; i < str1.length; i++) {
    if (!temp.includes(str1[i])) temp.push(str1[i]);
  }

  for (let i = 0, j = 0; i != str2.length - 1 || j != str3.length - 1; ) {
    if (!temp.includes(str2[i]) || !temp.includes(str3[j])) return false;
    if (i + 1 != str2.length) i++;
    if (j + 1 != str3.length) j++;
  }
  return true;
}

function num6() {
  console.log(equals("кот", "кто", "тко"));
}
```

7.

```javascript
function ot(array) {
  let one = 0;
  let two = 0;
  for (let i = 1; i <= 100; i++) one += i;
  for (let i = 0; i < array.length; i++) two += array[i];
  return one - two;
}

function num7() {
  let input = [];
  let num = Math.floor(Math.random() * 100);
  for (let i = 100; i > 0; i--) {
    if (i != num) input.push(i);
    else console.log(i);
  }
  console.log(ot(input));
}
```

8.

```javascript
function bubble(array) {
  for (let i = 0; i < array.length; i++) {
    for (let j = i + 1; j < array.length; j++)
      if (array[j] < array[i]) {
        let temp = array[i];
        array[i] = array[j];
        array[j] = temp;
      }
  }
  return array;
}

function num8() {
  let test = [3, 4, 2, 1, 6, 8, 9, 5, 7];
  console.log(bubble(test));
}
```

9.

```javascript
function polishNotation(str) {
  let temp = str.split(" ");
  let operands = [];
  for (let i = 0; i < temp.length; i++) {
    switch (temp[i]) {
      case "+":
        let sum = 0;
        for (let j = 0; j < operands.length; j++) sum += operands[j];
        operands = [sum];
        break;
      case "-":
        let dif = operands[0];
        for (let j = 1; j < operands.length; j++) dif -= operands[j];
        operands = [dif];
        break;
      case "*":
        let mult = 1;
        for (let j = 0; j < operands.length; j++) mult *= operands[j];
        operands = [mult];
        break;
      case "/":
        let div = operands[0];
        for (let j = 1; j < operands.length; j++) {
          if (operands[j] != 0) div /= operands[j];
        }
        operands = [div];
        break;
      default:
        operands.push(parseInt(temp[i]));
        break;
    }
  }
  return operands[0];
}

function num9() {
  console.log(polishNotation("1 2 + 4 * 3 +"));
}
```

10.

```javascript
function isPolendrom(str) {
  str = str.toLowerCase();
  str = str.replaceAll(" ");
  for (let i = 0; i < Math.floor(str.length / 2); i++) {
    if (str[i] != str[str.length - (i + 1)]) return false;
  }
  return true;
}

function num10() {
  console.log(isPolendrom(prompt("Input string")));
}
```

<h2 align="center">Вывод</h2>
Попрактиковался в решении задач на JavaScript;
