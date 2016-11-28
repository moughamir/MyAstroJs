// btn
var cta = $(".cta"),
    ctaDraw = $(".cta-draw"),
    spread = $(".cta-spread");

// sections
var snowBall = $(".snow-ball"),
    explication = $(".explication"),
    drawCards = $(".drawCards");

$(function () {
    /*
     * TODO: Add animation, when user click on cta, animate .snow-ball then hide it. Then show another section
     * */
    function hidden(elm) {
        elm.addClass("hidden");
        console.info(" hidden")
    }

    function addClasso(el, classo) {
        el.addClass(classo);
    }

    cta.click(function () {
        snowBall.addClass("scaleUp").delay(500).queue(function () {
            $(this).hide().dequeue();
            explication.removeClass("hidden").addClass("scaleEnter")
        });
    });
    ctaDraw.click(function () {
        explication.removeClass("scaleEnter").addClass("moveToLeft").delay(500).queue(function () {
            $(this).hide().dequeue();
            drawCards.removeClass("hidden").addClass("moveFromRight")
        });
    });
// Card Spread
    $('.stack').click(function() {
        $(".card").each(function(e) {

            setTimeout(function() {
                $(".card").eq(e).attr("class", "card");
            }, e * 150)

        });

    });

    spread.click(function() {

        $(".card").each(function(e) {

            setTimeout(function() {
                $(".card").eq(e).attr("class", "card ani" + e);
            }, e * 150);
            console.info("Draw Animation Done")
        });

    });
});
