<?php
    session_start();
    if(!isset($_SESSION["ac_name"]))
    {
        header("Location: index2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="sample.css">
</head>
<body>
  <form method= "get" action="index2.php">
   <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">帳號管理</h2>
          <h3 class="section-subheading text-muted">Account Management</h3>
        </div>
      </div>
      <div class="row text-center">
        <table id="tb" style="border-collapse:collapse" align="center" cellpadding="10">
            <tr class="col-md-4">
                <td>學號/教師編號</td>
                <td>姓名</td>
                <td>系級/所屬系</td>
                <td>信箱</td>
                <td>身分</td>
            </tr>
            <?php
            include("db.php");
            $sql="select * from account";
            $rs=mysqli_query($conn,$sql);
            while($record=mysqli_fetch_row($rs))
            {
                echo "<tr><td>$record[0]</td><td>****</td><td>$record[2]</td><td>一般會員</td>";
                
            }

            mysqli_close($link);
          ?>
           </table>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted"></p>
        </div>
      </div>
    </div>
  </section>
  </form>
</body>
</html>