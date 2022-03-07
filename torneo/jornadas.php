<?php

include "../conn.php";

// consultas para jornada

// write query for all rows
$sqlJornadaEq1 = "SELECT jornadaActual.jor, jornadaActual.eq1, jornadaActual.ident, jornadaActual.fecha, tabla_general.img_path, tabla_general.posicion FROM jornadaActual INNER JOIN tabla_general ON jornadaActual.eq1 = tabla_general.nombre_equipo ORDER BY ident;";
// make query and get result
$resultJornadaEq1 = mysqli_query($conn, $sqlJornadaEq1);
// fetch the resulting rows as an array
$jornadaEq1 = mysqli_fetch_all($resultJornadaEq1, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadaEq1);

// write query for all rows
$sqlJornadaEq2 = "SELECT jornadaActual.jor, jornadaActual.eq2, jornadaActual.ident, jornadaActual.fecha, tabla_general.img_path, tabla_general.posicion FROM jornadaActual INNER JOIN tabla_general ON jornadaActual.eq2 = tabla_general.nombre_equipo ORDER BY ident;";
// make query and get result
$resultJornadaEq2 = mysqli_query($conn, $sqlJornadaEq2);
// fetch the resulting rows as an array
$jornadaEq2 = mysqli_fetch_all($resultJornadaEq2, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadaEq2);

// Consultas para resultados

// write query for all rows
$sqlJornadas1 = "SELECT * FROM jornadas WHERE jornada=1 ORDER BY ident;";
// make query and get result
$resultJornadas1 = mysqli_query($conn, $sqlJornadas1);
// fetch the resulting rows as an array
$jornada1 = mysqli_fetch_all($resultJornadas1, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas1);

// write query for all rows
$sqlJornadas2 = "SELECT * FROM jornadas WHERE jornada=2 ORDER BY ident;";
// make query and get result
$resultJornadas2 = mysqli_query($conn, $sqlJornadas2);
// fetch the resulting rows as an array
$jornada2 = mysqli_fetch_all($resultJornadas2, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas2);

// write query for all rows
$sqlJornadas3 = "SELECT * FROM jornadas WHERE jornada=3 ORDER BY ident;";
// make query and get result
$resultJornadas3 = mysqli_query($conn, $sqlJornadas3);
// fetch the resulting rows as an array
$jornada3 = mysqli_fetch_all($resultJornadas3, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas3);

// write query for all rows
$sqlJornadas4 = "SELECT * FROM jornadas WHERE jornada=4 ORDER BY ident;";
// make query and get result
$resultJornadas4 = mysqli_query($conn, $sqlJornadas4);
// fetch the resulting rows as an array
$jornada4 = mysqli_fetch_all($resultJornadas4, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas4);

// write query for all rows
$sqlJornadas5 = "SELECT * FROM jornadas WHERE jornada=5 ORDER BY ident;";
// make query and get result
$resultJornadas5 = mysqli_query($conn, $sqlJornadas5);
// fetch the resulting rows as an array
$jornada5 = mysqli_fetch_all($resultJornadas5, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas5);

// write query for all rows
$sqlJornadas6 = "SELECT * FROM jornadas WHERE jornada=6 ORDER BY ident;";
// make query and get result
$resultJornadas6 = mysqli_query($conn, $sqlJornadas6);
// fetch the resulting rows as an array
$jornada6 = mysqli_fetch_all($resultJornadas6, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas6);

// write query for all rows
$sqlJornadas7 = "SELECT * FROM jornadas WHERE jornada=7 ORDER BY ident;";
// make query and get result
$resultJornadas7 = mysqli_query($conn, $sqlJornadas7);
// fetch the resulting rows as an array
$jornada7 = mysqli_fetch_all($resultJornadas7, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas7);

