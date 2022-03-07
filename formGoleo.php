<?php

include "conn.php";

// write query for all rows
$sqlTabla = "SELECT * FROM tabla_general ORDER BY posicion ASC";
// make query and get result
$resultTabla = mysqli_query($conn, $sqlTabla);
// fetch the resulting rows as an array
$tabla = mysqli_fetch_all($resultTabla, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultTabla);

// write query for all rows
$sqlGoleo = "SELECT * FROM goleo ORDER BY goles DESC";
// make query and get result
$resultGoleo = mysqli_query($conn, $sqlGoleo);
// fetch the resulting rows as an array
$goleo = mysqli_fetch_all($resultGoleo, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultGoleo);

//print_r($tabla);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Goleo</title>

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

        function enableSubmitExistente(){
            let inputs = document.getElementsByClassName('req1');
            let btn = document.getElementById('envio1');
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

        function enableSubmitNuevo(){
            let inputs = document.getElementsByClassName('req2');
            let btn = document.getElementById('envio2');
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

            <!-- Actualizar tabla -->
            <ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="adminTorneo.html">Admin</a></li>
				<li class="breadcrumb-item active">Actualizar Goleo</li>
			</ul>
            
            <!-- Titulo y descripcion -->
            <div class="p-3">
                <h2 class="display-4"><strong>Actualizar Goleo</strong></h2>
                <h2 class="display-6">Registra los goles de cada jornada con su respectivo anotador</h2>
            </div>

            <!-- Jumbotron Titulo y Logo -->
            <div class="row p-3 bg-danger rounded-3 mb-4 mx-1 w-75 mx-auto">
                   
                <div class="text-center">
                    <span class="display-4 text-white">IMPORTANTE:</span>
                </div>

                    
                <div class="w-75 mx-auto">
                    <ul class="text-white">
                        <li>Asegurate de que estes ingresando al goleador SOLAMENTE en su apartado correcto y UNO A LA VEZ. Primero buscalo en los <strong>Jugadores Existentes</strong> y si no está, ingresalo como <strong>Jugador Nuevo</strong>.</li>
                        <li>Poner solo <strong>goles de la reciente jornada</strong>, NO el nuevo total.</li>
                        <li><strong>NO USES ACENTOS</strong> en los jugadores nuevos.</li>
                    </ul>
                </div>
                
            </div>

            <!-- Form -->
            <div class="card py-3 mb-4 p-3">

                <div style="width:30%; margin:auto;" class="mt-2 text-center">
                    <label for="pswd">Password:</label>
                    <input type="password" name="pswd" id="pswd" placeholder="Password" onkeyup='enableSubmitExistente(); enableSubmitNuevo(); passwordValidation()' onmousedown='enableSubmitExistente(); enableSubmitNuevo()' oninput='enableSubmitExistente(); enableSubmitNuevo()' required>
                </div>
                    

                <br><br>

                <h3 class="display-5 mx-auto">Jugador existente</h3>

                <table class="table table-bordered text-center mb-3" style="width: 90%; margin: auto;">
                    <!-- Heading -->
                    <thead>
                        <!-- Heading -->
                        <tr class="bg-secondary text-white">
                            <th scope="col">Jugador</th>
                            <th scope="col">Goles</th>
                        </tr>
                    </thead>
                    
                    <!-- Body -->
                    <tbody>
                        
                        <form action="" method="POST">
						<tr>

                            <!-- Jugador -->
                            <td>
                                <select id="nombreExistente" name="nombreExistente">
                                <?php foreach($goleo as $anotador){ 
                                $nombreJug = $anotador['jugador']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreJug) ?>"><?php echo htmlspecialchars($nombreJug) ?></option>
                                <?php } ?>
                                </select>
                            </td>

                            <!-- Goles -->
							<td>
                                <input type="text" class="req1" name="golesExistente" id="golesExistente" placeholder="Goles" onkeyup='enableSubmitExistente()' onmousedown='enableSubmitExistente()' oninput='enableSubmitExistente()' required>
                            </td>

						</tr>

                        <tr>
                            <!-- boton -->
                            <td colspan="2">
                                <input type="submit" name="updateExistente" value="Update data" id="envio1" disabled>
                            </td>
                        </tr>

                        </form>

                    </tbody>
                </table>
                
                <br>

                <h3 class="display-5 mx-auto">Jugador nuevo</h3>

                <table class="table table-bordered text-center" style="width: 90%; margin: auto;">
                    <!-- Heading -->
                    <thead>
                        <!-- Heading -->
                        <tr class="bg-secondary text-white">
                            <th scope="col">Jugador</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Goles</th>
                        </tr>
                    </thead>
                    
                    <!-- Body -->
                    <tbody>
                        
                        <form action="" method="POST">
						<tr>

                            <!-- Jugador -->
							<td>
                                <input type="text" class="req2" name="nombreNuevo" id="nombreNuevo" placeholder="Nombre" onkeyup='enableSubmitNuevo()' onmousedown='enableSubmitNuevo()' oninput='enableSubmitNuevo()' required>
                            </td>

							<!-- Equipo -->
                            <td>
                                <select id="equipoNuevo" name="equipoNuevo">
                                <?php foreach($tabla as $equipo){ 
                                $nombreEq = $equipo['nombre_equipo']; ?>
                                    <option value="<?php echo htmlspecialchars($nombreEq) ?>"><?php echo htmlspecialchars($nombreEq) ?></option>
                                <?php } ?>
                                </select>
                            </td>
							<!--<td>
                                <select id="equipo" name="equipo">
                                    <option value="Fuente Ovejuna F.C.">Fuente Ovejuna F.C.</option>
                                    <option value="Close Friends F.C.">Close Friends F.C.</option>
                                    <option value="Vikingos F.C.">Vikingos F.C.</option>
                                    <option value="Stacy F.C.">Stacy F.C.</option>
                                    <option value="Leyendas">Leyendas</option>
                                    <option value="Cerounos F.C.">Cerounos F.C.</option>
                                    <option value="La Raza">La Raza</option>
                                    <option value="Leones F.C.">Leones F.C.</option>
                                    <option value="Atletico San Pancho">Atlético San Pancho</option>
                                    <option value="Galacticos">Galácticos</option>
                                    <option value="Gol Osos">Gol Osos</option>
                                    <option value="El Equipe">El Equipe</option>
                                </select>
                            </td>-->

                            <!-- Goles -->
							<td>
                                <input type="text" class="req2" name="golesNuevo" id="golesNuevo" placeholder="Goles" onkeyup='enableSubmitNuevo()' onmousedown='enableSubmitNuevo()' oninput='enableSubmitNuevo()' required>
                            </td>

						</tr>

                        <tr>
                            <!-- boton -->
                            <td colspan="3">
                                <input type="submit" name="updateNuevo" value="Update data" id="envio2" disabled>
                            </td>
                        </tr>

                        </form>

                    </tbody>
                </table>
                
                <br>
                
            </div>

            <!-- Tabla -->
            <div class="card py-4 mt-4 mb-5">
                <table class="table table-striped text-center" style="width: 90%; margin: auto;">

                    <thead>
                        <!-- Heading -->
                        <tr class="bg-secondary text-white">
                            <th scope="col">Jugador</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Goles</th>
                        </tr>
                    </thead>
                    
                    <!-- Body -->
                    <tbody>
                        
                        <!-- Posiciones -->
                        <?php foreach($goleo as $anotador){ ?>

						<tr>
							<td><?php echo htmlspecialchars($anotador['jugador']) ?></td>	    <!-- Jugador -->
							<td><?php echo htmlspecialchars($anotador['nom_equipo']) ?></td> 	<!-- Equipo -->
							<td><?php echo htmlspecialchars($anotador['goles']) ?></td> 		<!-- Goles -->
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

</body>

</html>

<?php

if (isset($_POST['updateExistente'])) {
    $nombreExistente = $_POST['nombreExistente'];
    $golesExistente = $_POST['golesExistente'];
    
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('$equipo', $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $PTS, '$img_path', $posicion);";
    //$sql = "UPDATE tabla_general SET PJ=$PJ, PG=$PG, PE=$PE, PP=$PP, GF=$GF, GC=$GC, DG=$DG, PTS=$PTS, posicion=$posicion WHERE nombre_equipo='$equipo';";
    //$sql = "SELECT * FROM tabla_general ORDER BY posicion);";
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('Gol Osos', 1,2,3,4,5,6,7,8,'infoGolosos.png',3)";
    $sql = "UPDATE goleo SET goles=goles+$golesExistente WHERE jugador='$nombreExistente';";

    $exito = mysqli_query($conn, $sql);
	
    if ($exito) {
        echo "<meta http-equiv='refresh' content='0'>";
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
        //echo "New record created successfully";
    } else {
        //echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else if (isset($_POST['updateNuevo'])) {
    $nombreNuevo = $_POST['nombreNuevo'];
    $equipoNuevo = $_POST['equipoNuevo'];
    $golesNuevo = $_POST['golesNuevo'];
    
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('$equipo', $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $PTS, '$img_path', $posicion);";
    //$sql = "UPDATE tabla_general SET PJ=$PJ, PG=$PG, PE=$PE, PP=$PP, GF=$GF, GC=$GC, DG=$DG, PTS=$PTS, posicion=$posicion WHERE nombre_equipo='$equipo';";
    //$sql = "SELECT * FROM tabla_general ORDER BY posicion);";
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('Gol Osos', 1,2,3,4,5,6,7,8,'infoGolosos.png',3)";
    //$sql = "UPDATE goleo SET goles=goles+$golesExistente WHERE jugador=$nombreExistente;";
    $sql = "INSERT INTO goleo (jugador, nom_equipo, goles) VALUES ('$nombreNuevo', '$equipoNuevo', $golesNuevo);";

    $exito = mysqli_query($conn, $sql);
	
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