// btn
var cta = $(".cta"),
    ctaDraw = $(".cta-draw"),
    spread = $(".cta-spread"),
    read = $(".cta-read");

// sections
var snowBall = $(".snow-ball"),
    explication = $(".explication"),
    drawCards = $(".drawCards"),
    result = $(".result"),
    cardHolder = $(".result-cards");
// Loops Counter
var cardSpread = 0,
    cardsCounter = 0;
// Trof
var card = $(".card"),
    picked = [],
    cardsPath = 'tarot/cartes/original-grand/';
/*
 * TODO: Clean up the code for production; remove console()
 *
 * */
// Init
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
    /*
     * Module: Card Drawer
     * Author: Mohamed Moughamir <moughamir@gmail.com>
     * License: MIT License | Copyright (c) 2016 KgCom
     * Version: 0.1a
     * Inspired from the work of Laurène
     * */

    $('.stack').click(function () {
        $(".card").each(function (e) {

            setTimeout(function () {
                $(".card").eq(e).attr("class", "card");
            }, e * 150)

        });

    });

    spread.click(function () {

        card.each(function (e) {

            setTimeout(function () {
                card.eq(e).attr("class", "card onTable ani" + e);
                card.removeClass("card-idle");
                console.info("Draw Animation Done");
                cardSpread++;
                console.log(cardSpread);
                if (cardSpread == 7) {
                    setTimeout(function () {
                        spread.addClass("scaleDown");
                    }, 600)
                }
                if (cardSpread == 20) {
                    $(".section-title").text("Choisissez 5 cartes.").css("text-transform", "capitalize")
                }
            }, e * 250);

        });

    });
    // Function for displaying picked cards
    function pickedCards() {
        $.each(picked, function (index, value) {
            console.log(index + ": " + value);
            cardHolder.append('<li class="card-idle card-' + index + '"><img class="picked-card" src="' + cardsPath + value + '.png" alt=""></li>')
        });
    }

    card.on('flip:done', function () {
        $(this).addClass("picked");
        // get Card Value
        var cardValue = $(this).attr("data-card");
        // Populate [Picked] with cards value
        picked.push(cardValue);

        console.log(cardValue);
        cardsCounter++;
        if (cardsCounter != 0) {
            if (cardsCounter == 1) {
                $(".section-title").text("Choisissez 4 autres cartes.").css("text-transform", "capitalize")
            } else if (cardsCounter == 2) {
                $(".section-title").text("Choisissez 3 autres cartes.").css("text-transform", "capitalize")
            } else if (cardsCounter == 3) {
                $(".section-title").text("Choisissez 2 autres cartes.").css("text-transform", "capitalize")
            } else if (cardsCounter == 4) {
                $(".section-title").text("Choisissez une autre cartes.").css("text-transform", "capitalize")
            } else if (cardsCounter == 5) {
                card.addClass("card-idle");
                console.info("Go to the other step now.");
                setTimeout(function () {
                    drawCards.removeClass("moveFromRight").addClass("moveToLeft").delay(500).queue(function () {
                        $(this).hide().dequeue();
                        result.removeClass("hidden").addClass("moveFromRight");
                        pickedCards()
                    });
                }, 1500)
            }
        } else {
            $(".section-title").text("Choisissez 5 cartes.").css("text-transform", "capitalize")
        }

    });
    card.flip({
        axis: 'x',
        trigger: 'click'
    });


});
