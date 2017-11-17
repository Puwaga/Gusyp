<!doctype>
<html>
    <head>
        <title>Home</title>
        <link href="styles/main.css" rel="stylesheet" type="text/css">
        <link href="styles/authstyle.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Cambay" rel="stylesheet">
        <script src="js/script.js"></script>
        <link type="text/css" rel="stylesheet" href="styles/style.css">
        <link type="text/css" rel="stylesheet" href="styles/example.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
    </head>
    <body>
        <div id="edit_pop_modal">
            <div id="edit_d">
                <div class="pop_header">
                   <h3>Edit profile</h3>
                    <button class="close_btn" onclick="closeEdit()"></button>
                </div>
                
                <div id="edit_body">
                    
                    <div id="edit_back_prof">
                        <div id="edit_prof_pic">
                           
                        </div>
                    </div>
                    
                    <div id="edit_text">
                        <div class="sub_heade">
                    <p class="s_ti"><img src="gusyp/gender.png" class="side_ico">Gender</p>
                </div>
                <div class="s_main_body">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                        
                        
                              <div class="sub_heade">
                    <p class="s_ti"><img src="gusyp/gender.png" class="side_ico">Gender</p>
                </div>
                <div class="s_main_body">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                        
                              <div class="sub_heade">
                    <p class="s_ti"><img src="gusyp/gender.png" class="side_ico">Gender</p>
                </div>
                <div class="s_main_body">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                        
                              <div class="sub_heade">
                    <p class="s_ti"><img src="gusyp/gender.png" class="side_ico">Gender</p>
                </div>
                <div class="s_main_body">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                        <button class="finish_btn">Save</button>
                    </div>
                    
                </div>
            </div>
    
        </div>
       <?php 
        require_once "inc/header.php";
        require_once "inc/user_profile.php";
        ?>
 
    </body>
</html>