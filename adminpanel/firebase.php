<html>
    <head>
        <title>Firebase</title>
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCsr8MbDXKMYHFs8_AEK8ya9L1O5sxsBHA",
    authDomain: "women-4a591.firebaseapp.com",
    databaseURL: "https://women-4a591.firebaseio.com",
    projectId: "women-4a591",
    storageBucket: "women-4a591.appspot.com",
    messagingSenderId: "66700988806"
  };
  firebase.initializeApp(config);

  function submitclick()
{
  var firebaseRef=firebase.database().ref();
  firebaseRef.child("abc").set("gdec");
  firebaseRef.child("Text1").set("some value1");
  document.write("hello");
  
  
}
  window.location = 'https://womensafty.000webhostapp.com/PHP/script_try.php';
 
</script>

    </head>
    <body>
   

    </body>
</html>