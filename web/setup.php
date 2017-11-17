<!doctype>
<html>
    <head>
        <title>Home</title>
        <link href="styles/main.css" rel="stylesheet" type="text/css">
        <link href="styles/authstyle.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Cambay" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
        
    </head>
    <body>
       <?php 
        require_once "inc/header.php";
        include "inc/complete.php";
        ?>
        <div id="setup_contianer">
      
        <div id="filled">
            <div class="filled_header">
                <h3><img src="gusyp/com.png" class="side_ico">Complete your profile</h3>
            </div>
            <div class="filled_body">
                
                <button class="accordion"><img src="gusyp/gender.png" class="side_ico">Gender</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
               
      
                <button class="accordion"><img src="gusyp/hobbies.png" class="side_ico">Hobbies</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                
                <button class="accordion"><img src="gusyp/gusyp-logo1.png" class="side_ico">Gusyp About</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                
                <button class="accordion"><img src="gusyp/edu.png" class="side_ico">Education</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                
                <button class="accordion"><img src="gusyp/Home.png" class="side_ico">Hometown</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                
               <button class="accordion"><img src="gusyp/lovw.png" class="side_ico">Relationship</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
                
                <button class="accordion"><img src="gusyp/lov.png" class="side_ico">Biography</button>
                <div class="panel">
                     <div class="hobo" >
                            <input type="checkbox" id="female" name="gender" value="female">
                           <label for="female">Female</label>
                           </div>
                    
                           <div class="hobo">
                           <input type="checkbox" id="male" name="gender" value="male">
                           <label for="male">Male </label>
                            </div>
                  
                </div>
               
                
            </div>
            <div class="filled_footer">
                <button class="finish_btn">Finish</button>
            </div>
        </div>
         
      </div>
 <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
    </body>
</html>