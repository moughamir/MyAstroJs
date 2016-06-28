var sDelta = 2500;
var currentMsg = 0;
var intervalDelta = 1500;
var printedMsg = false;

$(document).ready(function(){
	$('.overlay').css('left',$('.screen').offset().left);
	setTimeout(function(){
		$('.alert').removeClass('alert-info').addClass('alert-success').html('<p><i class="glyphicon glyphicon-ok"></i>  Connexion au serveur r&eacute;ussie !</p>');
		setTimeout(function(){
			$('.alert').removeClass('alert-success').addClass('alert-info').html('<p><img src="loader-overlay.gif" /> Recherche de voyant disponible... </p>');
			setTimeout(function(){
				$('.alert').removeClass('alert-info').addClass('alert-success').html('<p><i class="glyphicon glyphicon-ok"></i>  Voyant disponible !</p>');
				setTimeout(function(){
					$('.overlay').fadeOut('slow',function(){
						setTimeout(function(){
							$('.waiting').toggleClass('invisible');
							setTimeout(startConversation,getWritingTime(msgs[0]));
						},2000);
					});
				},2000);
			},3000);
		},3000);
	},3000);
});

function getWritingTime(msg){
	var length = msg.length;
	return Math.floor(length * ( Math.floor(Math.random() * 500) + 2000 ) / 30);
}

function printMsg(){
	$('.output').append('<span class="name pull-left">'+seerName+' dit : </span><span class="text pull-left">'+msgs[currentMsg]+'</span>').scrollTop($(this).height());
	printedMsg = true;
}

function startConversation(){
	$('.waiting').toggleClass('invisible'); // On cache le loader
	setTimeout(printMsg,intervalDelta);
	continueConversation();     // On simmule un temps de latence
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
		}
		
	}
}

function printEndConversation(){
	var $theEnd = '<div class="theEnd pull-left bg-info" style="width:100%;background:#cecece;text-align:center;"><p>'+seerName+' est maintenant hors ligne.</p></div>';
	$('.output').append($theEnd).scrollTop($(this).height());
}