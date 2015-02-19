jQuery(document).ready(function ($) {

$(".item").click(function() {
	var type = $(this).data("type");
	$(this).toggleClass("selected");
	$(".item").not("." + type).toggle();
	$(".fill").not(".type-" + type).fadeToggle();
});

});   