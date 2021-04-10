<?php
    include "tool2.php";

    $method = $_GET["method"];

    switch($method)
    {
      case "insert": include "帳號申請.php"; break;
      case "manage": include "帳號管理.php"; break;
      case "delete": include "delete1.php"; break;
      case "update": include "update.php"; break;
    }
?>