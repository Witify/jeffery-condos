/** Number Format */
Number.prototype.formatNumber = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };


/** RESPONSIVE **/

var width = $(window).width();

$(document).ready(function() {
	responsivness();
	scrollAnimation();
	$('#loading').fadeOut();
});

$(window).resize(function() {
	responsivness();
});

function responsivness() {
	var height = window.innerHeight;
	var width = window.innerWidth;

	if(height > 700)
		$('.fullpage').css({ 'height' : height });
}

/** Scroll Animations **/
$(window).scroll(function() {

	var scroll = $(window).scrollTop();

	/** White Menu **/
	if(scroll > 30)
		$('.navbar').addClass('bg');
	else
		$('.navbar').removeClass('bg');

	scrollAnimation();
	
});

/** Animation on scroll **/
function scrollAnimation() {
	var scroll = $(window).scrollTop();

	$('.animation').each(function() {
		var el = $(this);
		var elPos = el.offset().top;

		var range = window.innerHeight - (window.innerHeight * 0.2);

		var min = elPos - range;
		var max = elPos + range;

		var delay = el.data('delay');
		if(delay === undefined)
			delay = 1;

		setTimeout(function() {
			if(scroll > min && scroll < max) 
				el.addClass('animated');
			else
				el.removeClass('animated');
		}, delay);
	});
}

/** Mobile Menu **/
$('#mobile-menu').on('click', function() {
	$('#navbar').fadeToggle();
});


/** Smooth Anchor Links */
$(document).on('click', 'a.anchor_link', function(event){
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});



