// Display the optional Dev menu on top navigation

$(document).keypress(function(e){
	if(e.charCode === 97) {
		// Your Code
		$("#dev_nav").toggle();
	}
});

$(function () {
	$(".slider2").responsiveSlides({
		pager: true,
		auto: false,
		nav: true,
		namespace: "centered-btns"
	});
});
