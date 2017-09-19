$(document).ready(function(){

	delete_before_load();

	var menuMobile = menuMobileObject();
	menuMobile.init();

	var menuDesktop = menuDesktopObject();
	menuDesktop.init();

	AOS.init();

});
