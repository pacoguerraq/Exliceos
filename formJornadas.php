<?php

include "conn.php";

// write query for all rows
$sql = "SELECT * FROM tabla_general ORDER BY posicion ASC";

// make query and get result
$resultTabla = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$tabla = mysqli_fetch_all($resultTabla, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($resultTabla);

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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Jornadas</title>

    <!-- Icon on top -->
	<link rel="icon" type="image/png" href="img/logos/icon2.png">
	
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
        table input {
            width: 100%;
        }
        input:focus, textarea:focus, select:focus{
            outline: none;
        }
        td:nth-child(2n) {
			background-color: #D0D0D0;
		}
    </style>

    <script>
        function passwordValidation(){
			var pswd = document.getElementById('pswd');
			if(pswd.value == "exliceos2021"){
				pswd.style.border = "2px solid #00FF00";
			}else{
				pswd.style.border = "2px solid #FF0000";
			}
		}

        function enableSubmit(){
            let inputs = document.getElementsByClassName('req');
            let btn = document.getElementById('envio');
            let pswd = document.getElementById('pswd');
            let isValid = true;

            for (var i = 0; i < inputs.length; i++){
                let changedInput = inputs[i];
                if (changedInput.value.trim() === "" || changedInput.value === null || pswd.value != "exliceos2021"){
                    isValid = false;
                break;
                }
            }
            btn.disabled = !isValid;
        }
    </script>

</head>

<body style="background-color: #D4D8DC">

    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="../index.html">
				<img src="img/logos/logoExliceos.png" alt="Logo exliceos" height="55"> 
			</a>
			<span class="navbar-text d-none d-sm-block">
				<h4>Admin Torneo</h4> 
			</span>
		</div>
	</nav>
	
	<div style="margin-top: 81px">
    
        <div class="container pt-4">

            <!-- Breadcrumb -->
            <ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="adminTorneo.html">Admin</a></li>
				<li class="breadcrumb-item active">Actualizar Jornada</li>
			</ul>
            
            <!-- Titulo y descripcion -->
            <div class="p-3">
                <h2 class="display-4"><strong>Actualizar Jornada</strong></h2>
                <h2 class="display-6">Llena los datos de cada partido y verifica que todo este correcto en la información de abajo</h2>
            </div>

            <?php

                /*$sql = "SELECT * FROM tabla_general;";
                $result = mysqli_query($conn, $sql);
                $result_check = mysqli_num_rows($result);
                
                if ($result_check > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['nombre_equipo'] . "<br>";
                    }
                }*/

            ?>

            <!-- Jumbotron Titulo y Logo -->
            <div class="row p-3 bg-danger rounded-3 mb-4 mx-1 w-75 mx-auto">
                   
                <div class="text-center">
                    <span class="display-4 text-white">IMPORTANTE:</span>
                </div>

                    
                <div class="w-75 mx-auto">
                    <ul class="text-white">
                        <li>Si vas a publicar la <strong>jornada próxima</strong>, pon un guión (-) en los goles de cada equipo, y da click en la casilla que se encuentra al final.</li>
                        <li>Si vas a publicar los <strong>resultados de la jornada pasada</strong>, pon el numero normal, y NO des click en la casilla que se encuentra al final.</li>
                    </ul>
                </div>
                
            </div>

            <!-- Form -->
            <div class="card p-3 my-4 text-center">

                <form action="" method="POST">

                <label for="jornada">Jornada:</label>
                <select id="jornada" name="jornada">
                    <option value="1">Jornada 1</option>
                    <option value="2">Jornada 2</option>
                    <option value="3">Jornada 3</option>
                    <option value="4">Jornada 4</option>
                    <option value="5">Jornada 5</option>
                    <option value="6">Jornada 6</option>
                    <option value="7">Jornada 7</option>
                    <option value="8">Jornada 8</option>
                    <option value="9">Jornada 9</option>
                    <option value="10">Jornada 10</option>
                    <option value="11">Jornada 11</option>
                </select>

                <br>

                <label for="fecha">Fecha:</label>
                <input type="text" name="fecha" id="fecha" placeholder="dd / mes / aaaa" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>

                <br>
					
                <table class="table table-bordered text-center my-3"  style="width: 75%; margin: auto;">

                    <!-- Body -->
                    <tbody>
                        
                        <tr class="bg-secondary text-white">
                            <th colspan="5" scope="col">7:30 PM</th>
                        </tr>

                        <!-- 7:30 Partido #1 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_1a" name="equipo1_1a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_1a" id="goles1_1a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_1a" id="goles2_1a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_1a" name="equipo2_1a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <!-- 7:30 Partido #2 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_1b" name="equipo1_1b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_1b" id="goles1_1b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_1b" id="goles2_1b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_1b" name="equipo2_1b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>
                        
                        <tr class="bg-secondary text-white">
                            <th colspan="5" scope="col">8:30 PM</th>
                        </tr>

                        <!-- 8:30 Partido #1 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_2a" name="equipo1_2a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_2a" id="goles1_2a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_2a" id="goles2_2a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_2a" name="equipo2_2a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <!-- 8:30 Partido #2 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_2b" name="equipo1_2b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_2b" id="goles1_2b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_2b" id="goles2_2b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_2b" name="equipo2_2b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>
                        
                        <tr class="bg-secondary text-white">
                            <th colspan="5" scope="col">9:30 PM</th>
                        </tr>

                        <!-- 9:30 Partido #1 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_3a" name="equipo1_3a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_3a" id="goles1_3a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_3a" id="goles2_3a" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_3a" name="equipo2_3a">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <!-- 9:30 Partido #2 -->
                        <tr>
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo1_3b" name="equipo1_3b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles1_3b" id="goles1_3b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 		
                            <td class="align-middle">vs.</td> 	
                            <td class="align-middle">
                                <input type="text" class="req" name="goles2_3b" id="goles2_3b" placeholder="Goles" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> 
                            <td class="align-middle" style="width: 40%">
                                <select id="equipo2_3b" name="equipo2_3b">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
                        </tr>


                    </tbody>

                </table>

                <br>

                <label for="check">Publicar en la jornada actual? </label>
                <input type="checkbox" id="check" name="checkJornada"><br>

                <br>

                <input type="password" name="pswd" id="pswd" placeholder="Password" onkeyup='enableSubmit(); passwordValidation()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>

                <br><br>

                <input type="submit" name="update" value="Update data" id="envio" disabled>

                </form>

            </div>

            <!-- Jornada y fecha -->
			<div class="p-3">
				<h2 class="display-4"><strong>Jornada <?php echo htmlspecialchars($jornadaEq1[0]['jor']) ?></strong></h2>
				<h2 class="display-6"><?php echo htmlspecialchars($jornadaEq1[0]['fecha']) ?> <i class="far fa-calendar-alt"></i></h2>
			</div>
			
			
			<!-- Comienzan tarjetas partidos -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
			
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
			<div class="tab-content border-bottom border-start border-end bg-light p-2 mb-5">
				
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

    </div>

</body>

</html>

<?php

if (isset($_POST['update'])) {
    $jornada = $_POST['jornada'];
    $fecha = $_POST['fecha'];

    $equipo1_1a = $_POST['equipo1_1a'];
    $goles1_1a = $_POST['goles1_1a'];
    $goles2_1a = $_POST['goles2_1a'];
    $equipo2_1a = $_POST['equipo2_1a'];

    $equipo1_1b = $_POST['equipo1_1b'];
    $goles1_1b = $_POST['goles1_1b'];
    $goles2_1b = $_POST['goles2_1b'];
    $equipo2_1b = $_POST['equipo2_1b'];

    $equipo1_2a = $_POST['equipo1_2a'];
    $goles1_2a = $_POST['goles1_2a'];
    $goles2_2a = $_POST['goles2_2a'];
    $equipo2_2a = $_POST['equipo2_2a'];

    $equipo1_2b = $_POST['equipo1_2b'];
    $goles1_2b = $_POST['goles1_2b'];
    $goles2_2b = $_POST['goles2_2b'];
    $equipo2_2b = $_POST['equipo2_2b'];

    $equipo1_3a = $_POST['equipo1_3a'];
    $goles1_3a = $_POST['goles1_3a'];
    $goles2_3a = $_POST['goles2_3a'];
    $equipo2_3a = $_POST['equipo2_3a'];

    $equipo1_3b = $_POST['equipo1_3b'];
    $goles1_3b = $_POST['goles1_3b'];
    $goles2_3b = $_POST['goles2_3b'];
    $equipo2_3b = $_POST['equipo2_3b'];

    
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('$equipo', $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $PTS, '$img_path', $posicion);";
    $sql = "UPDATE jornadas SET eq1='$equipo1_1a', eq2='$equipo2_1a', res_eq1='$goles1_1a', res_eq2='$goles2_1a', fecha='$fecha' WHERE jornada=$jornada AND ident='1a';";
    mysqli_query($conn, $sql);
    $sql = "UPDATE jornadas SET eq1='$equipo1_1b', eq2='$equipo2_1b', res_eq1='$goles1_1b', res_eq2='$goles2_1b', fecha='$fecha' WHERE jornada=$jornada AND ident='1b';";
    mysqli_query($conn, $sql);
    $sql = "UPDATE jornadas SET eq1='$equipo1_2a', eq2='$equipo2_2a', res_eq1='$goles1_2a', res_eq2='$goles2_2a', fecha='$fecha' WHERE jornada=$jornada AND ident='2a';";
    mysqli_query($conn, $sql);
    $sql = "UPDATE jornadas SET eq1='$equipo1_2b', eq2='$equipo2_2b', res_eq1='$goles1_2b', res_eq2='$goles2_2b', fecha='$fecha' WHERE jornada=$jornada AND ident='2b';";
    mysqli_query($conn, $sql);
    $sql = "UPDATE jornadas SET eq1='$equipo1_3a', eq2='$equipo2_3a', res_eq1='$goles1_3a', res_eq2='$goles2_3a', fecha='$fecha' WHERE jornada=$jornada AND ident='3a';";
    mysqli_query($conn, $sql);
    $sql = "UPDATE jornadas SET eq1='$equipo1_3b', eq2='$equipo2_3b', res_eq1='$goles1_3b', res_eq2='$goles2_3b', fecha='$fecha' WHERE jornada=$jornada AND ident='3b';";
    $exito = mysqli_query($conn, $sql);
    //$sql = "SELECT * FROM tabla_general ORDER BY posicion);";
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('Gol Osos', 1,2,3,4,5,6,7,8,'infoGolosos.png',3)";

    if (isset($_POST['checkJornada'])) {
        // Publicar tambien en jornada actual
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_1a', eq2='$equipo2_1a', fecha='$fecha' WHERE ident='1a';";
        mysqli_query($conn, $sql);
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_1b', eq2='$equipo2_1b', fecha='$fecha' WHERE ident='1b';";
        mysqli_query($conn, $sql);
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_2a', eq2='$equipo2_2a', fecha='$fecha' WHERE ident='2a';";
        mysqli_query($conn, $sql);
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_2b', eq2='$equipo2_2b', fecha='$fecha' WHERE ident='2b';";
        mysqli_query($conn, $sql);
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_3a', eq2='$equipo2_3a', fecha='$fecha' WHERE ident='3a';";
        mysqli_query($conn, $sql);
        $sql = "UPDATE jornadaActual SET jor='$jornada', eq1='$equipo1_3b', eq2='$equipo2_3b', fecha='$fecha' WHERE ident='3b';";
        $exito = mysqli_query($conn, $sql);

    } else {
       // No publicar en jornda actual

    }

    if ($exito) {
		echo "<meta http-equiv='refresh' content='0'>";
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
        //echo "New record created successfully";
    } else {
        //echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// close connection
mysqli_close($conn);

?>