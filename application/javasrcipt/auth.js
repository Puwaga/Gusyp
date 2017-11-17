
// start of register User funtion
function registerUser(){
  // colecting the values from the form
  var fname = document.signup_form.fname.value;
  var lname = document.signup_form.lname.value;
  var email = document.signup_form.email.value;
  var password = document.signup_form.password.value;
  var agreement = document.signup_form.agree;

  var state = document.getElementById('state');
  var state_e = document.getElementById('state_e');
  var state_p = document.getElementById('state_p');
  var state_a = document.getElementById('state_a');
  var button = document.getElementById("reg");
// checking if the form field is field in
  if(fname == "" || lname == ""){
    state.innerHTML = "please provide your First and your Last Name";
  }else if(email == ""){
    state_e.innerHTML = "please provide your email";
  }else if(password == ""){
    state_p.innerHTML = "please provide your password";
  }else if (!agreement.checked){
      state_a.innerHTML = "please agree to our term of use";
  }else{
    var agree = agreement.value;
    var ajax = ajaxObj("POST", "inc/reg.php");
       button.innerHTML="Please Wait";
       ajax.onreadystatechange = function() {
	     if(ajaxReturn(ajax) == true) {
         if(ajax.responseText != "failed"){
           window.location.href = 'activate.php?user = '+ajax.responseText;
         }else{
           alert(ajax.responseText);
           button.innerHTML= "Create Account";
         }

      }else{

      }
    }
   ajax.send("email="+email+"&fname="+fname+"&lname="+lname+"&pass="+password+"&agree="+agree);
  }

};
// end of register User funtion

// start of checkemail  funtion
function checkemail(){
    var email = document.signup_form.email.value;
    var atpos = email.indexOf("@");
    var dotpos = email.indexOf(".");
   if(email != ""){
     var ajax = ajaxObj("POST", "inc/reg.php");
        ajax.onreadystatechange = function() {
 	     if(ajaxReturn(ajax) == true) {
        state_e.innerHTML = ajax.responseText;
       }
     }
    ajax.send("e="+email);
   }

};

// toast funtion

function mytoast(x){
  var toast = document.getElementById('snackbar').innerHTML = x;
}
