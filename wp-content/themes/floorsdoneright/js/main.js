jQuery(document).ready(function($){

	var localDev = true;

	if(localDev == true) {
		loadReload();
	}
	$(window).load(function(){
		
		$('.flexslider').flexslider({
			animation: "slide"
		});
	});

});