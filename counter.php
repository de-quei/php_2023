<style>
    h1{
        color : red;
    }
</style>
<?php
    $filename = "counter.txt"; //방문 횟수를 저장할 파일
    $count = 0; //방문 횟수

    if(file_exists($filename)){ // 
        $count = file_get_contents($filename);
    }
    
    $count++; //방문횟수를 증가시킨다.

    file_put_contents($filename, $count);

    echo "<h1>당신은 ".$count."번째 방문하셨습니다.</h1>";
?>