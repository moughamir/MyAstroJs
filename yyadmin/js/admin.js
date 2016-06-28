$(document).ready(function(){
	$('#toggle-form-user').click(function(e){
		e.preventDefault();
		$('.form-user').toggleClass('hidden');
		console.log($('.form-user'));
	});
	$('.switcher').on('switchChange', function (e, data) {
  		var $element = $(data.el),
      	value = data.value;
      	$ID = $($element).data('iduser');
      	if(value == '1'){
      		var $method = 'enable';
      	}
      	else{
      		var $method = 'disable';	
      	}
      	$.ajax({
		  type: "POST",
		  url: 'http://www.myastro.fr/yyadmin/inc/ajaxHandler.php',
		  data: { method : $method + '-user',user_id : $ID},
		  success: function(res){
		  	console.log(res);
		  	if(res == 'OK'){
		  		$('.wrapper').append('<p class="alert alert-success toRemove">Modification effectuée !</p>');
		  		$('.toRemove').fadeOut(4000);
		  	}
		  	else{
		  		$('.wrapper').append('<p class="alert alert-danger toRemove">Une erreur est survenue !</p>');
		  		$('.toRemove').fadeOut(4000);
		  	}
		  },
		});
	});
        
        // dataTables
        $('table.datatable').dataTable({
            "iDisplayLength": 25,
            "oLanguage": { 
                "sProcessing"  : "Traitement en cours...",
                "sLengthMenu"  : "Afficher _MENU_ éléments",
                "sZeroRecords" : "Aucun élément à afficher",
                "sInfo"        : "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
                "sInfoEmpty"   : "Affichage de l'élément 0 à 0 sur 0 éléments",
                "sInfoFiltered": "(filtré de _MAX_ éléments au total)",
                "sInfoPostFix" : "",
                "sSearch"      : "Rechercher : ",
                "sUrl"         : "",
                "oPaginate": {
                    "sFirst"   : "Premier",
                    "sPrevious": "Précédent",
                    "sNext"    : "Suivant",
                    "sLast"    : "Dernier"
                }
            }
        });

	tinymce.init({
    	selector: "textarea.tinymce",
    	plugins: "print | code",
    	toolbar: "print"
	});

	// Page tchat - Création du scénario
	if($('input[name="input-value"]').length > 0){
		var $form = $('input[name="input-value"]').parents().find('form.display');
		console.log($form);
		$previousText = '';
		$(document).on('click','.row-remove',function(e){
			$(this).parent().parent().remove();
		});
		$(document).on('click','.row-edit',function(e){
			$old = $(this).parent().parent().find('.text');
			$old.html('<div class="input-group"><input type="text pull-left" value="'+$old.text()+'" name="new-edit-value" class="form-control" ><span class="input-group-btn"><button type="button" class="btn btn-warning edit-that-row" type="button"><i class="glyphicon glyphicon-edit"></i></button></span></div>');
		});
		$(document).on('click','.edit-that-row',function(){
			$val = $(this).parent().parent().find('input[name="new-edit-value"]').val();
			$spanText = $(this).parent().parent().parent();
			$(this).parent().parent().remove();
			$spanText.html($val);
		});
		$form.on('submit',function(e){
			console.log($(this));
			e.stopPropagation();
			e.preventDefault();
			var $text = $('input[name="input-value"]').val();
			var $seer = $('input[name="seer"]').val();
			$('.screen .output').append('<div class="row-value"><span class="name pull-left">'+$seer+' dit : </span><span class="text pull-left">'+$text+'</span><div class="controls pull-right"><button type="button" class="row-edit btn btn-warning btn-xs pull-right" onclick="return false;"><i class="glyphicon glyphicon-edit pull-right"></i></button><button type="button" class="pull-right row-remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove pull-right"></i></button></div><i class="clearfix"></i></div>');
			$('.name').css({'width':$('input[name="seer"]').data('width')+'px'});
			$('input[name="input-value"]').val('');
		});

		$('.final-submit').on('click',function(){
			$('.output .text').each(function(i,e){
				$text = $(e).text();
				$text = $text.replace(/(['"])/g, "\$1");
				$('#form-final').append('<input type="hidden" value="'+$text+'" name="messages[]" />');
			});
			$('#form-final').submit();
		})
	}

	// Page tchat - Vérification du scénario
	if($('#validate-scenario').length > 0){
		var sDelta = 2500;
		var currentMsg = 0;
		var intervalDelta = 1500;
		var printedMsg = false;

		$(document).ready(function(){
			$('.overlay').css('left',$('.screen').offset().left);
			setTimeout(function(){
				$('.alert').removeClass('alert-info').addClass('alert-success').html('<p><i class="glyphicon glyphicon-ok"></i>  Connexion au serveur r&eacute;ussie !</p>');
				setTimeout(function(){
					$('.alert').removeClass('alert-success').addClass('alert-info').html('<p><img src="images/loader-overlay.gif" /> Recherche de voyant disponible... </p>');
					setTimeout(function(){
						$('.alert').removeClass('alert-info').addClass('alert-success').html('<p><i class="glyphicon glyphicon-ok"></i>  Voyant disponible !</p>');
						setTimeout(function(){
							$('.overlay').fadeOut('slow',function(){
								setTimeout(function(){
									$('.waiting').toggleClass('invisible');
									setTimeout(startConversation,getWritingTime(msgs[0].text));
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
			$('.output').append('<span class="name pull-left">'+seerName+' dit : </span><span class="text pull-left">'+msgs[currentMsg].text+'</span>');
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
				setTimeout(function(){
					toTime = getWritingTime(msgs[currentMsg].text);
					$('.waiting').toggleClass('invisible'); // On affiche le loader
					setTimeout(startConversation,toTime);
				},1000);
				
			}
		}
	} // Fin if validate-scenario
});