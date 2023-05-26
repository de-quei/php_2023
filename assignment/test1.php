<?php
    // 1번 문제
    /*$number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];
    $number4 = $_POST['number4'];
    $number5 = $_POST['number5'];

    // 짝수, 홀수별 합계 계산
    $evenSum = 0;
    $oddSum = 0;

    if ($number1 % 2 == 0) {
        $evenSum += $number1;
    } else {
        $oddSum += $number1;
    }

    if ($number2 % 2 == 0) {
        $evenSum += $number2;
    } else {
        $oddSum += $number2;
    }

    if ($number3 % 2 == 0) {
        $evenSum += $number3;
    } else {
        $oddSum += $number3;
    }

    if ($number4 % 2 == 0) {
        $evenSum += $number4;
    } else {
        $oddSum += $number4;
    }

    if ($number5 % 2 == 0) {
        $evenSum += $number5;
    } else {
        $oddSum += $number5;
    }

    // 결과 출력
    echo "<p>짝수의 합계: " . $evenSum . "</p>";
    echo "<p>홀수의 합계: " . $oddSum . "</p>";*/

    //2번 문제
    $multiple = $_POST['multiple'];

    // 1부터 100까지 n의 배수 출력
    for ($i = 1; $i <= 100; $i++) {
        if ($i % $multiple == 0) {
            echo $i . "<br>";
        }
    }
?>