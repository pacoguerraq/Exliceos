<?php

include "conn.php";

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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Tabla</title>

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
				<li class="breadcrumb-item active">Actualizar Tabla</li>
			</ul>
            
            <!-- Titulo y descripcion -->
            <div class="p-3">
                <h2 class="display-4"><strong>Actualizar Tabla</strong></h2>
                <h2 class="display-6">Llena los datos de cada equipo y verifica que todo este correcto en la tabla de abajo</h2>
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
            <div class="card py-3 mb-4">
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

                        <!-- Ejemplo -->
						<tr class="text-muted">
							<th scope="row">1</th>
							<!-- Equipo -->
							<td><strong>Ejemplo F.C.</strong></td>
							<!-- Partidos -->
							<td class="border-start">5</td> <!-- PJ -->
							<td>4</td> <!-- PG -->
							<td>0</td> <!-- PE -->
							<td class="border-end">1</td> <!-- PP -->
							<!-- Goles -->
							<td class="d-none d-sm-table-cell">10</td> <!-- GF -->
							<td class="d-none d-sm-table-cell">5</td> <!-- GC -->
							<td class="d-none d-sm-table-cell border-end">5</td> <!-- DG -->
							<!-- Puntos -->
							<td>12</td>
						</tr>
                        
                        <form action="" method="POST">
						<tr>
							<th scope="row">
                                <input type="number" class="req" name="posicion" id="pos" placeholder="posicion" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </th>
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
							<!-- Partidos -->
							<td class="border-start">
                                <input type="number" class="req" name="PJ" id="PJ" placeholder="PJ" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- PJ -->
							<td>
                                <input type="number" class="req" name="PG" id="PG" placeholder="PG" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- PG -->
							<td>
                                <input type="number" class="req" name="PE" id="PE" placeholder="PE" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- PE -->
							<td class="border-end">
                                <input type="number" class="req" name="PP" id="PP" placeholder="PP" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- PP -->
							<!-- Goles -->
							<td class="d-none d-sm-table-cell">
                                <input type="number" class="req" name="GF" id="GF" placeholder="GF" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- GF -->
							<td class="d-none d-sm-table-cell">
                                <input type="number" class="req" name="GC" id="GC" placeholder="GC" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- GC -->
							<td class="d-none d-sm-table-cell border-end">
                                <input type="number" class="req" name="DG" id="DG" placeholder="DG" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td> <!-- DG -->
							<!-- Puntos -->
							<td>
                                <input type="number" class="req" name="PTS" id="PTS" placeholder="PTS" onkeyup='enableSubmit()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td>

						</tr>

                        <tr>
                            <td colspan="7"></td>
                            <td colspan="2">
                                <input type="password" name="pswd" id="pswd" placeholder="Password" onkeyup='enableSubmit(); passwordValidation()' onmousedown='enableSubmit()' oninput='enableSubmit()' required>
                            </td>
                            <td>
                                <input type="submit" name="update" value="Update data" id="envio" disabled>
                            </td>
                        </tr>

                        </form>

                    </tbody>
                </table>
                
                <br>
                
            </div>

            <!-- Tabla -->
            <div class="card py-3 mb-5">
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

    </div>

</body>

</html>

<?php

if (isset($_POST['update'])) {
    $equipo = $_POST['equipo'];
    $PJ = $_POST['PJ'];
    $PG = $_POST['PG'];
    $PE = $_POST['PE'];
    $PP = $_POST['PP'];
    $GF = $_POST['GF'];
    $GC = $_POST['GC'];
    $DG = $_POST['DG'];
    $PTS = $_POST['PTS'];
    $img_path = $_POST['img_path'];
    $posicion = $_POST['posicion'];
    
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('$equipo', $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $PTS, '$img_path', $posicion);";
    $sql = "UPDATE tabla_general SET PJ=$PJ, PG=$PG, PE=$PE, PP=$PP, GF=$GF, GC=$GC, DG=$DG, PTS=$PTS, posicion=$posicion WHERE nombre_equipo='$equipo';";
    //$sql = "SELECT * FROM tabla_general ORDER BY posicion);";
    //$sql = "INSERT INTO tabla_general (nombre_equipo, PJ, PG, PE, PP, GF, GC, DG, PTS, img_path, posicion) VALUES ('Gol Osos', 1,2,3,4,5,6,7,8,'infoGolosos.png',3)";

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