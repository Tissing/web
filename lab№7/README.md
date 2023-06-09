<h1 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</h1>


<p align="center">Лабораторная работа №7 <br> "CSS" </p>






<p align="right">Выполнил: Шибанов В. С.</p>
<p align="right">Проверил: Соболев Е. И.</p>







<p align="center">г. Южно-Сахалинск <br> 2023 год</p>




<h2 align="center">Введение</h2>
<p align="justify">Решение задач на JavaScript.</p>

<h2 align="center">Цели и задачи</h2>
Повторить по образцу, то есть сделать такой же макет используя материалы из архива lab7.zip

<h2 align="center">Решение</h2>
index.html:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,700|Cookie">
    <title>lab№7</title>
</head>
<body>
    
    <header>
        <div class="menu">
            <a class="logo">Elysa4t</a>

            <div class="buttons" style="display:flex;">
                <a class="home" style="padding: 5px 15px 5px 15px;">Home</a>
                <a>Archives</a>
                <a>Gallery</a>
                <a>About</a>
                <a style="margin-right: 135px;">Contact</a>
            </div>
        </div>
    </header>



    <div class="place_for_banner">
        <div class="banner">
            <h2>Magna sed phasellus consequat lorem ipsum dolor</h2>
        </div>
    </div>



    <div class="page">
        <div class="post">
            <div class="title">Posted by <a style="text-decoration: underline;">Someone</a> on April 14, 2012</div>
            <div class="text">
                <h2>Lorem ipsum sed veroeros amet</h2>
                <img class="pic" src="source/pics01.jpg">
                <p>
                    Nam vestibulum hendrerit orci, sed pharetra elit elementum in. Donec in eros sed odio varius tempus. Vestibulum quis quam et velit rutrum ornare nec a massa. Curabitur malesuada ullamcorper nunc in suscipit. Donec semper venenatis dui sed facilisis. Morbi congue facilisis ante in feugiat. Mauris consectetur magna eu enim sagittis et bibendum lacus imperdiet. Maecenas semper massa ac odio ornare sodales. Nunc rhoncus vulputate nisi sed malesuada. Fusce ac mauris dui, id luctus ligula. Integer hendrerit.
                </p>

                <div class="meta">
                    <p>Posted in <a>News</a>, <a>Design</a>, <a>Other</a></p>
                    <a style="margin-left: 30%">235 Comments</a>
                </div>
            </div>
        </div>
        
        <div class="info">
            <div style="height: 15px; background: url(source/sidebar-bg-01.png) no-repeat left top;"></div>
            <div>
                <div class="titleinfo">About Elysa4t</div>
                <p style="padding: 0px 60px 10px 30px;">
                    Mauris consectetur magna eu enim sagittis et bibendum lacus imperdiet. Maecenas semper massa amet et odio mauris dui, id luctus amet ligula.
                </p>

            </div>
            
            <div>
                <div class="titleinfo">Recent Post</div>
                <ul style="list-style: none;">
                    <li style="border-top: none;">Hendrerit orci sed pharetra elit</li>
                    <li>Donec in eros odio varius tempus</li>
                    <li>Vestibulum quis quam et velit</li>
                    <li>Rutrum ornare nec sed curabitur</li>
                    <li>Malesuada ullamcorper nunc</li>
                </ul>
            </div>
                
            <div>
                <div class="titleinfo">Something Else</div>
                <p style="padding: 0px 60px 10px 30px;">
                    Mauris consectetur magna eu enim sagittis et bibendum lacus imperdiet. Maecenas semper massa amet et odio mauris dui, id luctus amet ligula.
                </p>
            </div>

            <div style="height: 15px; background: url(source/sidebar-bg-03.png) no-repeat left top;"></div>
        </div>
    </div>
    <footer >
        <div class="widgets">
            <div class="widget" style="margin-left: auto;">
                <div class="topborder"></div>
                <div class="content">
                    <h1>Just another widget</h1>
                    <p>
                    Mauris consectetur magna tempus enim sagittis et bibendum lacus et imperdiet. Maecenas semper et massa amet et odio mauris dui, id luctus amet ligula.
                    </p>
                </div>
                <div class="btmborder"></div>
            </div>
            <div class="widget">
                <div class="topborder"></div>
                <div class="content">
                    <h1>Just another widget</h1>
                    <p>
                    Mauris consectetur magna tempus enim sagittis et bibendum lacus et imperdiet. Maecenas semper et massa amet et odio mauris dui, id luctus amet ligula.
                    </p>
                </div>
                <div class="btmborder"></div>
            </div>
            <div class="widget" style="margin-right: auto;">
                <div class="topborder"></div>
                <div class="content">
                    <h1>Just another widget</h1>
                    <p>
                    Mauris consectetur magna tempus enim sagittis et bibendum lacus et imperdiet. Maecenas semper et massa amet et odio mauris dui, id luctus amet ligula.
                    </p>
                </div>
                <div class="btmborder"></div>
            </div>
        </div>

        <div class="copyright">
            <p>
                © Your Website Name  |  Elysa4T by <a href="">4Templates</a>  |  Photos by  <a href="">Fotogrph</a>
            </p>
        </div>
    </footer>
