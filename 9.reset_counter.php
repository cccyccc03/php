<?php
    session_start();
    unset($_SESSION["counter"]);  //unset($_SESSION['變數'])  刪除Session變數
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
<!--unset($_SESSION['變數'])  刪除Session變數
session_unset() = session_destroy()
點擊重製只會顯示1>
