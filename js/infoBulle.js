
      jQuery(document).ready(function(){
        $('input[name="email"]').focus(function() {
          $(".infob-email-w").css({"opacity":"1","transform":"scale(1) rotate(0)","z-index":"200"});
        });

        $('input[name="email"]').blur(function() {
          $(".infob-email-w").css({"opacity":"0","transform":"scale(0) rotate(-12deg)","transition":"all .25s","z-index":"1"});
        });

        $('input[name="tel"]').focus(function() {
          $(".infob-tel-w").css({"opacity":"1","transform":"scale(1) rotate(0)","z-index":"200"});
        });

       $('input[name="tel"]').blur(function() {
          $(".infob-tel-w").css({"opacity":"0","transform":"scale(0) rotate(-12deg)","transition":"all .25s","z-index":"1"});
        });
      });
