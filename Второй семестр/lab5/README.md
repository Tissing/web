<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №5 <br> "node.js" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Написание кода на js и загрузка его на сервер.</p>

<h2 align="center">Цели и задачи</h2>

1. Напишите код, выполнив задание из каждого пункта отдельной строкой:
Создайте пустой объект user.
Добавьте свойство name со значением John.
Добавьте свойство surname со значением Smith.
Измените значение свойства name на Pete.
Удалите свойство name из объекта.

2. Напишите функцию `isEmpty(obj)``, которая возвращает true, если у объекта нет свойств, иначе false. Должно работать так:

```javascript
let schedule = {};
alert( isEmpty(schedule) ); // true
schedule["8:30"] = "get up";
alert( isEmpty(schedule) ); // false
```


3. Можно ли изменить объект, объявленный с помощью const? Как вы думаете?
```javascript
const user = {
  name: "John"
};
// это будет работать?
user.name = "Pete";
```

4. У нас есть объект, в котором хранятся зарплаты нашей команды:
```javascript
let salaries = {
  John: 100,
  Ann: 160,
  Pete: 130
}
```
Напишите код для суммирования всех зарплат и сохраните результат в переменной sum. Должно получиться 390. Если объект `salaries` пуст, то результат должен быть 0.

5. Создайте функцию `multiplyNumeric(obj)`, которая умножает все числовые свойства объекта `obj` на 2.

Например:
```javascript
// до вызова функции
let menu = {
  width: 200,
  height: 300,
  title: "My menu"
};

multiplyNumeric(menu);
// после вызова функции
menu = {
  width: 400,
  height: 600,
  title: "My menu"
};
```

Обратите внимание, что `multiplyNumeric` не нужно ничего возвращать. Следует напрямую изменять объект.

6. Что выведет следующий код?
```
let fruits = ["Яблоки", "Груша", "Апельсин"];

// добавляем новое значение в "копию"
let shoppingCart = fruits;
shoppingCart.push("Банан");

// что в fruits?
alert( fruits.length ); // ?
```

7. Давайте произведём 5 операций с массивом.
Создайте массив styles с элементами «Джаз» и «Блюз».
Добавьте «Рок-н-ролл» в конец.
Замените значение в середине на «Классика». Ваш код для поиска значения в середине должен работать для массивов с любой длиной.
Удалите первый элемент массива и покажите его.
Вставьте «Рэп» и «Регги» в начало массива.
Массив по ходу выполнения операций:
Джаз, Блюз
Джаз, Блюз, Рок-н-ролл
Джаз, Классика, Рок-н-ролл
Классика, Рок-н-ролл
Рэп, Регги, Классика, Рок-н-ролл

8. Каков результат? Почему?
```javascript
let arr = ["a", "b"];
arr.push(function() {
  alert( this );
})
arr[2](); // ?
```

9. Напишите функцию sumInput(), которая:
Просит пользователя ввести значения, используя prompt и сохраняет их в массив.
Заканчивает запрашивать значения, когда пользователь введёт не числовое значение, пустую строку или нажмёт «Отмена».
Подсчитывает и возвращает сумму элементов массива.


10. На входе массив чисел, например: `arr = [1, -2, 3, 4, -9, 6]`.

Задача: найти непрерывный подмассив в arr, сумма элементов в котором максимальна.

Функция `getMaxSubSum(arr)` должна возвращать эту сумму.

Например:
```javascript
getMaxSubSum([-1, 2, 3, -9]) = 5 (сумма выделенных)
getMaxSubSum([2, -1, 2, 3, -9]) = 6
getMaxSubSum([-1, 2, 3, -9, 11]) = 11
getMaxSubSum([-2, -1, 1, 2]) = 3
getMaxSubSum([100, -9, 2, -3, 5]) = 100
getMaxSubSum([1, 2, 3]) = 6 (берём все)
```
Если все элементы отрицательные – ничего не берём(подмассив пустой) и сумма равна «0»:

```javascript
getMaxSubSum([-1, -2, -3]) = 0
```
Попробуйте придумать быстрое решение: O(n2), а лучше за О(n) операций.

11. Удалить в массиве все числа, которые повторяются более двух раз. 

12.Введите одномерный целочисленный массив. Найдите наибольший нечетный элемент. Далее трижды осуществите циклический сдвиг влево элементов, стоящих справа от найденного максимума, и один раз сдвиг элементов вправо, стоящих слева от найденного максимума.

13. Найдите сумму отрицательных элементов массива.

14. Найдите произведение элементов массива с нечетными номерами.

15. Найдите сумму элементов массива между двумя первыми нулями. Если двух нулей нет в массиве, то выведите ноль.

16. Найдите наибольший элемент массива.

17. Найдите наименьший четный элемент массива. Если такого нет, то выведите первый элемент. 

18. Преобразовать массив так, чтобы сначала шли нулевые элементы, а затем все остальные.

19. Найдите сумму номеров минимального и максимального элементов. 

 20. Найдите минимальный по модулю элемент массива.

21. Заполнить массив из 10 элементов случайными числами в интервале `[-10..10]` и сделать реверс отдельно для 1-ой и 2-ой половин массива.

22. Заполнить массив из 12 элементов случайными числами в интервале `[-12..12]` и выполнить циклический сдвиг ВПРАВО на 4 элемента.

Задачи CodeWars:
https://www.codewars.com/kata/javascript-mathematician
https://www.codewars.com/kata/javascript-from-the-inside-number-1-map
https://www.codewars.com/kata/javascript-from-the-inside-number-2-filter
https://www.codewars.com/kata/power-bind
https://www.codewars.com/kata/closures-and-scopes
https://www.codewars.com/kata/can-you-keep-a-secret

Задача с API
Необходимо использовать любое API для написания веб-приложения используя Node JS и Express

<h2 align="center">Решение задач</h2>

### app.js

1. 
```javascript
    var user = {};
    user.name = "John";
    user.surname = "Smith";
    alert(`name - surname: ${user.name} - ${user.surname}`);
    user.name = "Pete";
    alert(`name - surname: ${user.name} - ${user.surname}`);
    delete user.name;
    alert(`name - surname: ${user.name} - ${user.surname}`);
