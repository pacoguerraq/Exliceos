<?php

include "conn.php";

// write query for all rows
$sqlTarjetas = "SELECT * FROM tarjetas ORDER BY jorOut";
// make query and get result
$resultTarjetas = mysqli_query($conn, $sqlTarjetas);
// fetch the resulting rows as an array
$tarjetas = mysqli_fetch_all($resultTarjetas, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultTarjetas);

// write query for all rows
$sqlTabla = "SELECT * FROM tabla_general ORDER BY posicion ASC";
// make query and get result
$resultTabla = mysqli_query($conn, $sqlTabla);
// fetch the resulting rows as an array
$tabla = mysqli_fetch_all($resultTabla, MYSQLI_ASSOC);
// free result from memory
mysqli_free_result($resultTabla);

//print_r($tabla);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Tarjetas</title>

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

            <!-- Actualizar tabla -->
            <ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="adminTorneo.html">Admin</a></li>
				<li class="breadcrumb-item active">Actualizar Tarjetas</li>
			</ul>
            
            <!-- Titulo y descripcion -->
            <div class="p-3">
                <h2 class="display-4"><strong>Actualizar Tarjetas</strong></h2>
                <h2 class="display-6">Llena los datos del jugador expulsado</h2>
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

            <!-- Form -->
            <div class="card py-4 mb-4">
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

                        <!-- Ejemplo -->
						<tr class="text-muted">
							<td>Jugador Ejemplo</td> 		<!-- Jugador -->
							<td>Equipo Ejemplo</td> 				<!-- Equipo -->
							<td>J2</td> 					<!-- EXP -->
							<td>J3</td> 					<!-- OUT -->
						</tr>
                        
                        <form action="" method="POST">
						<tr>

                            <!-- Jugador -->
							<td>
                                <input type="text" class="req" name="nomJug" id="nomJug" placeholder="Jugador" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td>

							<!-- Equipo -->
                            <td>
                                <select id="equipo" name="equipo">
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

                            <!-- Exp -->
                            <td>
                                <select id="jorExp" name="jorExp">
                                    <option value="J1">J1</option>
                                    <option value="J2">J2</option>
                                    <option value="J3">J3</option>
                                    <option value="J4">J4</option>
                                    <option value="J5">J5</option>
                                    <option value="J6">J6</option>
                                    <option value="J7">J7</option>
                                    <option value="J8">J8</option>
                                    <option value="J9">J9</option>
                                    <option value="J10">J10</option>
                                    <option value="J11">J11</option>
                                </select>
                            </td>

                            <!-- Out -->
							<td>
                                <select id="jorOut" name="jorOut">
                                    <option value="J1">J1</option>
                                    <option value="J2">J2</option>
                                    <option value="J3">J3</option>
                                    <option value="J4">J4</option>
                                    <option value="J5">J5</option>
                                    <option value="J6">J6</option>
                                    <option value="J7">J7</option>
                                    <option value="J8">J8</option>
                                    <option value="J9">J9</option>
                                    <option value="J10">J10</option>
                                    <option value="J11">J11</option>
                                </select>
                            </td>

						</tr>

                        <tr>
                            <td colspan="2"></td>
                            <td colspan="1">
                                <input type="password" name="pswd" id="pswd" placeholder="Password" onkeyup='enableSubmit(); passwordValidation()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td>
                            <td colspan="1">
                                <input type="submit" name="update" value="Insert data" id="envio" disabled>
                            </td>
                        </tr>

                        </form>

                    </tbody>
                </table>
                
                <br>
                
            </div>

            <!-- Tabla Expulsiones -->
			<div class="card py-4 mb-5">
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
							OUT = Jornadas que se perderá
						</p>
						
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

if (isset($_POST['update'])) {
    $nomJug = $_POST['nomJug'];
    $equipo = $_POST['equipo'];
    $jorExp = $_POST['jorExp'];
    $jorOut = $_POST['jorOut'];

    
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('$equipo', $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $PTS, '$img_path', $posicion);";
    //$sql = "UPDATE tabla_general SET PJ=$PJ, PG=$PG, PE=$PE, PP=$PP, GF=$GF, GC=$GC, DG=$DG, PTS=$PTS, posicion=$posicion WHERE nombre_equipo='$equipo';";
    //$sql = "SELECT * FROM tabla_general ORDER BY posicion);";
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('Gol Osos', 1,2,3,4,5,6,7,8,'infoGolosos.png',3)";
    $sql = "INSERT INTO tarjetas (jugador, equipo, jorExp, jorOut) VALUES ('$nomJug', '$equipo', '$jorExp', '$jorOut');";

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