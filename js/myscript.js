$(document).ready(function(){
	$('div.sonprenom').hide();


	  $('#theme_id').change(function () {
	  	if( $('select[name=theme_id] option:selected').val() == 'question_2' ) {
            $('div.sonprenom').show();
        }
        else if( $('select[name=theme_id] option:selected').val() == 'question_24' ) {
            $('div.sonprenom').show();
        }
        else if( $('select[name=theme_id] option:selected').val() == 'question_11' ) {
            $('div.sonprenom').show();
        }
        else
        {
        	$('div.sonprenom').hide();
        }
	  });




      $('.voyance-ligne .cols4.first').click(function() {
        $(".voyant1").prop("checked", true); 
        $('.voyance-ligne .cols4').removeClass('selected');
        $(this).addClass('selected');
      });
      $('.voyance-ligne .cols4.second').click(function() {
        $(".voyant2").prop("checked", true); 
        $('.voyance-ligne .cols4').removeClass('selected');
        $(this).addClass('selected');
      });
      $('.voyance-ligne .cols4.third').click(function() {
        $(".voyant3").prop("checked", true); 
        $('.voyance-ligne .cols4').removeClass('selected');
        $(this).addClass('selected');
      });
      $('.voyance-ligne .cols4.last').click(function() {
        $(".voyant4").prop("checked", true); 
        $('.voyance-ligne .cols4').removeClass('selected');
        $(this).addClass('selected');
      });
});

