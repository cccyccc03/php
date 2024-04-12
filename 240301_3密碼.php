<html>

<head><title>登入</title>
<style>
    body{ text-align: center;} 
    
    .login{background-color:grey; padding:10px;} 
</style>
</head>

<body>
<div class ="login">
    <form action = "240301_login.php" method = "post">
        帳號:<input type = "text" name = "id"><br>
        密碼:<input type = "password" name = "pwd"><p>
        <input type = "submit" value = "登入">
        <input type = "reset" value = "清除">
    </form>
</body>


</html>

<!--如果id和pwd輸入正確就登入成功，若否則為失敗>