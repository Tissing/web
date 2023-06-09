<!DOCTYPE HTML>
<html> 
<head>
    <title>8</title>
</head> 
<body>

<form action="" method="post">
    <p>Имя <input type="text" name = "name" value="<?php
        if(!empty($_POST["name"])) echo $_POST["name"];
    ?>"></p>
    <input type="submit">
</form>
<?php
    if(!empty($_POST["name"]))
        echo "Ваше имя ".$_POST["name"];
?>
</body>
</html>