/* funcion para cambiar tarjeta de lider goleador */
function cardGoleador() {
	/* nombre */
	document.getElementById("nombreCard").innerHTML = document.getElementById("nombreTabla").innerHTML;
	/* equipo */
	var equipo = document.getElementById("equipoCard");
	equipo.innerHTML = document.getElementById("equipoTabla").innerHTML;
	/* goles */
	document.getElementById("golesCard").innerHTML = document.getElementById("golesTabla").innerHTML;
	/* jornadas */
	/*document.getElementById("jornadaCard").innerHTML = document.getElementById("jornadaTitulo").innerHTML;*/
	/* foto camisa */
	if (equipo.innerHTML == "Fuente Ovejuna F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/fuenteOvejuna.png";
	} else if (equipo.innerHTML == "Close Friends F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/closeFriends.png";
	} else if (equipo.innerHTML == "Vikingos F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/vikingos.png";
	} else if (equipo.innerHTML == "Stacy F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/stacy.png";
	} else if (equipo.innerHTML == "Leyendas") {
		document.getElementById("camisaCard").src = "../img/camisas/leyendas.png";
	} else if (equipo.innerHTML == "Cerounos F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/cerounos.png";
	} else if (equipo.innerHTML == "La Raza") {
		document.getElementById("camisaCard").src = "../img/camisas/laRaza.png";
	} else if (equipo.innerHTML == "Leones F.C.") {
		document.getElementById("camisaCard").src = "../img/camisas/leones.png";
	} else if (equipo.innerHTML == "Atletico San Pancho") {
		document.getElementById("camisaCard").src = "../img/camisas/atleticoSanPancho.png";
	} else if (equipo.innerHTML == "Galacticos") {
		document.getElementById("camisaCard").src = "../img/camisas/galacticos.png";
	} else if (equipo.innerHTML == "Gol Osos") {
		document.getElementById("camisaCard").src = "../img/camisas/golosos.png";
	} else if (equipo.innerHTML == "El Equipe") {
		document.getElementById("camisaCard").src = "../img/camisas/elEquipe.png";
	}
}