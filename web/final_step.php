<!doctype html>
<html>
    <head>
        <title></title>
         <link rel="stylesheet" type="text/css" href="styles/authstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Cambay" rel="stylesheet">
    </head>
    <body>
        
           <div id="final_s_form">
                <div id="l_logo">
                    <img src="gusyp/gusyp-logo.png" class="l_ic_logo">
                </div>
               <form id="f_form">
                <h3>Welcome to Gusyp</h3>
                   <h3>Edison Nkemande</h3>
                <p>nkemande@gmail.com</p>
                <p>Freedom of speech | Liberty Zone</p>
                <div id="side_f_holder">
                 
                   
                   <div class="label">Gender</div>
                   <select class="s_f_bx">
                       <option>Female</option>
                       <option>Male</option>
                   </select>
                   
                   <div class="label">Country</div>
                    <select class="s_f_bx">
                       <option>Cameroon</option>
                       <option>America</option>
                   </select>
                   
                   <div class="label">Date of birth</div>
                   <input type="text" class="b_bx" placeholder="Month">
                   <input type="text" class="b_bx" placeholder="day">
                   <input type="text" class="b_bx" placeholder="year">
                   <div id="reg">
                      
                    </div>
                   
                </div> 
                  <div id="rool">
                   <div class="followers_div">
                       <div class="div_header">
                           <h3>Gusyp About</h3>
                       </div>
                       
                       <div class="about_u scroll" >
                           <div class="hobo" >
                            <input type="checkbox" id="social" name="social" value="Apple">
                           <label for="social">Socail Activities</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="learn" name="learn" value="learning">
                           <label for="learn">Education </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="politic" name="politic" value="politics">
                           <label for="politic">Politics</label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="Career" name="career" value="career">
                           <label for="Career">Career </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="music" name="music" value="music">
                           <label for="music">Musicians </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="comedy" name="comedy" value="comedy">
                           <label for="comedy">Comedians </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="actors" name="actors" value="actors">
                           <label for="actors">Actors </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="crisis" name="crisis" value="lcrisis">
                           <label for="crisis">Crisis </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="food" name="food" value="food">
                           <label for="food">Food </label>
                            </div>
                           
                           <div class="hobo">
                           <input type="checkbox" id="place" name="place" value="place">
                           <label for="place">Places </label>
                            </div>
                          
                           
                           
                         
                        
                         
                       </div>
                       
                   </div>
                   <div id="friend_div">
                       <div class="div_header">
                           <h3>Suggested Friends</h3>
                       </div>
                       
                       <div class="fol_body scroll" id="fr">
                           
                           <?php
                           for($i = 0; $i < 9; $i++){
                               ?>
                           <div class="users">
                               <img src="gusyp/user.png" class="user_f" width="50px">
                               <div class="user_name_div">
                                   <div class="g_n">
                                    <h3>Edison Nkemande</h3>
                                   <p class="gi">8 Gusyps</p>
                                   </div>
                                  
                                   <button class="add_f">Add Friend</button>
                               </div>
                           </div>
                           
                           <?php
                           }
                           
                           ?>
                           
                       
                       </div>
                       
                   </div>
                   
                   <button class="finis">Finish</button>
         </div> 
               </form>
            </div>
       
    </body>
     <footer>
        <div class="footer_div">
            <ul>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Policies</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sign In </a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
            <div class="f_y">
                <img src="gusyp/gusyp-logo.png" class="f_l">
                <span>Gusyp &copy; 2017</span>
            </div>
        </div>
    </footer>
</html>