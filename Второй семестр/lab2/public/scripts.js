function task1(){
    let name = "Ilya";

    alert( `hello ${1}` ); // ?

    alert( `hello ${"name"}` ); // ?

    alert( `hello ${name}` ); // ?
}

function task2(){
    let Name = prompt("Введите имя", "Иван");
    alert(Name);
}

function task3(){
    let a = 1, b = 1;
    let c = ++a; // ?
    let d = b++; // ?
    alert(`a = ${a}, b = ${b}, c = ${c}, d = ${d}`);
}

function task4(){
    let a = 2;
    let x = 1 + (a *= 2);
    alert(`a = ${a}, x = ${x}`);
}

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

function task6(){
    let a = prompt("Первое число?", 1);
    let b = prompt("Второе число?", 2);
    alert(parseInt(a) + parseInt(b)); // 12
}

function task7(){
    alert(Math.PI.toFixed(2));
}

function task8(){
    let num = parseInt(prompt("Введите число", 0));
    alert(`Вы ввели число: ${num}`);
}

function task9(){
    let num = parseInt(prompt("Введите число", 0));
    alert(`${num} - вот такое число Вы ввели`);
}

function task10(){
    let a = parseInt(prompt("Введите сторону квадрата", 0));
    alert(`Периметр = ${4 * a}`);
}

function task11(){
    let rad = parseInt(prompt("Введите радиус окружности", 0));
    alert(`Диаметр = ${2 * rad}`);
}

function task12(){
    let h = parseInt(prompt("Введите высоту над Землей ", 1));
    alert(`Расстояние между точками = ${Math.sqrt(6350 * 6350 + h * h)}`);
}

function task13(){
    let a = parseInt(prompt("Введите сторону куба", 0));
    alert(`Объем = ${a*a*a} \n Площадь боковой поверх-ти = ${a * a * 4}`);
}

function task14(){
    let rad = parseInt(prompt("Введите радиус окружности", 0));
    alert(`Длина = ${2*3.14*rad} \n Площадь круга= ${3.14 * rad * rad}`);
}

function task15(){
    let a = parseInt(prompt("Введите a", 0));
    let b = parseInt(prompt("Введите b", 0));
    a = a + b;
    b = a - b;
    a = a - b;
    alert(`a = ${a}, b = ${b}`);
}

function task16(){
    let a = parseInt(prompt("Введите a", 0));
    let b = parseInt(prompt("Введите b", 0));
    alert(`Среднее арифметическое = ${(a+b)/2} \n Среднее геометрическое = ${Math.sqrt(a*b)}`);
}

function task17(){
    let V = parseInt(prompt("Введите обьем", 0));
    let m = parseInt(prompt("Введите m", 1));
    alert(`Плотность = ${V/m}`);
}

function task18(){
    let S = parseInt(prompt("Введите площадь государства", 0));
    let n = parseInt(prompt("Введите число граждан", 1));
    alert(`Плотность = ${S/n}`);
}

function task19(){
    let k1 = parseInt(prompt("Введите 1й катет", 0));
    let k2 = parseInt(prompt("Введите 2й катет", 1));
    alert(`Гипотенуза = ${Math.sqrt(k1*k1 + k2*k2)}`);
}

function task20(){
    let r1 = parseInt(prompt("Введите радиус внутреннего кольца", 0));
    let r2 = parseInt(prompt("Введите радиус внешнего кольца", 1));
    let s1 = 3.14 * r1 * r1;
    let s2 = 3.14 * r2 * r2;
    alert(`Площадь кольца = ${s2 - s1}`);
}

function task21(){
    let k1 = parseInt(prompt("Введите 1й катет", 0));
    let k2 = parseInt(prompt("Введите 2й катет", 1));
    let gip = Math.sqrt(k1*k1 + k2*k2);
    alert(`Периметр = ${k1 + k2 + gip}`);
}

function task22(){
    let o1 = parseInt(prompt("Введите 1е основание трапеции", 0));
    let o2 = parseInt(prompt("Введите 2е основание трапеции", 1));
    let h = parseInt(prompt("Введите высоту трапеции", 1));
    let k1 = Math.abs(o2 - o1) / 2;
    let gip = Math.sqrt(k1*k1 + h*h);
    alert(`Периметер трапеции = ${o1 + o2 + 2 * gip}`);
}

