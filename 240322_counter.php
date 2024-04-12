<?php
session_start();
#$_SESSION要大寫 //session啟動
if(!isset($_SESSION["counter1"])) 
    $_SESSION["counter1"]=1;
else
    $_SESSION["counter1"]++;


echo "登入次數:" . $_SESSION["counter1"]; 



?>

<!--呼叫session_start()，才能夠跨網頁
    $_SESSION['變數'] = 值
    isset($_SESSION['變數'])   判斷Session變數是否存在
    
    點擊重整 登入次數會增加>


