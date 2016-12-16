// btn
var cta = $(".cta"),
    ctaDraw = $(".cta-draw"),
    spread = $(".cta-spread"),
    read = $(".cta-read"),
    ctaCall = $(".cta-call"),
    modalBtn = $(".modal-btn"),
// sections
    snowBall = $(".snow-ball"),
    explication = $(".explication"),
    drawCards = $(".drawCards"),
    result = $(".result"),
    cardHolder = $(".result-cards"),
    miniCardHolder = $(".result-cards-mini"),
    signUp = $(".signUp"),
    form = $(".Primary-Form"),
    cardPicked = $(".cardsPicked"),
// Loops Counter
    cardSpread = 0,
    cardsCounter = 0,
// Trof
    card = $(".card"),
    picked = [],
    cardsPath = 'tarot/cartes/original-grand/',
//Modal
    modal = $(".modal"),
    overlay = $(".overlay"),
// Form Fields
    inputName = $(".input-name"),
    inputEmail = $(".input-email"),
    inputCountry = $(".input-country");
/*
 * TODO: Clean up the code for production; remove console()
 *
 * */
// Init
$(function () {
    /*
     * TODO: Add animation, when user click on cta, animate .snow-ball then hide it. Then show another section
     * */

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
    // Step missing? don't worry check Card Spread section
    read.click(function () {
        result.removeClass("moveFromRight").addClass("moveToLeft").delay(500).queue(function () {
            $(this).hide().dequeue();
            signUp.removeClass("hidden").addClass("moveFromRight");
            pickedCards(miniCardHolder);
            populateForm()
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
                cardSpread++;

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
    function pickedCards(section) {
        $.each(picked, function (index, value) {
            section.append('<li class="card-idle card-' + index + '"><img class="picked-card" src="' + cardsPath + value + '.png" alt=""></li>')
        });
    }

    function populateForm() {
        $.each(picked, function (index, value) {
            cardPicked.append('<input type="checkbox" name="card[' + index + ']" value="' + value + '" hidden>');
            // Result of $_POST (PHP):
            // array(
            //     'card' => array(
            //         '0' => ''
            //         '1' => ''
            //         'n' => ''
            //     )
            // )
        });

    }

    var cardIndex = 0;
    card.on('flip:done', function () {
        $(this).addClass("picked");
        // get Card Value
        var cardValue = $(this).attr("data-card");
        // Populate [Picked] with cards value
        picked.push(cardValue);


        $(this).addClass("card-" + cardIndex);
        cardsCounter++;

        if (cardsCounter != 0) {
            if (cardsCounter == 1) {
                $(".section-title").text("Choisissez 4 autres cartes.").css("text-transform", "capitalize");
                cardIndex++;
            } else if (cardsCounter == 2) {
                $(".section-title").text("Choisissez 3 autres cartes.").css("text-transform", "capitalize");
                cardIndex++;
            } else if (cardsCounter == 3) {
                $(".section-title").text("Choisissez 2 autres cartes.").css("text-transform", "capitalize");
                cardIndex++;
            } else if (cardsCounter == 4) {
                $(".section-title").text("Choisissez une autre cartes.").css("text-transform", "capitalize");
                cardIndex++;
            } else if (cardsCounter == 5) {
                setTimeout(function () {
                    card.addClass("card-idle");
                    drawCards.removeClass("moveFromRight").addClass("moveToLeft").delay(500).queue(function () {
                        $(this).hide().dequeue();
                        result.removeClass("hidden").addClass("moveFromRight");
                        pickedCards(cardHolder)
                    });
                }, 1500)
            }
        } else {
            $(".section-title").text("Choisissez 5 cartes.").css("text-transform", "capitalize")
        }

    });
    // trigger for cards: using FlipJs plugin
    card.flip({
        axis: 'x',
        trigger: 'click'
    });

// Form
    var userName = $('input[name="prenom"]').val(),
        userEmail = $('input[name="email"]').val(),
        userCountry = $('select[name="pays"]').val(),
        pickedCardOne = $('input[name="card[0]"]').val(),
        pickedCardTwo = $('input[name="card[1]"]').val(),
        pickedCardThr = $('input[name="card[2]"]').val(),
        pickedCardFur = $('input[name="card[3]"]').val(),
        pickedCardFiv = $('input[name="card[4]"]').val(),
        pickedCardsF = {
            "0": pickedCardOne,
            "1": pickedCardTwo,
            "2": pickedCardThr,
            "3": pickedCardFur,
            "4": pickedCardFiv
        };

    form.submit(function (event) {
        var dataString = 'name=' + userName
            + '&email=' + userEmail
            + '&pays=' + userCountry
            + '&cards=' + pickedCardsF;

        /*var formData = {
         'name': $('input[name="prenom"]').val(),
         'email': $('input[name="email"]').val(),
         'country': $('select[name="pays"]').val(),
         'card': $('input[name="card[]"]').val()
         };*/
        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url: '../inc/process.php', // the url where we want to POST
            data: dataString, // our data object
            //dataType: 'json', // what type of data do we expect back from the server
            // encode: true
            success: success()
        });
        // using the done promise callback
        function success() {
            console.info("Success");
            window.location = '/dri-noel-2016-tel'
        }

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
    // TODO: Submit the form and reveal a modal
    ctaCall.click(
        function () {
            overlay.css("display", "block");
            modal.removeClass("hidden").addClass("moveFromTop");

        }
    );
    modalBtn.click(function () {
        modal.fadeOut();
        overlay.fadeOut()
    })

    // Responsive view with jQ
    // When window change
    $(window).resize(function () {
        if ($(window).width() <= 320) {
            console.log("Yes")
        }
    });
    // In case the user use the phone
    if ($(window).width() <= 320) {
        console.log("Yes")
    }
});