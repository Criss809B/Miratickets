var filters = {
	requerido: function(el) {return ($(el).val() != '' && $(el).val() != -1);},
	email: function(el) {return /^[A-Za-z.+][A-Za-z0-9_.+]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/.test($(el).val());},
	telefono: function(el){return /^[0-9]*$/.test($(el).val());},

	entero: function(el){return /^[0-9]*$/.test($(el).val());},
   decimal: function(el){return /^[-]?([1-9]{1}[0-9]{0,}(\.[0-9]{0,2})?|0(\.[0-9]{0,2})?|\.[0-9]{1,2})$/.test($(el).val());},
	ceduladom: function(el){return verificarCedula($(el).val());},
	fechamysql: function(el){return validarFecha($(el).val());}


};
$('#Sign_in').on('click', function(){
	$('#showLogin').html('');
	
	if(filters.email($('#inputUsernameEmail')[0]) == true && $('#inputPassword').val().replace(/ /g, '') != ""){
		$.post('main/ingresar', {email: $('#inputUsernameEmail').val(), clave: $('#inputPassword').val()},function(data){
			dtr = JSON.parse(data);
			if(dtr.error != 0){
				$('#showLogin').html(dtr.msj);
			}
		});
	}else if(filters.email($('#inputUsernameEmail')[0]) == false && $('#inputPassword').val().replace(/ /g, '') != ""){
		$('#showLogin').html('Email invalido.');
	}else if(filters.email($('#inputUsernameEmail')[0]) == false && $('#inputPassword').val().replace(/ /g, '') == ""){
		$('#showLogin').html('Campos requeridos.');
	}else if(filters.email($('#inputUsernameEmail')[0]) == true && $('#inputPassword').val().replace(/ /g, '') == ""){
		$('#showLogin').html('Campo de contrase&ntilde;a vacio.');
	}
});

$('#Sign_up').on('click', function(){
	$('#access_link').click();
	 vR = $('#modal-inicio').modal(
		{
			remote:'main/registro'
		}
	);
	vR.on("show.bs.modal", function(){
		vR.find('#login').css('margin', '0px');
	});
	
});
