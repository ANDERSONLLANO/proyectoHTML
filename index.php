<!DOCTYPE html>
<html lang="es">

	<head>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Incluir Css Bootstrap & Font Awesome -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

		<!-- Css Propio -->
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">
		<!-- Sweet Alert Css -->
		<link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert/dist/sweetalert.css">

		<title>validaci&oacute;n de Datos</title>
	</head>

	<body >
		
		<div class="jumbotron loginbox">
				
				<center><h4>Validaci&oacute;n de Usuarios</h4></center>

				<div class="user">
					
					<center><img src="assets/img/user.png" height="95" width="95"></center>

				</div>
				
				
				<div class="col-md-12">
					<label>Nombre de Usuario:</label>
					<input type="text" name="username" id="username" class="form-control" autofocus="" autocomplete="off">
				</div>
				
				<div class="col-md-12">
					<label>Contrase&ntilde;a:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				

				<div class="pull-right">
					<button class="btn btn-md btn-success ingresar">Ingresar</button>
				</div>

		</div>

		<!-- Incluir Scripts jQuery & Bootstrap -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		<!-- JS Propio -->
		<script type="text/javascript" src="assets/js/login.js"></script>

		<!-- Sweet Alert -->
		<script type="text/javascript" src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>