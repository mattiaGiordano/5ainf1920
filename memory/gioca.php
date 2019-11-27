<html>
    <head>
        <title>Memory game!</title>		
    </head>
    <body>
        <table>
			<tr>
				<td> <img class="memoryGame" id="img1" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][0][0]; ?>"  height=100 width=100></img> </td> 
				<td> <img class="memoryGame" id="img2" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][0][1]; ?>"  height=100 width=100></img> </td> 
			<tr>
			<tr>
				<td> <img class="memoryGame" id="img3" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][1][0]; ?>"  height=100 width=100></img> </td> 
				<td> <img class="memoryGame" id="img4" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][1][1]; ?>"  height=100 width=100></img> </td> 
			<tr> 
			<tr>
				<td> <img class="memoryGame" id="img5" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][2][0]; ?>"  height=100 width=100></img> </td> 
				<td> <img class="memoryGame" id="img6" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][2][1]; ?>"  height=100 width=100></img> </td> 
			<tr>
			<tr>
				<td> <img class="memoryGame" id="img7" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][3][0]; ?>"  height=100 width=100></img> </td> 
				<td> <img class="memoryGame" id="img8" src="black.png" data-original-source="black.png"  data-selected-source="<?php echo $_SESSION["images"][3][1]; ?>"  height=100 width=100></img> </td> 
			<tr>
        </table>   
		<br>
		<br>
		<div id="visioneASchermo"> </div>
		<script>
			var numeroSelezionati = 0;
			// salva in images tutte le immagini della tabella
			var images = document.getElementsByClassName('memoryGame');
			// aggiunge un event listener a tutte le immagini e se cliccate richiama la funzione elementoSelezionato
			for (var image of images) {
			    image.addEventListener('click', elementoSelezionato);
			}
			var immaginePrecedente = "x";
			var numeroCoppie = 0;
			var immaginiPrecedentiDiDue = ["x", "x"];
			var contX = 0; 
			var winPrec = 0;
			// funzione che viene richiamata dal listener
			function elementoSelezionato(event) {
				var image = event.target,
				currentSrc  = image.getAttribute('src'),
				originalSrc = image.getAttribute('data-original-source'),
				selectedSrc = image.getAttribute('data-selected-source'),
				// if the current src is the original one, set to selected
				// if not we assume the current src is the selected one
				// and we reset it to the original src
				newSrc = currentSrc === originalSrc ? selectedSrc : originalSrc;
				// actually set the new src for the image
				image.setAttribute('src', newSrc);
				numeroSelezionati++;
				if(contX == 1)
				{
					if(winPrec==0)
					{
						immaginiPrecedentiDiDue[0].setAttribute('src', "images/black.png"); 
						immaginiPrecedentiDiDue[1].setAttribute('src', "images/black.png"); 						
					}
					contX = 0;
					winPrec = 0;
				}					
				if(numeroSelezionati==1 || numeroSelezionati == 0)
				{
					document.getElementById("visioneASchermo").innerHTML = "Seleziona un altra carta!";	
					immaginiPrecedentiDiDue[numeroSelezionati-1] = image;
				}					
				if(numeroSelezionati==2)
				{		immaginiPrecedentiDiDue[numeroSelezionati-1] = image;
						contX = 1;
						if(image.getAttribute('data-selected-source')==immaginePrecedente.getAttribute('data-selected-source'))
						{
							console.log("Coppia Trovata");
							document.getElementById("visioneASchermo").innerHTML = "Complimenti hai trovato una coppia!";
							image.removeEventListener('click', selectElementHandler);
							immaginePrecedente.removeEventListener('click', selectElementHandler);
							numeroCoppie++;
							winPrec = 1;
						}
						else
						{
							console.log("Non sono uguali");
							document.getElementById("visioneASchermo").innerHTML = "Non sono ugali le due coppie";
						}
						numeroSelezionati= 0;
				}					
					immaginePrecedente = image;
					
				console.log(numeroCoppie);
				if(numeroCoppie==4)
				{
					gameWon();
					numeroCoppie=0;
				}
			}
			function sleep(miliseconds) {
				var currentTime = new Date().getTime();
				while (currentTime + miliseconds >= new Date().getTime()) {
				}
			}			
			function gameWon()
			{
				document.getElementById("visioneASchermo").innerHTML = "I miei complimenti, hai trovato tutte le coppie!";		
				console.log('WIN!');								
			}
			
		</script>
    </body>
	
</html>
