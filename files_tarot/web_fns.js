$(document).ready(function(){

//Con alzado de opciones

	$("#menu ul li.leve1").hover(

		function () {

			$(this).children("ul").css("visibility", "visible");

    	}, 

    	function () {

			$(this).children("ul").css("visibility", "hidden");

        	//$(this).css("height", 41);

			//$(this).css("overflow", "hidden");

      	}

    );

});

//REDIRECCION BANNER HOME

function saltar(estado){

	var enlacesSalto = new Array("tarot/tirada-de-tarot-gratis","horoscopo/horoscopo-diario","suenos/consulta-gratis");

	document.location.href=enlacesSalto[estado-1];

}

/*FUNCIONES FORMULARIOS*/

var baraja = new Array("major0.jpg","major1.jpg","major2.jpg","major3.jpg","major4.jpg","major5.jpg","major6.jpg","major7.jpg","major8.jpg","major9.jpg","major10.jpg","major11.jpg","major12.jpg","major13.jpg","major14.jpg","major15.jpg","major16.jpg","major17.jpg","major18.jpg","major19.jpg","major20.jpg","major21.jpg");



function darCarta(id){

	if(posicionMax >=posicion){

		var imagensrc = "images/tarot/" + baraja[id];

		$("#carta" + posicion).html("<img src=\"" + imagensrc + "\" width=\"48\" height=\"90\" class=\"cartaTirada\" alt=\"tarot carta "+posicion+1+"\"/>");

		posicion++;

	}

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

function validarTirada() {

	echoTirada = $("#carta4").children("img").hasClass("cartaTirada");

	if(echoTirada==false){

		alert("Vous devez réaliser votre tirage de cartes");

		return false;

	}else{

		return valid("pregunta");

	}

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

	

	if(type == "pregunta"){

		if(message == ""){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Ecrivez votre question</div>");

			$("#message").focus();

			return false;	

		}

	}

	

	if(type == "maldeojo"){

		if(message == ""){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Dites-nous les symptômes que vous avez.</div>");

			$("#message").focus();

			return false;	

		}

	}

	

	if(nom == ""){

		

		$("#nom").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Remplissez le champ Nom</div>");

		$("#nom").focus();

		return false;		

	}

	

	if(prenom == ""){

		$("#prenom").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Remplissez le champ Prénom</div>");

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

		$("#muestraError").html("<div class=\"errorForm\">Indiquez votre pays</div>");

		$("#pays").focus();

		return false;

	}

	

	if(sex == 0){

		$("#sex").addClass("errorColorCampo");

		$("#muestraError").html("<div class=\"errorForm\">Indiquez votre sexe</div>");

		$("#sex").focus();

		return false;	

	}

	

	

	if(type == "agenda"){

		if(cita == ""){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Sélectionnez une heure pour votre agenda</div>");

			$("#contenido_servicio").focus();

			return false;

		}

		if(profesional == 0){

			$("#message").addClass("errorColorCampo");

			$("#muestraError").html("<div class=\"errorForm\">Tienes que seleccionar un profesional</div>");

			$("#profesional").focus();

			return false;

		}

	}

	

	chaine="?nom="+nom+"&prenom="+prenom+"&tel="+tel+"&email="+email+"&sex="+sex+"&pays="+pays+"&jour="+jour+"&mois="+mois+"&annee="+annee;

	

	 validform.open("GET", "/library/php/verif_form"+chaine, false);

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

	

	 validform.open("GET", "/library/php/verif_form"+chaine, false);

     validform.send(null);

	

     if(validform.readyState == 4) {

	     

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

	$("#muestraError").html("<div class=\"errorForm\">Indiquez votre numéro de téléphone portable</div>");

	$("#tel_portable").focus();

	return false;

}



function anniv(){

	$("#annee").addClass("errorColorCampo");

	$("#muestraError").html("<div class=\"errorForm\">Vous devez avoir 18 ans pour recevoir votre consultation</div>");

	$("#annee").focus();

	return false;

}



function mail_format(i,idMail){

	if(idMail == 2){

		if(i==1) {

			$("#muestraError2").html("<div class=\"errorForm\">Indiquez votre adresse email</div>");

		}else if(i==2){

			$("#muestraError2").html("<div class=\"errorForm\">Email incorrect</div>");

		}else{

			$("#muestraError2").html("<div class=\"errorForm\">Confirmation de votre emain incorrecte</div>");

		}

		$("#email2").addClass("errorColorCampo");

		$("#email2").focus();

	}else{

		if(i==1) {

			$("#muestraError").html("<div class=\"errorForm\">Indiquez votre adresse email</div>");

		}else if(i==2){

			$("#muestraError").html("<div class=\"errorForm\">Email incorrect</div>");

		}else{

			$("#muestraError").html("<div class=\"errorForm\">Confirmation de votre emain incorrecte</div>");

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