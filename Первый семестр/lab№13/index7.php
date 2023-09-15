<!DOCTYPE HTML>
<html> 
<head>
    <title>7</title>
</head> 
<body>

<form action="" method="post">
    <p>Логин <input type="text" name = "login"></p>
    <p>Пароль <input type="password" name = "pass"></p>
    <input type="submit">
</form>

<?php
    $LOGIN = "admin";
    $PASS = "durak";

    if(!empty($_POST["login"]))
    {
        $inputLogin = trim(strip_tags($_POST["login"]));
        $inputPass = trim(strip_tags($_POST["pass"]));
        if($LOGIN == $inputLogin && $PASS == $inputPass)
        {
            echo "Доступ разрешен.";
        } else {
            echo "Доступ запрещен.";
        }
    }
?>

</body>
</html>