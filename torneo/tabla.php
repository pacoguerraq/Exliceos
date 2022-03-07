<?php

include "../conn.php";

// write query for all rows
$sql = "SELECT * FROM tabla_general ORDER BY posicion ASC";

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$tabla = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

//print_r($tabla);

?>

<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/template_principal.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta charset="UTF-8">
	
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Tabla</title>
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
								<li><a class="dropdown-item border-bottom active" href="tabla.php">Tabla general</a></li>
								<li><a class="dropdown-item border-bottom" href="goleo.php">Goleo</a></li>
								<li><a class="dropdown-item border-bottom" href="tarjetas.php">Tarjetas</a></li>
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
			
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
				<li class="breadcrumb-item"><a href="../index_torneo.html">Torneo</a></li>
				<li class="breadcrumb-item active">Tabla general</li>
			</ul>
			
			<div class="p-3">
				<h2 class="display-4"><strong>Tabla General</strong></h2>
				<!--<h2 class="display-6">Jornada 5</h2>-->
			</div>
			
			<div class="card py-3">
				<table class="table text-center" style="width: 90%; margin: auto;">
					<!-- Heading -->
					<thead>
						<!-- Heading #1 -->
						<tr>
							<td colspan="2"></td>
							<td colspan="4" class="border">Partidos</td>
							<td colspan="3" class="border d-none d-sm-table-cell">Goles</td>
							<td></td>
						</tr>
						<!-- Heading #2 -->
						<tr class="bg-secondary text-white">
							<th scope="col">#</th>
							<th scope="col">Equipo</th>
							<th scope="col" class="border-start">PJ</th>
							<th scope="col">PG</th>
							<th scope="col">PE</th>
							<th scope="col" class="border-end">PP</th>
							<th scope="col" class="d-none d-sm-table-cell">GF</th>
							<th scope="col" class="d-none d-sm-table-cell">GC</th>
							<th scope="col" class="d-none d-sm-table-cell border-end">DG</th>
							<th scope="col">PTS</th>
						</tr>
					</thead>
					
					<!-- Body -->
					<tbody>
						
                        <!-- Posiciones -->
                        <?php foreach($tabla as $equipo){ ?>

                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($equipo['posicion']) ?></th>
                            <!-- Equipo -->
                            <td><strong><?php echo htmlspecialchars($equipo['nombre_equipo']) ?></strong></td>
                            <!-- Partidos -->
                            <td class="border-start"><?php echo htmlspecialchars($equipo['PJ']) ?></td> <!-- PJ -->
                            <td><?php echo htmlspecialchars($equipo['PG']) ?></td> <!-- PG -->
                            <td><?php echo htmlspecialchars($equipo['PE']) ?></td> <!-- PE -->
                            <td class="border-end"><?php echo htmlspecialchars($equipo['PP']) ?></td> <!-- PP -->
                            <!-- Goles -->
                            <td class="d-none d-sm-table-cell"><?php echo htmlspecialchars($equipo['GF']) ?></td> <!-- GF -->
                            <td class="d-none d-sm-table-cell"><?php echo htmlspecialchars($equipo['GC']) ?></td> <!-- GC -->
                            <td class="d-none d-sm-table-cell border-end"><?php echo htmlspecialchars($equipo['DG']) ?></td> <!-- DG -->
                            <!-- Puntos -->
                            <td><?php echo htmlspecialchars($equipo['PTS']) ?></td>
                        </tr>

                        <?php } ?>

					</tbody>
				</table>
				
				<br>
				
				<!-- Info abajo de la tabla -->
				<div class="row">
					
					<div class="col-12 col-sm-8">
						
						<p class="text-secondary" style="width: 90%; margin: auto;">
							PJ = Jugados, PG = Ganados, PP = Perdidos, PE = Empatados
							<br>
							<span class="d-none d-sm-block">GF = A favor, GC = En contra, DF = Diferencia</span>
						</p>
						
					</div>
					
					<div class="d-none d-sm-block col-sm-4 text-center">
						
						<img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">
						
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
<!-- InstanceEnd -->

</html>

<?php

// close connection
mysqli_close($conn);

?>
