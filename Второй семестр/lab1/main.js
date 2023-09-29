
function lab1()
{
    console.log("Задание 1")
    let str = 'hdfgv'
    console.log(str[0])
    console.log(str[1])
    console.log(str[4])
    console.log("----------------------------------\n")
}

function lab2()
{
    console.log("Задание 2")
    console.log(60*60)
    console.log("----------------------------------\n")
}

function lab3()
{
    console.log("Задание 3")
    var num = 1;
    num += 12;
    num -= 14;
    num *= 5;
    num /= 7;
    num++;
    num--;
    console.log(num);
    console.log("----------------------------------\n")
}

function lab4()
{
    console.log("Задание 4")
    let num = 3
    console.log(num)
    console.log("----------------------------------\n")
}

function lab5()
{
    console.log("Задание 5")
    let a = 10, b = 2
    console.log('a+b=' + (a+b))
    console.log('a*b=' + (a*b))
    console.log('a/b=' + (a/b))
    console.log("----------------------------------\n")
}

function lab6()
{
    console.log('Задание 6')
    let c = 15, d = 2
    let result = c + d
    console.log(result)
    console.log("---------------------------------\n")
}

function lab7()
{
    console.log('Задание 7')
    let a=10,
        b=2,
        c=5;

    console.log(a+b+c)
    console.log("---------------------------------\n")
}

function lab8()
{
    console.log('Задание 8')
    let a=17, b=10
    let c = a-b
    let d = 7
    let result = c + d
    console.log(result)
    console.log("---------------------------------\n")
}

function lab9()
{
    console.log('Задание 9')
    hour = 60*60
    day = 24*hour
    month = day*31
    console.log(hour)
    console.log(day)
    console.log(month)
    console.log("---------------------------------\n")
}

function lab10()
{
    console.log('Задание 10')
    let hour = 15, minute=30, second=10
    console.log(`${hour}:${minute}:${second}`) 
    console.log("---------------------------------\n")
}

function lab11()
{
    console.log('Задание 11')
    let num = 5
    num *= num
    console.log(num)
    console.log("---------------------------------\n")
}

function lab12()
{
    console.log('Задание 12')
    console.log([1, 2, 4, 5, 9, 10].filter(num=> {if(num % 2 == 0) return num}).reduce((total, num)=> total + Math.sqrt(num), 0))
    console.log("---------------------------------\n")
    
}

function odd(num){
    if (num % 2 == 0) return num
}

function sum(total, num){
    return total + Math.sqrt(num)
}

function lab13()
{
    console.log('Задание 13')
    console.log(1.15 + 2.30)
    console.log("---------------------------------\n")
}

function lab14()
{
    console.log('Задание 14')
    let x = 5
    console.log(x++)
    console.log(x)
    console.log("---------------------------------\n")
}

function lab15()
{
    console.log('Задание 15')
    console.log([ ] + false - null + true )
    console.log("---------------------------------\n")
}

function lab16()
{
    console.log('Задание 16')
    let y = 1;
    let x = y = 2;
    console.log(x);
    console.log('---------------------------------\n')
}

function lab17()
{
    console.log('Задание 17')
    console.log( [ ] + 1 + 2)
    console.log("---------------------------------\n")
}

function lab18()
{
    console.log('Задание 18')
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
    console.log("---------------------------------\n")
}

function lab19()
{
    console.log('Задание 19')
    let height = 23, width = 10
    let s = 0.5 * height * width
    console.log(s)
    console.log("---------------------------------\n")
}

function lab20()
{
    console.log('Задание 20')
    let heightC = 10, dC = 4
    let v = heightC * (dC/2)* (dC/2) * 3.14
    console.log(v)
    console.log("---------------------------------\n")
}

function lab21()
{
    console.log('Задание 21')
    let S = 2000000, p = 10, years = 5
    let perepl = 0
    for(let i = 0; i < years; i++)
    {
        perepl += S * (p / 100)
        S = S * (p/1 + 1)
    }
    
    console.log(perepl)
    console.log("---------------------------------\n")
}

function lab22()
{
    console.log('Задание 22')
    let str = "Привет",
        num = 123,
        flag = true,
        txt = "true"

    console.log(typeof(str))
    console.log(typeof(num))
    console.log(typeof(flag))
    console.log(typeof(txt))
    console.log("---------------------------------\n")
}

function lab23(num)
{
    console.log('Задание 23')
    console.log(-1 * num)
    console.log("---------------------------------\n")
}

lab1()
lab2()
lab3()
lab4()
lab5()
lab6()
lab7()
lab8()
lab9()
lab10()
lab11()
lab12()
lab13()
lab14()
lab15()
lab16()
lab17()
lab18()
lab19()
lab20()
lab21()
lab22()
lab23(1)
