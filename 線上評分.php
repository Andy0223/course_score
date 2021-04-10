<?php
    session_start();
    if(!isset($_SESSION["ac_name"]) && !isset($_SESSION["ac_idf"]))
    {
        header("Location: index1.php");
    }

    $id = "";
    $team = "";
    $function = "";
    $beauty = "";
    $integrity = "";
    $fluency = "";
    $confun = "";
    $conbeau = "";
    $coninte = "";
    $conflu = "";
    

        
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>輔仁大學專題評分系統</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">
    
  <!-- About -->
  <form method="post" action="link.php">
  <input type="hidden" name="method" value="score">
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">線上評分</h2>
          <h3 class="section-subheading text-muted">Score Online</h3>
        <input type="radio" name="team" value="1"> 第一組
        <input type="radio" name="team" value="2"> 第二組
        <input type="radio" name="team" value="3"> 第三組
        <input type="radio" name="team" value="4"> 第四組
        <input type="radio" name="team" value="5"> 第五組
        <input type="radio" name="team" value="6"> 第六組
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>功能實用性</h4>
                  <h4 class="subheading">Function Practicality</h4>
                </div>
                <div class="timeline-body">
                  <strong>請輸入成績:</strong>&emsp;<input type="text" value="<?php echo $function ?>" name="function" required="required"><br><br>
                  <textarea class="form-control" id="confun" name="confun" value="<?php echo $confun ?>" placeholder="教授評語" required="required" data-validation-required-message="Please enter a message."></textarea>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>介面美觀性</h4>
                  <h4 class="subheading">Interface beauty</h4>
                </div>
                <div class="timeline-body">
                  <strong>請輸入成績:</strong>&emsp;<input type="text" value="<?php echo $beauty ?>" name="beauty" required="required"><br><br>
                  <textarea class="form-control" id="conbeau" name="conbeau" value="<?php echo $conbeau ?>" placeholder="教授評語" required="required" data-validation-required-message="Please enter a message."></textarea>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>內容完整性</h4>
                  <h4 class="subheading">Content Integrity</h4>
                </div>
                <div class="timeline-body">
                  <strong>請輸入成績:</strong>&emsp;<input type="text" value="<?php echo $integrity ?>" name="integrity" required="required"><br><br>
                  <textarea class="form-control" id="coninte" name="coninte" value="<?php echo $coninte ?>" placeholder="教授評語" required="required" data-validation-required-message="Please enter a message."></textarea>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>使用者流暢度</h4>
                  <h4 class="subheading">Users Fluency</h4>
                </div>
                <div class="timeline-body">
                  <strong>請輸入成績:</strong>&emsp;<input type="text" value="<?php echo $fluency ?>" name="fluency" required="required"><br><br>
                  <textarea class="form-control" id="conflu" name="conflu" value="<?php echo $conflu ?>" placeholder="教授評語" required="required" data-validation-required-message="Please enter a message."></textarea>
                </div>
              </div>
            </li>
            
            <li class="timeline-inverted">
              <div class="timeline-image">
                <input type= "submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger mt-5">
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="帳號申請.html">帳號申請</a>
            </li>
            <li class="list-inline-item">
              <a href="忘記密碼.html">忘記密碼</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
</form>
</body>


</html>
