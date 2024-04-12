<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //mysqli_connect(ip,id,pwd,db)
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");  //mysqli_query(連結變數, sql命令)
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);  //mysqli_fetch(查詢結果)
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);  //$row["欄位名稱"]
    echo $row["id"] . " " . $row["pwd"];
?>


<!--mysqli_connect(ip,id,pwd,db);

mysqli_query(連結變數, sql命令);

連結變數 建立資料庫連結的變數

sql命令 查詢表格的sql命令

mysqli_fetch(查詢結果);

$row["欄位名稱"]

小數點.代表兩個字串相結合

會顯示資料庫內的帳號密碼資料>