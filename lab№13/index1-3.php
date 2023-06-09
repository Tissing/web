<!DOCTYPE HTML>
<html> 
<head>
    <title>1-3</title>
</head> 
<body>


<?php
    if(empty($_POST["city"]))
    {
    ?>
        <form action="" method="POST">
            Город: <input name="city" type="text"> <br>
            <input type="submit">
        </form>
    <?php
    }
?>


<?php
    $city = '';
    if(!empty($_POST["city"]))
    {
        $city = strip_tags($_POST["city"]);
        echo "Ваш город: ".$city;
    }
?>
</body>
</html>