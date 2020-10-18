
var firebaseConfig = {
    apiKey: "AIzaSyAQIDUGx49Nn8CbouZmKZ5E-m91mZsH054",
    authDomain: "php-employee-project.firebaseapp.com",
    databaseURL: "https://php-employee-project.firebaseio.com",
    projectId: "php-employee-project",
    storageBucket: "php-employee-project.appspot.com",
    messagingSenderId: "1020808468529",
    appId: "1:1020808468529:web:0595d9b0e33dbcd188dd10",
    measurementId: "G-42MNCMKCJT"
  };
  // Initialize Firebase


  firebase.initializeApp(firebaseConfig);
  const auth = firebase.auth();

  function signUp(){
    var email = document.getElementById("email");
      var password = document.getElementById("password");

      const promise = auth.createUserWithEmailAndPassword(email.value, password.value);

      promise.then( function(signUp) {
        alert("Sign Up Successfully. Please Login.");
        window.location.href = "login.html";
      })
      .catch(e => alert(e.message));
      
    
    }
  
  
  
  function signOut(){
      auth.signOut();
      alert("Sign Out Succesfully");
      window.location.href("./index.php");
  }
  
  function signIn(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = auth.signInWithEmailAndPassword(email.value, password.value);
    
    promise.then( function(signIn) {
      alert("Signed In Succesfully! " + email.value);
      window.location.href = "/n/acc/home.php?email=" + email.value;
    })
    .catch(e => alert(e.message));
    
    
}

