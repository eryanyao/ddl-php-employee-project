
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
    var password2 = document.getElementById("password2");

      if(email==""){
        alert("email can't be empty!");
      }
      else if(password != password2){
        alert("password must be same");
      }
      else{
        const promise = auth.createUserWithEmailAndPassword(email.value, password.value);

      promise.then( function(signUp) {
        alert("Sign Up Successfully. Please Login.");
        window.location.href = "login.html";
      })
      .catch(e => alert(e.message));
      }
      
    }
  //google
  function google(){
    var provider = new firebase.auth.GoogleAuthProvider();
  provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
  firebase.auth().languageCode = 'en';
  provider.setCustomParameters({
    'login_hint': 'user@example.com'
  });
    firebase.auth().signInWithPopup(provider).then(function(result) {
      // This gives you a Google Access Token. You can use it to access the Google API.
      var token = result.credential.accessToken;
      // The signed-in user info.
      var user = firebase.auth().currentUser;
      // ...
      document.cookie = "email=" + user.email;
      window.location.href = "/n/acc/home.php";

    }).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // The email of the user's account used.
      var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential;
      // ...
    });
    
  }
  
  
  function resetPsw(){
    var email = document.getElementById("email");
    firebase.auth().sendPasswordResetEmail(email.value).then(function() {
      alert("Reset password email send successfully.");
      window.location.href = "index.php";
    }).catch(function(error) {
      // An error happened.
      alert("Account nonexist in our system.");
    });
    
  }
  
  
  function signOut(){
      auth.signOut();
      alert("Sign Out Succesfully");
      window.location.href("./index.php");
  }
  
  function signIn(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = firebase.auth().signInWithEmailAndPassword(email.value, password.value);
    
    promise.then( function() {
      alert("Signed In Succesfully! " + email.value);
      document.cookie = "email=" + email.value;
      window.location.href = "/n/acc/home.php";
    })
    .catch(e => alert("Login Failed!" + e.message));
    
    
}

