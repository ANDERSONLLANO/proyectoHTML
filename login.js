$(document),on("click",".ingresar",function(e){
	if (validar()) {
		var user = $("#username").val();
		var pasword = $("#pasword").val();
	}
});

function validar(){
	if ($("username").val()=='') {
		alert("Error. ingrese usuario");
		$("username").focus();
		return false;
	}
	if ($("pasword").val()=='') {
		alert("Error. digite clave");
		$("pasword").focus();
		return false;
	}
	return true;
}