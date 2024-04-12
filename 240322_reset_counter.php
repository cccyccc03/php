<?php
session_start();
unset($_SESSION["counter1"]);
echo "<meta http-equiv=REFRESH content='0; url =240322_counter.php'>";



?>

<!--unset($_SESSION['變數'])  刪除Session變數
session_unset() = session_destroy()>