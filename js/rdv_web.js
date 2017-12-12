/**
 * Created by sanadi on 11/08/17.
 */
$(document).ready(function () {



    /* -----------------------validtae CB -----------------------------*/

    var luhnChk = (function (arr) {
        return function (ccNum) {
            var
                len = ccNum.length,
                bit = 1,
                sum = 0,
                val;

            while (len) {
                val = parseInt(ccNum.charAt(--len), 10);
                sum += (bit ^= 1) ? arr[val] : val;
            }

            return sum && sum % 10 === 0;
        };
    }([0, 2, 4, 6, 8, 1, 3, 5, 7, 9]));

    var prePaidChk = function (ccNum) {
        if (!ccNum.length) {
            return false;
        }
        var prePaid = [
            "457737",
            "554951",
            "475742",
            "530446",
            "497010",
            "538667",
            "541275",
            "531306",
            "533935",
            "531422",
            "529565",
            "533840",
            "530558",
            "554700",
            "533900"
        ];

        return -1 !== $.inArray(ccNum.substr(0, 6), prePaid);
    };

    var luhnClean = function (string) {
        return string.replace(/\D/g, '');
    };

    var luhnTimer = (function () {
        var timer = null;
        return function tmp($obj) {

            if (null !== timer) {
                clearTimeout(timer);
                timer = null;
            }
            timer = setTimeout(function () {
                var value = luhnClean($obj.val());
                var $parent = $obj.parent();
                var luhnResult = luhnChk(value);
                var prePaidResult = prePaidChk(value);
                var resultClass = luhnResult ? 'js-luhn-input-ok' : (prePaidResult ? 'js-luhn-input-fatal' : 'js-luhn-input-error');
                $obj.parent().find('.js-luhn-text-error').remove();
                $obj.parent().find('.js-luhn-text-fatal').remove();
                $obj.removeClass('js-luhn-input-ok').removeClass('js-luhn-input-error').removeClass('js-luhn-input-fatal');
                if (value.length) {
                    if (!luhnResult) {
                        $obj.parent().append('<div class="js-luhn-text-error">CB invalide !</div>');
                    }
                    if (prePaidResult) {
                        $obj.parent().append('<div class="js-luhn-text-fatal">CB prépayé !!!</div>');
                    }
                    $obj.addClass(resultClass);
                }
            }, 500);
        };
    })();

    $(document).on('keyup', '.js-check-luhn', function (ev) {
        luhnTimer($(this));
    });

    /*--------------------------------------------end Validate CB -----------------*/


    /* ---------------------------FORM MULTI STEP -----------------------------*/


    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;

    $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().parent().next().children(":first");

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = 0+"%";
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });
    $(".nextSecond").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = 0+"%";
                opacity = 1 - now;
                current_fs.css({'transform': 'scale('+scale+')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().parent().prev().children(":first");

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = 0+"%";
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    $(".previousSecond").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = 0+"%";
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    });

    /* ---------------------------FORM PLANNING RDV -----------------------------*/


    $("#form_jour,#form_periode").change(function () {

        $("#planning_maj").trigger("click");

    });

    $("#planning_maj").on("click",function () {

        alert_loading = '\
            <p class="alert alert-warning">\
                <b><i class="fa fa-refresh fa-spin"><img src="/images/warning-spinner.gif" /></i></b> \
                Chargement ...\
            </p>';

        $('#modal').html(alert_loading);
        $('#modal').modal('show');

        $.ajax({
          type: "POST",
          global: false,
          url: "rdv_web/ajaxPlaning.php",
          data:  {
                jour : $("#form_jour").val(),
                periode : $("#form_periode").val()
          },
          success: function (data) {

                $(".row:last").html(data);
                $(".hidden").remove();
                $('#modal').modal('hide');

            },
        });

    });

    /* --- Datepicker --- */

    $('.date-picker').each(function () {
        $(this).datepicker({
            format            : "dd/mm/yyyy",
            language          : "fr",
            todayHighlight    : true,
            startDate         : $(this).data('startdate'),
            daysOfWeekDisabled: $(this).data('daysofweekdisabled')
        });
    });


    $("#planning_selection .primary .indicateur").each(function () {

       /* $(this).parent().parent().css("background","#1871b9");
        $(this).parent().parent().css("color","#fff");*/

    });


    setupRotator();

});

function setupRotator()
{
    if($('.textItem').length > 1)
    {
        $('.textItem:first').addClass('current').hide().slideDown(500);
        setInterval('textRotate()', 1000);
        setInterval('imgAnim()', 1000);
    }
}

function textRotate(){
    var current = $('.text-rot > .current');
    if(current.next().length == 0)
    {
        current.removeClass('current').slideUp(100);
        $('.textItem:first').addClass('current').slideDown(500);
    }
    else
    {
        current.removeClass('current').slideUp(100);
        current.next().addClass('current').hide().slideDown(500);
    }
}

function imgAnim(){
    var current = $('.img-rot > .current');
    if(current.next().length == 0)
    {
        current.removeClass('current').slideUp(100);
        $('.imgItem:first').addClass('current').slideDown(500);
    }
    else
    {
        current.removeClass('current').slideUp(100);
        current.next().addClass('current').hide().slideDown(500);
    }
}



