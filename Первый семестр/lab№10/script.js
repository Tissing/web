function func1(array, k)
{
    let result = [];
    for(let i = 0; i < array.length; i++)
    {
        if(array[i] % k == 0)
            result.push(array[i]);
    }
    return result;
}

function func2(str1, str2)
{
    str1 = str1.replace(/[^\w]/g, "").toLowerCase();
    str2 = str2.replace(/[^\w]/g, "").toLowerCase();

    let chars1 = str1.split("");
    let chars2 = str2.split("");

    if(chars1.length != chars2.length)
        return "Не являются анаграммами";

    chars1 = chars1.sort().join();
    chars2 = chars2.sort().join();

    if(chars1 === chars2) return "Являются анаграммами";
    return "Не являются анаграммами"; 
}

function func3(str)
{
    let chars = ['a','e','i','o','u'];
    let count = 0;    
    for(let i = 0; i < str.length; i++)
        if(chars.includes(str[i]))
            count++;
    return count;
}

function func4()
{
    let str = "";
    for(let i = 0; i < 7; i++)
        console.log(str=str+"#");
}

function func5()
{
    for(let i = 1; i <= 100; i++)
    {
        if(i % 3 == 0 && i % 5 == 0)
        {
            console.log('FizzBuzz');
            continue;
        }
        if(i % 3 == 0)
        {
            console.log('Fizz');
            continue;
        }
        if(i % 5 == 0)
        {
            console.log('Buzz');
            continue;
        }
        
        console.log(i);
    }
}

function func6()
{
    let str = "";
    for(let i = 1, j = 1; i <= 64; i++)
    {
        if(j % 2 == 0) 
            if(i % 2 == 0) str+="#";
                else str+=" ";
        else
            if(i % 2 == 0) str+=" ";
            else str+="#";

        if(i % 8 == 0) 
        {
            str+="\n";
            j+=1;
        }
    }
    return str;
}

function func7()
{
    let arg1 = parseInt(prompt('Первый аргумент'));
    let arg2 = parseInt(prompt('Второй аргумент'))
    console.log(min(arg1, arg2))
}

function min(arg1, arg2) // func7
{
    return arg1 > arg2 ? arg2 : arg1;
}

/* Вариант с проблемой ввода числа -1
function func8()
{
    console.log("isEven(50) = " + isEven(50));
    console.log("isEven(75) = " + isEven(75));
    console.log("isEven(-1) = " + isEven(-1));
}

function isEven(num)
{
    if(num == 1) return false;
    if(num == 0) return true;
    return isEven(num - 2);
}*/

function func8()
{
    console.log("isEven(50) = " + isEven(50));
    console.log("isEven(75) = " + isEven(75));
    console.log("isEven(-1) = " + isEven(-1));
}

function isEven(num) // func 8
{
    if(num == 1) return false;
    if(num == 0) return true;
    if(num > 0) return isEven(num - 2);
    if(num < 0) return isEven(num + 2);
}

function func9()
{
    console.log(countBs(prompt("Строка для подсчета символов 'B'")));
    console.log(countChar(prompt("Строка для подсчета определенного символа"), prompt("Символ")));
}

function countBs(str) // func 9
{
    let count = 0;
    for(let i = 0; i < str.length; i++)
        if(str[i] == "B") count++;
    return count;
}

function countChar(str, char) // Добавляем новый вводимый параметр char. func9 
{
    let count = 0;
    for(let i = 0; i < str.length; i++)
        if(str[i] == char) count++; // Заменяем "B" на char
    return count;
}

function func10()
{
    let start = parseInt(prompt("Start"));
    let end = parseInt(prompt("End"));
    let array = range(start,end);
    console.log(array);
    console.log(sum(array));

    start = parseInt(prompt("Start"));
    end = parseInt(prompt("End"));
    let step = parseInt(prompt("Step"));
    array = range(start,end, step);
    console.log(array);
    console.log(sum(array));
}

function range(start, end, step=1) // func10
{
    let array = [];
    for(let i = start; step < 0? i >= end :i <= end; i+=step)
        array.push(i);
    return array;
}

function sum(array) // func10
{
    let sum = 0;
    for(let i = 0; i < array.length; i++)
        sum+= array[i];
    return sum;
}

function func11()
{
    console.log(reverseArray([1,2,3,4,5,6]));
    let array = [1,2,3,4,5,6,7];
    console.log(array);
    reverseArrayInPlace(array);
    console.log(array);
}

function reverseArray(array) // func11
{
    let newArray = Array(array.length);
    for(let i = 0; i < array.length / 2; i++)
    {
        newArray[i] = array[array.length - i - 1];
        newArray[array.length - i - 1] = array[i];
    }
    return newArray;
}

function reverseArrayInPlace(array) // func11
{
    for(let i = 0; i < array.length / 2; i++)
    {
        let temp = array[i] * 1;
        array[i] = array[array.length - i - 1];
        array[array.length - i - 1] = temp;
    }
}


function func12()
{
    obj1 = {
        var1: "123",
        var2: 123,
        var3: [1,2,3]
    }

    obj2 = {
        var1: "123",
        var2: 123,
        var3: [1,2,3]
    }
    
    obj3= {
        var1: 1234,
        asdad: [1,2,3,4],
        var3: "Привет"
    }
    
    console.log("deepEqual(123,123) = " + deepEqual(123,123));
    console.log("deepEqual(445,123) = " + deepEqual(445,123));
    console.log("deepEqual('123','123') = " + deepEqual('123','123'));
    console.log("deepEqual('445','123') = " + deepEqual('445','123'));
    console.log("deepEqual(obj1, obj2) = " + deepEqual(obj1, obj2));
    console.log("deepEqual(obj1, obj3) = " + deepEqual(obj1, obj3));
    console.log("deepEqual(obj1, null) = " + deepEqual(obj1, null));
    console.log("deepEqual(null, null) = " + deepEqual(null, null));

}

function deepEqual(arg1, arg2)
{
    if(typeof(arg1) != 'object' && typeof(arg2) != 'object') return arg1 === arg2;

    if(arg1 == null && arg2 == null) return true;
    if(arg1 == null || arg2 == null) return false;

    let keys1 = Object.keys(arg1);
    let keys2 = Object.keys(arg2);

    if(keys1.length != keys2.length) return false;

    for(key of keys1)
        if(!keys2.includes(key) || !deepEqual(arg1[key], arg2[key])) return false;

    return true;
}

function func13()
{
    let array = [
        [1, 2, 3],
        [4, 5],
        [6, 7, 8, 9],
        [10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
        [20]
    ]
    console.log(array.reduce((a,b) => a.concat(b)));
}

