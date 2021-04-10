<?php
    include "tool1.php";

    $method = $_GET["method"];

    switch($method)
    {
      case "score": include "線上評分.php"; break;
      case "login": include "登入.php"; break;
      case "delete": include "delete.php"; break;
      
    }
?>