Cufon.replace('#navigation a span, .futura');

$(function(){ 
	// User Rounded Corners only in IE (==6)
	if($.browser.msie && $.browser.version.substr(0,1) == 6) {
		DD_belatedPNG.fix('h1#logo a, #navigation, #navigation a img, .mainbox-t, .mainbox-cnt, .mainbox-b, .button-more, .services a img, .shortbox .box-t, .shortbox .box-cnt, .shortbox .box-b, .subscribe form');	
	}
});