```

2. 
```javascript
    let schedule = {};
    alert( isEmpty(schedule) ); // true
    schedule["8:30"] = "get up";
    alert( isEmpty(schedule) ); // false
```

3. 
```javascript
    const user = {
        name: "John"
    };
    // это будет работать?
    user.name = "Pete";
    alert(user.name);
```

4. 
```javascript
    let salaries = {
        John: 100,
        Ann: 160,
        Pete: 130
      };
    let sum = 0;
    if (isEmpty(salaries)) {
        alert(0);
        return;
    }
    for(const i in salaries)
    {
        sum += salaries[i];
    }
    alert(sum);
```

5. 
```javascript
    let menu = {
        width: 200,
        height: 300,
        title: "My menu"
      };
      
    multiplyNumeric(menu);
      
    alert(`menu = {\n width = ${menu.width}\n height = ${menu.height}\n title = ${menu.title}\n}`);

```

6. 
```javascript
    let fruits = ["Яблоки", "Груша", "Апельсин"];

    // добавляем новое значение в "копию"
    let shoppingCart = fruits;
    shoppingCart.push("Банан");

    // что в fruits?
    alert( fruits.length ); // ?
```

7. 
```javascript
    const styles = ["Джаз","Блюз"];
    alert(styles);
    styles.push("Рок-н-ролл");
    alert(styles);
    styles.splice(Math.floor(styles.length / 2), 1, "Классика" );
    alert(styles);
    alert("Удален: " + styles.shift());
    alert(styles);
    styles.splice(0, 0, "Рэп", "Регги");
    alert(styles);
```

8. 
```javascript
    let arr = ["a", "b"];
    arr.push(function() {
    alert( this );
    })
    arr[2](); // ?
```

9. 
```javascript
    const array = [];

    while(true)
    {
        var input = prompt("Введите число либо 'Отмена'");
        if (input == undefined || input == "Отмена")
            break;
        else
            array.push(parseInt(input));
    }

    let sum = 0;
    for (let i = 0; i < array.length; i++)
        sum += array[i];

    alert(sum);
```

10. 
```javascript
    let max = array[0];

    for(let i = 0; i < array.length; i++)
    {
        let sum = 0;
        for(let j = i; j < array.length - i; j++)
        {
            sum += array[j];
            if (max < sum)
            {
                max = sum;
            }
        }

    }

    return max > 0 ? max : 0;
```

11. 
```javascript
    const array = [1, 1, 2, 3 ,4 ,5, 6, 6, 7 ,6 ,8, 6, 8]; // 1 1 2 3 4 5 7 8 8
    const result = [];
    for (let i = 0; i < array.length; i++)
    {
        let count = 0;
        if (result.indexOf(array[i]) != -1) continue;

        for(let j = 0; j < array.length; j++)
        {
            if (array[i] == array[j])
                {
                    count++;
                    if (count > 2)
                    {
                        result.push(array[i]);
                        break;
                    }
                }
        }
    }

    for(let i = 0; i < result.length; i++)
    {
        for(let j = 0; j < array.length; j++)
        {
            if(array[j] == result[i])
            {
               array.splice(j, 1);
               j--;
            }
        }
    }


    alert(array);
```

12. 
```javascript
    let array = [1, 2, 3, 4, 5, 10, 6, 7, 8 , 9];
    let max = array[0];
    for(let i = 0; i < array.length; i++) 
    {
        if(max < array[i]) max = array[i];
    }
    let array1 = array.slice(0, array.indexOf(max));
    let array2 = array.slice(array.indexOf(max) + 1, array.length);

    for(let i = 0; i < 3; i++) array1.unshift(array1.pop());
    array2.push(array2.shift())
    alert(array1.concat([max]).concat(array2));
