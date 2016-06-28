/* 
 * Module de tchat gratuit
 * 
 * Created on : 01 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
*/

var sDelta = 2500;
var currentMsg = 0;
var intervalDelta = 1000;
var printedMsg = false;

var msgs = (typeof msgs !== "undefined") ? msgs : [];

var tchat_overlay = $('#tchat-overlay');
var tchat_messages = {
    'connexion': $('#tchat-alert-connexion'),
    'connexion-ok': $('#tchat-alert-connexion-ok'),
    'recherche-voyant': $('#tchat-alert-recherche-voyant'),
    'attente-voyant': $('#tchat-alert-attente-voyant'),
    'voyant-ok': $('#tchat-alert-voyant-ok'),
    'cookie': $('#tchat-alert-cookie')
};
var tchat_window = $('#tchat-window');
var tchat_output = $('#tchat-output');
var tchat_start = tchat_window.hasClass('start');
var tchat_msg_template = $('#tchat-msg-template').html();
var msg_text_selector = /__MSGTXT__/g;
var tchat_msg_template = $('#tchat-msg-template').html();

var tchat_deco = $('#tchat-deco');
var tchat_waiting = $('#tchat-waiting');

var tchat_voyant = (typeof tchat_voyant !== "undefined") ? tchat_voyant : false;

$(document).ready(function(){
    setTimeout(function(){ // Simulation de connexion
        tchat_messages['connexion'].hide();
        tchat_messages['connexion-ok'].show();
        
        setTimeout(function(){ // Recherche voyant
            tchat_messages['connexion-ok'].hide();
            if(tchat_start){
                if(tchat_voyant){
                    tchat_messages['attente-voyant'].show();
                } else {
                    tchat_messages['recherche-voyant'].show();
                }
                
                var attente_voyant = 4000 + Math.floor(Math.random() * 4000);
                setTimeout(function(){ // voyant disponible
                    tchat_messages['attente-voyant'].hide();
                    tchat_messages['recherche-voyant'].hide();
                    tchat_messages['voyant-ok'].show();
                    setTimeout(function(){ // fermeture de l'overlay
                        tchat_overlay.fadeOut('slow', function(){
                            setTimeout(function(){
                                // initialisation visuelle
                                tchat_waiting.show();
                                // lancement du tchat
                                setTimeout(startConversation, getWritingTime(msgs[0]));
                            }, 900);
                        });
                    }, 1500);
                }, attente_voyant);
            } else {
                tchat_messages['cookie'].show();
            }
        }, 1500);
    }, 2000);
});

function getWritingTime(msg)
{
    var StrippedString = msg.replace(/(<([^>]+)>)/ig,"");
    var length = StrippedString.length;
    return Math.floor(length * ( Math.floor(Math.random() * 1000) + 1000 ) / 10);
}

function startConversation()
{
    tchat_waiting.hide();
    setTimeout(printMsg, intervalDelta);
    continueConversation();
}

function printMsg()
{
    var msg = tchat_msg_template;
    console.log(msg);
    msg = msg.replace(/__MSGTXT__/g, msgs[currentMsg]);
    tchat_output.append(msg);
    tchat_window.scrollTop($(this).height());
    printedMsg = true;
}

function continueConversation()
{
    if (printedMsg !== true){
        setTimeout(continueConversation, 100);
    } else {
        printedMsg = false;
        currentMsg ++;
        if(typeof(msgs[currentMsg]) !== "undefined"){
            setTimeout(function(){
                var toTime = getWritingTime(msgs[currentMsg]);
                tchat_waiting.show();
                setTimeout(startConversation, toTime);
            }, 1000);
        } else {
            setTimeout(printEndConversation, 3500); // 3.5s avant déco.
//            createCookie('tchat','1',1);
        }
    }
}

function printEndConversation()
{
    tchat_deco.show();
    tchat_window.scrollTop($(this).height());
}

/*
$(document).on('submit','#rappel',function(e){
	var required_input     = $(this).find("[required]"); /*phone number input*
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

/*Permet de différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat
function rappelTchat(){
	/*document.getElementById("objet").value = "AFFIL1 ";
}

function validPhoneNumber(phoneNumber){
    var regExp = /^(\+?\d[- .]*){10,18}/;
    var phone = phoneNumber.match(regExp);
    if(phone){
       return true;
    }
    return false;
}
*/