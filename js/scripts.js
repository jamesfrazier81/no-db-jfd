$(document).ready(function(){

	// Animate.CSS function to listen form animation ending
	$.fn.extend({
	    animateCss: function (animationName) {
	        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	        this.addClass('animated ' + animationName).one(animationEnd, function() {
	            $(this).removeClass('animated ' + animationName);
	        });
	    }
	});

	// Hidden mobile menu
	$('.navmobile .fa-bars').click(function() {
		$('.mobilemenu').slideDown(function() {
			$('.fa-times').css('display', 'inline-block');
			$('.fa-bars').css('display', 'none');
		});		
	});

	$('.navmobile .fa-times').click(function() {
		$('.mobilemenu').slideUp(function() {
			$('.fa-times').css('display', 'none');
			$('.fa-bars').css('display', 'inline-block');
		});		
	});

	// Animate mouse
	// function makeNewPosition(){
    
	//     // Get viewport dimensions (remove the dimension of the div)
	//     var h = $(window).height() - 50;
	//     var w = $(window).width() - 50;
	    
	//     var nh = Math.floor(Math.random() * h);
	//     var nw = Math.floor(Math.random() * w);
	    
	//     return [nh,nw];    
	    
	// }

	// function animateDiv(){
	//     var newq = makeNewPosition();
	//     var oldq = $('.fa').offset();
	//     var speed = calcSpeed([oldq.top, oldq.left], newq);
	    
	//     $('.fa').animate({ top: newq[0], left: newq[1] }, speed, function(){
	//       animateDiv();        
	//     });
	    
	// };

	// function calcSpeed(prev, next) {
	    
	//     var x = Math.abs(prev[1] - next[1]);
	//     var y = Math.abs(prev[0] - next[0]);
	    
	//     var greatest = x > y ? x : y;
	    
	//     var speedModifier = 0.35;

	//     var speed = Math.ceil(greatest/speedModifier);

	//     return speed;

	// }

	//  animateDiv();
		
});