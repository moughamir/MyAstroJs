<!-- funciones de tirada -->

var baraja = new Array("major0.jpg","major1.jpg","major2.jpg","major3.jpg","major4.jpg","major5.jpg","major6.jpg","major7.jpg","major8.jpg","major9.jpg","major10.jpg","major11.jpg","major12.jpg","major13.jpg","major14.jpg","major15.jpg","major16.jpg","major17.jpg","major18.jpg","major19.jpg","major20.jpg","major21.jpg");

var estadoCartas = new Array("","","");

//funcion para obtener una carta01

function darCarta(posicionCarta,id){

	estadoCartas[posicionCarta] = id;

	$("#carta" + posicionCarta).css("opacity", 0.00);

	$("#carta" + posicionCarta).html("<div id=\"loading" + posicionCarta +"\" style=\"background:url(img/cartas/backCard.jpg) center center no-repeat;\">Cargando...</div>");

	$("#loading" + posicionCarta).css("color", "#000");

	$("#loading" + posicionCarta).css("text-align", "center");

	$("#loading" + posicionCarta).css("height", "159px");

	$("#loading" + posicionCarta).css("line-height", "159px");

	$("#carta" + posicionCarta).css("visibility", "visible");

	$("#carta" + posicionCarta).fadeTo(500, 0.99);

	var imagensrc = "img/cartas/" + baraja[id];

	var imagen = new Image();

	imagen.onload = function (evt) {		

		$("#carta" + posicionCarta).css("opacity", 0.00);

		$("#carta" + posicionCarta).css("visibility", "visible");

		$("#carta" + posicionCarta).html("<img src=\"" + imagensrc + "\" width=\"85\" height=\"159\" alt=\"tirada de tarot gratis\"/>");

		$("#carta" + posicionCarta).fadeTo(500, 0.99);

	}

	imagen.src = imagensrc;



}

<!-- funcion para hacer aparecer el revalite mail  -->

function calcularAltura(){

	altura = $(window).height()/2 + $(window).scrollTop() - 120;

	return altura;

}

//funcion fadeToIn

function fadeIn(){

	//para #supercapa

	$("#superCapa").css("opacity", 0.00);

	$("#superCapa").css("visibility", "visible");

	$("#superCapa").fadeTo(500, 0.85);

	//para #cajaRevalidate

	calcularAltura

	$("#cajaRevalidate").css("top", calcularAltura()+"px");

	$("#cajaRevalidate").css("opacity", 0.00);

	$("#cajaRevalidate").css("visibility", "visible");

	$("#cajaRevalidate").fadeTo(500, 1.00);

}

//funcion fadeToOut

function fadeOut(){

	//para #supercapa

	$("#superCapa").fadeTo(500, 0.00, function ocultar() { $("#superCapa").css("visibility", "hidden"); });

	//para #cajaRevalidate

	$("#cajaRevalidate").fadeTo(500, 0.00, function ocultar() { $("#cajaRevalidate").css("visibility", "hidden"); });

	

}

<!-- Funciones de comprobacion de que las cartas se han tirado -->

function vld(){

	if(estadoCartas[0] == "" || estadoCartas[1] == "" || estadoCartas[2] == ""){

		alert("Veuillez d'abord tirer les cartes");

		return false;

	}else{

		$("#contenido_servicio").val(estadoCartas.join(";"));

	}

	return valid("pregunta");

}



/* CREAMOS EL OBJETO DE ENVIO AJAX */

function ajx(){

	var ajax;

	

	if(window.XMLHttpRequest){

          ajax = new XMLHttpRequest();

	}else if(window.ActiveXObject){ 

          ajax = new ActiveXObject("Microsoft.XMLHTTP");

	}else{

    	return(false);

	}

    return ajax;      

}



/* VALIDAR FORMS */

