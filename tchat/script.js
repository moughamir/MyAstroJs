var sDelta = 2500;
var currentMsg = 0;
var intervalDelta = 1500;
var printedMsg = false;

$(document).on('submit','#rappel',function(e){
	var required_input     = $(this).find("[required]"); /*phone number input*/
    var required_input_val = $(required_input).val();
    var idastro = $('input[name="idastro"]').val();
	e.preventDefault();
	if((!readCookie('send_mail') || readCookie('send_mail') != '1') && (required_input_val != '') && validPhoneNumber(required_input_val) && (idastro != '')){
		$.ajax({
		  type: "POST",
		  url: 'ajaxMailer.php',
		  data: {phone : required_input_val, data : $('input[name="data"]').val(), voyant :  $('input[name="voyant"]').val(), objet :  $('input[name="objet"]').val()},
		  success: function(response){
		  	 if(response == 'ok'){
		  	 	createCookie('send_mail',1,1);
		  	 	$('#error_msg').html('<p class="alert alert-success">Votre demande a bien été prise en compte, nous vous rappelerons dès que possible.</p>');
		  	 	//$('.error-handler').toggleClass('hidden');
		  	 	$('.error-handler').modal('toggle');
		  	 	setTimeout(function(){
		  	 		$('.error-handler').modal('toggle');
		  	 	},3000);
		  	 } else {
		  	 	createCookie('send_mail',0,1);
		  	 	$('#error_msg').html('<p class="alert alert-danger">Une erreur est survenue, veuillez réessayer ou bien contacter notre <a href="mailto:contact@myastro.fr">service technique.</a></p>');
		  	 	//$('.error-handler').toggleClass('hidden');
		  	 	$('.error-handler').modal('toggle');
		  	 	setTimeout(function(){
		  	 		$('.error-handler').modal('toggle');
		  	 	},3000);
		  	 }
		  }
		}); // !ajax
	}else if(required_input_val == ''){
		alert("Veuillez renseigner votre numéro de téléphone");
        $(required_input).focus();
	}else if(!validPhoneNumber(required_input_val)){
		alert("Veuillez modifier la valeur pour correspondre au format demandé");
		$(required_input).focus();
	}else {
		$('#error_msg').html('<p class="alert alert-warning">Votre demande de rappel a déjà été prise en compte.</p>');
  	 	//$('.error-handler').toggleClass('hidden');
  	 	$('.error-handler').modal('toggle');
		  	 	setTimeout(function(){
		  	 		$('.error-handler').modal('toggle');
		  	 	},3000);
	}
})


$(document).ready(function(){
	if(!readCookie('tchat') || readCookie('tchat') != '1'){
		//$('.overlay').css('left',$('.screen').offset().left);
		//$('.overlay').css('top',$('.screen').offset().top);
		setTimeout(function(){
			$('.alert').removeClass('alert-info').addClass('alert-success').html('<b><i class="glyphicon glyphicon-ok"></b></i>  Connexion au serveur r&eacute;ussie !');
			setTimeout(function(){
				$('.alert').removeClass('alert-success').addClass('alert-info').html('<img src="loader-overlay.gif" /> Recherche de voyant disponible...');
				setTimeout(function(){
					$('.alert').removeClass('alert-info').addClass('alert-success').html('<b><i class="glyphicon glyphicon-ok"></i></b> Voyant disponible !');
					setTimeout(function(){
						$('.overlay').fadeOut('slow', function(){
							setTimeout(function(){
								$('.waiting').toggleClass('invisible');
								$('img.advert-offline').addClass('hidden');
								$('.advert-online').removeClass('hidden');
								$('form.advert-online').removeClass('hidden');
								setTimeout(startConversation,getWritingTime(msgs[0]));
							},900);
						});
					},900);
				},1000);
			},1000);
		},1000);
	} else {
		$('.overlay').css('display','none');
	}
});

function getWritingTime(msg){
	var StrippedString = msg.replace(/(<([^>]+)>)/ig,"");
	var length = StrippedString.length;
	return Math.floor(length * ( Math.floor(Math.random() * 1000) + 2000 ) / 30);
}

function printMsg(){
	$('.output').append('<span class="name pull-left">'+seerName+' dit : </span><span class="text pull-left">'+msgs[currentMsg]+'</span>').scrollTop($(this).height());
	printedMsg = true;
}

function startConversation(){
	$('.waiting').toggleClass('invisible'); // On cache le loader
	setTimeout(printMsg,intervalDelta);
	continueConversation();     // On simule un temps de latence
}

function continueConversation(){
	if (printedMsg !== true){
    	setTimeout(continueConversation,100);
	} else {
		printedMsg = false; // on repasse la condition a false
		currentMsg ++;
		if(typeof(msgs[currentMsg]) != 'undefined'){
			setTimeout(function(){
				toTime = getWritingTime(msgs[currentMsg]);
				$('.waiting').toggleClass('invisible'); // On affiche le loader
				setTimeout(startConversation,toTime);
			},1000);
		}
		else{
			// 3.5s avant déco.
			setTimeout(printEndConversation,3500);
			createCookie('tchat','1',1);
		}
		
	}
}

function printEndConversation(){
	var $theEnd = '<div class="theEnd pull-left bg-info" style="width:100%;background:#cecece;text-align:center;"><p>'+seerName+' est maintenant hors ligne.</p></div>';
	$('.output').append($theEnd).scrollTop($(this).height());
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

/*Permet de différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat*/
function rappelTchat(){
	/*document.getElementById("objet").value = "AFFIL1 ";*/
}

function validPhoneNumber(phoneNumber){
    var regExp = /^(\+?\d[- .]*){10,18}/;
    var phone = phoneNumber.match(regExp);
    if(phone){
       return true;
    }
    return false;
}