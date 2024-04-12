<?php 


if($_POST["id"] == "San" && $_POST["pwd"] == "0709"){
echo "歡迎~歡迎~歡迎你!";
}
else{
echo "大錯特錯!";
}


    
?>

<!--登入成功顯示歡迎~歡迎~歡迎你!
登入失敗顯示大錯特錯!
    
    action是呼叫的php程式

    method:參數傳遞方式
    
    login.html內 form呼叫login.php > login.php執行 > 結果回傳 > 瀏覽器>