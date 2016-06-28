
function TicTacToe(args) {

  // Settings
  var $game = args.game,
      $scores = args.scores,
      $dialogs = args.dialogs,
      cols = [];

  $game.find('.row').each(function(i) {
    var row = [];
    $(this).find('.col').each(function(j) {
      row.push($(this));
    });
    cols.push(row);
  });

  // VARS
  var rows = [
        [cols[0][0], cols[0][1], cols[0][2]],
        [cols[1][0], cols[1][1], cols[1][2]],
        [cols[2][0], cols[2][1], cols[2][2]], // Hori

        [cols[0][0], cols[1][0], cols[2][0]],
        [cols[0][1], cols[1][1], cols[2][1]],
        [cols[0][2], cols[1][2], cols[2][2]], // Verti

        [cols[0][0], cols[1][1], cols[2][2]],
        [cols[0][2], cols[1][1], cols[2][0]] // Diago
      ],
      chars = { p: 'x', com: 'o' },
      scores = {  p: 0, ties: 0, com: 0 },
      turn = 'p',
      isComputer = false;

  /*
  ============================================
    UpdateScores Function.
  ============================================
  */
  function updateScores() {

    $scores.find('.p').find('u').html(scores.p);
    $scores.find('.ties').find('u').html(scores.ties);
    $scores.find('.com').find('u').html(scores.com);

  } // end-updateScores

  /*
  ============================================
    getCoords Function.
  ============================================
  */
  function getCoords(target) {

    for (var i = 0; i < cols.length; i++) {
      for (var j = 0; j < cols[i].length; j++) {
        if (target.context === cols[i][j].context) {
          return { row: i, col: j };
        }
      }
    }

  } // end-getCoords

  /*
  ============================================
    AppendChar Function.
  ============================================
  */
  function appendChar(target, char) {

    if (target.hasClass('col') && target.children().length < 1) {
      target.append($(document.createElement('u')).addClass(char));
    }

  } // end-appendChar

  /*
  ============================================
    Blink Function.
  ============================================
  */
  function blink($el) {

    function rmClass() {
      $el.removeClass('blink');
    }

    $el.addClass('blink');
    setTimeout(rmClass, 2000);

  } // end-blink

  /*
  ============================================
    SwitchTurn Function.
  ============================================
  */
  function switchTurn() {

    if (turn === 'p') {
      turn = 'com';
    } else {
      turn = 'p';
    }

  } // end-switchTurn

  /*
  ============================================
    Dialogs Function.
  ============================================
  */
  function dialogs(fade, dialog) {

    if (fade === 'out') {
      $dialogs.fadeOut(500, function() {
        $dialogs.find('.end').find('.msg').html('');
      });
    } else {
      $dialogs.children().show();
      $dialogs.find('.' + dialog).hide(0, function() {
        $dialogs.fadeIn(500);
      });
    }

  } // end-dialogs

  /*
  ============================================
    Action Function.
  ============================================
  */
  function action(action) {

    cols.forEach(function(row, i) {
      row.forEach(function(col, i) {

        if (action === 'replay') {
          col.children('u').remove();
        } else if (action === 'tie') {
          blink(col);
        }

      });
    });

    if (action === 'replay') {
      dialogs('out', 'pick');
      switchTurn();
      if (turn === 'com') {
        setTimeout(computer, 500);
      }
    } else if (action === 'win') {
      dialogs('in', 'pick');
    } else if (action === 'tie') {
      $dialogs.find('.msg').html('Tie');
      dialogs('in', 'pick');
    }

  } // end-action

  /*
  ============================================
    Winner Function.
  ============================================
  */
  function checkWinner() {

    function getRow(char) {

      rowsLoop:
      for (var i = 0; i < rows.length; i++) {
        for (var j = 0; j < rows[i].length; j++) {
          if (!rows[i][j].children('u').first().hasClass(char)) {
            continue rowsLoop;
          }
        }
        return rows[i];
      }

    } // end-getRow

    var p = getRow(chars.p),
        com = getRow(chars.com);

    if (p) {
      return {
        name: 'p',
        row: p
      };
    } else if (com) {
      return {
        name: 'com',
        row: com
      };
    }
    return false;

  } // end-checkWin

  function win(winner) {

    function winAction(row, text) {
      row.forEach(function(col) {
        blink(col);
      });
      $dialogs.find('.msg').html(text);
      action('win');
    } // action

    if (winner.name === 'p') {
      winAction(winner.row, 'You win!!');
      scores.p++
      updateScores();
    } else if (winner.name === 'com') {
      winAction(winner.row, 'Computer wins!');
      scores.com++
      updateScores();
    }

  } // end-win

  /*
  ============================================
    Tie Function.
  ============================================
  */
  function checkTie() {

    var emptyFound = false;
    colsLoop:
    for (var i = 0; i < cols.length; i++) {
      for (var j = 0; j < cols[i].length; j++) {
        if (!cols[i][j].children('u').length) {
          emptyFound = true;
          break colsLoop;
        }
      }
    }
    if (emptyFound) {
      return false;
    }
    return true;

  } // end-checkTie

  function tie() {

    action('tie');
    scores.ties++
    updateScores();

  } // end-tie

  /*
  ============================================
    Computer Function.
  ============================================
  */
  function computer() {

    if (checkWinner()) {
      isComputer = false;
      var winner = checkWinner();
      win(winner);
      return;
    } else if (checkTie()) {
      isComputer = false;
      tie();
      return;
    }

    isComputer = true;

    function getRandom(arr) {
      var randomIndex = parseInt(Math.random() * arr.length);
      return arr[randomIndex];
    }

    function getRows(char) {

      var dirtyRows = [];

      for (var i = 0; i < rows.length; i++) {
        var dirtyRowData = [];
        for (var j = 0; j < rows[i].length; j++) {
          if (rows[i][j].children('u').hasClass(char)) {
            dirtyRowData.push(rows[i][j]);
          }
        }
        if (dirtyRowData.length) {
          dirtyRowData.push(rows[i]);
          dirtyRows.push(dirtyRowData);
        }
      }

      var hasEmptyCols = [];

      dirtyRows.forEach(function(arr, i) {
        var row = arr[arr.length - 1];
        for (var i = 0; i < row.length; i++) {
          if (!row[i].children('u').length) {
            hasEmptyCols.push(arr);
          }
        }
      });

      var hasEmptyCols = hasEmptyCols.filter(function(row, i) {
        return hasEmptyCols.indexOf(row) === i;
      });

      hasEmptyCols.sort(function(a, b) {
        return b.length - a.length;
      });

      var hasHigherLength = hasEmptyCols.filter(function(row) {
        return row.length === hasEmptyCols[0].length;
      });

      var collection = [];
      hasHigherLength.forEach(function(row) {
        collection.push(row[row.length - 1]);
      });

      return collection ? collection : false;

    } // end-getRows

    function getCol() {

      function getEmptyCols(row) {
        var cols;
        if (row) {
          cols = row.filter(function(col) {
            return col.children('u').length === 0;
          });
        } else {
          cols = false;
        }
        return cols;
      } // end-getEmptyCols

      function checkWinnerRows(rows, char) {
        if (!rows) return false;
        var winnerRows = [];
        rows.forEach(function(row) {
          var dirtyCols = [];
          for (var i = 0; i < row.length; i++) {
            if (row[i].children('u').hasClass(char)) {
              dirtyCols.push(row[i]);
            }
          }
          if (dirtyCols.length === 2) {
            winnerRows.push(row);
          }
        });
        if (winnerRows.length) {
          return winnerRows;
        }
        return false;
      } // end-checkWinnerRows

      function getTheLastEmptyCol() {

        var col;
        rows.forEach(function(row) {
          for (var i = 0; i < row.length; i++) {

            if (!row[i].children('u').length) {
              col = row[i];
            }

          }
        });
        return col;

      } // end-getTheLastEmptyCol

      var cRows = getRows(chars.com),
          pRows = getRows(chars.p),
          cWinnerRows = checkWinnerRows(cRows, chars.com),
          pWinnerRows = checkWinnerRows(pRows, chars.p),
          randomRow = getRandom(rows);

      if (cWinnerRows.length) {
        return getRandom(getEmptyCols(getRandom(cWinnerRows)));
      } else if (pWinnerRows.length) {
        return getRandom(getEmptyCols(getRandom(pWinnerRows)));
      } else if (pRows.length) {
        return getRandom(getEmptyCols(getRandom(pRows)));
      } else if (cRows.length) {
        return getRandom(getEmptyCols(getRandom(cRows)));
      } else if (randomRow.length) {
        return getRandom(getEmptyCols(randomRow));
      } else {
        return getTheLastEmptyCol();
      }

    } // end-getCol

    var col = getCol();

    appendChar(col, chars.com);

    isComputer = false;

    if (checkWinner()) {
      var winner = checkWinner();
      win(winner);
      return;
    } else if (checkTie()) {
      tie();
      return;
    }

  } // end-computer


  /*
  ============================================
    Player Function.
  ============================================
  */
  function player(target) {

    if (isComputer || !target.hasClass('col') || target.children('u').length) {
      return;
    }

    var coords = getCoords(target);

    appendChar(cols[coords.row][coords.col], chars.p);

    if (checkWinner()) {
      var winner = checkWinner();
      win(winner);
      return;
    } else if (checkTie()) {
      tie();
      return;
    }

    isComputer = true;
    setTimeout(computer, 250);

  } // end-player

  /*
  ============================================
    Events Function.
  ============================================
  */
  $game.on('click', function(e) {

    var target = $(e.target);

    player(target);

  });

  $dialogs.find('.pick').find('button').on('click', function(e) {

    var target = $(e.target);      
    if (target.hasClass('x')) {
      chars.p = 'x';
      chars.com = 'o';
      $scores.find('.p').find('.char').html('X');
      $scores.find('.com').find('.char').html('O');
    } else {
      chars.p = 'o';
      chars.com = 'x';
      $scores.find('.p').find('.char').html('O');
      $scores.find('.com').find('.char').html('X');
    }
    dialogs('out', 'pick');

  });

  $dialogs.find('.end').find('.replay').on('click', function(e) {

    action('replay');

  });

} // end-TicTacToe