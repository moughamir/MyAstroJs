/**
 * Envoi Ajax des formulaires des landings
 * 
 * 07/03/2016
 */

$(document).ready(function(){

    // On commence par cacher la div d'erreur
    if($('.alert-danger').is(':visible')){
        $($('.alert-danger').hide());
    }

    // Gestion affichage du champs du conjoint
    var toogle_spouse = function(){
        var flag = false;
        var questions_amour_p2 = ['question_11', 'question_2', 'question_24' ];
        if($(this).prop("tagName") === 'SELECT'){
            var option = $(this).find('option:selected');
            var question = option.val();
        } else {
            var option = $(this);
            var question = option.val();
        }
        for(var i=0 ; i<questions_amour_p2.length ; i++){
            if( question.indexOf(questions_amour_p2[i]) > -1 || option.data('need-spouse') == 1) {
                flag = true;
            }
        }
        $('.sonprenom').each(function(){
            if(flag){
                $(this).slideDown();
//                $(this).find('input').prop('required', true);
            } else {
                $(this).slideUp();
//                $(this).find('input').prop('required', false);
            }
        });
    };
    $('div.sonprenom').each(function(){
        if(!$(this).hasClass('show')){
            $(this).hide();
        }
    });
    $('#theme_id').each(function(){
        $(this).change(toogle_spouse);
    });
    $('.theme_id').each(function(){
        $(this).change(toogle_spouse);
    });

    // Soumission du formulaire
    $(document).on('submit', 'form.ajax', function(e){
        e.preventDefault();
        var ll= 1;
        form = $(this);
        form_container = $('#form-container');
        form_overlay = $('#form-overlay');
        use_modal = true;
        use_form_alert = true;

        form_alert = form.find('.alert-danger');
        if (form_alert.length < 1){
            use_form_alert = false;
        }

        alert_loading = '\
            <p class="alert alert-warning">\
                <b><i class="fa fa-refresh fa-spin"><img src="/images/warning-spinner.gif" /></i></b> \
                Récupération des informations.\
            </p>';
        alert_done = '\
            <p class="alert alert-success">\
                <b><i class="fa fa-check"><img src="/images/success-spinner.gif" /></i> Inscription complétée.</b>\
                Vous allez être redirigé.\
            </p>'; 
        alert_error = '\
            <p class="alert alert-danger">\
                <b><i class="fa fa-warning"></i> Une erreur est survenue.</b>\
            </p>'; 
        // modale ou overlay chargement
        if (form_overlay.length >= 1){
            use_modal = false;
            form_overlay.html(alert_loading);
            form_overlay.fadeIn();
        } else if ($('.modal').length < 1){
            $('body').append('<div id="modal" class="modal"></div>');
        }
        if (use_modal){
            $('#modal').html(alert_loading);
            $('#modal').modal('show');
        }
        // requête Ajax
        $.ajax({
            url : "inc/ajaxHandler.php",
            type : 'POST',
            cache : false, 
            dataType : "json",
            xhrFields : {
                withCredentials: true
            },
            data : { action : 'formValidation', data : $(this).serialize() },
            success : function(response){
                // On reset le tout
                if (use_modal){
                    $('#modal').modal('hide');
                }
                if (use_form_alert){
                    form_alert.html('');
                    form_alert.hide();
                }
                $('input,select').not('[type="submit"]').removeClass('has-an-error');
                $('input,select').not('[type="submit"]').parent().removeClass('has-error');

                // Traitement de la réponse
                if(typeof response !== 'object'){
                   console.log('ERROR : Response cannot be decoded as Json Object');   
                   console.log('RETURNED : ' + response);
                }

                if(response.hasOwnProperty('conversion')){
                    $('body').append(response.conversion);
                }
                if(response.hasOwnProperty('reload_form')){
                    // Remplacement du formulaire
                    $.ajax({
                        url: response.reload_form,
                        type: 'POST',
                        success: function(data){
                            $(document).trigger('form_completed_reload');
                            setTimeout(function(){
                                form_container.html(data);
                                form_overlay.fadeOut();
                                $(document).trigger('ajax_success');
                            }, 1000);
                        }
                    });
                }
                if(response.hasOwnProperty('url')){
                    // Redirection   
                    var redirect_delay = response.hasOwnProperty('redirect_delay') ? response.redirect_delay : 3000;
                    if(redirect_delay > 0){
                        if (!use_modal){
                            form_overlay.html(alert_done);
                        } else {
                            $('#modal').html(alert_done);
                            $('#modal').modal('show');
                        }
                    }
                    setTimeout(function(){ 
                        document.location.replace(response.url);
                    }, redirect_delay);
                }
                if(response.hasOwnProperty('client_id')){

                    $("#client_id").val(response.client_id);
                    $(".next").trigger("click");

                }
                if(response.hasOwnProperty('rdv_added')){

               var msg_done= '<p class="alert alert-success">\
                <b><i class="fa fa-check"><img src="/images/success-spinner.gif" /></i>'+response.rdv_added+'</b></p>';

                    if (!use_modal){
                        form_overlay.html(msg_done);
                        console.log("form_overlay.html");

                    } else {
                        $('#modal').html(msg_done);
                        $('#modal').modal('show');

                    }

                }
                if(response.hasOwnProperty('error')){
                    // Affichage des erreurs
                    var alert_form_errors = $(alert_error);
                    var err = response.error;
                    for(var key in err){
                        $('input[name="'+key+'"], select[name="'+key+'"]').addClass('has-error');
                        if(use_form_alert){
                            form_alert.append(err[key]);
                        } else {
                            $(alert_form_errors).append('<br>'+err[key]);
                        }
                    }
                    if(use_form_alert){
                        alert_form_errors = false;
                        form_alert.show();
                        form_alert.removeClass('hidden');
                    } else {
                        $(alert_form_errors).append('<br><i data-dismiss="-" style="cursor:pointer;">Cliquez pour fermer ce message</i>');
                    }
                    if (!use_modal){
                        form_overlay.html(alert_form_errors ? alert_form_errors : alert_error);
                        if(use_form_alert){
                            setTimeout(function(){
                                form_overlay.fadeOut();
                            }, 3000);
                        }
                    } else {
                        $('#modal').html(alert_form_errors ? alert_form_errors : alert_error);
                        $('#modal').modal('show');
                    }
                    $(document).trigger('ajax_error');
                };
            },
            error : function(){
                if (!use_modal){
                    $('#form-overlay').html(alert_error);
                    setTimeout(function(){
                        $('#form-overlay').fadeOut();
                    }, 3000);
                } else {
                    $('#modal').html(alert_error);
                    $('#modal').modal('show');
                }
            }
        });
        // -- fin requête ajax 
        
        return false;
    });
    
    $('#form-overlay').click(function(e){
        $(this).fadeOut();
    });
});
