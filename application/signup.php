<!doctype html>
<html>
   <head>
     <title>Gusyp - Creat an account</title>
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="styles/auth.css">
     <link rel="stylesheet" type="text/css" href="styles/footer.css">
     <script src="javasrcipt/auth.js"></script>
     <script src="javasrcipt/ajax.js"></script>
   </head>
   <body>
     <header>
       <!-- header here -->
     </header>
     <div id="back_deco"></div>


     <!-- end of logo div wrapper  -->

     <div id="form_wrapper">
         <div id="signup_text">
              <!-- start of logo div wrapper  -->
             <div id="logo_wrapper">
                <img src="img/gusyp-logo.png" class="logo"  >
             </div>

             <h3 class="c_h3">Create Account</h3>
             <p>Connect to the world - know what is happening</p>
         </div>
       <!-- start of registration form design  -->
       <form method="post" action="" name="signup_form" id="sign_up_form" onsubmit="return false;" >

         <!-- start label for name  -->
         <label for = "first_name">
           <div class="label">Name</div>
           <!-- start of first name and last name -->

            <!-- first name -->
           <input type="text" id="first_name" autocomplete="fname" placeholder="first name" name="fname" class="n_input">
            <!-- last name -->
           <input type="text" id="last_name" autocomplete="lname" placeholder="last name" name="lname" class="n_input">
            <!-- end of first name and last name -->
         </label>

         <p id="state" class="state_cls"></p>
         <!--end label for name  -->

          <!--start label for email  -->
         <label for = "email">
            <div class="label">Email Address</div>
              <!--email input  -->
              <input type="email" placeholder="someone@somesite.com" autocomplete="email" id="email" class="input_bx" onblur="checkemail()">
         </label>
           <p id="state_e" class="state_cls"></p>
         <!--end label for email  -->

         <!--start label for password  -->
        <label for = "password">
           <div class="label">Create Password</div>
             <!--password input  -->
             <input type="password" id="password" class="input_bx" name="password" >
        </label>
           <p id="state_p" class="state_cls"></p>
        <!--end label for password  -->

          <!--start of policy div  -->
        <div class="policy_div">
            <p>By clicking on create account you have accepted the <a href="">policies</a> and <a href="">terms of use</a> as a user of gusyp</p>

            <input type="checkbox" id="agreement" value="agree" name="agree">
            <label for = "agreement">
            <span class="p_span">Agree to the policies</span>
          </label>

            <p id="state_a" class="state_cls"></p>
          <!--end of policy div  -->
        </div>

        <!--register button  -->
        <button  id="reg" class="reg_btn" onclick="registerUser()">Create Account</button>

       </form>
     </div>

     <div id="snackbar"></div>

  </body>
 <?php include "inc/footer.php"; ?>
</html>
