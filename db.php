<?php
   $conn = mysqli_connect("localhost","root","peterandy0223","final");

    //如果未能成功連接並許曲資料庫，顯示錯誤訊息
    if(!$conn)
    {
        echo "連接失敗" . mysqli_connect_error();
    }

    //設定編碼，有這一行才能正確顯示中文或讀取中文表格/欄位
    mysqli_query($conn,"set names utf8");
?>