```

13. 
```javascript
    const array = [-1, 2, 3, -2 , 4, -4, -10, -3]; // -20
    let sum = 0;
    for(let i = 0; i < array.length; i++)
    {
        if (array[i] < 0) sum += array[i];
    }
    alert(sum);
```

14. 
```javascript
    const array = [1, 2, 3, 4, 5, 6, 7]; // 105
    let result = 1;
    for (let i = 0; i < array.length; i++)
    {
        if(i % 2 == 1) result *= array[i];
    }
    alert(result);
```

15. 
```javascript
    const array = [1, 2, 0, 5, 5, 5, 5, 0, 1, 2, 3]; // 20
    let result = 0;
    let i = 0;
    let flag = false;
    if(array.indexOf(0) == - 1) {
        alert(0);
        return;
    }
    for(let i = array.indexOf(0) + 1; i < array.length; i++)
    {
        result += array[i];
        if(array[i] == 0)
        {
            alert(result);
            return;
        }
    }
    alert(0);
```

16. 
```javascript
    const array = [1, 52, 1020, 1241, 5, 4444, 124]; // 4444
    let max = array[0];
    for(let i = 0; i < array.length; i++)
    {
        if (max < array[i]) max = array[i];
    }
    alert(max);
```

17. 
```javascript
    let array = [122, 52, 1020, 1241, 5, 4444, 124]; // 52
    let min = array[0];
    for(let i = 0; i < array.length; i++)
    {
        if(min > array[i] && (i + 1) % 2 == 0) min = array[i];
    }
    alert(min);
```

18. 
```javascript
    let array = [0, 2, 3, 0, 0, 1, 2, 0, 33, 4, 0];
    let indexNull = 0;
    for(let i = 0; i < array.length; i++)
    {
        if(array[i] == 0)
        {
            let temp = array[indexNull];
            array[indexNull] = 0;
            array[i] = temp;
            indexNull++;
        }
    }
    alert(array);
```

19. 
```javascript
    let array = [1, 2, 3, 4, 5, 0, 4, 3, 2, 1];// 4 + 5
    let min = 0;
    let max = 0;
    for(let i = 0; i < array.length; i++)
    {
        if (array[max] < array[i]) max = i;
        if (array[min] > array[i]) min = i;
    }
    alert(max + min);
```

20. 
```javascript
    let array = [10, -2, 4, -20, 2, 4, 15]; // -2
    let min = array[0];
    for(let i = 0; i < array.length; i++)
    {
        if(Math.abs(min) > Math.abs(array[i])) min = array[i];
    }
    alert(min);
```

21. 
```javascript
    let array = [];
    for(let i = 0; i < 10; i++)
        array.push(Math.floor(Math.random() * 10 - Math.random() * 10));

    let array1 = array.slice(0, 5).reverse();
    let array2 = array.slice(5, 10).reverse();
    alert(array);
    alert(array1.concat(array2));
```

22. 
```javascript
    let array = [];
    for(let i = 0; i < 12; i++)
        array.push(Math.floor(Math.random() * 12 - Math.random() * 12));
    
    alert(array);
    for(let i = 0; i < 4; i++) array.unshift(array.pop());
    alert(array);
```
### CodeWars
1. 
```javascript
function calculate() {
  var first = 0; 
  for(var i = 0 ; i < arguments.length; i+=1) {
    first += arguments[i];
  }
  return function() {
    var second = 0;
    for(var j = 0 ; j < arguments.length; j +=1) {
        second += arguments[j];
    }
    return first+second;
  }
}
```
2. 
```javascript
Array.prototype.map = function(callback, context){
  const result = new Array(this.length);
  for(let i = 0; i < this.length; i++){
    if(i in this) result[i] = callback.call(context, this[i], i, this);
  }
  return result;
};
```
3. 
```javascript
Array.prototype.filter = function(f, receiver){
    var len = this.length;
    let result = [];
    for(let i = 0; i < len; i++)
    {
      if (i in this && f.call(receiver, this[i], i, this)){
        result.push(this[i]);
      } 
    }
  return result;
};
```
4. 
```javascript
Function.prototype.bind = function(ctx){
  var func = this;
  return function(...args){
    return func.call(this == global ? ctx : this, ...args);
  };
};
```
5. 
```javascript
function createFunctions(n) {
  var callbacks = [];

  for (var i=0; i<n; i++) {
    let j = i; // or const j = i;
    callbacks.push(function() {
      return j;
    });
  }
  
  return callbacks;
}
```
6. 
```javascript
function createSecretHolder(secretj) {
  var obj = {};
  obj.secretj = secretj;
  obj.getSecret = () => obj.secretj;
  obj.setSecret = function(newSecret) {
    obj.secretj = newSecret;
  }
  return obj;
}
```
### Задача с API
```javascript
function func23()
{
    let num = parseInt(prompt("Введите номер"));
    let fact = funcAPI(num);
}

async function funcAPI(num){
    result = await fetch(`http://numbersapi.com/${num}`).then(resp => resp.text());
    document.getElementById("Fact").innerText = result;
}

```



<h2 align="center">Вывод</h2>
В этой лабораторной работе я научился работать с API на javascript.