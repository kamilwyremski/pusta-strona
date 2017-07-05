$(window).load(function(){
	document_height = $(document).height();
	window_height = $(window).height();
	if(document_height>window_height){
		$('footer').css('position','relative');
	}
})

$(document).ready(function(){
	
	var id, type;
	$('.usun_ads').click(function(){
		var $this = $(this);
		$('#usun_ads_box').fadeIn();
		$('#usun_ads h3').text($this.data("email"));
		id=$this.data("id");
		type=$this.data("type")
		return false;
	})
	
	$('#tak_usun_ads').click(function(){
		$.post('?'+type, {
			'remove' : id,
			'send': 'ok'}, 
			function() {
				document.location.reload(true);
			});
		return false;
	})
	
	$('.dodaj_ads').click(function(){
		$.post('?'+$(this).data("type"), {
			'add' : $(this).data("id"),
			'send': 'ok'}, 
			function() {
				document.location.reload(true);
			});
		return false;
	})
	
	$('#ban_user_link').click(function(){
		$('#ban_user_box').fadeIn();
		return false;
	})
	
	$('#tak_ban').click(function(){
		var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
		var validate = true;
		if(regex.test($('#email').val()) === false){
			validate = false;
			$('.ban').html('Wprowadź poprawny adres e-mail');
		}
		if(validate == true){
			$.post('?blokady', {
				'ban' : $("#email").val(),
				'send': 'ok'}, 
				function() {
					document.location.reload(true);
				});
		}
		return false;
	})
	
	$('.usun_ban').click(function(){
		$.post('?blokady', {
			'remove' : $(this).data("id"),
			'send': 'ok'}, 
			function() {
				document.location.reload(true);
			});
		return false;
	})
	
	$('.settings_link').click(function(){
		var regex = /^[0-9]{1,10}$/;
		var validate = true;
		if(regex.test($('#price').val()) === false){
			validate = false;
			$('.price').html('Wprowadź poprawną wartość numeryczną');
		}
		if(regex.test($('#max_0').val()) === false){
			validate = false;
			$('.max_0').html('Wprowadź poprawną wartość numeryczną');
		}
		if(regex.test($('#max_1').val()) === false){
			validate = false;
			$('.max_1').html('Wprowadź poprawną wartość numeryczną');
		}
		if(validate == true){
			$.post('?strona', {
				'price' : $("#price").val(),
				'max_0' : $("#max_0").val(),
				'max_1' : $("#max_1").val(),
				'send': 'ok'}, 
				function() {
					document.location.reload(true);
				});
		}
		return false;
	})
	
	$('#stopka_link').click(function(){
		$('#stopka_box').fadeIn();
		return false;
	})
	
	$('#tak_footer').click(function(){
		var validate = true;
		$('.red').html('');
		if(!/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#url").val())){
			validate = false;
			$('.url').text('Podaj poprawny adres URL');	
		}
		if($('#title').val() == ''){
			validate = false;
			$('.title').html('Wpisz tytuł linka');
		}
		var type=$('#stopka h1').data("type");
		if(validate == true){
			$.post('php/add_link.php', {
				'action' : "add",
				'type' : $('#stopka h1').data("type"),
				'title' : $("#title").val(),
				'url' : $("#url").val(),
				'send': 'ok'}, 
				function() {
					document.location.reload(true);
				});
		}
		return false;
	})
	
	var id_edyt;
	$('.edytuj_footer_link').click(function(){
		$('#stopka_box2').fadeIn();
		var $this = $(this);
		$("#title2").attr("value", $this.data("title"));
		$("#url2").attr("value", $this.data("url"));
		id_edyt = $this.data("id");
		return false;
	})
	
	$('#ed_footer').click(function(){
		var validate = true;
		$('.red2').html('');
		if(!/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#url2").val())){
			validate = false;
			$('.url2').text('Podaj poprawny adres URL');	
		}
		if($('#title2').val() == ''){
			validate = false;
			$('.title2').html('Wpisz tytuł linka');
		}
		if(validate == true){
			$.post('php/add_link.php', {
				'action' : "edit",
				'id' : id_edyt,
				'title' : $("#title2").val(),
				'url' : $("#url2").val(),
				'send': 'ok'}, 
				function() {
					document.location.reload(true);
				});
		}
		return false;
	})
	
	var usun_id;
	$('.usun_footer').click(function(){
		$('#stopka_box3').fadeIn();
		var $this = $(this);
		$("#stopka_box3 h2").text($this.data("title"));
		usun_id = $this.data("id");
		return false;
	})
	
	$('#usun_footer').click(function(){
		$.post('php/add_link.php', {
			'action' : "remove",
			'id' : usun_id,
			'send': 'ok'}, 
			function() {
				document.location.reload(true);
			});
		return false;
	})
	
	$('.nie').click(function(){
		$('.page_box').fadeOut();
		id="";
		type="";
		$('.red').html('');
		return false;
	})
	
})

$(document).on('click', '#zapisz_ustawienia', function(){

	var validate = true;
	$('.u').text('');
	
	if($('.u0').val().length ==0){ 
		validate = false;
		$('.u_login').text('Wpisz login');	
	}
	
	if($('.u1').val() != $('.u2').val()){ 
		validate = false;
		$('.u_password').text('Podane hasła są różne');	
	}
	
	if($('.u1').val().length ==0){ 
		validate = false;
		$('.u_password').text('Podane hasło jest za krótkie');	
	}
		
	if(validate == true){
		$.post('php/login.php', {
			'login' : $('.u0').val(),
			'password' : $('.u1').val(),
			'send': 'ok'}, 
			function() {
				document.location.reload(true);
		});
	}
});

$(document).keyup(function(e) { 
    if (e.which == 27) { $('.nie').click();}
});