// write query for all rows
$sqlJornadas8 = "SELECT * FROM jornadas WHERE jornada=8 ORDER BY ident;";
// make query and get result
$resultJornadas8 = mysqli_query($conn, $sqlJornadas8);
// fetch the resulting rows as an array
$jornada8 = mysqli_fetch_all($resultJornadas8, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas8);

// write query for all rows
$sqlJornadas9 = "SELECT * FROM jornadas WHERE jornada=9 ORDER BY ident;";
// make query and get result
$resultJornadas9 = mysqli_query($conn, $sqlJornadas9);
// fetch the resulting rows as an array
$jornada9 = mysqli_fetch_all($resultJornadas9, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas9);

// write query for all rows
$sqlJornadas10 = "SELECT * FROM jornadas WHERE jornada=10 ORDER BY ident;";
// make query and get result
$resultJornadas10 = mysqli_query($conn, $sqlJornadas10);
// fetch the resulting rows as an array
$jornada10 = mysqli_fetch_all($resultJornadas10, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas10);

// write query for all rows
$sqlJornadas11 = "SELECT * FROM jornadas WHERE jornada=11 ORDER BY ident;";
// make query and get result
$resultJornadas11 = mysqli_query($conn, $sqlJornadas11);
// fetch the resulting rows as an array
$jornada11 = mysqli_fetch_all($resultJornadas11, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultJornadas11);

//print_r($tabla);

?>

<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/template_principal.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta charset="UTF-8">
	
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Jornadas</title>
	<!-- InstanceEndEditable -->
	
	<!-- Icon on top -->
	<link rel="icon" type="image/png" href="../img/logos/icon.png">
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
	
	<!-- Font Awesome icons -->
	<script src="https://kit.fontawesome.com/d0207fe0f1.js" crossorigin="anonymous"></script>
	
	<style>
		.principal {
			background-color: #F5F5F5;
		}
		
		.principal:hover {
			background-color: #D7D7D7;
		}
	</style>
	
	<!-- InstanceBeginEditable name="head" -->
	<script type="text/javascript" src="../js/jornadas.js"></script>
	
	<style>
	
		td:nth-child(2n) {
			background-color: #D0D0D0;
		}
		
	</style>
	<!-- InstanceEndEditable -->
</head>

