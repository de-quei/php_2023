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
<hr>
<?php
   $str = "hellophpwelcome";
   $result = substr($str, 5, 5);    //(Str, n, m) --> str에 n번째 부터 m까지를 추출한다.
   echo $result."<br>";

   $result2 = substr($str, 3);      //(str, n) --> n의 위치부터 끝까지 출력.
   echo $result2;
?>
<hr>
<?php
    $arr = array("pizza1", "pizza2", "pizza3", "pizza4", "pizza5");
    $str = implode(", ", $arr);     //배열의 값을 구분자를 기준으로 한 문자열로 변환
    echo "implode : ".$str;
?>
<hr>
<?php
    $str = "apple / mango / strawberry / melon";
    $ar = explode("/", $str);      //문자열을 구분자를 기준으로 잘라서 배열에 저장
    //배열 값 출력 foreach 사용!
    foreach($ar as $fruit){
        echo $fruit."<br/>";    
    }
?>
<hr>
<?php
    $txt = "You should eat fruits, should not buy";
    $result = str_replace("should", "could", $txt);     //문자열 치환
    echo "변경 전 문자열 : ".$txt."<br>";
    echo "변경 후 문자열 : ".$result;
?>
