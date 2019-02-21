
	/* function escrivimDestinatari() {
	 	document.getElementById("input_titol_es").disabled = document.getElementById("input_destinatari").value.length;
		document.getElementById("input_cos_es").enabled = document.getElementById("input_destinatari").value.length;
	}
	*/
	
	/*
	function doscolumnas_exclusivo() {
		document.getElementById("element_4").disabled = document.getElementById("element_5").value.length || document.getElementById("element_6").value.length;			
	}
	*/
	
	function revisaDestinatari() {
		if (document.getElementById("input_copiaoculta").value.length == 0) {
			
		  // alert('ATENCIÓ, HI HA ALGÚN PROBLEMA EN EL TEU FORMULARI:\n\nNo has escrit cap destinatari.\nI com ja sabràs, el destinatari és un camp obligat quan enviem correus electrònics.');  
		  $('#sensedestinatari').modal();
        }

}


		// Esborrem el contingut el input "Assumpte" inicial quan fem click. D'aquesta manera l'ususari està obligat a escriure el seu propi assumpte 
		function esborraCampAssumpte() {
				 input_assumpte.value = "";
		}




    //Funció javascript que agafa una variable ('n') per a poder esborrar el butlletí des del modal molón
	function esborrarbutlleti(n) {
		  
		  $('#esborrarbutlleti'+n).modal();
        }



	<!-- Previsualitzem el format del butlletí fent click als radiobuttons (o 1 columna o 2 columnes) -->
	function CB(bg) {
    	if(bg=="format1")
    	{
    	document.getElementById("previsualitzacio-formatbutlleti-1").style.display="block";
    	document.getElementById("previsualitzacio-formatbutlleti-2").style.display="none";
    	}
    	else if(bg=="format2")
    	{
    	document.getElementById("previsualitzacio-formatbutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-formatbutlleti-2").style.display="block";         
    	}
    	}
		
	<!-- Previsualitzem el format de les categories fent click als radiobuttons de les categories) -->
	function CBcategoria(bgcategoria) {
    	if(bgcategoria=="categoria1")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="block";
    	document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="none";
    	}
    	else if(bgcategoria=="categoria2")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="block";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="none";
    	}
    	else if(bgcategoria=="categoria3")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="block";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="none";
    	}
    	else if(bgcategoria=="categoria4")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="block";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="none";
    	}
		else if(bgcategoria=="categoria5")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="block";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="none";
    	}
		else if(bgcategoria=="categoria6")
    	{
    	document.getElementById("previsualitzacio-categoriabutlleti-1").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-2").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-3").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-4").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-5").style.display="none";
		document.getElementById("previsualitzacio-categoriabutlleti-6").style.display="block";
    	}			
    	}