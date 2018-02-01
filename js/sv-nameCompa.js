/**
 * Title:  Test Compatibilté des Prénom
 * Author: Mohamed Moughamir <hello@omnizya.com>
 * Version : 1.2.0;
 */
/* global $ */
var letters = {
		A: 1,
		J: 1,
		S: 1,
		B: 2,
		K: 2,
		T: 2,
		C: 3,
		L: 3,
		U: 3,
		D: 4,
		M: 4,
		V: 4,
		E: 5,
		N: 5,
		W: 5,
		F: 6,
		O: 6,
		X: 6,
		G: 7,
		P: 7,
		Y: 7,
		H: 8,
		Q: 8,
		Z: 8,
		I: 9,
		R: 9
	},
	loveOmeter = function(min, max) {
		return Math.floor(Math.random() * (max - min) + min);
	},
	paths = {
		A: loveOmeter(90, 99),
		B: loveOmeter(70, 80),
		C: loveOmeter(50, 60)
	},
	user = '{{USER}}',
	other = '{{OTHER}}',
	names = {},
	score = {},
	submit = $('.result-cta'),
	nextQ = $('.next'),
	qPos = 0,
	person = [],
	path, mapObj;
var personOne, personTwo;
$(document).ready(function() {
	function capitalize(str) {
		return str.replace(/\w\S*/g, function(txt) {
			return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		});
	}

	function simpleScore(name) {
		var nameScore = 0;
		for (var i = 0; i < name.length; i++) {
			name = name.toUpperCase();
			var curChar = name.charAt(i);
			var curValue = letters[curChar];
			nameScore = nameScore + curValue;
		}
		var singleDigitScore = nameScore;
		while (singleDigitScore >= 10) {
			var total = 0;
			var str = '' + singleDigitScore;
			for (var i = 0; i < str.length; i++) {
				total = total + parseInt(str.charAt(i));
			}
			singleDigitScore = total;
			score[name] = singleDigitScore;
		}
	}
	nextQ.on('click', function(e) {
		e.preventDefault();
		if (qPos === 0) {
			$('#question-1').toggleClass('nextQuestion');
			$('#question-2').toggleClass('hidden showQuestion');
			console.log('1st click');
			qPos++;
			console.log(qPos);
		}
		else if (qPos === 1) {
			$('#question-2').toggleClass('showQuestion nextQuestion');
			$('#question-3').toggleClass('hidden showQuestion');
			console.log('2nd click');
			qPos++;
			console.log(qPos);
			nextQ.addClass('hidden');
			submit.toggleClass('hidden');
		}
		else if (qPos === 2) {
			console.error(qPos);
		}
		else {
			console.error(qPos);
		}
	});
	submit.on('click', function() {
		$(".step-1").addClass('hidden');
		$(".result").removeClass('hidden');
		$(".FormContainer").addClass('scale');
		$(".more").show();
		$(".name").each(function() {
			names[$(this).attr("name")] = $(this).val();
			person.push($(this).val()); // person[i]
			simpleScore(names[$(this).attr("name")]);
		});
		path = (score[names.prenom.toUpperCase()] + score[names.prenom.toUpperCase()]) / 2;
		names.prenom = capitalize(names.prenom);
		names.conjoint = capitalize(names.conjoint);
		mapObj = {
			"{{USER}}": names.prenom,
			"{{OTHER}}": names.conjoint
		};
		// NOTE: we may use in future lodash library 
		// (between) exist in lodash as _.inRange function
		function between(x, min, max) {
			return x >= min && x <= max;
		}
		// find set of strings and replace them with given ones
		function calculateRate(mapObj, path) {
			var counter = 0,
				c = 0,
				i = setInterval(function() {
					$(".loveOmeter").html(c + "%");
					counter++;
					c++;
					if (counter == path + 1) {
						clearInterval(i);
					}
				}, 25);
		}
		if (between(path, 1, 3)) {
			calculateRate(mapObj, paths.A);
		}
		else if (between(path, 4, 6)) {
			calculateRate(mapObj, paths.B);
		}
		else {
			calculateRate(mapObj, paths.C);
		}
		// remplacer le sous-titre par les Prénoms
		$('.FormContainer-Header').text(capitalize(person[0]) + ' & ' + capitalize(person[1]));
	});
});
