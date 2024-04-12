<?php

#步驟一:連結資料庫
$conn = mysqli_connect("db4free.net","immust","immustimmust","immust");

#步驟二:查詢資料
$result = mysqli_query($conn,"select * from user");

while($row = mysqli_fetch_array($result)){
    echo $row["id"] . " " . $row["pwd"] . "<br>";
}

#步驟三:從查詢結果一筆一筆把資料抓出來
#$row = mysqli_fetch_array($result);//抓第一筆資料出來
#echo $row["id"]. " ". $row["pwd"] . "<br>";
#$row = mysqli_fetch_array($result);//抓第二筆資料出來
#echo $row["id"]. " ". $row["pwd"] . "<br>";
#$row = mysqli_fetch_array($result);//抓第三筆資料出來
#echo $row["id"]. " ". $row["pwd"] . "<br>";


#步驟四:抓取每個欄位資料
#echo $row["id"];
#echo "";
#echo $row["pwd"];

?>

<!--mysqli_connect(ip,id,pwd,db);

mysqli_query(連結變數, sql命令);

連結變數 建立資料庫連結的變數

sql命令 查詢表格的sql命令

mysqli_fetch(查詢結果);

$row["欄位名稱"]

小數點.代表兩個字串相結合

會顯示資料庫內的帳號密碼資料>

