$(function(){
  $('#sms_ok').on('change',function(){
    if($(this).is(':checked')) $('#sms_ok_container').show('slow');
    else $('#sms_ok_container').hide('slow');
  });
  var domains = ['hotmail.com', 'gmail.com', 'aol.com', 'free.fr', 'hotmail.fr', 'aol.fr', 'wanadoo.fr', 'msn.com', 'live.fr', 'live.com', 'yahoo.com', 'yahoo.fr', 'orange.fr', 'laposte.net', 'voila.fr', 'sfr.fr', 'facebook.com', 'outlook.fr', 'aliceadsl.fr', 'bbox.fr'];
  var topLevelDomains = ["com", "net", "org", "fr"];
  $('input[type="email"]').on(
    'blur',
    function()
    {
      $(this).mailcheck({
        domains: domains,
        topLevelDomains: topLevelDomains,
        suggested: function(element, suggestion) {
          element.val(suggestion.full);
        }
      });
    }
  );
  $(".dropdown-menu > li > a.trigger").on("mouseover",function(e){
    var current=$(this).next();
    var grandparent=$(this).parent().parent();
    if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
        $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    current.toggle();
    e.stopPropagation();
  });
  var redirect = $('#redirect').val();
  var $form = $('#full_form');
  /*if($form.length)
  {
    $(window).on(
      'beforeunload',
      function()
      {
        var name = $('#name').val() || '';
        alert('Veuillez terminer de compléter le formulaire pour obtenir votre voyance gratuite par email '+name+' svp !');
        return 'Veuillez terminer de compléter le formulaire pour obtenir votre voyance gratuite par email '+name+' svp !';
      }
    );
  }*/
  $('.control-date').mask('99/99/9999', {
    completed:function()
    {
      var $this = $(this);
      var reg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
      if(!reg.test($this.val()))
      {
        $this.tooltip({ trigger: 'focus' }).attr('data-original-title', 'Merci de renseigner une date au format JJ/MM/AAAA').focus();
		
        $this.parent().addClass('has-error');
      }
      // var reg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
      // //$element.tooltip('destroy');
      // if(!reg.test($element.val()))
      // {
      //   //$element.tooltip({ trigger: 'focus' }).attr('data-original-title', 'Merci de renseigner une date de naissance au format JJ/MM/AAAA').focus();
      // }
    }
  });

  $.validator.addMethod(
    'frenchDate',
    function(value, element) {
        var reg = /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
        return reg.test(value);
    },
    'Merci de renseigner votre date de naissance au format JJ/MM/AAAA'
  );


  $.validator.setDefaults({
    showErrors: function (errorMap, errorList) {
      //$('.tooltip').remove();
      //$('.has-error').removeClass('has-error');
      for (var i = 0; i < errorList.length; i++)
      {
        var error = errorList[i];
        var $element = $(error.element);

        // $element.tooltip('destroy');
        // $element.tooltip({ trigger: 'focus' }).attr('data-original-title', error.message);
        // $element.tooltip('show');
        $element.parent().addClass('has-error');
      }
    }
  });
  $form.validate({
    rules:{
      birthday:{
        date:false,
        frenchDate:true
      },
      lover_birthday:{
        date:false,
        frenchDate:true
      },
      tel:{
        digits:true,
        remote:{
          url:'/tools/validate/',
          type: 'post',
          data:
          {
            type:'tel'
          }
        }
      }
    }
  });

  $form.on(
    'blur',
    'input',
    function(event)
    {
      var $this = $(this);
      $this.tooltip('destroy');
      $this.parent().removeClass('has-error');
      if(!$this.valid()) $this.parent().addClass('has-error');
    }
  );
  $form.on(
    'keyup',
    'input',
    function(event)
    {
      var $this = $(this);
      $this.tooltip('destroy');
      $this.parent().removeClass('has-error');
      setTimeout(function(){
        if(!$this.valid()) $this.parent().addClass('has-error');
      }, 1000);

    }
  );
  $form.on(
    'submit',
    function()
    {
      if($form.valid())
      {
        $(window).off('beforeunload');
        if(redirect.indexOf('?') === -1)
        {
          redirect = redirect+'?'+$form.serialize();
        }else{
          redirect = redirect+'&'+$form.serialize();
        }
        location = location.href = window.location.href = document.location.href = redirect;
        setTimeout(function(){location = location.href = window.location.href = document.location.href = redirect;},500);
        //return false;
        //window.open(redirect, '_blank');
      }
    }
  );

  $('.show_sub_theme').on(
    'click',
    function()
    {
      $('.sub_theme').addClass('hide');
      $('.sub_theme input').find('input:radio').prop('checked', false);
      $('#' + $(this).val()+'_container').removeClass('hide');
      $('#' + $(this).val()+'_container').find('input:first').prop('checked', true);
    }
  );
});