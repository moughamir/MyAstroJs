$(function(){
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
    }
  });

  
});