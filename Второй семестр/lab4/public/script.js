function func1()
{
    let x = parseInt(prompt("Введите x"));
    if (x > 0)
        alert(Math.pow(Math.sin(x), 2));
    else
        alert(1 - 2 * Math.sin(x*x));
}

function func2()
{
    let n = parseInt(prompt("Введите n"));
    let temp = n;
    let reverse = 0;
    while (temp > 0){
        reverse  = reverse * 10 + temp % 10;
        temp = Math.round(temp / 10);
    }
    alert(n == reverse);
}

function func3()
{
    let n = parseInt(prompt("Введите n"));

    if(n % 4 == 0 & (n % 100 != 0 || n % 400 == 0))
        alert("Год високосный");
    else
        alert("Год не високосный");
}

function func4()
{
    let x = parseInt(prompt("Введите x"));
    alert(y4(x));
}

function y4(x)
{
    if (x < -1) return -1;
    if (x > -1) return x;
    if (x == -1) return 1;
}

function func5()
{
    let n = parseInt(prompt("Введите номер месяца"));

    if (n == 12 || n == 1 || n == 2) alert("Зима");
    else if (3 <= n && n <= 5) alert("Весна");
    else if (6 <= n && n <= 8) alert("Лето");
    else if (9 <= n && n <= 11) alert("Осень");
    else alert("Неверный ввод");
}

function func6()
{
    let m = parseInt(prompt("Введите номер масти"));
    let k = parseInt(prompt("Введите номер карты"));
    let mast = "";
    let card = "";
    switch (m)
    {
        case 1:
            mast += "пики";
            break;
        case 2:
            mast += "трефы";
            break;
        case 3:
            mast += "бубны";
            break;
        case 4:
            mast += "червы";
            break;
        default:
            alert("Неверный ввод m");
            return;
    }

    switch (k)
    {
        case 6:
            card = "Шестерка";
            break;
        case 7:
            card = "Семерка";
            break;
        case 8:
            card = "Восьмерка";
            break;
        case 9:
            card = "Девятка";
            break;
        case 10:
            card = "Десятка";
            break;
        case 11:
            card = "Валет";
            break;
        case 12:
            card = "Дама";
            break;
        case 13:
            card = "Король";
            break;
        case 14:
            card = "Туз";
            break;
        default:
            alert("Неверный ввод k");
            return;
    }
    alert(card +" "+ mast);

}

function func7()
{
    let n = parseInt(prompt("Введите год"));
    let result = "";

    n = n % 60;
    let animal = n % 12;
    let color = Math.round(n % 12) + 1;

    /////////
}

function func8()
{
    let style = "<style>table, th, td {border: 1px solid black;}</style>\n"
    let result = "<table style='border: 1px solid black'>\n<tr>\n";
    for(let i = 1; i <= 9; i++)
    {
        result+=`<th>${i}</th>\n`;
    }
    result+="</tr>\n<tr>\n";
    for(let i = 1; i <= 9; i++)
        result += `<td>${i * 9}</td>\n`
    result += "</tr>\n</table>";

    document.write(style + result);
}

function func9()
{
    let result = "";
    for(let i = 1; i <= 20; i++)
    {
        result += `sin ${i} = ${Math.sin(i)}<br>`;
    }
    document.write(result);
}

function func10()
{
    let result = 0;
    for(let i = 100; i <=500; i++)
        result+= i;
    alert(`a) Сумма от 100 до 500 =  ${result}`);

    let a = parseInt(prompt("Введите a"));
    if(a > 500) {
        alert("Число больше 500!");
        return;
    }
    result = 0;
    for(let i = a; i <=500; i++)
        result+= i;
    alert(`б) Сумма от ${a} до 500 =  ${result}`);

    let b = parseInt(prompt("Введите b"));
    if(b < -10)
    {
        alert("Число меньше -10!");
        return;
    }
    result = 0;
    for(let i=-10; i <= b; i++)
    {
        result += i;
    }
    alert(`в) Сумма от -10 до ${b} =  ${result}`);

    a = parseInt(prompt("Введите a"));
    b = parseInt(prompt("Введите b"));

    if (a > b) {
        alert("Число a больше b!");
        return;
    }
    result = 0;
    for (let i = a; i <= b; i++)
        result+=i;
    alert(`г) Сумма от ${a} до ${b} = ${result}`);
}

