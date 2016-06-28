$(document).ready(function(){
	
	// On commence par cacher la div d'erreur
	if(jQuery('.alert-danger').is(':visible')){
		jQuery(jQuery('.alert-danger').hide());
	}

	// On ajax le formulaire
	jQuery(document).on('submit','form.formWidget',function(e){
		e.preventDefault();
		if ($('.modal').length < 1){
        	$('body').append('<div class="modal" style="padding:40px;"><div class="alert alert-warning"><img src="http://www.myastro.fr/images/loader.gif" /> Récupération des informations.</div></div>');
      	}
     	 $('.modal').modal('show');
		jQuery.ajax({
			url : "http://www.myastro.fr/inc/ajaxHandler.php", 
			type : 'POST',
			cache: false, 
			xhrFields: {
				withCredentials: true
			},
			data : {action : 'formValidation',data : jQuery(this).serialize()},
			success : function(r){
				// On reset le tout
				$('.modal').modal('hide');
				jQuery('.alert-danger p').html('');
				jQuery('.alert-danger').hide();
				jQuery('input,select').not('[type="submit"]').removeClass('has-an-error');
				jQuery('input,select').not('[type="submit"]').parent().removeClass('has-error');
				console.log(r);
				try {
				   response = jQuery.parseJSON(r);
				} catch(e) {
				   console.log('ERROR : '+ e);   
				   console.log('RETURNED : ' + r);
				}
				
				if(typeof response =='object')
				{
				  if(!response.hasOwnProperty('url')){
					// Si on a pas une url en retour, on a des erreurs
					for (var key in response) {
						jQuery('input[name="'+key+'"].form-control,select[name="'+key+'"].form-control').parent().addClass('has-error');
						jQuery('input[name="'+key+'"],select[name="'+key+'"]').not('.form-control').addClass('has-an-error');
						jQuery('.alert-danger p').append(response[key]);
						jQuery('.alert-danger').show();
						jQuery('.alert-danger').removeClass('hidden');
					}
					}else{
						document.location.replace(response.url);
					};
				}
			}
		});
		return false;
	})
});