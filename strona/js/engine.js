jQuery(function($){
	$.supersized({
		slide_interval          :   5000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	1000,		// Speed of transition
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images
			{image : 'gallery/s1.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'gallery/s1.jpg'},
			{image : 'gallery/s2.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'gallery/s2.jpg'},
			{image : 'gallery/s3.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'gallery/s3.jpg'},
			{image : 'gallery/s4.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'gallery/s4.jpg'},
			{image : 'gallery/s5.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'gallery/s5.jpg'}
									]
	});
});

var window_height, document_height, distance;

$(window).load(function(){
	document_height = $(document).height();
})
$(document).ready(function(){
	
	window_height = $(window).height();
	window_width = $(window).width();
	
	if(window_width<800){
		$('body').css({'overflow':'auto'});
	}
	
	if ($('.komunikat').text().length>0){
		$('.back').fadeIn(600);
	}
	$('.a_komunikat').click(function(){
		$('.back').fadeOut(600);
		return false;
	})
	if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
	window.onmousewheel = document.onmousewheel = wheel;

	var time = 1200;
	distance = window_height/2;

	function wheel(event) {
		if (event.wheelDelta) delta = event.wheelDelta / 120;
		else if (event.detail) delta = -event.detail / 3;
		handle();
		if (event.preventDefault) event.preventDefault();
		event.returnValue = false;
	}

	function handle() {
		$('html, body').stop().animate({
			scrollTop: $(window).scrollTop() - (distance * delta)
		}, time);
	}

	$(document).keydown(function (e) {
		switch (e.which) {
			case 38:
				$('html, body').stop().animate({
					scrollTop: $(window).scrollTop() - distance
				}, time);
				break;
			case 40:
				$('html, body').stop().animate({
					scrollTop: $(window).scrollTop() + distance
				}, time);
				break;
		}
	});
	
	$('.in_down').click(function(){
		$('html, body').stop().animate({
			scrollTop: $(window).scrollTop() + distance
		}, time);
		return false;
	})
	$('.in_up').click(function(){
		$('html, body').stop().animate({
			scrollTop: $(window).scrollTop() - distance
		}, time);
		return false;
	})
	
	$('.add a').click(function(){
		$('.add a.active').removeClass("active");
		$(this).addClass("active");
		return false;
	})
	
	$(window).scroll(function(){
		if($(this).scrollTop()==0){
			$('.in_up').fadeOut();
		}else{
			$('.in_up').fadeIn();
		}
		if($(this).scrollTop()+window_height==document_height){
			$('.in_down').fadeOut();
		}else{
			$('.in_down').fadeIn();
		}
	})
	
	$(window).resize(function(){
		window_height = $(window).height();
		$('.main').css({'height':window_height});
		document_height = $(document).height();
		distance = window_height/2;
	})
})

$(document).on('click', '#send', function(){

	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
	var filter = /^[0-9-+ ]+$/;
	var validate = true;
	
	if(regex.test($('#email').val()) === false){
		validate = false;
		$('#jquery_message').html('Wprowadź poprawny adres e-mail.');
	}
	if($('#ads').val() == ''){ 
		validate = false;
		$('#jquery_message').html('Uzupełnij wszystkie pola formularza.');
	}
    if (!filter.test($('#tel').val()) && $('#tel').val().length>0) {
		validate = false;
		$('#jquery_message').html('Wprowadź właściwy numer telefonu.');
    }
	if(validate == true){
		$.post('php/add.php', {
			'email' : $('#email').val(),
			'content' : $('#ads').val(),
			'tel' : $('#tel').val(),
			'type' : $(".add a.active").data("type"),
			'send': 'ok'}, 
			function() {
				$('#email').val('');
				$('#ads').val('');
				$('#tel').val('');
				$('#jquery_message').html('Dziękujemy! Potwierdź jeszcze swój adres e-mail.');
		});
	}
	return false;
});

$(document).on('click', '#send2', function(){

	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
	var validate = true;
	
	if(regex.test($('#email2').val()) === false){
		validate = false;
		$('#jquery_message2').html('Wprowadź poprawny adres e-mail.');
	}
	if($('#name').val() == ''){ 
		validate = false;
		$('#jquery_message2').html('Uzupełnij wszystkie pola formularza.');
	}
	if(parseInt($('#oferta').val()) < parseInt($('#cena').text())){ 
		validate = false;
		$('#jquery_message2').html('Podana cena jest za niska');
	}
	if(isNaN($('#oferta').val())){ 
		validate = false;
		$('#jquery_message2').html('Podaj prawidłowy format ceny');
	}
	if(validate == true){
		$.post('php/mail.php', {
			'email2' : $('#email2').val(),
			'name' : $('#name').val(),
			'oferta' : $('#oferta').val(),
			'message' : $('#message').val(),
			'send': 'ok'}, 
			function() {
				$('#email2').val('');
				$('#name').val('');
				$('#oferta').val('');
				$('#message').val('');
				$('#jquery_message2').html('Dziękujemy! Twoja oferta została przesłana.');
		});
	}
	return false;
});

$(document).keyup(function(e) { 
    if (e.which == 27) { $('.a_komunikat').click();}
});