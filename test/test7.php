<?php
    //fread($fp, 파일크기)
    $fp = fopen("data2.txt", "r"); //read모드로 data2.txt를 연다.
    $result = fread($fp, filesize("data2.txt")); //data2.txt파일의 크기를 fp에 넣는다.
    echo $result; //result 출력
    fclose($fp); //파일을 닫는다.
?>