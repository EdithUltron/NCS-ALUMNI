var mis=false;
function dis_sub(){
    var a=document.getElementById("sub");
    var i=document.getElementById("cb");
    if(i.checked){
        if(mis==false){
        document.getElementById('sub').disabled = false;
        }
    }
    else{
            document.getElementById('sub').disabled = true;
    }
}

function validatePassword(){
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
  var div=document.getElementById("message");
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Did Not Match");
    div.style.color="yellow";
    div.innerHTML="Passwords Don't Match";
  } else {
    confirm_password.setCustomValidity('');
    div.innerHTML="";

  }
}

function is_stu(){

  var bl=document.getElementById('nft');
  var stu=document.getElementById('gridRadios2');
  var tea=document.getElementById('gridRadios1');
  if(stu.checked){
      bl.style.display='block';
  }
  else if(tea.checked){
    bl.style.display='none';
  }

}
