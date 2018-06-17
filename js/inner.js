$(document).ready(function() {
	
	// var mobileMenu = new MobileMenu();
	var desktopMenu = new DesktopMenu();
	var responsiveUpdater = new ResponsiveUpdater();
	
	$(window).resize(function() {
		responsiveUpdater.update();
		// mobileMenu.close();
	});
	
	// Note: We have to delay the scroll callback declaration bc it gets called immediately for some reason.
	setTimeout(function() {
		$(window).scroll(function() {
			// mobileMenu.close();
			desktopMenu.close();
			desktopMenu.scrollHandler();
		});
	}, 11);
	
	// go!
	responsiveUpdater.update();

	// POPUP Desktop
	$('.central-balloon').on('click', function () {
		var self = $(this);
		var pTop = ($(window).height() - $('.contact-window').height())/2;
		var pLeft = ($(window).width() - $('.contact-window').width())/2;
		if ( $(window).width() > 639 ){
			$('.contact-window').css({ top: pTop, left: pLeft });
		}
		self.parent().fadeOut();
		$('.overlay-window').slideDown(function (){
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
					$(this).parent().fadeOut(function (){
						$('input[name=w_name], input[name=w_email], textarea[name=w_message]').css({ background : '#fff' }).val('');
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
});