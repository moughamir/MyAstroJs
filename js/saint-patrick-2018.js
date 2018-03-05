// Main Application
/* global angular  */
/* global $  */
'use strict';


$('document').ready(function() {
  setTimeout(function() {
    $('.loading').fadeOut(300);
  }, 1600);
});

var app = angular.module('myAstro', ['ngAnimate']);
var $game = $('#game'),
  $hats = $game.find('.hat'),
  $ball = $game.find('.ball'),
  $gameResult = $game.find('#game-result'),
  $playBtn = $('#btn-play'),
  posBall,
  nbSwaps = 0,
  nbMaxSwaps = 5,
  nbHats = $hats.length,
  hatsWidth = $hats.outerWidth(true),
  animSpeed = 400,
  animsInterval,
  intervalSpeed = animSpeed + 100;

function GameController($scope) {
  $scope.isGuarding = false;
  $scope.inGame = false;
  // start the timer as soon as the player presses start
  $scope.start = function() {
    $scope.isGuarding = false;
    $scope.inGame = true;

    $playBtn.attr("disabled", true);
    nbSwaps = 0;
    posBall = Math.floor(Math.random() * nbHats);
    console.info($hats === posBall);
    $playBtn.off('click');
    $game.off('click');

    console.info(posBall);
    console.info($hats.eq(posBall));
    $hats.eq(posBall).toggleClass('reveal');
    // Update of hats position
    $hats.each(function() {
      var posEnd = $(this).data('posCurrent');
      $(this).data('posStart', posEnd);

    });

    // Shows the ball
    $ball
      .css('left', posBall * hatsWidth)
      .fadeIn()
      .delay(1900)
      .fadeOut(function() {
        $hats.eq(posBall).toggleClass('reveal');
        //$hats.toggleClass('shakeIt');
        // Hats swaping
        animsInterval = setInterval($scope.animateHats, intervalSpeed);

      });
    $hats.on('hover', function() {
      shake(this)
      console.log(this)
    });
    $scope.init();

  };

  $scope.move = function($elemToMove, dir, depth, nbMoves) {
    var distanceAnim = hatsWidth * nbMoves / 2;
    var zindex = 'auto';
    var scale;

    if (depth > 0) {
      zindex = 5;
      scale = 1.25;
    }
    else {
      scale = 0.75;
      zindex = -5;
    }

    if (dir === 'left') {
      dir = '-';
    }
    else {
      dir = '+';
    }

    $elemToMove
      .css('z-index', zindex)
      .transition({
        x: dir + '=' + distanceAnim,
        scale: scale
      }, {
        duration: animSpeed / 2,
        easing: 'linear'
      })
      .transition({
        x: dir + '=' + distanceAnim,
        scale: 1
      }, {
        duration: animSpeed / 2,
        easing: 'linear',
        complete: function() {
          $elemToMove.css('z-index', 'auto');

          nbSwaps += 0.5;

          if (nbSwaps >= nbMaxSwaps) {
            clearInterval(animsInterval);
            $scope.end();
          }
        }
      });
  };

  $scope.moveToLeft = function($elemToMove, depth, nbMoves) {
    $scope.move($elemToMove, 'left', depth, nbMoves);
  };

  $scope.moveToRight = function($elemToMove, depth, nbMoves) {
    $scope.move($elemToMove, 'right', depth, nbMoves);
  };

  $scope.swapElems = function($firstHat, $secondHat) {
    var posFirstHat = $firstHat.data('posCurrent');
    var posSecondHat = $secondHat.data('posCurrent');
    var nbMoves = Math.abs(posFirstHat - posSecondHat);

    if (posFirstHat > posSecondHat) {
      $scope.moveToLeft($firstHat, 1, nbMoves);
      $scope.moveToRight($secondHat, 0, nbMoves);
    }
    else {
      $scope.moveToRight($firstHat, 0, nbMoves);
      $scope.moveToLeft($secondHat, 1, nbMoves);
    }

    $firstHat.data('posCurrent', posSecondHat);
    $secondHat.data('posCurrent', posFirstHat);
  };

  $scope.animateHats = function() {
    var posHats = [];
    var indexFirstHat = Math.floor(Math.random() * nbHats);
    var indexSecondHat;
    var $firstHat;
    var $secondHat;

    for (var i = 0; i < nbHats; i++) {
      posHats[i] = i;
    }

    posHats.splice(indexFirstHat, 1);

    indexSecondHat = posHats[Math.floor(Math.random() * (nbHats - 1))];

    $firstHat = $hats.eq(indexFirstHat);
    $secondHat = $hats.eq(indexSecondHat);

    $scope.swapElems($firstHat, $secondHat);
  };

  $scope.end = function() {
    $playBtn.on('click', $scope.start);

    $game.on('click', '.hat', function() {
      var posStart = $(this).data('posStart');
      var posEnd = $(this).data('posCurrent');

      // If the ball is found
      if (posBall === posStart) {
        $game.off('click', '.hat');
        //$hats.eq(posBall).toggleClass('reveal');
        // Shows the ball
        $ball
          .css('left', posEnd * hatsWidth)
          .stop(true, false)
          .fadeIn()
          .delay(0)
          .fadeOut(function() {
            $('#popup').toggleClass('is-visible');
          });
      }
      else {
        $('#retry').toggleClass('is-visible');
        retry();
      }

      $gameResult
        .stop(true, false)
        .fadeIn()
        .delay(600)
        .fadeOut();
    });
  };


  $scope.reset = function() {

  };
  $scope.init = function() {
    // Init positions
    $hats.each(function(i) {
      $(this).data({ posStart: i, posCurrent: i });
    });

    $playBtn.on('click', $scope.start);
  };
}

function FormController($scope) {
  $scope.info = {
    sexe: '',
    name: '',
    email: '',
    promo: 'PATRICK18'
  };
  $scope.sexe;
  $scope.name;
  $scope.email;
  $scope.submit = function() {
    if ($scope.name) {
      $scope.info.sexe = this.sexe;
      $scope.info.name = this.name;
      $scope.info.email = this.email;
    }
    console.info($scope.info);
    //$('#modal').toggleClass('is-visible');
  };
  $('.modal-redirect').on('click', function() {
    var url = "https://www.voyance-en-direct.tv/myastro";
    window.location = url + "?email=" + $scope.info.email;
  });
}

GameController.$inject = ["$scope"];

app.controller("FormController", FormController);
app.controller("GameController", GameController);

setTimeout(function() {
  $('#modal').toggleClass('is-visible');
}, 600);

function shake(div) {
  var interval = 100;
  var distance = 10;
  var times = 4;

  $(div).css('position', 'relative');

  for (var iter = 0; iter < (times + 1); iter++) {
    $(div).animate({
      left: ((iter % 2 == 0 ? distance : distance * -1))
    }, interval);
  }

  $(div).animate({ left: 0 }, interval);
  console.log(div);
}

//$('.modal-retry').click(function() { $('#retry').toggleClass('is-visible') });


var retry = function() {
  $('.modal-retry').on('click', function() {
    $('#retry').toggleClass('is-visible');
  });
};
