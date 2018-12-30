 
function submitclick()
{
  var firebaseRef=firebase.database().ref();
  firebaseRef.child("abc").set("gdec");
  firebaseRef.child("Text1").set("some value1");
}
