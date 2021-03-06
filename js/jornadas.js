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
	let nombresFuenteOvejuna = ['Gene 98', 'Chema Guerrero', 'Eduardo Quintanar', 'Oscar Vela', 'Angel Celis', 'Diego González', 'Angel Salinas', 'Pablo García', 'Jaime Farias', 'Roberto Casanova', 'Luis Franco', 'Miguel Camacho'];
	
	/* Close Friends */
	let nombresCloseFriends = ['Gene 97-98', 'David Padilla','Armando de la Mora','Roberto Reyes','Marcelo Gonzalez','Alejandro Cuellar','Marcelo Candanedo','Diego Salazar','Marcelo Salazar','Chuy Delgado','Juan Pablo Gonzalez','Ernesto Reyes','Juan Pablo Reyes','Edson Carrera','Daniel Magaña'];
	
	/* Vikingos */
	let nombresVikingos = ['Gene 98', 'Mauricio Gutiérrez', 'Juan Pablo Leal', 'Marcelo Guerra', 'Mario Sepúlveda', 'Joel Sepúlveda', 'Emilio Sa', 'Rodrigo Padilla', 'Eugenio Barrera', 'Adrián Ortiz', 'Abelardo Treviño'];
	
	/* Stacy */
	let nombresStacy = ['Gene 02', 'Aléxis Martínez', 'Andrés Treviño', 'David Jaspeado', 'Gerardo Jasso', 'Javier Solís', 'Adrián Martínez', 'Oscar Guardado', 'Juan Pablo Chávez', 'Juan Pablo Quijano', 'Miguel Quintana', 'Emiliano', 'Bernardo Giasi', 'Mauricio Quintana'];
	
	/* Leyendas */
	let nombresLeyendas = ['Gene 00', 'Miguel Vessi', 'Rodrigo García', 'Salvador Valdés', 'José Luis Pier', 'José Ramón Poo', 'Rodrigo Montelongo', 'Marcelo Villarreal', 'Alvaro Llaguno', 'Rodolfo Montelongo', 'Mauricio Sepúlveda', 'Aldo Tamez', 'Mauricio Terab', 'Juan Pablo Rentería'];
	
	/* Cerounos */
	let nombresCerounos = ['Gene 01', 'Ricardo Pío', 'Roberto Zermeño', 'Daniel Pérez', 'Paco Guerra', 'Juan Pablo Del Angel', 'Diego Treviño', 'Diego Torres Angulo', 'Bernardo Peña', 'Andrés Melendez'];
	
	/* LaRaza */
	let nombresLaRaza = ['Gene 90', 'Juergen Hugler', 'Jorge Tamez', 'Alejandro Meza', 'Carlos Treviño', 'Jorge Castañeda', 'Alejandro Torres', 'Marcelo Colorado', 'Emilio Sánchez', 'Humberto Llovera Cantú', 'Marcelo Garza', 'Daniel Guerra', 'Raúl Treviño', 'Manuel García', 'Eduardo Montalvo', 'Jesús García'];
	
	/* Leones */
	let nombresLeones = ['Gene 95', 'Jaime Guerra', 'Adrían Cantú', 'Adrián Estrada', 'Lorenzo Fernández', 'Luis López', 'Sergio Martínez', 'Alan Andonie', 'Luis Lozano', 'Alan De Luna', 'Juan Jose de Isla', 'Marco Rodríguez', 'Adrián Morales', 'Alejandro Guerrero', 'Cristian Najera'];
	
	/* AtleticoSanPancho */
	let nombresAtleticoSanPancho = ['Gene 94', 'Diego Gutiérrez', 'Edson Hugler', 'Alan Canales', 'Marcelo Llaguno', 'Erick Villaseñor', 'Andres Miller', 'Fernando García', 'Daniel De la Garza', 'Javier Ceballos', 'Luis Andrés Soto', 'Eugenio Leal', 'Ulises Salinas'];
	
	/* Galacticos */
	let nombresGalacticos = ['Gene 97', 'Alejandro Minera', 'David Garza', 'Alejandro Álvarez', 'Pedro Vázquez', 'Emilio Ramírez', 'Patricio Alanis', 'Tomás Martínez'];
	
	/* Golosos */
	let nombresGolosos = ['Gene 96', 'Pablo García', 'Carlos Gutiérrez', 'Patricio Calvillo', 'Gabriel Coronado', 'Santiago Durán', 'Adrián Martínez', 'Adrián Treviño', 'Andres Dillon', 'Javier González', 'Carlos Flores', 'Kike Ayala Hugler'];
	
	/* ElEquipe */
	let nombresElEquipe = ['Gene 94-93', 'Alberto Herrera', 'Diego Pico', 'Moriss Camacho', 'Diego Santos', 'Humberto De Leon', 'Josu Monroy', 'Mario Fernández', 'José Monroy', 'Andres De la Garza', 'Alberto Riojas'];
	
	
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
	
	var gene = false;
	
	dataEquipo1.forEach((item)=>{
		let small = document.createElement("small");
		let li = document.createElement("li");
		if (!gene) {
			li.className = 'list-group-item text-center';
			let strong = document.createElement("strong");
			lista1.appendChild(li).appendChild(small).appendChild(strong);
			strong.innerText = item;
			gene = true;
		} else {
			li.className = 'list-group-item';
			small.innerText = item;
			lista1.appendChild(li).appendChild(small);
		}
	})
	
	gene = false;
	
	dataEquipo2.forEach((item)=>{
		let small = document.createElement("small");
		let li = document.createElement("li");
		if (!gene) {
			li.className = 'list-group-item text-center';
			let strong = document.createElement("strong");
			lista2.appendChild(li).appendChild(small).appendChild(strong);
			strong.innerText = item;
			gene = true;
		} else {
			li.className = 'list-group-item';
			small.innerText = item;
			lista2.appendChild(li).appendChild(small);
		}
	})
	
	
	card[numTarjeta-1] = true;
	
}