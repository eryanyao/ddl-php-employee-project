<?php
require('./php/contact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./assets/css/style2.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
    <button class="open-button" style=" background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 90px;
  border-radius: 60%;
  " onclick="openForm()"><i class="fab fa fa-comments-o" style="font-size:26px"></i></button>
    <button style=" background-color: #1b9a59; padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 26px;
  right: 20px;
  border-radius: 50%;
  "><a href="https://web.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp" style="font-size:26px;color:white"></i></a></button>
    <div class="wrapper" style=" display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;" id="form">
      <div class="title" style="background: #a900ff" ;> Chatbot
        <a style="position:absolute;left:320px;font-size: 26px;background:#a900ff;" onclick="closeForm()">
          <i class="fa fa-times" aria-hidden="true"></i></a>
      </div>
      <div class="form">
        <div class="bot-inbox inbox">
          <div class="icon" style="background:#a900ff">
            <i class="fas fa-user"></i>
          </div>
          <div class="msg-header" style="max-width:90%;">
            <p style="background:#a900ff; max-width:90%;">Hello there, how may I help you?</p>
          </div>
        </div>
      </div>
      <div class="typing-field">
        <div class="input-data">
          <input id="data" type="text" placeholder="Type something here.." required>
          <button id="send-btn" style="background:#a900ff">Send</button>
        </div>
      </div>
    </div>

  </nav>


  <script>
    $(document).ready(function() {
      $("#send-btn").on("click", function() {
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');


        $.ajax({
          url: 'message.php',
          type: 'POST',
          data: 'text=' + $value,
          success: function(result) {
            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-robot"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
            $(".form").append($replay);

            $(".form").scrollTop($(".form")[0].scrollHeight);
          }
        });
      });
    });
  </script>
  <script>
    function openForm() {
      document.getElementById("form").style.display = "block";
    }

    function closeForm() {
      document.getElementById("form").style.display = "none";
    }
  </script>


</body>

</html>



<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-3 py-3">
        <h5 class="mb-3">Pages</h5>
        <ul class="menu-link">
          <li><a href="index.php" class="">Home</a></li>
          <li><a href="about.php" class="">About Us</a></li>
          <li><a href="#" class="">Accounting</a></li>
          <li><a href="#" class="">Company Secretarial</a></li>
          <li><a href="contact.php" class="">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-sm-6 col-lg-3 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li><a href="tel:<?php echo $phone; ?>" class=""><?php echo $phone; ?></a></li>
          <li><a href="mailto: <?php echo $email; ?>" class=""><?php echo $email; ?></a></li>
          <li><a href="" class=""></a></li>
        </ul>
      </div>

      <div class="col-sm-6 col-lg-3 py-3">
        <h5 class="mb-3">Useful Links</h5>
        <ul class="menu-link">
          <li><a href="login.html" class="">Login</a></li>
          <li><a href="register.html" class="">Register</a></li>
          <li><a href="/n/admin/login.php" class="">Admin Login</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-lg-3 py-3">
        <h5 class="mb-3">Subscribe</h5>
        <p>Get some offers, news, or update features of application</p>
        <form method="POST">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Your email..">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
            </div>
          </div>
        </form>

        <!-- Social Media Button -->
        <div class="mt-4">
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 py-2">
        <img src="assets/favicon-light.png" alt="" width="40">
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; <a href="" class="fg-white fw-medium">DDL Associate Sdn Bhd</a>. All rights reserved</p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>