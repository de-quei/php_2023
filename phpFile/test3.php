<?php
    //1부터 10까지의 합 구하기
    $sum = 0;
    for($i = 1; $i <= 10; $i++){
        $sum += $i;
    }
    echo $sum;
    echo ("<br>");

    //1부터 100사이의 짝수의 합 구하기
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        if($i%2 == 0){
            $sum += $i;
        }
    }
    echo $sum;
    echo ("<br>");

    //$num이 5일때 짝수인지 홀수인지 판별하기
    $num = 5;
    if($num%2 == 0){
        echo "짝수입니다.";
        echo ("<br>");
    }else{
        echo "홀수입니다.";
        echo ("<br>");
    }
    
    //1부터 100사이의 3의 배수 출력
    for($i = 1; $i <= 100; $i++){
        if($i%3 == 0){
            echo $i." "."<br>";
        }
    }

    //2단부터 5단까지 출력
    for($i = 2; $i <= 5; $i++){
        for($j = 1; $j <= 9; $j++){
            echo ($i." * ".$j." = ").($i*$j)."<br>";
        }
    }
    
    //3,4,5 가지고 삼각형의 넓이 구하기
    $a = 3;
    $b = 4; 
    $c = 5;
    echo ($a*$b)/2;
?>