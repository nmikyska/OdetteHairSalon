$(document).ready(function(){


//-------NAV HOVERING TO SHOW THE SUBMENU FADEIN/OUT--------
	//using the main ul to indicate the hover, would bring up the nested menu instead of when hoving over the specific special occasions button. added class of subMenu on the li to hone in the effect I wanted.
	$('.subMenu').hover(
	function(){
		$('.nestMenu').fadeIn(500);
	},//end mouseover hover
	function(){
		$('.nestMenu').fadeOut(500);
	}//end mouseout hover
	);//end nav hovering effect
	
//------FADE IN THE HOME PICTURE CLASS ON THE HOME PAGE--------	
	$('.home_picture').fadeIn(3000);
	
	
});//ends the document.ready function