$(document).on("keypress","#password",function(event){
	var keycode = (event.keycode ? event.keycode : event.which);
	if('.ingresar').click();
    }
});

$(document).on("click",".ingresar",function(e){

	if(validar())
	{
		var user        = $('#username').val();
		var password    = $('#password').val();

		var params='&user='+user+'password='+password;

		$.post('control.php',params, function(llandata){

			if(llandata.validacion == 'admin'){
				var url = 'admin.php';
			}

			if(llandata.validacion == 'bibliotecario'){
				var url = 'bibliotecario.php';
			}

			if(llandata.validacion == 'usuario'){
				var url = 'usuario.php';
			}

			if(llandata.validacion == 'fail'){

				$('#password').val('');
				$('#usuario').focus();
			}
			window.location = url;

		},"json");

	}else{
		e.preventDefault();
		return false;
};

function validar(){

	if($('#username').val()  == ''){

		alert("Error. Ingrese usuario!");
		$('username').focus();
		return false;
	}

	if($('#password').val()  == ''){

		alert("Error. Ingrese Clave!");
		$('password').focus();
		return false;
}
    return true;

}

$(document).on("click",".registro_socio",function(e){
	$("#Principal").load('registrar.php')
});