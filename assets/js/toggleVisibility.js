function viewPass() {
  var x = document.getElementById("viewpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
