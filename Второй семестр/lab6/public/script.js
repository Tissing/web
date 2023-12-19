function func2()
{
    let text = prompt("Изменение input");
    document.getElementById("input").value = text;
}

function func3()
{
    let text = document.getElementById("input").value;
    alert(text);
}

function func4()
{
    let num = parseInt(document.getElementById("input").value);
    alert(num * num);
}

function func5()
{
    let text = document.getElementById("input1").value; 
    document.getElementById("input1").value = document.getElementById("input2").value;
    document.getElementById("input2").value = text;
}

function func6()
{
    document.getElementById("button6").innerText = "Поменял текст";
}

function func7()
{
    document.getElementById("input3").style.color = 'red';
}

function inputon()
{
    document.getElementById("input4").removeAttribute('disabled');
}

function inputoff()
{
    document.getElementById("input4").setAttribute('disabled', '');
}

function func9()
{
    alert("Вы навели мышкой на кнопку!");
}

function func10()
{
    alert("Вы дважды нажали на кнопку!");
}

function func11()
{
    alert("Вы навели мышкой на элемент div!");
}

function func12()
{
    var element = document.getElementById("image");
    if(element.getAttribute('src') == "cat.jpg")
        element.setAttribute('src','crab.jpg');
    else 
        element.setAttribute('src','cat.jpg');
}

function func14()
{
    
}

function func15()
{
    this.setAttribute('disabled','');
}

function func16(element)
{
    element.count++;
    element.innerText = element.count;
}

function func17()
{
    document.body.style.cursor = 'pointer';
}

function func18()
{
    document.getElementById('hide').style.visibility = 'hidden';
}

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

