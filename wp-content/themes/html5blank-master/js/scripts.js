(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
		var app = {};

		app.fullHeight = function(){
		var winHeight = $(window).height();
		$(".full-height").css("height",winHeight);
		console.log(winHeight);
	};

	$(window).on("resize", app.fullHeight);

	});
	
})(jQuery, this);