function valid(type){

	//Recojo los valores

	var nom = $("#nom").val(); 

	var prenom = $("#prenom").val();

	var tel = $("#tel_portable").val();

	var email = $("#email").val();

	var message = $("#message").val();

	var sex = $("#sex").val();

	var jour = $("#jour").val();

	var mois = $("#mois").val();

	var annee = $("#annee").val();

	var pays = $("#pays").val();

	var cita = $("#contenido_servicio").val();

	var profesional = $("#profesional").val();

	var validform= new ajx();

	var chaine="";

	

	initcntr();

	

	if(nom == ""){

		

		$("#nom").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Champ Nom est vide</div>");

		$("#nom").focus();

		return false;		

	}

	

	if(prenom == ""){

		$("#prenom").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Champ Prénom est vide</div>");

		$("#prenom").focus();

		return false;	

	}

	

	if(tel == ""){

		format_tel();

		$("#tel").focus();

		return false;	

	}

	

	if(isNaN(tel)){

		format_tel();

		$("#tel").focus();

		return false;		

	}



	if(email == ""){

		mail_format(1,1);

		$("#email").focus();

		return false;		

	}

	

	if(pays==""){

		$("#pays").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Pays non renseigné</div>");

		$("#pays").focus();

		return false;

	}

	

	if(sex == 0){

		$("#sex").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Champ Sex non renseigné</div>");

		$("#sex").focus();

		return false;	

	}

	if(type == "pregunta"){

		if(message == ""){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Champ Question est vide</div>");

			$("#message").focus();

			return false;	

		}

	}

	

	if(type == "agenda"){

		if(cita == ""){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Vous devez choisir une heure pour votre rendez-vous.</div>");

			$("#contenido_servicio").focus();

			return false;

		}

		if(profesional == 0){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Vous devez choisir un voyant.</div>");

			$("#profesional").focus();

			return false;

		}

	}

	

	chaine="?nom="+nom+"&prenom="+prenom+"&tel="+tel+"&email="+email+"&sex="+sex+"&pays="+pays+"&jour="+jour+"&mois="+mois+"&annee="+annee;

	

	 validform.open("GET", "library/php/verif_form"+chaine, false);

     validform.send(null);

	

     if(validform.readyState == 4) {

		if(validform.responseText!=''){

			eval(validform.responseText);

			return false;

		}else{

			fadeIn();

			$("#email_vrf").focus();

		}

	}else{

		return(false);

	}

	return false;

}

/*VALIDADOR DEL FORM SOLO EMAIL*/

function validEmail(){

	var email2 = $("#email2").val();

	

	var validform= new ajx();

	

	var chaine="";

	

	initcntr();

	

	if(email2 == ""){

		mail_format(1,2);

		$("#email2").focus();

		return false;		

	}



	chaine="?&email="+email2+"&forma=2";

	

	//alert(chaine);

	

	 validform.open("GET", "js/verif_form"+chaine, false);

     validform.send(null);

	

     if(validform.readyState == 4) 

     {

	     

     		if(validform.responseText!='')

     		{

	     		

	     		

	     		eval(validform.responseText);

	     		return false;

	     		

     		}else{

				$("#form").submit();	

     		}

		 }else return(false);

		 

	

return false;

}



function format_tel(){

	$("#tel_portable").addClass("errorColorCampo");

	$("#muestraError").html("<div class=\"errorForm\">Format Numéro de Tel invalide</div>");

	$("#tel_portable").focus();

	return false;

}



function anniv(){

	$("#annee").addClass("errorColorCampo");

	$("#muestraError").html("<div class=\"errorForm\">Vous devez avoir plus que 18 ans</div>");

	$("#annee").focus();

	return false;

}



function mail_format(i,idMail){

	if(idMail == 2){

		if(i==1) {

			$("#muestraError2").html("<div class=\"errorForm\">Format d'adresse E-mail invalide</div>");

		}else if(i==2){

			$("#muestraError2").html("<div class=\"errorForm\">Adresse Email invalide</div>");

		}else{

			$("#muestraError2").html("<div class=\"errorForm\">Erreur, veuillez ressaisir votre e-mail</div>");

		}

		$("#email2").addClass("errorColorCampo");

		$("#email2").focus();

	}else{

		if(i==1) {

			$("#muestraError").html("<div class=\"errorForm\">Format d'adresse E-mail invalide</div>");

		}else if(i==2){

			$("#muestraError").html("<div class=\"errorForm\">Adresse Email invalide</div>");

		}else{

			$("#muestraError").html("<div class=\"errorForm\">Erreur, veuillez ressaisir votre e-mail</div>");

		}

		$("#email").addClass("errorColorCampo");

		$("#email").focus();

	}

}



function initcntr(){

	$(".errorForm").remove();

	$('.errorColorCampo').removeClass('errorColorCampo');

}





/* DESACTIVADO */

function verifmail(){

	if($("#email").val() != $("#email_vrf").val()){

			fadeOut();

			mail_format(3);

	}else{	

		$("#form").submit();			

	}

}