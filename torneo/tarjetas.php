<?php

include "../conn.php";

// write query for all rows
$sqlTarjetas = "SELECT * FROM tarjetas ORDER BY jorOut";
// make query and get result
$resultTarjetas = mysqli_query($conn, $sqlTarjetas);
// fetch the resulting rows as an array
$tarjetas = mysqli_fetch_all($resultTarjetas, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultTarjetas);

?>

<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/template_principal.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta charset="UTF-8">
	
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Tarjetas</title>
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
								<li><a class="dropdown-item border-bottom active" href="tarjetas.php">Tarjetas</a></li>
								<li><a class="dropdown-item border-bottom" href="jornadas.php">Jornadas</a></li>
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
				<li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
				<li class="breadcrumb-item"><a href="../index_torneo.html">Torneo</a></li>
				<li class="breadcrumb-item active">Tarjetas</li>
			</ul>
			
			<!-- Titulo y fecha -->
			<div class="p-3">
				<h2 class="display-4"><strong>Tarjetas</strong></h2>
				<!--<h2 class="display-6">Jornada 5 <i class="far fa-calendar-alt"></i></h2>-->
			</div>  
			
			
			<!-- Tabla Expulsiones -->
			<div class="card py-4">
				<h3 class="display-6 px-5">Expulsiones <i class="fas fa-square" style="color: #FF0000"></i></h3>
					
				<br>
				<table class="table text-center" style="width: 90%; margin: auto;">
					
					<!-- Heading -->
					<thead>
						<tr class="bg-secondary text-white">
							<th scope="col">Jugador</th>
							<th scope="col">Equipo</th>
							<th scope="col">EXP</th>
							<th scope="col">OUT</th>
						</tr>
					</thead>
					
					<!-- Body -->
					<tbody>

                        <!-- Lista expulsados -->
                        <?php foreach($tarjetas as $expulsado){ ?>

                        <tr>
                            <td><?php echo htmlspecialchars($expulsado['jugador']) ?></td>	    <!-- Jugador -->
                            <td><?php echo htmlspecialchars($expulsado['equipo']) ?></td> 	<!-- Equipo -->
                            <td><?php echo htmlspecialchars($expulsado['jorExp']) ?></td> 		<!-- exp -->
                            <td><?php echo htmlspecialchars($expulsado['jorOut']) ?></td> 		<!-- out -->
                        </tr>

                        <?php } ?>
						
					</tbody>
				</table>
				
				<br>
				
				<!-- Info abajo de la tabla -->
				<div class="row">
					
					<div class="col-12 col-sm-8">
						
						<p class="text-secondary" style="width: 90%; margin: auto;">
							EXP = Jornada en que fue expulsado
							<br>
							OUT = Jornadas que se perder??
						</p>
						
					</div>
					
					<div class="d-none d-sm-block col-sm-4 text-center">
						
						<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">
						
					</div>
					
				</div>
				
			</div>
			
			<!-- Tabla Tarjetas Equipos -->
			<!--<div class="card py-4 mt-5">
				<h3 class="display-6 px-5">Faltas por equipos</h3>
					
				<br>
				<table class="table table-bordered text-center" style="width: 90%; margin: auto;">
					
					<thead>
						<tr class="bg-secondary text-white">
							<th scope="col">Equipo</th>
							<th scope="col">Faltas</th>
							<th scope="col"> <i class="fas fa-square" style="color: #FFF700"></i></th>
						</tr>
					</thead>
					
					<tbody>
						
						<tr>
							<td>Fuente Ovejuna F.C.</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Close Friends F.C.</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Vikingos F.C.</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Stacy F.C.</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Leyendas</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Cerounos F.C.</td> 			
							<td>-</td> 				
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>La Raza</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Leones F.C.</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Atl??tico San Pancho</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Gal??cticos</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>Gol Osos</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
						<tr>
							<td>El Equipe</td> 	
							<td>-</td> 		
							<td class="bg-warning">-</td> 	
						</tr>
						
					</tbody>
				</table>
				
				<br>
				
				<div class="row">
					
					<div class="col-12 col-sm-8">
						
						<p class="text-secondary" style="width: 90%; margin: auto;">
							Registro comienza a partir de Jornada 3.
						</p>
						
					</div>
					
					<div class="d-none d-sm-block col-sm-4 text-center">
						
						<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">
						
					</div>
					
				</div>
				
			</div>-->
			
			<!-- Puntos Reglamento -->
			<div class="card mt-5" style="width: 100%; margin: auto;">
				<div class="card-header text-center">
					<big><strong>Punto #10 del reglamento</strong></big>
				</div>
				<div class="card-body">
					<dl>
						<dt>10.1.1 Amarilla</dt>
						<dd>- Un jugador que reciba esta tarjeta estar?? amonestado: En caso de que un jugador sea amonestado dos veces en un mismo encuentro recibir?? una tarjeta roja. <mark>Un jugador que acumule 5 tarjetas amarillas (la acumulaci??n no tiene que ser contin??a) ser?? suspendido la jornada siguiente.</mark></dd>
						
						<dt>10.1.2 Roja</dt>
						<dd>- Expulsi??n del jugador infractor, dejando el equipo en inferioridad num??rica. La sanci??n se determinar?? de acuerdo con el tabulador de sanciones seg??n el reporte arbitral.</dd>
						
						<dt>10.1.2.1</dt>
						<dd><mark>Si un mismo jugador recibe tres tarjetas rojas (directa) en el torneo, quedar?? expulsado del mismo.</mark> Su reincorporaci??n ser?? evaluada por el Comit?? Organizador de exalumnos y el Liceo de Monterrey.</dd>
						
						<dt>10.3 Tabulador de sanciones</dt>
						<img src="../img/tabuladorSanciones.png" class="w-75 d-block mx-auto mx-sm-0" style="max-width: 500px" alt="Tabulador de sanciones">
						
					</dl>
				</div>
				<div class="card-footer text-secondary">
					<em>Consulta los detalles en el <a href="../docs/ReglamentoTorneo2022.pdf" target="_blank">reglamento oficial</a>.</em>
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
					<h3>S??guenos en:</h3>
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
