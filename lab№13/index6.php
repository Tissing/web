<!DOCTYPE HTML>
<html> 
<head>
    <title>6</title>
</head> 
<body>

<?php
    if(empty($_POST["age"]))
    {
    ?>
        <form action="" method="POST">
            <p>Возраст: <input name="age" type="text"></p>
            <input type="submit">
        </form>
    <?php
    }
?>

<?php
    if(!empty($_POST["age"]))
    {
        echo "Ваш возраст: ". strip_tags($_POST["age"]);
    }
?>
</body>
</html>