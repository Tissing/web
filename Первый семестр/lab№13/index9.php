<!DOCTYPE HTML>
<html> 
<head>
    <title>9</title>
</head> 
<body>

<form action="" method="post">
    <p>Имя <input type="text" name = "name" value="<?php
        if(!empty($_POST["name"])) echo $_POST["name"];
    ?>"></p>
    <p><textarea name = "message"><?php 
            if(!empty($_POST['message'])) echo $_POST['message']; 
        ?>
    </textarea></p>
    <input type="submit">
</form>
<?php
    if(!empty($_POST["name"]))
    {
        echo strip_tags($_POST["name"]);
    }
?>
</body>
</html>