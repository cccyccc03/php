<?php
    session_start();
    if (!isset($_SESSION["counter"])) //isset($_SESSION['變數'])  判斷Session變數是否存在
        $_SESSION["counter"]=1;  //session啟動
    else
        $_SESSION["counter"]++;  //$_SESSION['變數'] = 值

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>


<!--呼叫session_start()，才能夠跨網頁
    $_SESSION['變數'] = 值
    isset($_SESSION['變數'])   判斷Session變數是否存在
    
    可點擊重製 次數會增加>