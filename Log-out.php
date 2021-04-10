<?php
    session_start();
    unset($_SESSION["ac_name"]);
    unset($_SESSION["ac_idf"]);
    header("Location: 登入.php");
?>