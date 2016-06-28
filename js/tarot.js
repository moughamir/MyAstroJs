$(document).ready(function(){
	var cards 			= new Array("1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png","9.png","10.png","11.png","12.png");
	var shuffled 		= shuffle(cards);
	var alreadyPicked 	= 0 ;
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
	var i = 1;
	$('.paquet img').on('click',function(){
		var w = $(window).width();

		if(!$(this).data('hasBeenClicked') && alreadyPicked < 5){
			
			$(this).animate({width:"0px"},150);
			var picked = shuffled.shift();
			
			$('form').append('<input type="hidden" name="cards[]" value="'+picked+'" />');
			$(this).attr('src','http://www.myastro.fr/tarot/cartes/'+picked);
			$(this).animate({width:"100px"},600);
				var Itemposition 	= $(this).position();
				var Relativeposition = $('.relative').position();
				var Finalposition 	= $('.donneHandler').children().eq(alreadyPicked).offset();
				$(this).css({'webkit-transform':'rotate(0deg)','-ms-transform':'rotate(0deg)','transform':'rotate(0deg)'});
			if(w > 480){
				$(this).animate({top:'266',left:Finalposition.left - Relativeposition.left - 100},800);
			}else{
				if(i > 3){$(this).animate({top:'421',left:Finalposition.left - Relativeposition.left + 78},800);}
				else{$(this).animate({top:'266',left:Finalposition.left - Relativeposition.left + 78},800);}
				i+=1;
			}
			

			$(this).data('hasBeenClicked','true');
			alreadyPicked += 1;
		}

		if(alreadyPicked == 5){
			if (w > 480) {
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
			} else{
				$('form.hidden').removeClass('hidden');
				$('#img-first').addClass('hidden');
			}
			
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