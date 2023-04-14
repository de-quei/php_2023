<style>
    h1{
        color : red;
    }
</style>

<?php
    echo "<h1>strlen</h1>";
    $str = "php is popular scripting language";
    echo strlen($str); //문자열의 길이 (공백포함)
?>
<hr>
<?php
    $var1 = "hello";
    $var2 = "Hello";
    $result = strcmp($var1, $var2); //문자열 비교 (일치, 불일치)
    echo "result : ".$result;
?>
<hr>
<?php
    $str = "abcdef";
    $find = "c";
    $pos = strpos($str, $find); //찾고자 하는 부분의 인덱스 출력
    echo "pos : ".$pos;
?>
<hr>
<?php
    $str = "Marry had a Little lamb and she love IT so MUCH";
    echo strtoupper($str)."<br>";   //대문자 변환
    echo strtolower($str);          //소문자 변환
?>