</body>
</html>
```
style.css:

```css
*
{
    margin: 0;
    padding: 0;
}

body{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #333;
}

p{
    line-height: 190%;
}


header
{
    height: 187px;
    background: url(source/header-wrapper-bg.png) left top;
    display: flex;
    align-items: center;

}

.menu
{
    display: flex; 
    margin: auto; 
    justify-content: space-between;
    align-items: center;
    width: 1000px;
}

.logo
{
    width: 221px;
    height: 110px;
    background: url(source/logo-bg.png) no-repeat;
    line-height: 110px;
    
    text-align: center;
    font-family: 'Cookie', cursive;
    font-size: 60px;
    font-weight: 400;
    color: white;
}

div.buttons a
{
    margin-right: 30px;
    font-family: 'Arvo', serif;
    font-size: 16px;
    color: white;
    line-height: 30px;
    height: 30px;
    padding: 5px;
    letter-spacing: -1px;
}

.home
{
    background: #881D1D;
    border-radius: 5px;
}





.place_for_banner
{
    background: url(source/banner-wrapper-bg.png);
    padding: 32px 0 32px 0;
}

.banner 
{
    background: url(source/banner-image.jpg);
    width: 960px;
    height: 278px;
    text-align: center;
    border-radius: 9px;
    margin: auto;
    display: flex;

}

.banner h2
{
    background: url(source/banner-caption-bg.png) no-repeat left bottom;
    width: 960px;
    padding: 17px;
    font-family: 'Cookie',cursive;
    font-size: 35px;
    font-weight: normal;
    color: white;
    border-bottom-left-radius: 9px;
    border-bottom-right-radius: 9px;
    align-self: flex-end;
}





.page
{
    background: url(source/page-wrapper-bg.png);
    margin: 0 auto;
    display: flex;
    justify-content: space-between;

    padding: 30px 0px;
}

.post
{
    width: 630px;
    height: auto;
    padding: 30px 0px;
    margin-left: auto;
    margin-right: 37px;
    background-color: white;
    border: 1px solid #E5D0D0;
    border-radius: 5px;
}

.text
{
    padding: 30px 30px 0px 30px ;
}

.text h2
{
    padding: 0px 0px 20px 0px;
    font-family: 'Arvo',serif;
    font-size: 34px;
    color: #4E2B22;
    letter-spacing: -2px;
    font-weight: 400;
}

.text > p
{
    margin-top: 25px;
    line-height: 190%;
}

.title
{
    height: 38px;
    padding: 0px 0px 0px 30px ;
    background: url(source/post-posted-bg.png) no-repeat;
    letter-spacing: -1px;
    line-height: 38px;
    font-family: 'Arvo', serif;
    font-size: 16px;
    color: white;
}

.titleinfo
{
    height: 38px;
    padding: 0px 0px 0px 30px ;
    background: url(source/sidebar-title-bg.png) no-repeat right top;
    line-height: 38px;
    font-family: 'Arvo', serif;
    font-size: 16px;
    color: white;
    font-weight: 400;
    margin: 20px 0;
    width: 295px;
    letter-spacing: -1px;
}

.info
{
    width: 330px;
    border-radius: 5px;
    margin-right:auto;
    color: #E1C9C4;
    background: url(source/sidebar-bg-02.png) repeat-y;
}

.pic
{
    border-radius: 5px;
    width: 570px;
    height: 196px;
}

.meta
{
    height: 66px;
    margin-top: 30px;
    padding: 0px 25px;
    background: url(source/posted-meta-bg.png) no-repeat;
    font-family: 'Arvo', serif;
    font-size: 16px;
    color: #572F26;
    display: flex;
    align-items: center;
}

.meta a
{
    text-decoration: underline;
}

li
{
    border-top: 1px solid #371E18;
    margin: 0px 60px 0px 30px;
    padding: 10px 0px 10px 0px;
    color: white;
}








footer
{
    background: url(source/footer-content-bg-01.png);
}

.widgets
{
    background: url(source/footer-content-bg-02.png);
    display: flex;
    margin: auto;
    padding: 40px 0px 30px 0px;
}

.widget
{
    width: 300px;
    margin-right: 30px;    
    margin: 0px 20px;
}

.content
{
    color: white;
    background: url(source/box-widget-bg-02.png);
    padding: 20px 30px 10px 30px;
}

.content h1
{
    font-size: 16px;
    font-family: 'Arvo', serif;
    font-weight: 400;

    padding: 0px 0px 20px 0px;
}

.content p
{
    color: #E1C9C4;
}

.topborder
{
    background: url(source/box-widget-bg-01.png) no-repeat left top; 
    height: 15px;
}

.btmborder
{
    background: url(source/box-widget-bg-03.png) no-repeat left top; 
    height: 15px;
}



.copyright
{
    background: url(source/footer-bg.png) repeat-x;
    margin: auto;
    height: 155px;
    color: #784F45;
}

.copyright p
{
    text-align: center;
    padding-top: 40px;
}

.copyright a
{
    text-decoration: underline;
    color: inherit;
}
```

<h2 align="center">Вывод</h2>
Закрепил полученные навыки верстки сайта.