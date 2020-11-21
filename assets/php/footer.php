<?php 
  require('./php/contact.php');
  $conn = mysqli_connect("localhost", "root", "", "php_employee_project") or die("Database Error");


$getMesg = mysqli_real_escape_string($conn, $_POST['text']);


$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");


if(mysqli_num_rows($run_query) > 0){
    
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Sorry i can't understand your question";
}

?>
<style>
.wrapper{
    width: 370px;
    background: #fff;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
	
}
.wrapper .title{
    background: #a900ff;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 70px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
	
}
.wrapper .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
}
.wrapper .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.wrapper .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.wrapper .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #a900ff;
}
.wrapper .form .inbox .msg-header{
    max-width: 80%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #a900ff;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.wrapper .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.wrapper .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.wrapper .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.wrapper .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #a900ff;
    border: 1px solid #a900ff;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #006fef;
}


</style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
  " onclick="openForm()"><i class="fab fa-facebook-messenger"style="font-size:26px" ></i></button>
  <button style=" background-color: #1b9a59; padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 26px;
  right: 20px;
  border-radius: 50%;
  "><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"style="font-size:26px; color:white"></i></a></button>
    <div class="wrapper" style=" display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;"id="form" >
        <div class="title" style="background: #a900ff"; > Chatbot
		<a style="position:absolute;left:320px;font-size: 26px;background:#a900ff;"  onclick="closeForm()">
		<i class="fa fa-times" aria-hidden="true"></i></a>
		</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon" style="background:#a900ff">
                   <i class="fas fa-user"></i>
                </div>
                <div class="msg-header" style="max-width:50%;">
                    <p style="background:#a900ff; max-width:80%;">Hello there, how may I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn"style="background:#a900ff">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
              
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-robot"></i></div><div class="msg-header" style="max-width:50%;"><p>'+ result +'</p></div></div>';
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