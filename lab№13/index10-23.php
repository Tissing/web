<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-23</title>
</head>
<body>
    <p>Задание 10</p>
    <?php
        $str = 'ahb acb aeb aeeb adcb axeb';
        $regexp = '/a[a-z]b/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>

    <p>Задание 11</p>
    <?php
        $str = 'aba aca aea abba adca abea';
        $regexp = '/a..a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>

    <p>Задание 12</p>
    <?php
        $str = 'aba aca aea abba adca abea';
        $regexp = '/a.[^c]a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>

    <p>Задание 13</p>
    <?php
        $str = 'aa aba abba abbba abca' ;
        $regexp = '/ab+a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>

    <p>Задание 14</p>
    <?php
        $str = 'aa aba abba abbba abca' ;
        $regexp = '/ab*a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>

    <p>Задание 15</p>
    <?php
        $str = 'aa aba abba abbba abca abea' ;
        $regexp = '/ab?a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 16</p>
    <?php
        $str = 'ab abab abab abababab abea' ;
        $regexp = '/(ab)+/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 17</p>
    <?php
        $str = 'a.a aba aea' ;
        $regexp = '/a\.a/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 18</p>
    <?php
        $str = '2+3 223 2223' ;
        $regexp = '/2\+3/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    <p>Задание 19</p>
    <?php
        $str = '23 2+3 2++3 2+++3 345 567' ;
        $regexp = '/2\++3/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 20</p>
    <?php
        $str = '23 2+3 2++3 2+++3 445 677' ;
        $regexp = '/2\+*3/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    <p>Задание 21</p>
    <?php
        $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+' ;
        $regexp = '/\*q*\+/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 22</p>
    <?php
        $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+' ;
        $regexp = '/\*q*\+/';
        preg_match_all($regexp, $str, $result);
        print_r($result[0]);
    ?>
    
    <p>Задание 23</p>
    <?php
        $str = 'aba accca azzza wwwwa';
        $regexp = '/a[^a]+a/';
        echo preg_replace($regexp, '!', $str);
    ?>
</body>
</html>