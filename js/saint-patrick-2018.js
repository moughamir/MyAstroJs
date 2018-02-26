// Main Application
/* global angular  */
/* global jQuery  */
/* global $  */
'use strict';
var app = angular.module('myAstro', ['ngAnimate']);

function GameController($scope, $timeout) {
  $scope.deck = createDeck();
  $scope.isGuarding = false;
  $scope.inGame = false;

  $scope.check = function(card) {

    if (currentSessionOpen && previousCard != card && previousCard.item == card.item && !card.isFaceUp) {
      card.isFaceUp = true;
      previousCard = null;
      currentSessionOpen = false;
      numPairs++;

    }
    else if (currentSessionOpen && previousCard != card && previousCard.item != card.item && !card.isFaceUp) {
      $scope.isGuarding = true;
      card.isFaceUp = true;
      currentSessionOpen = false;
      $timeout(function() {
        previousCard.isFaceUp = card.isFaceUp = false;
        previousCard = null;
        $scope.isGuarding = $scope.timeLimit ? false : true;
      }, 1000);

    }
    else {
      card.isFaceUp = true;
      currentSessionOpen = true;
      previousCard = card;

    }

    if (numPairs == constants.getNumMatches()) {
      $scope.stopTimer();
      $('#modal-g').modal('toggle');
    }
  }; //end of check()

  // for the timer
  $scope.timeLimit = 60000;
  $scope.isCritical = false;

  var timer = null;

  // start the timer as soon as the player presses start
  $scope.start = function() {
    // I need to fix this redundancy. I initially did not create this
    // game with a start button.
    $scope.deck = createDeck();
    // set the time of 1 minutes and remove the cards guard
    $scope.timeLimit = 60000;
    $scope.isGuarding = false;
    $scope.inGame = true;

    ($scope.startTimer = function() {
      $scope.timeLimit -= 1000;
      $scope.isCritical = $scope.timeLimit <= 10000 ? true : false;

      timer = $timeout($scope.startTimer, 1000);
      if ($scope.timeLimit === 0) {
        $scope.stopTimer();
        $scope.isGuarding = true;
      }
    })();
  };
  // function to stop the timer
  $scope.stopTimer = function() {
    $timeout.cancel(timer);
    $scope.inGame = false;
    previousCard = null;
    currentSessionOpen = false;
    numPairs = 0;
  };

}

function ModalController($scope) {
  $scope.showModal = false;
  $scope.toggleModal = function() {
    $scope.showModal = !$scope.showModal;
  };
}

GameController.$inject = ["$scope", "$timeout"];
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

// constant variables
var constants = new(function() {
  var rows = 4;
  var columns = 4;
  var numMatches = (rows * columns) / 2;
  this.getRows = function() {
    return rows;
  };
  this.getColumns = function() {
    return columns;
  };
  this.getNumMatches = function() {
    return numMatches;
  };
})();

// Global Variables
var currentSessionOpen = false;
var previousCard = null;
var numPairs = 0;

// this function creates deck of cards that returns an object of cards
// to the caller
function createDeck() {
  var rows = constants.getRows();
  var cols = constants.getColumns();
  var key = createRandom();
  var deck = {};
  deck.rows = [];

  // create each row
  for (var i = 0; i < rows; i++) {
    var row = {};
    row.cards = [];

    // creat each card in the row
    for (var j = 0; j < cols; j++) {
      var card = {};
      card.isFaceUp = false;
      card.item = key.pop();
      row.cards.push(card);
    }
    deck.rows.push(row);
  }
  return deck;
}

// used to remove something form an array by index
function removeByIndex(arr, index) {
  arr.splice(index, 1);
}

function insertByIndex(arr, index, item) {
  arr.splice(index, 0, item);
}

