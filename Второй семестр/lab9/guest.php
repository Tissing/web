<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
    <style>
        span.required{
            color: red;
        }
        td{
            margin-left: 5px;
        }
        tr{
            margin-bottom: 5px;
        }
        table.guests, table.guests  td, table.guests  th{
            border: 2px solid black;
            border-collapse: collapse;
        }
        
    </style>
</head>
<?php

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    session_start();
    $nameErr = $emailErr = $urlErr = $messageErr = $captchaErr = "";
    $nameSave = $emailSave = $messageSave = $urlSave = "";
    $name = $email = $message = $url = $captcha = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $nameSave = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z0-9]*$/", $nameSave)) {
                $nameErr = "Only letters and digits allowed";
            } else {
                $name = $nameSave;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $emailSave = test_input($_POST["email"]);
            if(!filter_var($emailSave, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid URL";
            } else {
                $email = $emailSave;
            }
        }
        if (empty($_POST["captcha"])) {
            $captchaErr = "captcha is required";
        } else {
            $captcha = $_POST["captcha"] == $_SESSION["captcha"]; 
            if(!$captcha) {
                $captchaErr = "Incorrect captcha";
            }
        }


        if (!empty($_POST["url"])) {
            $urlSave = test_input($_POST["url"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$urlSave)) {
                $urlErr = "Invalid URL";
            }else{
                $url = $urlSave;
            }
        }

        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            
            $messageSave = test_input($_POST["message"]);
            $message = $messageSave;
        }
    }
?>
<body>
    <h1>Guest book</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <span class='required'>* this element is required</span>
            <table>
                <tr>
                    <td>Username<span class='required'>*</span></td>
                    <td><input type='text' name="name" value="<?php echo $nameSave;?>"></td>
                    <td><span class='required'><?php echo $nameErr;?></span></td>
                </tr>
                <tr>
                    <td>Email<span class='required'>*</span></td>
                    <td><input type='text' name="email"  value="<?php echo $emailSave;?>"></td>    
                    <td><span class='required'><?php echo $emailErr;?></span></td>
                </tr>
                <tr>
                    <td>Homepage</td>
                    <td><input type='text' name="url"  value="<?php echo $urlSave;?>"></td>
                    <td><span class='required'><?php echo $urlErr;?></span></td>
                </tr>
                <tr>
                    <td><img src = "captcha.php"></td>
                    <td><input type='text' name='captcha'></td>
                    <td><span class='required'><?php echo $captchaErr?></span></td>
                </tr>
                <tr>
                    <td>Message<span class='required'>*</span></td>
                    <td><textarea name='message'><?php echo $messageSave;?></textarea></td>
                    <td><span class='required'><?php echo $messageErr;?></span></td>
                </tr>
            </table>
            <input type="submit">
            <p><?php 
                if($name != "" && $email != "" && $message != "" && $captcha){
                    echo $captcha."<br>";
                    echo "Message sent successfully! <br>";
                    $servername = "localhost";
                    $username = "username";
                    $password = "password";
                    $dbname = "guestbook";

                    $user = ['ip' => $_SERVER['REMOTE_ADDR'], 
                             'browser' => $_SERVER['HTTP_USER_AGENT'],
                             'username' => $name,
                             'email' => $email,
                             'url' => $url == "" ? "NULL" : "'$url'",
                             'message' => $message];
                    
                    // Создаем соединение с mysql сервером
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    
                    $sql = mysqli_query($conn, "SHOW TABLES LIKE 'guests';"); // проверка наличия таблицы схожей с guests
                    $result = mysqli_fetch_assoc($sql);
                    // Создание таблицы если ее нет
                    if($result == 0){
                        $sql = "CREATE TABLE guests (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                            ip VARCHAR(30) NOT NULL,
                            browser VARCHAR(255) NOT NULL,
                            username VARCHAR(30) NOT NULL,
                            email VARCHAR(50) NOT NULL,
                            homepage VARCHAR(50),
                            usermessage TEXT(65535) NOT NULL
                            )";
    
                        if (!mysqli_query($conn, $sql)) {
                            echo "Error creating table: " . mysqli_error($conn);
                          }
                    }
                    
                    // Заносим в таблицу данные 
                    $sql = "INSERT INTO guests (ip, browser, username, email, homepage, usermessage) 
                    VALUES ('".$user['ip']."', '".$user['browser']."', '".$user['username']."', '".$user['email']."', ".$user['url'].", '".$user['message']."')";
                    if(!mysqli_query($conn, $sql)){
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    $_GET['page'] = 1;
                    $nameErr = $emailErr = $urlErr = $messageErr = $captchaErr = "";
                    $nameSave = $emailSave = $messageSave = $urlSave = "";
                    $name = $email = $message = $url = $captcha = "";

                } 
            ?></p>
        </div>
    </form>
    <div>
        <?php 
        if(isset($_GET['page'])){
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "guestbook";

            if(isset($_GET['sort'])){
                $sortby = test_input($_GET['sort']);
            } else {
                $sortby = 'id';
            }
            if(isset($_GET['radSort'])){
                $orderBy = test_input($_GET['radSort']);
                
                $orderBy = $orderBy === 'DESC' ? 'DESC' : 'ASC';
            } else {
                $orderBy = "DESC";
            }
            echo "$orderBy";
            echo "$sortby";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            // Вывод таблицы сообщений
            $start = (int)test_input($_GET['page']);
            $start = ($start == 0 ? 0 : $start - 1) * 25;
            $sql = "SELECT * FROM guests ORDER BY $sortby $orderBy LIMIT 25 OFFSET $start;";
            $result =  mysqli_query($conn, $sql);   

            echo "<table class='guests'>";
            echo "<tr>
            <th>Id</th>
            <th>Date</th>
            <th>Username</th>
            <th>Email</th>
            <th>Homepage</th>
            <th>Message</th></tr>";
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['reg_date']."</td>
                  <td>".$row['username']."</td>
                  <td>".$row['email']."</td>
                  <td>".$row['homepage']."</td>
                  <td>".$row['usermessage']."</td>
                  </tr>";
                }
                echo "</table>";
            } else {
                echo "</table>";
                echo "0 results";
            }
            
            echo "<form method='get' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>
            Сортировка 
            <input type='radio' id='radioOrder1' name='sort' value='username'>
            <label for='radioOrder1'>username</label>
            <input type='radio' id='radioOrder2' name='sort' value='email'>
            <label for='radioOrder2'>email</label>
            <input type='radio' id='radioOrder3' name='sort' value='reg_date'>
            <label for='radioOrder3'>date</label>
            <p>
                <input type='radio' id='radioSort1' name='radSort' value='ACS'>
                <label for='radioSort1'> По возростанию</label>
                <input type='radio' id='radioSort1' name='radSort' value='DESC'>
                <label for='radioSort2'> По убыванию</label>
            </p>
            Страница <input type='number' min='1' name='page' placeholder='1'>
            <p><input type='submit'></p>
        </form>";
        }
        ?>
    </div>
    
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
    <style>
        span.required{
            color: red;
        }
        td{
            margin-left: 5px;
        }
        tr{
            margin-bottom: 5px;
        }
        table.guests, table.guests  td, table.guests  th{
            border: 2px solid black;
            border-collapse: collapse;
        }
        
    </style>
