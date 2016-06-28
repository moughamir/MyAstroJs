$(document).ready(function(){
     $('#input_form').submit(function(event){
		 if( !$('#partenaire').val() ){
			 alert('Veuillez saisir le prenom de votre partenaire.');
			return false;
		 }
		 if( !$('#prenom').val() ){
			 alert('Veuillez saisir votre prenom.');
			return false;
		 }
		 if( !$('input:radio[name="custom Sexe"]:checked').val() ){
			 alert('Veuillez séléctionner votre civilité.');
			return false;
		 }
		 if( !$('#date').val() ){
			 alert('Veuillez saisir votre jour de naissance.');
			return false;
		 }
		 if( !$('#month').val() ){
			 alert('Veuillez saisir votre mois de naissance.');
			return false;
		 }
		 if( !$('#year').val() ){
			 alert('Veuillez saisir votre annee de naissance.');
			return false;
		 }
		 if( !$('#votre').val() ){
			 alert('Veuillez saisir votre email.');
			return false;
		 }
		 
		
	 });
});
 