// creates a random array of items that contain matches
// for example: [1, 5, 6, 5, 1, 6]
function createRandom() {
  var matches = constants.getNumMatches();
  var pool = [];
  var answers = [];
  var astro = ['belier', 'cancer', 'capricorne', 'gemeaux',
    'poisson', 'taureau', 'verseau', 'vierge'
  ];
  // set what kind of item to display
  var items = astro;

  // create the arrays for random numbers and item holder
  for (var i = 0; i < matches * 2; i++) {
    pool.push(i); // random numbers
  }

  // generate an array with the random items
  for (var n = 0; n < matches; n++) {
    // grab random letter from array and remove that letter from the
    // original array
    var randLetter = Math.floor((Math.random() * items.length));
    var letter = items[randLetter];
    removeByIndex(items, randLetter);
    // generate two random placements for each item
    var randPool = Math.floor((Math.random() * pool.length));

    // remove the placeholder from answers and insert the letter into
    // random slot
    insertByIndex(answers, pool[randPool], letter);

    // remove random number from pool
    removeByIndex(pool, randPool);

    // redo this process for the second placement
    randPool = Math.floor((Math.random() * pool.length));
    insertByIndex(answers, pool[randPool], letter);

    // remove rand number from pool
    removeByIndex(pool, randPool);
  }
  return answers;
}

app.controller("GameController", GameController);


(function($) {
  // DOM elems
  var $game,
    $hats,
    $ball,
    $gameResult,
    $playBtn;

  function initGame() {
    // Config vars
    var animSpeed = 400;
    var intervalSpeed = animSpeed + 100;
    var nbMaxSwaps = 5;

    // Game vars
    var posBall;
    var animsInterval;
    var hatsWidth = $hats.outerWidth(true);
    var nbHats = $hats.length;
    var nbSwaps = 0;

    // Animation
    function move($elemToMove, dir, depth, nbMoves) {
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
              end();
            }
          }
        });
    }

    function moveToLeft($elemToMove, depth, nbMoves) {
      move($elemToMove, 'left', depth, nbMoves);
    }

    function moveToRight($elemToMove, depth, nbMoves) {
      move($elemToMove, 'right', depth, nbMoves);
    }

    // Swaps hats position
    function swapElems($firstHat, $secondHat) {
      var posFirstHat = $firstHat.data('posCurrent');
      var posSecondHat = $secondHat.data('posCurrent');
      var nbMoves = Math.abs(posFirstHat - posSecondHat);

      if (posFirstHat > posSecondHat) {
        moveToLeft($firstHat, 1, nbMoves);
        moveToRight($secondHat, 0, nbMoves);
      }
      else {
        moveToRight($firstHat, 0, nbMoves);
        moveToLeft($secondHat, 1, nbMoves);
      }

      $firstHat.data('posCurrent', posSecondHat);
      $secondHat.data('posCurrent', posFirstHat);
    }

    function animateHats() {
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

      swapElems($firstHat, $secondHat);
    }


    // Starts a game
    function start() {
      $playBtn.attr("disabled", true);
      nbSwaps = 0;
      posBall = Math.floor(Math.random() * nbHats);

      $playBtn.off('click');
      $game.off('click');

      // Update of hats position
      $hats.each(function() {
        var posEnd = $(this).data('posCurrent');
        $(this).data('posStart', posEnd);
      });

      // Shows the ball
      $ball
        .css('left', posBall * hatsWidth)
        .fadeIn()
        .delay(600)
        .fadeOut(function() {
          // Hats swaping
          animsInterval = setInterval(animateHats, intervalSpeed);
        });
    }

    // End of game
    function end() {
      $playBtn.on('click', start);

      $game.on('click', '.hat', function() {
        var posStart = $(this).data('posStart');
        var posEnd = $(this).data('posCurrent');

        // If the ball is found
        if (posBall === posStart) {
          $game.off('click', '.hat');

          // Shows the ball
          $ball
            .css('left', posEnd * hatsWidth)
            .stop(true, false)
            .fadeIn()
            .delay(600)
            .fadeOut();

          //$gameResult.text('Ball found !');
        }
        else {
          //$gameResult.text('Try again !');
        }

        $gameResult
          .stop(true, false)
          .fadeIn()
          .delay(600)
          .fadeOut();
      });
    }

    function init() {
      // Init positions
      $hats.each(function(i) {
        $(this).data({ posStart: i, posCurrent: i });
      });

      $playBtn.on('click', start);
    }

    // Game init
    init();
  }

  $(document).ready(function() {
    $game = $('#game');
    $hats = $game.find('.hat');
    $ball = $game.find('.ball');
    $gameResult = $game.find('#game-result');
    $playBtn = $('#btn-play');

    initGame();
  });

})(jQuery);
