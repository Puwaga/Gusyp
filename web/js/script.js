var pagetop, menu, yPos;
function yScroll(){
	about_user = document.getElementById('side_ab');
	trend = document.getElementById('trends');
	timeline = document.getElementById('timeline_post');
	trend_home = document.getElementById('trend_home');
	
	yPos = window.pageYOffset;
	if(yPos > 360 ){
		about_user.style.position = "fixed";
		trend.style.position = "fixed";
        about_user.style.marginLeft = "";
        trend.style.marginLeft = "850px";
        timeline.style.marginLeft = "335px";
        about_user.style.marginTop = "-360px";
        trend.style.marginTop = "-360px";
		
	}else{
        about_user.style.position = "";
		trend.style.position = "";
        timeline.style.marginLeft = "";
        about_user.style.marginLeft = "";
        trend.style.marginLeft = "";
        about_user.style.marginTop = "";
        trend.style.marginTop = "";
    }
}
window.addEventListener("scroll", yScroll);

function editProfile(){
    var edit_modal = document.getElementById("edit_pop_modal");
    edit_modal.style.display = "block";
}


function closeEdit(){
    var edit_modal = document.getElementById("edit_pop_modal");
    edit_modal.style.display = "none";
}