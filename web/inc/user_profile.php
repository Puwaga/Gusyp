
<div id="profile_container">
            <div id="profile_back">
                
            </div>
            <div id="main_profile_con">
                <div id="hode">
                
                <div id="profile_pic">
                </div>
                    <div id="p_nav">
                        <ul>
                            <li><a href="#">Timeline </a><span class="num">2 new</span></li>
                            <li><a href="#">Gusyp's </a><span class="num">(100)</span></li>
                            <li><a href="#">Friends </a><span class="num">(500)</span></li>
                    
                        </ul>
                        
                        <div id="edit_div">
                            <button class="edit_btn" onclick="editProfile()" onblur="blurEdit()">Edit profile</button>
                        </div>
                    </div>
                <div id="profile_name">
                    <h2>Edison Nkemande</h2>
                    <h3>(Inch)</h3>
                    <p>@nkemande</p>
                </div>
                </div>
                <div id="timeline">
                    <div id="side_ab">
                        <p><img src="gusyp/lovw.png" class="sm_io"><a href="#" class="a_t">Single</a></p>
                        <p><img src="gusyp/Home.png" class="sm_io">Live in <a href="#" class="a_t">Houston tx</a></p>
                        <p><img src="gusyp/Home.png" class="sm_io">From <a href="#" class="a_t">Douala, Cameroon</a></p>
                        
                        <p><img src="gusyp/hobbies.png" class="sm_io">In <a href="#" class="a_t">Social Activities</a></p>
                        <p><img src="gusyp/edu.png" class="sm_io">Schooled in <a href="#" class="a_t">National polytechnic bamenda</a></p>
                        
                        <div id="pr_photos">
                            <div class="album">
                                <img src="gusyp/post.jpg" class="ur_pic">
                            </div>
                            <div class="album">
                                 <img src="gusyp/post.jpg" class="ur_pic">
                            </div>
                            <div class="album">
                                 <img src="gusyp/post.jpg" class="ur_pic">
                            </div>
                            <div class="album">
                                 <img src="gusyp/post.jpg" class="ur_pic">
                            </div>
                            
                        
                        </div>
                    
                    </div>
                    
                    <div id="timeline_post">
                        <div id="timel_header">
                            <h3>Gusyp's</h3>
                        </div>
                        <div id="timel_body">
                            
                          
                            <div class="post_holder">
        
     
            <div class="wrapper thumb-1">
                   <div class="p_h">
                        <div class="u_l_pic">
                        </div>
                        <div class="u_l_name">
                            <h3>Edison Nkemande</h3>
                            <p>@edison</p>
                        </div>
                    </div>
                <div class="post_nte">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                     <div class="img"></div>
                    <div class="react">
                            <button class="react_btn">Like</button>
                            <button class="react_btn">Share</button>
                            <button class="react_btn">Gusyp</button>
                    </div>
                </div>
                    <div class="text">
                         <div id="comment">
                            <?php include ("comment/cmt_bdy.php"); ?>
                            <script src="js/comment.js"></script>
                            </div>
                         
                  
                </div>
                                    
        <script>
    $(function() {
  $('.wrapper').click(function() {
      $('.wrapper').each(function() {
         $(this).css('z-index', 0); 
      });
      	$(this).css('z-index', 10); 
      	$(this).toggleClass('open');    
  }) 
})
</script>
                             
                                       
                                </div>
                                
                            </div>
                         
                            
                        
                        </div>
                    
                    </div>
                    
                    <div id="trends">
                    <div id="trend_header">
                        <h3>trends</h3>
                        </div>
                        
                        <div id="trend_body">
                           
                            <?php
                            for($i = 0; $i < 5 ; $i++){
                                ?>
                            <div class="tren_row">
                           <a class="tren_h3" href="#">#The worl is coming together</a> <p class="sm_tx">How we build up the zone </p>
                            </div>
                            <?php
                            }
                            
                            ?>
                            
                            
                            
                        
                        </div>
                    </div>
                </div>
            
            </div>
            
        
        </div>