<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");#顯示id=輸入之id的資料
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";#帳密跟修改按鈕
    }
    ?>
    </body>
</html>