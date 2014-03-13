(function($){
	
$('#quicklinks a').hover(
	function(){ $('span',this).stop(true,false).fadeIn(); },
	function(){ $('span',this).stop(true,false).fadeOut(); });

$('#gallery').royalSlider({
	fullscreen: {
		enabled: true,
		native: true
	},
	thumbs: {
		spacing: 10
	}
});

$('#hero h3').css({'visibility':'visible'}).addClass('animated fadeInLeft');
setTimeout(function(){ $('#hero h2').css({"visibility":'visible'}).addClass('animated fadeInLeft'); }, 200);
setTimeout(function(){ $('#hero p').css({'visibility':'visible'}).addClass('animated fadeInUp') }, 400);

})(jQuery);