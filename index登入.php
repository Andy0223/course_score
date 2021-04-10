<?php
    include "tool登入.php";

    $method = $_GET["method"];

    switch($method)
    {
      case "insert": include "帳號申請.php"; break;
      case "document": include "文件管理.php"; break;
      case "login": include "登入.php"; break;
      case "member": include "組員編輯.php"; break;
      case "delete": include "delete.php"; break;
      
    }
?>