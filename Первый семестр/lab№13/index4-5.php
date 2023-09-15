<!DOCTYPE HTML>
<html> 
<head>
    <title>4-5</title>
</head> 
<body>

<form action="" method="post">
    <p>Имя: <input type="text" name = "name"></p>
    <p>Возраст: <input type="text" name = "age"></p>
    <p>Сообщение: <textarea name = "message" ></textarea></p>
    <p><input type="submit" ></p>
</form>


<?php
    if(!empty($_POST["name"]) && !empty($_POST["age"]))
    { ?>
       <p> Ваше имя <?php echo strip_tags($_POST["name"]); ?></p>
       <p> Ваш возраст <?php echo strip_tags($_POST["age"]); ?></p>
       <p> Ваще сообщение <?php echo strip_tags($_POST["message"]); ?></p>
    <?php
    }
?>
</body>
</html>