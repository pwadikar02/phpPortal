function showPass() {
    var x = document.getElementById("myPassword");
  
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
/*function c_pass(){
  var y = document.getElementById("0_myPassword");
  var z= document.getElementById("c_myPassword");

  if(y.type == z.type){
    y.typr ="password";
  }
  else{
    alert("confarm password")
  }

}  */