function func11()
{
    let n = parseInt(prompt("Введите n"));
    let result = 1;
    for(let i = 1; i <= n; i++)
        result+= 1/i;
    alert(`Сумма равна ${result}`);
}

function func12()
{
    let x = parseInt(prompt("Введите x"));
    let y = parseInt(prompt("Введите y"));

    let result = x;

    /* let result = 0; 
     * let i = 0;
     * while(i < y){
     * result += x;
     * }
     */

    for(let i = 1; i < y; i++)
        result += x;
    alert(`${x} * ${y} = ${result}`);
}

function func13()
{
    let n = parseInt(prompt("Введите n"));
    let result = 0;
    for (let i = 1; i <= n ; i++)
        result += 2 * i - 1;
    alert(`${n}^2 = ${result}`);
}

function func14()
{
    let n = 0;
    for (let i = 50; i >= 1; i--)
    {
        n= Math.sqrt(i + n);
    }
    alert(n);
}

function func15()
{
    let array = [1, 2, 3, 4, 5, 6, 0];
    let result = 0;
    let length = 0;
    for(let i = 0; array[i] != 0; i++)
    {
        result += array[i];
        length++;
    }
    alert(`Сумма = ${result}`);
    alert(`Кол-во чисел = ${length}`);
}

function func16()
{
  let array = [1, 2, 3, 4, 5, -6];
  let result = 0;
  for(let i = 0; array[i] >= 0; i++)
  {
    result+= array[i];
  }
  alert(`Среднее = ${result / (array.length - 1)}`);
}

function func17()
{
    let n = prompt('Введите число n');
    let a = 0, b = 0, c = 0,
        g = 0, d = 1, e = 0;
    
    for(let i = 0; i < n.length; i++)
    {
        if (n[i] == '3') a++;
        if (n[i] == n[n.length - 1]) b++;
        if (parseInt(n[i]) % 2 == 0) c++;
        if (parseInt(n[i]) > 5) g+= parseInt(n[i]);
        if (parseInt(n[i]) > 7) d*= parseInt(n[i]);
        if (n[i] == '0') e++;
        if (n[i] == '5') e++;
    }
    
    alert(`а) ${a}
б) ${b}
в) ${c}
г) ${g}
д) ${d}
е) ${e}`);

}

function func18()
{
    let n = prompt('Введите число n');
    let max = 0;
    let maxRe = 0;
    let min = 0;
    let minRe = 0;

    for(let i = 0; i < n.length; i++)
        if (n[i] > n[max]) max = i;
    
    maxRe = -1 * (max - n.length);
    max++;
    for(let i = 0; i < n.length; i++)
        if (n[i] < n[min]) min = i;

    minRe = -1 * (min - n.length);
    min++;
    alert(`а) от конца числа: ${maxRe} \nот начала числа ${max}
б) от конца числа: ${minRe}\nот начала числа: ${min}`);
}

function func19()
{
    let n = parseInt(prompt('Введите число n'));
    let value = 2;
    while(value != n)
    {
        if (n % value == 0)
        {
            alert("Число не простое");
            return;
        } 
        value++;
    }
    alert("Число простое");
}

function func20()
{
    let n = prompt('Введите число n');

    for(let i = 0; i < n.length - 1; i++)
        if (n[i] >= n[i + 1]) 
        {
            alert("false");
            return;
        }
    alert('true');
}

function func21()
{
    let array = [];
    for (let i = 1; i <= 10000; i++)
        array.push(i);

    let n = parseInt(prompt('Введите число n'));
    for (let i = 0; i < array.length; i++)
    {
        if (array[i] > n)
        {
            alert(i);
            return;
        }
    }
    alert('Нет такого числа');
}

function func22()
{
    let n = prompt('Введите число n');
    let a = prompt("Введите цифру a"), acount = 0;
    let b = prompt("Введите цифру b"), bcount = 0;

    for(let i = 0; i < n.length; i++)
    {
        if (n[i] == a) acount++;
        if (n[i] == b) bcount++;
    }
    alert(acount < bcount);
}

function func23()
{
    let str = "";
    let value = 10;
    let max = 30;

    while (value <= 30)
    {
        str+=`${value}\n`;
        value++;
    }
    
    alert(str);

    str = "";
    value = 10;

    do{
        str+=`${value}\n`;
        value++;
    } while (value <= 30);

    alert(str);
}

