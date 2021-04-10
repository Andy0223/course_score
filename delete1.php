<?php
    $id = $_GET["id"];
    include("db.php");

    $sql_delete = "delete from account where id = '$id'";
    if(mysqli_query($conn,$sql_delete))
    {
        header("location: index2.php?method=message&message=刪除成功");
    }
    else
    {
        header("location: index2.php?method=message&message=刪除失敗");
    }
    
    mysqli_close($conn);
?>