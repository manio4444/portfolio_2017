$(document).ready(function(){

	delete_before_load();

	var menuMobile = menuMobileObject();
	menuMobile.init();

	menu_desktop_scroll_listener();

	realization_slider();

	// wood_list_slider();

	// document.body.innerHTML = window.innerWidth+"---"+window.innerHeight;

});
