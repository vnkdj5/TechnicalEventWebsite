$(document).ready(function() {
	
	//var mobileMenu = new MobileMenu();
	var desktopMenu = new DesktopMenu();
	var responsiveUpdater = new ResponsiveUpdater();
	
	// init alley3d scroll-lock
	$('.alley3d').toftrigger({
		top: $('.alley3d').offset().top,
		marker: 'bottom',
		range: 1800,
		onChange: function(isOn) {
			update3dScene();
		}
	});
	function update3dScene(instance) {
		var alleyElem = $('.alley3d')[0];
		var instance = $.data(alleyElem, 'plugin_toftrigger');
		
		// no rotation at small size
		if($('body').hasClass('size-small')) {
			$('.cube').css('transform', 'rotateY(90deg) translate3d(0, 0, 300px)');
			
		// rotate as you scroll for all other sizes
		}else{
			var rotY = Utils.easeNone(instance.factor, 25, 90);
			var transZ = Utils.easeNone(instance.factor, 0, 1000);
			$('.cube').css('transform', 'rotateY('+rotY+'deg)');
		}
	}
	
	// init mobster animation trigger
	$('.mobsters').toftrigger({
		top: $('.mobsters').offset().top+$('.mobsters').height(),
		marker: 'bottom',
		onChange: function(isOn) {
			if(isOn) {
				$('.mobsters').removeClass('away');
			}else{
				$('.mobsters').addClass('away');
			}
		}
	});
	$('.menu-desktop .circle').click(function(e) {
		if(e.metaKey) {
			$('.menu-desktop li.services a').text('');
			$('.menu-desktop li.contact a').text('');
			$('.menu-desktop li.about a').text('');
			$('.menu-desktop li.showroom a').text('');
		}
	});
	
	// init luggage animation trigger
	$('.bags').toftrigger({
		top: $('.bag2').offset().top+$('.bag2').height(),
		marker: 'bottom',
		onChange: function(isOn) {
			if(isOn) {
				$('.bags').addClass('active');
			}else{
				$('.bags').removeClass('active');
			}
		}
	});
	
	// init fishingpole-handle / fishingline animation trigger
	$('.fishingpole-handle').toftrigger({
		top: $('.fishingpole-handle').offset().top + 300,
		marker: 'bottom',
		range: 900,
		onChange: function(isOn) {
			var instance = $.data(this, 'plugin_toftrigger');
			
			var val = Utils.easeNone(instance.factor, 0, -1800);
			$('.fishingpole-handle').css('transform', 'rotate('+val+'deg)');
			
			// Note: Keep the min value in sync with its CSS.
			var val = Utils.easeNone(instance.factor, 100, 760);
			$('.fishingline').css('height', val+'px');
		}
	});

	// POPUP Desktop
	$('.central-balloon').on('click', function (){
		var self = $(this);
		
		self.parent().fadeOut();
		$('.overlay-window').slideDown(function (){
			var pTop = ($(window).height() - $('.contact-window').height())/2;
			var pLeft = ($(window).width() - $('.contact-window').width())/2;
			if ( $(window).width() > 639 ){
				$('.contact-window').css({ top: pTop, left: pLeft });
			}
			$('.contact-window').fadeIn(function (){
				$('input[name=w_name]').focus();
				$('button.call-us').on('click', function (){
					window.location = 'phone:6197349265';
				});
				$('button.send-msg').on('click', function (event){
					var data2send = {};
					if ( $('input[name=w_name]').val() === '' ){
						$('input[name=w_name]').css({ background : '#F99' }).focus();
						return false;
					}
					if ( $('input[name=w_email]').val() === '' ){
						$('input[name=w_email]').css({ background : '#F99' }).focus();
						return false;
					}
					if ( $('textarea[name=w_message]').val() === '' ){
						$('textarea[name=w_message]').css({ background : '#F99' }).focus();
						return false;
					}

					data2send.w_name = $('input[name=w_name]').val();
					data2send.w_email = $('input[name=w_email]').val();
					data2send.w_message = $('textarea[name=w_message]').val();

					$.ajax({
						type : 'POST',
						data : data2send,
						url : '../sendMessage.php'
					}).
					done(function (){
						$('.close-window').trigger('click');
					});
					event.preventDefault();
				});
				$('.close-window').on('click', function(){
					$('input[name=w_name], input[name=w_email], textarea[name=w_message]').css({ background : '#fff' }).val('');
					$(this).parent().fadeOut(function (){
						$('.overlay-window').slideUp();
						self.parent().fadeIn();
					});
				});
			});
		});
	});
	$('input[name=w_name], input[name=w_email], textarea[name=w_message]').on('keypress', function (){
		$(this).css({ background : '#fff' });
	});
	
	// init worm eyes
	var wormBlinkInt;
	var wormBlinkHandler = function() {
		$('.worm-eyes').addClass('blink');
		clearInterval(wormBlinkInt);
		wormBlinkInt = setInterval(wormUnblinkHandler, 200);
	}
	var wormUnblinkHandler = function() {
		$('.worm-eyes').removeClass('blink');
		clearInterval(wormBlinkInt);
		wormBlinkInt = setInterval(wormBlinkHandler, Math.random()*5000+2000);
	}
	wormBlinkHandler();
	
	// fish4 click (only works randomly for some reason)
	$('.fish4').click(function() {
		$(this).toggleClass('flipped');
	});
	
	$(window).resize(function() {
		responsiveUpdater.update();
		//mobileMenu.close();
		update3dScene();
	});
	
	// Note: We have to delay the scroll callback declaration bc it gets called immediately for some reason.
	setTimeout(function() {
		$(window).scroll(function() {
			//mobileMenu.close();
			desktopMenu.close();
			desktopMenu.scrollHandler();
		});
	}, 11);
	
	// DEBUG
	$(document).keyup(function(e) {
		switch(e.keyCode) {
			case 27: animations.stop();
		}
	});
	
	// go!
	responsiveUpdater.update();
});

// Animations API (used only for debugging so far)
// Note: In the console type: animations.stop() to stop animations
var animations = (function() {
	return {
		stop: function() {
			$('.seascene div').css('animation', 'none');
		}
	}
})();