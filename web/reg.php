<!doctype html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles/authstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Cambay" rel="stylesheet">
    </head>
    <body>
         <div id="back_cover">
             <div id="l_logo">
                    <img src="gusyp/gusyp-logo.png" class="l_ic_logo">
                </div>
            <div id="login_form">

                <h3>Join Gusyp</h3>
                <p>Freedom of speech | Liberty Zone</p>
                <form method="post" action="authentication/signup.php" id="sign_form" name="sign_up_form">
                    <input type="text" class="f_l_n_bx" placeholder="First" name="fname" required autocomplete="fname">
                   <input type="text" class="f_l_n_bx" placeholder="Last" name="lname" required autocomplete="lname">
                    <input type="text" placeholder="Email" class="l_bx" name="email" required autocomplete="email">
                    <input type="text" placeholder="Create Password" name="pass1" class="l_bx" >
                    <input type="text" placeholder="Confirm Password" name="pass2" class="l_bx" >
                    <button class="c_acc" name="reg" id="register">Create Account</button>

                    <div id="forget">
                        <ul>
                            <li><a href="#">Polycies</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </form>


            </div>
      </div>
    </body>

</html>
