// TODO: replace timer with an effect (cell shine randomly)
/* global angular */
/* global $ */
'use strict';
// Globals
var currentSessionOpen = false,
  previousCard = null,
  numPairs = 0;

var app = angular.module('MyAstro', ['ngAnimate']);


function GameController($scope, $timeout) {

  $scope.deck = app.createDeck();
  $scope.isGuarding = true;
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
      $('#modal').modal('toggle');
    }

  }; // check()
  // remember we don't need timer in this version
  $scope.timeLimit = 60000; // 60sec
  $scope.isCritical = false;
  var timer = null;

  $scope.start = function() {};
  $scope.stopTimer = function() {};

}

function ModalController($scope) {
  $scope.showModal = false;
  $scope.toggleModal = function() {
    $scope.showModal = !$scope.showModal;
  };
}

// injection
GameController.$inject = ["$scope", "$timeout"];
ModalController.$inject = ["$scope"];

app.controller('ModalController', ModalController);
app.directive('modal', function() {

  return {

    template: '<aside class="modal fade" id="modal">' +
      '<div class="modal-dialog">' +
      '<div class="modal-Container">' +
      '<div class="modal-content">' +
      '<div class="modal-body" ng-transclude></div>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</aside>',
    restrict: 'E',
    transclude: true,
    replace: true,
    scope: true,
    link: function postLink(scope, element, attrs) {

      scope.title = attrs.title;

      scope.$watch(attrs.visible, function(value) {

        if (value == true) {
          $(element).modal('show');
        }
        else {
          $(element).modal('hide');
        }

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


function createDeck() {

  var rows = constants.getRows(),
    cols = constants.getColumns(),
    key = createRandom(),
    deck = {},
    deck.rows = [];

  for (var i = 0; i < rows; i++) {

    var row = {},
      row.cards = [];

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


function removeByIndex(arr, index) {
  arr.splice(index, 1);
}

function insertByIndex(arr, index, item) {
  arr.splice(index, 0, item);
}

function createRandom() {

  var matches = constants.getNumMatches(),
    pool = [],
    answers = [],
    astro = [
      'belier', 'cancer', 'capricorn', 'gemeaux',
      'poisson', 'taureau', 'verseau', 'vierge'
    ];

  for (var i = 0; i < matches * 2; i++) {
    pool.push[i];
  }


  // generate an array with random items
  // TODO: Add new feature: pick cells randomly and animate them

  for (var n = 0; n < matches; n++) {

    // grab random item for 'astro' array and remove that item from the 
    // original array
    var randItem = Math.floor((Math.random() * astro.length));
    var item = astro[randItem];
    removeByIndex(astro, randItem);

    // generate two random placements for each item
    var randPool = Math.floor((Math.random() * pool.length));

    // remove the placeholder from answers and insert the letter into
    // random slot
    insertByIndex(answers, pool[randPool], item);

    // remove random number from pool
    removeByIndex(pool, randPool);

    // redo this proccess for the secon placement
    randPool = Math.floor((Math.random() * pool.length));
    insertByIndex(answers, pool[randPool], item);

    // remove rand number from pool
    removeByIndex(pool, randPool);
  }

  return answers;
}


app.controller('GameController', GameController);
