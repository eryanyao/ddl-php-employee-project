function checkEmail(){
    var email = document.getElementById("email").value;
    var userEmailFormate = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(!(email.value.match(userEmailFormate))){
        document.getElementById("emailFormat").style.display = "block";
    }
    else if(email ===""){
        document.getElementById("emailRequire").style.display = "block";
    }
    else{
        document.getElementById("emailRequire").style.display = "none";
        document.getElementById("emailFormat").style.display = "none";
    }
  }
  
  function checkPassword(){
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("password2");
    var userPasswordFormate = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}/;
  
    if(pass1 === ""){
      document.getElementById("pass1Require").style.display = "block";
    }
    else if(pass2 === ""){
      document.getElementById("pass2Require").style.display = "block";
    }
    else if(pass1 != pass2){
      document.getElementById("pass1Same").style.display = "block";
      document.getElementById("pass2Same").style.display = "block";
    }
    else if(!(pass1.value.match(userPasswordFormate))){
      document.getElementById("pass1Length").style.display = "block";
    }
    else{
      document.getElementById("pass1Require").style.display = "none";
      document.getElementById("pass2Require").style.display = "none";
      document.getElementById("pass1Same").style.display = "none";
      document.getElementById("pass2Same").style.display = "none";
      document.getElementById("pass1Length").style.display = "none";
    }
  
  }