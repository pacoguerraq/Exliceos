/* 
Parte del codigo es de
https://www.geeksforgeeks.org/how-to-creating-html-list-from-javascript-array/
*/

/* Conteo, para que list items no se agreguen muchas veces */
let card = [false, false, false, false, false];

/* funcion para cambiar tarjeta de lider goleador */
function mostrarNombres(numTarjeta, IDlista1, IDlista2, IDcamisa1, IDcamisa2) {
	
	if (card[numTarjeta-1]) {
		return;
	}
	
	
	
	/* Cerounos */
	let nombresFuenteOvejuna = ['FuenteOvejuna 1', 'FuenteOvejuna 2', 'FuenteOvejuna 3', 'FuenteOvejuna 4', 'FuenteOvejuna 5', 'FuenteOvejuna 6', 'FuenteOvejuna 7', 'FuenteOvejuna 8', 'FuenteOvejuna 9', 'FuenteOvejuna 10', 'FuenteOvejuna 11'];
	
	/* Close Friends */
	let nombresCloseFriends = ['CloseFriends 1', 'CloseFriends 2', 'CloseFriends 3', 'CloseFriends 4', 'CloseFriends 5', 'CloseFriends 6', 'CloseFriends 7', 'CloseFriends 8', 'CloseFriends 9', 'CloseFriends 10', 'CloseFriends 11'];
	
	/* Vikingos */
	let nombresVikingos = ['Vikingos 1', 'Vikingos 2', 'Vikingos 3', 'Vikingos 4', 'Vikingos 5', 'Vikingos 6', 'Vikingos 7', 'Vikingos 8', 'Vikingos 9', 'Vikingos 10', 'Vikingos 11'];
	
	/* Stacy */
	let nombresStacy = ['Stacy 1', 'Stacy 2', 'Stacy 3', 'Stacy 4', 'Stacy 5', 'Stacy 6', 'Stacy 7', 'Stacy 8', 'Stacy 9', 'Stacy 10', 'Stacy 11'];
	
	/* Leyendas */
	let nombresLeyendas = ['Leyendas 1', 'Leyendas 2', 'Leyendas 3', 'Leyendas 4', 'Leyendas 5', 'Leyendas 6', 'Leyendas 7', 'Leyendas 8', 'Leyendas 9', 'Leyendas 10', 'Leyendas 11'];
	
	/* Cerounos */
	let nombresCerounos = ['Cerounos 1', 'Cerounos 2', 'Cerounos 3', 'Cerounos 4', 'Cerounos 5', 'Cerounos 6', 'Cerounos 7', 'Cerounos 8', 'Cerounos 9', 'Cerounos 10', 'Cerounos 11'];
	
	/* LaRaza */
	let nombresLaRaza = ['LaRaza 1', 'LaRaza 2', 'LaRaza 3', 'LaRaza 4', 'LaRaza 5', 'LaRaza 6', 'LaRaza 7', 'LaRaza 8', 'LaRaza 9', 'LaRaza 10', 'LaRaza 11'];
	
	/* Leones */
	let nombresLeones = ['Leones 1', 'Leones 2', 'Leones 3', 'Leones 4', 'Leones 5', 'Leones 6', 'Leones 7', 'Leones 8', 'Leones 9', 'Leones 10', 'Leones 11'];
	
	/* AtleticoSanPancho */
	let nombresAtleticoSanPancho = ['AtleticoSanPancho 1', 'AtleticoSanPancho 2', 'AtleticoSanPancho 3', 'AtleticoSanPancho 4', 'AtleticoSanPancho 5', 'AtleticoSanPancho 6', 'AtleticoSanPancho 7', 'AtleticoSanPancho 8', 'AtleticoSanPancho 9', 'AtleticoSanPancho 10', 'AtleticoSanPancho 11'];
	
	/* Galacticos */
	let nombresGalacticos = ['Galacticos 1', 'Galacticos 2', 'Galacticos 3', 'Galacticos 4', 'Galacticos 5', 'Galacticos 6', 'Galacticos 7', 'Galacticos 8', 'Galacticos 9', 'Galacticos 10', 'Galacticos 11'];
	
	/* Golosos */
	let nombresGolosos = ['Golosos 1', 'Golosos 2', 'Golosos 3', 'Golosos 4', 'Golosos 5', 'Golosos 6', 'Golosos 7', 'Golosos 8', 'Golosos 9', 'Golosos 10', 'Golosos 11'];
	
	/* ElEquipe */
	let nombresElEquipe = ['ElEquipe 1', 'ElEquipe 2', 'ElEquipe 3', 'ElEquipe 4', 'ElEquipe 5', 'ElEquipe 6', 'ElEquipe 7', 'ElEquipe 8', 'ElEquipe 9', 'ElEquipe 10', 'ElEquipe 11'];
	
	
	/* Obtener listas del html */
	let lista1 = document.getElementById(IDlista1);
	let lista2 = document.getElementById(IDlista2);
	
	/* Obtener imagenes de camisas */
	var camisaEquipo1 = document.getElementById(IDcamisa1).src;
	var camisaEquipo2 = document.getElementById(IDcamisa2).src;
	camisaEquipo1 = camisaEquipo1.slice(camisaEquipo1.indexOf("info"));
	camisaEquipo2 = camisaEquipo2.slice(camisaEquipo2.indexOf("info"));
	
	
	let dataEquipo1;
	/* Obtener lista equipo 1 */
	switch (camisaEquipo1)
		{
			case "infoFuenteOvejuna.png": dataEquipo1 = [...nombresFuenteOvejuna];
				break;
			case "infoCloseFriends.png": dataEquipo1 = [...nombresCloseFriends];
				break;
			case "infoVikingos.png": dataEquipo1 = [...nombresVikingos];
				break;
			case "infoStacy.png": dataEquipo1 = [...nombresStacy];
				break;
			case "infoLeyendas.png": dataEquipo1 = [...nombresLeyendas];
				break;
			case "infoCerounos.png": dataEquipo1 = [...nombresCerounos];
				break;
			case "infoLaRaza.png": dataEquipo1 = [...nombresLaRaza];
				break;
			case "infoLeones.png": dataEquipo1 = [...nombresLeones];
				break;
			case "infoAtleticoSanPancho.png": dataEquipo1 = [...nombresAtleticoSanPancho];
				break;
			case "infoGalacticos.png": dataEquipo1 = [...nombresGalacticos];
				break;
			case "infoGolosos.png": dataEquipo1 = [...nombresGolosos];
				break;
			case "infoElEquipe.png": dataEquipo1 = [...nombresElEquipe];
				break;
		}
	
	
	let dataEquipo2;
	/* Obtener lista equipo 2 */
	switch (camisaEquipo2)
		{
			case "infoFuenteOvejuna.png": dataEquipo2 = [...nombresFuenteOvejuna];
				break;
			case "infoCloseFriends.png": dataEquipo2 = [...nombresCloseFriends];
				break;
			case "infoVikingos.png": dataEquipo2 = [...nombresVikingos];
				break;
			case "infoStacy.png": dataEquipo2 = [...nombresStacy];
				break;
			case "infoLeyendas.png": dataEquipo2 = [...nombresLeyendas];
				break;
			case "infoCerounos.png": dataEquipo2 = [...nombresCerounos];
				break;
			case "infoLaRaza.png": dataEquipo2 = [...nombresLaRaza];
				break;
			case "infoLeones.png": dataEquipo2 = [...nombresLeones];
				break;
			case "infoAtleticoSanPancho.png": dataEquipo2 = [...nombresAtleticoSanPancho];
				break;
			case "infoGalacticos.png": dataEquipo2 = [...nombresGalacticos];
				break;
			case "infoGolosos.png": dataEquipo2 = [...nombresGolosos];
				break;
			case "infoElEquipe.png": dataEquipo2 = [...nombresElEquipe];
				break;
		}
	
	dataEquipo1.forEach((item)=>{
		let li = document.createElement("li");
		li.className = 'list-group-item';
		li.innerText = item;
		lista1.appendChild(li);
	})
	
	dataEquipo2.forEach((item)=>{
		let li = document.createElement("li");
		li.className = 'list-group-item';
		li.innerText = item;
		lista2.appendChild(li);
	}) 
	
	card[numTarjeta-1] = true;
	
}