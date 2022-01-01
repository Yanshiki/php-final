<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }#如果未登入則顯示先鄧入並跳轉到login.html
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }   #如果欄位不符則顯示新增命令錯誤
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        } #新增成功則顯示新增成功，並跳回bulletin.php
    }
?>
