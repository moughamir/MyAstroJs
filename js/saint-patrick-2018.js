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
          .delay(1600)
          .fadeOut(function() {
            $('#popup').toggleClass('is-visible');
          });
      }
      else {
        //$gameResult.text('Try again !'); //
      }

      $gameResult
        .stop(true, false)
        .fadeIn()
        .delay(600)
        .fadeOut();
    });
  };

  $scope.init = function() {
    // Init positions
    $hats.each(function(i) {
      $(this).data({ posStart: i, posCurrent: i });
    });

    $playBtn.on('click', $scope.start);
  };

}

function ModalController($scope) {
  $scope.showModal = false;
  $scope.toggleModal = function() {
    $scope.showModal = !$scope.showModal;
  };
}


GameController.$inject = ["$scope"];
ModalController.$inject = ["$scope"];

app.controller('ModalController', ModalController);
app.directive('modal', function() {
  return {
    template: '<div class="modal fade" id="modal-g">' +
      '<div class="modal-dialog">' +
      '<div class="modal-Container">' +
      '<div class="modal-content">' +
      '<div class="modal-body" ng-transclude></div>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</div>',
    restrict: 'E',
    transclude: true,
    replace: true,
    scope: true,
    link: function postLink(scope, element, attrs) {
      scope.title = attrs.title;

      scope.$watch(attrs.visible, function(value) {
        if (value == true)
          $(element).modal('show');
        else
          $(element).modal('hide');
      });

      $(element).on('shown.bs.modal', function() {
        scope.$apply(function() {
          scope.$parent[attrs.visible] = true;
        });
      });

      $(element).on('hidden.bs.modal', function() {
        scope.$apply(function() {
          scope.$parent[attrs.visible] = false;
        });
      });
    }
  };
});

app.controller("GameController", GameController);
setTimeout(function() {
  $('#modal-g').modal('toggle');
}, 600);
