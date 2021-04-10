<?php
    $method = $_POST["method"];
    
    include("db.php");
    
     
    

    $team = $_POST["team"];
    $function = $_POST["function"];
    $beauty = $_POST["beauty"];
    $integrity = $_POST["integrity"];
    $fluency = $_POST["fluency"];
    $confun = $_POST["confun"];
    $conbeau = $_POST["conbeau"];
    $coninte = $_POST["coninte"];
    $conflu = $_POST["conflu"];

    $id = $_POST["id"];
    $name = $_POST["name"];
    $department = $_POST["department"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password1 = $_POST["password1"];
    $identification = $_POST["identification"];
    $group = $_POST["group"];

    if($method == "insert")
    {  
        if($password == $password1)
        {
            $sql_insert = "INSERT INTO `account` (`Id`, `Name`, `Department`, `Email`, `Identification`, `Password`, `group`) VALUES ('$id','$name','$department','$email','$identification','$password','$group')";
            
            
            if(mysqli_query($conn,$sql_insert))
            {
                header("location: index2.php");
            }
            else
            {
                echo "沒進去";
            }
        }
        else
        {
            $error = "密碼輸入錯誤";
            header("Location: 帳號申請.php");  
        }
    }
    
    else if ($method == "login")
    {
        session_start();

        if(isset($_SESSION["ac_name"]) && isset($_SESSION["ac_idf"]))
        {
            header("Location: index.php");
        }


        if(isset($_POST["id"]) && isset($_POST["password"]) && isset($_POST["identification"]))
        {
            $id = $_POST["id"];
            $password = $_POST["password"];
            $identification = $_POST["identification"];
            
            if($identification == "student")
            {
                $idf = "學生";
            }
            else if($identification == "professor")
            {
                $idf = "教授";
            }
            else
            {
                $idf = "管理者";
            }
            //輸入帳號密碼以連接並選取資料庫
            
            
            //執行SQL語法，將結果存放至$result
            $sql = "SELECT * FROM account WHERE Id = '$id'";
            $result = mysqli_query($conn,$sql);
            
            //從$result中取出第一行資料作為一個陣列，並指定給$row，每當成功取出一行資料,即執行迴圈內程式
            while($row = mysqli_fetch_array ($result))
            {
                if($row["Password"] == $password and $row["Identification"] == $idf)
                {
                    $_SESSION["ac_name"] = $row["Name"];
                    $_SESSION["ac_idf"] = $row["Identification"];
                    $_SESSION["ac_id"] = $row["Id"];
                    $_SESSION["level"] = $row["level"];
                    $_SESSION["group"] = $row["group"];
                    
                    if($row["Identification"] == '學生')
                    {
                        header("Location: index.php");
                    }
                    else if($row["Identification"] == '教授')
                    {
                        header("location: index1.php");
                    }
                    else
                    {
                        header("location: index2.php");
                    }
                }
            }
            
            //如果$result中一行資料都沒有
            if(mysqli_num_rows($result) == 0)
            {
                
                echo "<script>alert('此帳號未被註冊');location.href = '登入.php';</script>";
            }
            else if($row["identification"] != $idf)
            {
                echo "<script>alert('身分錯誤');location.href = '登入.php';</script>";
            }
            else if($row["password"] != $password)
            {
                echo "<script>alert('密碼錯誤');location.href = '登入.php';</script>";
            }
            
            
        }
    }

    else if($method == "score")
    {
        
        if(isset($function) && isset($beauty) && isset($integrity) && isset($fluency) && isset($team) && isset($confun) && isset($conbeau) && isset($conflu) && isset($coninte))
        {
            $sql_insert = "INSERT INTO `score` (`Id`,`Function`, `Beauty`, `Integrity`, `Fluency`, `Confun`, `Team`, `Conbeau`, `Coninte`, `Conflu`) VALUES (NULL, '$function', '$beauty', '$integrity', '$fluency', '$team', '$confun', '$conbeau', '$coninte', '$conflu')";
            
            echo $sql_insert;
            
            if(mysqli_query($conn,$sql_insert))
            {
                header("location: index.php?method=message&message=評分成功");
            }
            else
            {
                echo "沒進去";
            }
        }
        
        
    }
    
    else if ($method == "update")
    {
        $sql_update = "UPDATE `account` SET `Id`='$id',`Name`='$name',`Department`='$department',`Email`='$email',`Identification`='$identification'  WHERE `account`.`Id` = $id";
        echo $sql_update;
        if(mysqli_query($conn,$sql_update))
        {
            header("location: 登入.php?method=message&message=修改成功");
        }
        else
        {
            echo "沒進去";
        }
            
    }
    
    else if($method == "update_level")
    {
        $sql_update = "UPDATE `account` SET  Name = '$name', Department = '$department', Email = '$email', Identification= '$identification', Level = '$level' where id = '$id'";
        if(mysqli_query($conn,$sql_update))
        {
            header("location: index2.php?method=message&message=修改成功");
        }
    }

?>