<?php
    $filename = "data.txt";
    
    // $fp = fopen($filename, "a");
    // $str = "Marry had a dog";
    // fwrite($fp, $str);

    // fclose($fp);
    // echo "저장되었습니다.";

    $fp = fopen($filename, "r");
    while(!feof($fp)){
        echo fgets($fp);
    }
?>