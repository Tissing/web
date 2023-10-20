
function func1(){
    alert( null || 2 || undefined );
}

function func2(){
    alert( alert(1) || 2 || alert(3) );
}

function func3(){
    alert( 1 && null && 2 );
}

function func4(){
    alert( alert(1) && alert(2) );
}

function func5(){
    alert( null || 2 && 3 || 4 );
}

function func6(){
    age = prompt("Введите возраст", 14);
    if (age >= 14 || age <= 90){
        alert(true);
    } else {
        alert(false);
    }
}

function func7(){
    age = prompt("Введите возраст", 14);
    if (!(age >= 14 || age <= 90)){
        alert(true);
    } else {
        alert(false);
    }
    /* Альтернативное условие
    if (age < 14 || age > 90) {
        alert(true);
    } else {
        alert(false);
    }
     */
}

function func8(){
    if (-1 || 0) alert( 'first' );
    if (-1 && 0) alert( 'second' );
    if (null || -1 && 1) alert( 'third' );

}

function func9(){
    let response = prompt("Кто там?");
    if (response == "Админ")
    {
        let password = prompt("Пароль?");

        if (password == "Я Главный"){
            alert("Здравствуйте!");
        } else if (password == null) {
            alert("Отменено");
        } else {
            alert("Неверный пароль.")
        }
    } 
    else if (response == null){
        alert("Я вас не знаю.");
    } else {
        alert("Отменено");
    }
}

function func10(){
    let i = 3;
    while (i) {
        alert( i-- );
    }
}

function func11(){
    alert("Префиксный вариант ++i");

    let i = 0;
    while (++i < 5) alert( i );

    alert("Постфиксный вариант i++");

    i = 0;
    while (i++ < 5) alert( i );

}

function func12(){
    alert("Постфиксная форма:");
    for (let i = 0; i < 5; i++) alert( i );
    
    alert("Префиксная форма:");
    for (let i = 0; i < 5; ++i) alert( i );
    
}

function func13(){
    for(let i = 2; i <= 10; i+=2) alert(i);
}

function func14(){
    // for (let i = 0; i < 3; i++) {
    //     alert( `number ${i}!` );
    //   }
    let i = 0;
    while (i < 3){
        alert(`number ${i}!`);
        i++;
    }
    
}

function func15(){
    let resp = prompt("Введите число");
    while(resp <= 100 && resp != null)
    {
        resp = prompt("Введите число");
    }
}

function func16(){
    let n = prompt("Введите n");
    let array = [2];
    for(let i = 3; i <= n; i++){
        for(let j = 0; j < array.length; j++){
            if(i % array[j] == 0){
                break;
            }
            if(j == array.length - 1)
            {
                array.push(i)
            }
        }
    }
    alert(array);
}

function func17(){

    /**switch (browser) {
     case 'Edge':
        alert( "You've got the Edge!" );
        break;
    case 'Chrome':
    case 'Firefox':
    case 'Safari':
    case 'Opera':
        alert( 'Okay we support these browsers too' );
        break;

    default:
        alert( 'We hope that this page looks ok!' );
    }
    */
    let browser = prompt("Какой у вас браузер?");
    if (browser == 'Edge')
    {
        alert("You've got the Edge!");
    } else if (browser == "Chrome" || browser == 'Firefox'
               || browser =='Safari' || browser == 'Opera'){
        alert('Okay we support these browsers too');
    } else {
        alert('We hope that this page looks ok!');
    }
}

function func18(){
    switch(parseInt(prompt("Введите число между 0 и 3"))){
        case 0:
            alert('Вы ввели число 0');
            break;
        case 1:
            alert('Вы ввели число 1');
            break;
        case 2:
        case 3:
            alert('Вы ввели число 2, а может и 3');
            break;
    }
}

function func19(){
    alert("Вариант 1");
    checkAge1(parseInt(prompt("Введите возраст:")));
    alert("Вариант 2");
    checkAge2(parseInt(prompt("Введите свой возраст:")));
}

function checkAge1(age) {
    if (age > 18) {
      return true;
    } else {
      // ...
      return confirm('Родители разрешили?');
    }
 }

function checkAge2(age) {
    if (age > 18) {
        return true;
    }
    // ...
    return confirm('Родители разрешили?');
}
  

function func20(){
    alert("Вариант 1 с оператором ?");
    checkAge3(parseInt(prompt("Введите возраст:")));
    alert("Вариант 2 с оператором ||");
    checkAge4(parseInt(prompt("Введите свой возраст:")));
}

function checkAge3(age) {
    return age > 18 ? true : confirm('Родители разрешили?');
}

function checkAge4(age) {
    return age > 18 || confirm('Родители разрешили?');
}
  

function func21(){
    let a = parseInt(prompt("Введите a"));
    let b = parseInt(prompt("Введите b"));
    alert(`Минимальное число из (${a}, ${b}): ${mid(a,b)}`);
}

function min(a, b){
    if (a > b) return b;
    else if (a < b) return a;
    else return a;
}

function func22(){
    let x = parseInt(document.getElementById('x').value);
    let n = parseInt(document.getElementById('n').value);
    alert(`Число ${x} в степени ${n} равно ${pow(x,n)}`);
}

function pow(x, n){
    for(let i = 1; i < n; i++)
        x*=x;
    return x;
}

function asf(af){
    str = "1 2 3 4";
}
