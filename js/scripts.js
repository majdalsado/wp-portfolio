
(function ($) {

    "use strict";
	
	$(window).on('load', function(){

		$('.p-item-caption').show();
		$('[data-toggle="tooltip"]').tooltip();

		//Load fluidbox
		$(".init-fb").fluidbox();
		
		// ISOTOPE PORTFOLIO WITH FILTER
		if(isExists('.portfolioContainer')){
			var $container = $('.portfolioContainer');
			$container.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		 
			$('.portfolioFilter a').click(function(){
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				 });
				 return false;
			}); 
		}
	
	});
	
	$('a[href="#"]').on('click', function(event){
		return;
	});
	
	
	if ( $.isFunction($.fn.fluidbox) ) {
		$('a').fluidbox();
	}

	var map = AmCharts.makeChart("mapdiv", {
		type: "map",
		theme: "dark",
		projection: "mercator",
		panEventsEnabled: true,
		backgroundColor: "#fff",
		backgroundAlpha: 1,
		zoomControl: {
			zoomControlEnabled: true
		},
		dataProvider: {
			map: "worldHigh",
			getAreasFromMap: true,
			areas: [{
					"id": "IS",
					"showAsSelected": true
				},
				{
					"id": "TR",
					"showAsSelected": true
				},
				{
					"id": "GB",
					"showAsSelected": true
				},
				{
					"id": "CA",
					"showAsSelected": true
				},
				{
					"id": "US",
					"showAsSelected": true
				},
				{
					"id": "HK",
					"showAsSelected": true
				},
				{
					"id": "ID",
					"showAsSelected": true
				},
				{
					"id": "JP",
					"showAsSelected": true
				},
				{
					"id": "MY",
					"showAsSelected": true
				},
				{
					"id": "SG",
					"showAsSelected": true
				},
				{
					"id": "SY",
					"showAsSelected": true
				},
				{
					"id": "TH",
					"showAsSelected": true
				}
			]
		},
		areasSettings: {
			autoZoom: true,
			color: "#B4B4B7",
			colorSolid: "#FFAD01",
			selectedColor: "#FFAD01",
			outlineColor: "#666666",
			rollOverColor: "#535364",
			rollOverOutlineColor: "#000000"
		}
	});
	
	
})(jQuery);

function isExists(elem){
	if ($(elem).length > 0) { 
		return true;
	}
	return false;
}