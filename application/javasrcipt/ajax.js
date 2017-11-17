function ajaxObj( meth, url ) {
  if(window.XMLHttpRequest){
    var x = new XMLHttpRequest();
  }else{
    var x = new ActiveXObject("Microsoft.XMLHTTP");
  }
	x.open( meth, url, true );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
	    return true;
	}
}
