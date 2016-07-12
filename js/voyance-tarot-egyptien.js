$(document).ready(function(){
	var cards 			= new Array("egyptien/1.png","egyptien/2.png","egyptien/3.png","egyptien/4.png","egyptien/5.png","egyptien/6.png","egyptien/7.png","egyptien/8.png","egyptien/9.png","egyptien/10.png","egyptien/11.png","egyptien/12.png","egyptien/13.png","egyptien/14.png","egyptien/15.png","egyptien/16.png","egyptien/17.png","egyptien/18.png","egyptien/19.png","egyptien/20.png","egyptien/21.png","egyptien/22.png","egyptien/23.png","egyptien/24.png");
	var shuffled 		= shuffle(cards);
	var alreadyPicked 	= 0 ;
	var w = $(window).width();

	if(w > 480){
		$('.paquet img')
	.mouseenter(function() {
		// on descend la carte
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "+=20px"}, 150);
		}
	}).mouseleave(function() {
		// On remonte la carte à sa position de départ
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "="+$(this).data('pos')}, 150);
		}
	});
	}else{	
		$('.paquet img')
	.mouseenter(function() {
		// on descend la carte
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "+=5px"}, 150);
		}
	}).mouseleave(function() {
		// On remonte la carte à sa position de départ
		if(!$(this).data('hasBeenClicked')){
			$(this).animate({top: "="+$(this).data('pos')}, 150);
		}
	});
	}

	$('.paquet img').on('click',function(){
		var w = $(window).width();

		if(!$(this).data('hasBeenClicked') && alreadyPicked < 5){
			
			$(this).animate({width:"0px"},150);
			var picked = shuffled.shift();
			
			$('form').append('<input type="hidden" name="cards[]" value="'+picked+'" />');
			$(this).attr('src','/tarot/cartes/'+picked);
			$(this).animate({width:"97px"},800);
				var Itemposition 	= $(this).position();
				var Relativeposition = $('.relative').position();
				var Finalposition 	= $('.donneHandler').children().eq(alreadyPicked).offset();
				$(this).css({'webkit-transform':'rotate(0deg)','-ms-transform':'rotate(0deg)','transform':'rotate(0deg)'});
			if(w >= 480){
				if(w > 979){
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left - 103},800);
				}else if(w >= 800 ){
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left - 104},800);	
				}else{
					$(this).animate({top:'201',left:Finalposition.left - Relativeposition.left-17},800);
				}
				
			}else{
				$(this).animate({width:"89px",height:"170",top:'0',left:Itemposition.left},800);
			}

			$(this).data('hasBeenClicked','true');
			alreadyPicked += 1;
		}

		if(alreadyPicked == 5){
			if (w > 480) {
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
				$('input').removeAttr('disabled');

				$('html,body').delay(2000).animate({scrollTop: $('#secondpart').offset().top}, 1000);
			} else{
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
				$('input').removeAttr('disabled');
			}
			
		}
	});
	$('input').click(function(){
		if(alreadyPicked < 5){
			alert('Veuillez d\'abord tirer vos cartes');
		}
	});
	$('select').click(function(){
		if(alreadyPicked < 5){
			alert('Veuillez d\'abord tirer vos cartes');
		}
	});

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
});

// - Tools
function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};