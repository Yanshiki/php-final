<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from bulletin where bid='{$_GET[bid]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
            #指令與資料庫不符合顯示錯誤
        }else{
            echo "佈告刪除成功";
            #顯示刪除成功
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        #並跳回bulletin.php
    }
?>