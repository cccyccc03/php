<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    else
        echo "登入失敗";
?>

<!--PHP變數 $來開頭 

_開頭的變數 代表式系統內建變數

如果id和pwd輸入正確就登入成功，若否則為失敗

$_POST 傳遞的變數 後面可任意命名
>