</head>
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $nameErr = $emailErr = $urlErr = $messageErr = $captchaErr = "";
    $nameSave = $emailSave = $messageSave = $urlSave = "";
    $name = $email = $message = $url = $captcha = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $nameSave = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z0-9]*$/", $nameSave)) {
                $nameErr = "Only letters and digits allowed";
            } else {
                $name = $nameSave;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $emailSave = test_input($_POST["email"]);
            if(!filter_var($emailSave, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid URL";
            } else {
                $email = $emailSave;
            }
        }

        if (!empty($_POST["url"])) {
            $urlSave = test_input($_POST["url"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$urlSave)) {
                $urlErr = "Invalid URL";
            }else{
                $url = $urlSave;
            }
        }

        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            
            $messageSave = test_input($_POST["message"]);
            $message = $messageSave;
        }
    }
?>
<body>
    <h1>Guest book</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <span class='required'>* this element is required</span>
            <table>
                <tr>
                    <td>Username<span class='required'>*</span></td>
                    <td><input type='text' name="name" value="<?php echo $nameSave;?>"></td>
                    <td><span class='required'><?php echo $nameErr;?></span></td>
                </tr>
                <tr>
                    <td>Email<span class='required'>*</span></td>
                    <td><input type='text' name="email"  value="<?php echo $emailSave;?>"></td>    
                    <td><span class='required'><?php echo $emailErr;?></span></td>
                </tr>
                <tr>
                    <td>Homepage</td>
                    <td><input type='text' name="url"  value="<?php echo $urlSave;?>"></td>
                    <td><span class='required'><?php echo $urlErr;?></span></td>
                </tr>
                <tr>
                    <td>CAPTCHA</td>
                    <td><input type='text'></td>
                    <td><span class='required'></span></td>
                </tr>
                <tr>
                    <td>Message<span class='required'>*</span></td>
                    <td><textarea name='message'><?php echo $messageSave;?></textarea></td>
                    <td><span class='required'><?php echo $messageErr;?></span></td>
                </tr>
            </table>
            <input type="submit">
            <p><?php 
                if($name != "" && $email != "" && $message != ""){
                    echo "Message sent successfully! <br>";
                    $servername = "localhost";
                    $username = "username";
                    $password = "password";
                    $dbname = "guestbook";

                    $user = ['ip' => $_SERVER['REMOTE_ADDR'], 
                             'browser' => $_SERVER['HTTP_USER_AGENT'],
                             'username' => $name,
                             'email' => $email,
                             'url' => $url == "" ? "NULL" : "'$url'",
                             'message' => $message];
                    
                    // Создаем соединение с mysql сервером
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    
                    $sql = mysqli_query($conn, "SHOW TABLES LIKE 'guests';"); // проверка наличия таблицы схожей с guests
                    $result = mysqli_fetch_assoc($sql);
                    // Создание таблицы если ее нет
                    if($result == 0){
                        $sql = "CREATE TABLE guests (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                            ip VARCHAR(30) NOT NULL,
                            browser VARCHAR(255) NOT NULL,
                            username VARCHAR(30) NOT NULL,
                            email VARCHAR(50) NOT NULL,
                            homepage VARCHAR(50),
                            usermessage TEXT(65535) NOT NULL
                            )";
    
                        if (!mysqli_query($conn, $sql)) {
                            echo "Error creating table: " . mysqli_error($conn);
                          }
                    }
                    
                    // Заносим в таблицу данные 
                    $sql = "INSERT INTO guests (ip, browser, username, email, homepage, usermessage) 
                    VALUES ('".$user['ip']."', '".$user['browser']."', '".$user['username']."', '".$user['email']."', ".$user['url'].", '".$user['message']."')";
                    if(!mysqli_query($conn, $sql)){
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    $_GET['page'] = 1;
                    $nameErr = $emailErr = $urlErr = $messageErr = $captchaErr = "";
                    $nameSave = $emailSave = $messageSave = $urlSave = "";
                    $name = $email = $message = $url = $captcha = "";

                } 
            ?></p>
        </div>
    </form>
    <div>
        <?php 
        if(isset($_GET['page'])){
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "guestbook";

            if(isset($_GET['sort'])){
                $sortby = test_input($_GET['sort']);
            } else {
                $sortby = 'id';
            }
            if(isset($_GET['radSort'])){
                $orderBy = test_input($_GET['radSort']);
                
                $orderBy = $orderBy === 'DESC' ? 'DESC' : 'ASC';
            } else {
                $orderBy = "DESC";
            }
            echo "$orderBy";
            echo "$sortby";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            // Вывод таблицы сообщений
            $start = (int)test_input($_GET['page']);
            $start = ($start == 0 ? 0 : $start - 1) * 25;
            $sql = "SELECT * FROM guests ORDER BY $sortby $orderBy LIMIT 25 OFFSET $start;";
            $result =  mysqli_query($conn, $sql);   

            echo "<table class='guests'>";
            echo "<tr>
            <th>Id</th>
            <th>Date</th>
            <th>Username</th>
            <th>Email</th>
            <th>Homepage</th>
            <th>Message</th></tr>";
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>
                  <td>".$row['id']."</td>
                  <td>".$row['reg_date']."</td>
                  <td>".$row['username']."</td>
                  <td>".$row['email']."</td>
                  <td>".$row['homepage']."</td>
                  <td>".$row['usermessage']."</td>
                  </tr>";
                }
                echo "</table>";
            } else {
                echo "</table>";
                echo "0 results";
            }
            
            echo "<form method='get' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>
            Сортировка 
            <input type='radio' id='radioOrder1' name='sort' value='username'>
            <label for='radioOrder1'>username</label>
            <input type='radio' id='radioOrder2' name='sort' value='email'>
            <label for='radioOrder2'>email</label>
            <input type='radio' id='radioOrder3' name='sort' value='reg_date'>
            <label for='radioOrder3'>date</label>
            <p>
                <input type='radio' id='radioSort1' name='radSort' value='ACS'>
                <label for='radioSort1'> По возростанию</label>
                <input type='radio' id='radioSort1' name='radSort' value='DESC'>
                <label for='radioSort2'> По убыванию</label>
            </p>
            Страница <input type='number' min='1' name='page' placeholder='1'>
            <p><input type='submit'></p>
        </form>";
        }
        ?>
    </div>
    
</body>
>>>>>>> 2939e26bf7a16441bb2cdca9d24e370980194e3a
</html>