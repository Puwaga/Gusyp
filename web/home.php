<!doctype>
<html>
    <head>
        <title>Home</title>
        <link href="styles/main.css" rel="stylesheet" type="text/css">
        <link href="styles/authstyle.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css?family=Cambay" rel="stylesheet">
        <link rel="stylesheet" href="styles/member_side.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/member.js"></script>
        
        
        
    </head>
    <body>
       <?php 
        require_once "inc/header.php";
        ?>
        
        <div id="contianer_wrapper">
            <div id="trend_home">
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
            <div id="middle_wall">
                
                <?php
                            for($i = 0 ; $i < 8; $i++){
                                ?>
                            <div class="post_holder">
                                <div class="p_h">
                                    <div class="u_l_pic">
                                </div>
                                <div class="u_l_name">
                                    <h3>Edison Nkemande</h3>
                                    <p>@edison</p>
                                </div>
                                </div>
                                <div class="m_cont">
                                    <div class="post_nte">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    </div>
                                    <div class="post_p_pic">
                                    
                                    </div>
                                    <div class="post_p_footer">
                                        <div class="react">
                                            <button class="react_btn">Like</button>
                                            <button class="react_btn">Share</button>
                                            <button class="react_btn">Gusyp</button>
                                        </div>
                                        <div id="comment">
                                            <div class="gusyp_tx">
                                               
                                                <div class="row_1">
                                                <div class="comment_pic">
                                                </div>
                                                <div class="comment_1">
                                                    <p><a href="#">Edison Nkemande</a> It is a long established fact that a reader will be distracted</p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="comment_in">
                                            <form>
                                                <input type="text" class="gusyp_input" placeholder="Post you Gusyp"><button class="gus_btn">gossip</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <?php
                            }
                            
                            ?>
                            
                
            
            </div>
            <div id="active_user">
                
                <?php
                for($i = 0; $i < 8; $i++){
                    ?>
                <div class="img_c">
                      <img id="btn1" src="https://scontent.fhou1-2.fna.fbcdn.net/v/t1.0-9/19554188_837701236388132_6068793488203374838_n.jpg?oh=8cb9b6502e36927f4bb821ddb68d906b&oe=59D1AC51" class="btn" onclick="dis_menu(this);" onmousemove="dis_menu(this);"/><button id="usr1" class="frds" onclick="dis_menu(this);" onmousemove="dis_menu(this);" >Edison Nkemande</button>
                </div>
                <?php
                }
                
                ?>
                
            
            </div>
            
            <div id="d_cover1" class="d_cover" onmouseup="destroyed(this);">
<div id="Profile1" class="Profile">
<div id="Img1" class="Img" onclick="dis_menu(this);" onmousemove="dis_menu(this);" style="background: url('https://scontent.fhou1-2.fna.fbcdn.net/v/t1.0-9/19554188_837701236388132_6068793488203374838_n.jpg?oh=8cb9b6502e36927f4bb821ddb68d906b&oe=59D1AC51'); background-position:center; background-repeat: no-repeat; background-size: 100%;">
<div class="overlay">
<span><img /></span>
</div>
</div>
<div id="clickPopUp1" class="clickPopUp">
    <ul class="pop_ul">
        <li><a href="#"><img src="gusyp/hom.png" class="pop_ico">Edison Nkemande</a></li>
        <li><a href="#"><img src="gusyp/friend.png" class="pop_ico">Friends<span> (1k)</span></a></li>
        <li><a href="#"><img src="gusyp/friend.png" class="pop_ico">Unfriend</a></li>
        <li><a href="#"><img src="gusyp/pic.png" class="pop_ico">Photos</a></li>
        <li><a href="#"><img src="gusyp/chat.png" class="pop_ico">Message</a></li>
        <li><a href="#"><img src="gusyp/chat.png" class="pop_ico">Block</a></li>
        <li><a href="#"><img src="gusyp/setting.png" class="pop_ico">Settings</a></li>
       
    </ul>
<div class="Social">

</div>
</div>
</div>
</div>
        </div>
    </body>
    
</html>