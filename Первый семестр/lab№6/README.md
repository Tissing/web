<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>

<p align="center">Лабораторная работа №6 <br> "CSS" </p>

<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>

<p align="center">г. Южно-Сахалинск <br> 2023 год</p>

<h2 align="center">Введение</h2>
<p align="justify">Лабораторная работа по использованию селекторов в CSS.</p>

<h2 align="center">Цели и задачи</h2>

1. Придумайте селектор, который выберет абзацы `<p>` внутри дивов `<div>`.
2. Придумайте селектор, который выберет все `<h2>` внутри дивов `<div>`.
3. Придумайте селектор, который выберет все абзацы `<p>` из элемента с `id=test`.
4. Придумайте селектор, который выберет все `<h2>` из элемента с `id=test`.
5. Выберите все элементы с классом `bbb`.
6. Выберите все элементы с классом `bbb` из элемента с `id=test`.
7. Выберите все абзацы `<p>` с классом `bbb`.
8. Выберите все `<h2>` с классом `bbb`.
9. Выберите все абзацы `<p>` с классом `bbb` из элемента с `id=test`.
10. Выберите все элементы с классом `bbb` и элементы с классом xxx одновременно.
11. Выберите все абзацы `<p>` с классом `bbb` и `<h2>` с классом `xxx` одновременно.
12. Выберите все абзацы `<p>` с классом `bbb` из `id=test` и все абзацы `<p>` с классом xxx из `id=test` одновременно.
13.	Выберите все элементы из класса `fff`.
14.	Выберите все абзацы `<p>` из класса `fff`.
15.	Выберите все абзацы `<p>` с классом `fff`.
16.	Выберите все элементы с классом bbb из класса `fff`.
17.	Выберите все `<h2>` с классом bbb из класса `fff`.
18.	Сделайте селектор, который выберет все ссылки из `id=test`, с состояния `link` и `visited` сделайте неподчеркнутыми и красными, а состояние `hover` - подчеркнутым и голубым.
19.	Сделайте селектор, который выберет все ссылки с классом `www`, состояния `link` и `visited` сделайте подчеркнутыми и голубыми, а состояние hover - неподчеркнутым.
20.	Сделайте селектор, который выберет все ссылки из `id=test` с классом `www`. Цвета состояний выберите самостоятельно.
21.	Сделайте селектор, который выберет все ссылки из `class=eee` с классом `www`. Цвета состояний выберите самостоятельно.
22.	Повторите страницу по данному по образцу:

### Задачи codewars: 
1. [Задача №1](https://www.codewars.com/kata/555de49a04b7d1c13c00000e)
2. [Задача №2](https://www.codewars.com/kata/588453ea56daa4af920000ca)
3. [Задача №3](https://www.codewars.com/kata/55e9529cbdc3b29d8c000016)
4. [Задача №4](https://www.codewars.com/kata/55968ab32cf633c3f8000008)
5. [Задача №5](https://www.codewars.com/kata/55ee3ebff71e82a30000006a)
6. [Задача №6](https://www.codewars.com/kata/5412509bd436bd33920011bc)


<h2 align="center">Решение задач</h2>
<p>Решение задач:</p>

1. `div > p{}`
2. `div > h2 {}`
3. `#test > p {}`
4. `#test > h2 {}`
5. `.bbb {}`
6. `#test > .bbb {}`
7. `p.bbb {}`
8. `h2.bbb {}`
9. `#test > p.bbb {} `
10. `.bbb, .xxx {}`
11. `p.bbb , h2.xxx {}`
12. `#test > p.bbb , #test > p.xxx {}`
13. `.fff {}`
14. `.fff > p {}`
15. `p.fff {}`
16. `.fff > .bbb {}`
17. `.fff > h2.bbb {}`

18.     #test > a:link, #test > a:visited
        {
            color: red;
            text-decoration: underline;
        }
        #test > a:hover 
        {
            color:blue;
            text-decoration: underline;
        }

19.     a.www:link, a.www:visited
        {
            color:blue;
            text-decoration: underline;
        }
        a.www:hover
        {
            color:blue;
        }

20.     #test > a.www 
        { 
            color: aqua;
        } 

21.     .eee > a.www 
        {
            color: brown;
        }

22.     div.border
        {
            border: 1px dotted gray;
            padding: 25px;
        }

        <div class="border" >
            <p style="text-decoration: underline;">Привет, мир!</p>
            <p style="text-decoration:line-through ;">Привет, мир!</p>
            <p style="text-decoration: overline;">Привет, мир!</p>
        </div>`
    
23.     <div class="border" >
            <div style="border: 1px solid red; width: 200px; height: 200px;"></div> 
        </div>
    
24.     <div class="border" >
            <div style="border: 1px dotted blue; width: 500px; height: 200px;"></div> 
        </div>

25.     <div class="border" >
            <div style="border: 1px dashed green; width: 200px; height: 200px; 
                border-bottom-left-radius: 15px; border-top-right-radius: 15px;
                border-bottom-right-radius: 8px; border-top-left-radius: 8px;"></div></div> 

26.     <div class="border" >
            <div style="border: 1px solid red; width: 200px; height: 200px; border-radius:100px;"></div> 
        </div>

27.     a#a1:link 
        { 
            color: green;
            text-decoration: underline;
        }
        a#a2:link
        {
            color: red;
            text-decoration: underline;
        }
        a#a3:link
        {
            color:black;
            text-decoration: none;
        }

        <div class="border" >
            <p><a href="mops.jpeg" id="a1">ссылка</a></p>
            <p><a href="https://www.w3schools.com/css" id="a2">ссылка</a></p>
            <p><a href="https://youtube.com" id="a3">ссылка</a></p>
        </div> 

   

Решение задач с codewars:
1.      function add(... args) {
          let sum = 0
          for (let i = 0; i < args.length; i++) {
            sum += args[i] / (i + 1)}
          return Math.round(sum)
        }
2.      function arrayPacking(a) {
          var result = '';
          for (let i = 0; i < a.length; i++)
          {
              let st = a[a.length - 1 -i].toString(2);
          while(st.length<8)
            st=0+st;
          result+=st;
          }
          return parseInt(result,2);
        } 
3.      function charToAscii(string){
          const data = {};
          for(let i = 0; i < string.length; i++) 
          {
            if (/[A-Z]/.test(string[i]) || /[a-z]/.test(string[i]))
            data[string[i]] = string[i].charCodeAt();
          }
          if (Object.keys(data).length == 0) return null;
            return data;
        }

4.      function initials(n){
          let result = "";
          let temp = n.split(" ");
          for(let i = 0; i < temp.length; i++)
          {
            if (i==(temp.length -1)) {
              result += temp[i][0].toUpperCase() + temp[i].substring(1,temp[i].length );
              break;
          }
            result += temp[i][0].toUpperCase() + ".";
          }
          return result ;
        }

 5.     function titleToNumber(title) {
          let result = title[title.length - 1].charCodeAt() - 64;
          let temp = title.length - 1;
          for(let i=0; i < temp; i++)
          {
            result += 26**(temp - i) * (title[i].charCodeAt() - 64);
          }
          return result;    
        }

 6.     function maskify(cc) {
          let result = "";
          for(let i = 0; i < cc.length -4; i++) result+="#";
          return result + cc.substring(cc.length - 4, cc.length)
        }     

<h2 align="center">Вывод</h2>
В этой лабораторной работе я нучился работать с селекторами CSS.