<body style="background-color: #D4D8DC">
	
	<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
		<div class="container-fluid">
		  <a class="navbar-brand" href="../index.html">
				<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55"> 
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end justify-content-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">
						<a href="../index.html">
							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">
						</a>
					</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end text-center flex-grow-1">
						<li class="nav-item dropdown border rounded-3 me-3 principal">
							<a class="nav-link dropdown-toggle w-100" href="#" role="button" data-bs-toggle="dropdown">
								<i class="fas fa-futbol" style="color: #7B7B7B"></i> Torneo
							</a>
							<!-- InstanceBeginEditable name="dropdown nav" -->
							<ul class="dropdown-menu dropdown-menu-end text-center">
								<li><h5 class="dropdown-header">Temporada Ene-Jun '22</h5></li>
								<li><a class="dropdown-item border-bottom" href="../index_torneo.html"><strong>Inicio</strong></a></li>
								<li><a class="dropdown-item border-bottom" href="tabla.php">Tabla general</a></li>
								<li><a class="dropdown-item border-bottom" href="goleo.php">Goleo</a></li>
								<li><a class="dropdown-item border-bottom" href="tarjetas.php">Tarjetas</a></li>
								<li><a class="dropdown-item border-bottom active" href="jornadas.php">Jornadas</a></li>
								<li><a class="dropdown-item" href="fotos.html">Fotos</a></li>
							</ul>
							<!-- InstanceEndEditable -->
						</li>
						<br>
						<li class="nav-item border rounded-3 me-3 principal">
						  <a class="nav-link" href="../beneficios.html">
								<i class="fas fa-donate" style="color: #7B7B7B"></i> Beneficios
							</a>
						</li>
						<br>
						<li class="nav-item border rounded-3 me-3 principal">
						  <a class="nav-link" href="../eventos.html">
								<i class="fas fa-calendar-check" style="color: #7B7B7B"></i> Eventos
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<div style="margin-top: 81px">
		
		<!-- InstanceBeginEditable name="content" -->
		
		<div class="container pt-4">
			
			<!-- Breadcrumb -->
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.html">Inicio </a></li>
				<li class="breadcrumb-item"><a href="../index_torneo.html">Torneo</a></li>
				<li class="breadcrumb-item active">Jornadas</li>
			</ul>
			
			<!-- Jornada y fecha -->
			<div class="p-3">
				<h2 class="display-4"><strong>Jornada <?php echo htmlspecialchars($jornadaEq1[0]['jor']) ?></strong></h2>
				<h2 class="display-6"><?php echo htmlspecialchars($jornadaEq1[0]['fecha']) ?> <i class="far fa-calendar-alt"></i></h2>
			</div>
			
			
			<!-- Comienzan tarjetas partidos -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
			
				<!-- Card #1 -->
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-primary text-white text-center">
							<strong><big>Cancha 1 <br> 7:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[0]['img_path']) ?>" class="w-100" alt="" id="camisa_1a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[0]['img_path']) ?>" class="w-100" alt="" id="camisa_1b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[0]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[0]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#partido1" onClick="mostrarNombres(1, 'lista_1a', 'lista_1b', 'camisa_1a', 'camisa_1b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido1" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_1a">
											
										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_1b">
											
										</ul>
									</div>
								</div>


							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>

				<!-- Card #2 -->		
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-primary text-white text-center">
							<strong><big>Cancha 2 <br> 7:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[1]['img_path']) ?>" class="w-100" alt="" id="camisa_2a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[1]['img_path']) ?>" class="w-100" alt="" id="camisa_2b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[1]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[1]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#partido2" onClick="mostrarNombres(2, 'lista_2a', 'lista_2b', 'camisa_2a', 'camisa_2b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido2" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_2a">
											
										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_2b">

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>

				<!-- Card #3 -->	
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-danger text-white text-center">
							<strong><big>Cancha 1 <br> 8:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[2]['img_path']) ?>" class="w-100" alt="" id="camisa_3a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[2]['img_path']) ?>" class="w-100" alt="" id="camisa_3b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[2]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[2]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-danger" data-bs-toggle="collapse" data-bs-target="#partido3" onClick="mostrarNombres(3, 'lista_3a', 'lista_3b', 'camisa_3a', 'camisa_3b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido3" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_3a">
											
										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_3b">

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>

				<!-- Card #4 -->
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-danger text-white text-center">
							<strong><big>Cancha 2 <br> 8:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[3]['img_path']) ?>" class="w-100" alt="" id="camisa_4a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[3]['img_path']) ?>" class="w-100" alt="" id="camisa_4b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[3]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[3]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-danger" data-bs-toggle="collapse" data-bs-target="#partido4" onClick="mostrarNombres(4, 'lista_4a', 'lista_4b', 'camisa_4a', 'camisa_4b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido4" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_4a">

										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_4b">

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>

				<!-- Card #5 -->
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-success text-white text-center">
							<strong><big>Cancha 1 <br> 9:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[4]['img_path']) ?>" class="w-100" alt="" id="camisa_5a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[4]['img_path']) ?>" class="w-100" alt="" id="camisa_5b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[4]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[4]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#partido5" onClick="mostrarNombres(5, 'lista_5a', 'lista_5b', 'camisa_5a', 'camisa_5b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido5" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_5a">

										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_5b">

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>

				<!-- Card #6 -->		
				<div class="col">
					<div class="card h-100">

						<!-- Header -->
						<div class="card-header bg-success text-white text-center">
							<strong><big>Cancha 2 <br> 9:30pm</big></strong>
						</div>

						<!-- Body -->
						<div class="card-body">

							<!-- Camisas -->
							<div class="d-flex">
								<!-- Equipo #1 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq1[5]['img_path']) ?>" class="w-100" alt="" id="camisa_6a"><br>
								</div>
								<!-- VS. -->
								<div class="p-2  text-center align-self-center">
									<strong>vs.</strong>
								</div>
								<!-- Equipo #2 -->
								<div class="p-2  text-center flex-grow-1">
									<img src="../img/camisasJornada/<?php echo htmlspecialchars($jornadaEq2[5]['img_path']) ?>" class="w-100" alt="" id="camisa_6b"><br>
								</div>
							</div>

							<!-- Equipos -->
							<!--<div class="row mx-1 mb-2">
								<div class="col-6 text-center ">
									<strong><big>Cerounos</big></strong>
								</div>

								<div class="col-6 text-center ">
									<strong><big>Fuente Ovejuna</big></strong>
								</div>
							</div>-->

							<!-- Posiciones -->
							<div class="row mx-1 border-top border-bottom py-2">
								<!-- equipo #1 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq1[5]['posicion']) ?>º Lugar</span>
								</div>
								<!-- equipo #2 -->
								<div class="col-6 text-center">
									<span class="text-warning"><?php echo htmlspecialchars($jornadaEq2[5]['posicion']) ?>º Lugar</span>
								</div>
							</div>

							<br>

							<!-- Dropdown btn -->
							<div class="text-center">
								<button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#partido6" onClick="mostrarNombres(6, 'lista_6a', 'lista_6b', 'camisa_6a', 'camisa_6b')">
									Ver detalles <i class="fas fa-caret-down"></i>
								</button>
							</div>
							<!-- Dropdown info -->
							<div id="partido6" class="collapse">

								<br>
								<div class="row">
									<div class="col-6 text-left">
										<!-- Jugadores eq #1 -->
										<ul class="list-group list-group-flush" id="lista_6a">

										</ul>
									</div>
									<div class="col-6 text-end">
										<!-- Jugadores eq #2 -->
										<ul class="list-group list-group-flush" id="lista_6b">

										</ul>
									</div>
								</div>

							</div>

						</div>

						<!--<div class="card-footer">Footer</div>-->

					</div>
				</div>
					
			</div>
			
			
			<!-- Titulo Jornadas Anteriores -->
			<div class="p-3 mt-4">
				<h2 class="display-4"><strong>Jornadas Anteriores</strong></h2>
			</div>
			
			<!-- Jornada Anteriores MENU -->			
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				
				<!-- J1 -->
				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#j1">J1</a>
				</li>
				
				<!-- J2 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j2">J2</a>
				</li>
				
				<!-- J3 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j3">J3</a>
				</li>
				
				<!-- J4 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j4">J4</a>
				</li>
				
				<!-- J5 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j5">J5</a>
				</li>
				
				<!-- J6 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j6">J6</a>
				</li>
				
				<!-- J7 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j7">J7</a>
				</li>
				
				<!-- J8 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j8">J8</a>
				</li>
				
				<!-- J9 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j9">J9</a>
				</li>
				
				<!-- J10 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j10">J10</a>
				</li>
				
				<!-- J11 -->
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#j11">J11</a>
				</li>
				
			</ul>

			<!-- Jornadas Anteriores CONTENIDO -->
			<!-- Tab panes -->
			<div class="tab-content border-bottom border-start border-end bg-light p-2">
				
				<!-- J1 -->
				<div id="j1" class="container tab-pane active"><br>
					
					<h3 class="display-6 px-5">Jornada 1</h3>
                    <h4 class="px-5"><?php echo htmlspecialchars($jornada1[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada1 as $j1){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j1['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j1['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j1['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j1['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J2 -->
				<div id="j2" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 2</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada2[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada2 as $j2){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j2['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j2['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j2['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j2['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				
				</div>
				
				<!-- J3 -->
				<div id="j3" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 3</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada3[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada3 as $j3){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j3['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j3['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j3['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j3['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J4 -->
				<div id="j4" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 4</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada4[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada4 as $j4){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j4['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j4['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j4['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j4['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J5 -->
				<div id="j5" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 5</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada5[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada5 as $j5){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j5['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j5['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j5['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j5['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>

                <!-- J6 -->
				<div id="j6" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 6</h3>
                    <h4 class="px-5"><?php echo htmlspecialchars($jornada6[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada6 as $j6){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j6['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j6['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j6['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j6['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J7 -->
				<div id="j7" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 7</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada7[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada7 as $j7){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j7['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j7['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j7['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j7['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				
				</div>
				
				<!-- J8 -->
				<div id="j8" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 8</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada8[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada8 as $j8){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j8['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j8['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j8['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j8['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J8 -->
				<div id="j8" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 8</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada8[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada8 as $j8){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j8['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j8['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j8['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j8['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J9 -->
				<div id="j9" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 9</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada9[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada9 as $j9){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j9['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j9['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j9['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j9['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>

                <!-- J10 -->
				<div id="j10" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 10</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada10[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada10 as $j10){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j10['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j10['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j10['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j10['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
				<!-- J11 -->
				<div id="j11" class="container tab-pane fade"><br>
					
					<h3 class="display-6 px-5">Jornada 11</h3>
					<h4 class="px-5"><?php echo htmlspecialchars($jornada11[0]['fecha']) ?></h4>
					
					<br>
					<table class="table text-center" style="width: 97%; margin: auto;">

						<!-- Body -->
						<tbody>
							
							<tr class="bg-secondary text-white">
								<th colspan="5" scope="col">Resultados</th>
							</tr>

                            <?php foreach($jornada11 as $j11){ ?>

							<tr>
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j11['eq1']) ?></td>	
								<td class="align-middle"><?php echo htmlspecialchars($j11['res_eq1']) ?></td> 		
								<td class="align-middle">vs.</td> 	
								<td class="align-middle"><?php echo htmlspecialchars($j11['res_eq2']) ?></td> 
								<td class="align-middle" style="width: 40%"><?php echo htmlspecialchars($j11['eq2']) ?></td>
							</tr>

                            <?php } ?>

						</tbody>

					</table>

					<br>

					<!-- Info abajo de la tabla -->
					<div class="row">

						<div class="col-12 col-sm-8">

						</div>

						<div class="d-none d-sm-block col-sm-4 text-center">

							<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">

						</div>

					</div>
					
				</div>
				
			</div>
			
		</div>
			 
		
	  <!-- InstanceEndEditable -->
		
		<!-- InstanceBeginEditable name="Footer" -->
		
		<div class="container-fluid bg-light mt-5 px-0">
			
			<div class="row px-0 mx-0">
				
				<div class="col-12 col-md-4 text-center text-secondary py-4">
					<h3>Coordinador:</h3>
					<h6>Miguel Camacho - 81 1320 4457 <i class="fas fa-phone"></i></h6>
				</div>
				
				<div class="col-12 col-sm-6 col-md-4 text-center text-secondary py-4 border-top border-end border-start">
					<h3>Leer Reglamento</h3>
					<a href="../docs/ReglamentoTorneo2022.pdf" target="_blank" class="btn btn-outline-secondary w-50">
						Reglamento
					</a>
				</div>
				
				<div class="col-12 col-sm-6 col-md-4 text-center text-secondary py-4 border-top">
					<h3>Síguenos en:</h3>
					<a href="https://www.instagram.com/exliceosmty/" target="_blank" class="btn btn-outline-secondary">
						<i class="fa fa-instagram"></i> Instagram
					</a>
				</div>
				
			</div>
			
		</div>
		
		<!-- InstanceEndEditable -->
		
</div>
	
</body>
<!-- InstanceEnd --></html>
