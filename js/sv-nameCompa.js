/**
 * Title:  Test Compatibilté des Prénom
 * Author: Mohamed Moughamir <hello@omnizya.com>
 * Version : 1.2.0;
 */
/* global $ */
var letters = {
		A: 1,J: 1,S: 1,
		B: 2,K: 2,T: 2,
		C: 3,L: 3,U: 3,
		D: 4,M: 4,V: 4,
		E: 5,N: 5,W: 5,
		F: 6,O: 6,X: 6,
		G: 7,P: 7,Y: 7,
		H: 8,Q: 8,Z: 8,
		I: 9,R: 9
	},
	questions = {
		classA: "{'code':'sv_classA','subject':'amour','text':'Résultat A - 90~100%'}",
		classB: "{'code':'sv_classB','subject':'amour','text':'Résultat B - 70~80%'}",
		classC: "{'code':'sv_classC','subject':'amour','text':'Résultat C - 50~60%'}"
	},
	loveOmeter = function(min, max) {
		return Math.floor(Math.random() * (max - min) + min);
	},
	question = $('#js-question'),
	paths = {
		A: loveOmeter(90, 99),
		B: loveOmeter(70, 80),
		C: loveOmeter(50, 60)
	},
	names = {},
	score = {},
	submit = $('.result-cta'),
	nextQ = $('.next'),
	qPos = 0,
	person = [],
	path;
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
	nextQ.attr("disabled", "disabled");
	submit.attr("disabled", "disabled");
	$('input').change(function() {
		var validated = true,
			validatedT = true;
		if ($('#sexe-f:checked').val() === undefined && $('#sexe-h:checked').val() === undefined) {
			validated = false;
		}
		else if (($('input[name="prenom"]').val().length === 0) && ($('input[name="conjoint"]').val().length === 0)) {
			validatedT = false;
		}
		if (validated) {
			nextQ.removeAttr("disabled");
		}
		if (validatedT) {
			submit.removeAttr("disabled");
		}
	});
	nextQ.on('click', function(e) {
		e.preventDefault();
		if (qPos === 0) {
			$('#question-1').toggleClass('nextQuestion');
			$('#question-2').toggleClass('hidden showQuestion');
			qPos++;
			nextQ.attr("disabled", "disabled");
		}
		else if (qPos === 1) {
			$('#question-2').toggleClass('showQuestion nextQuestion');
			$('#question-3').toggleClass('hidden showQuestion');
			qPos++;
			nextQ.addClass('hidden');
			submit.toggleClass('hidden');
		}
		else {
			console.error(qPos);
		}
	});
	submit.on('click', function() {
		$(".step-1").addClass('hidden');
		$(".result").removeClass('hidden');
		$(".FormContainer").addClass('scale noMaxw');
		$('.lovers').toggleClass('hidden');
		$('.FormContainer-Header').css('visibility', 'hidden').addClass('sm-h');
		$(".more").show();
		$(".name").each(function() {
			names[$(this).attr("name")] = $(this).val();
			person.push($(this).val()); // person[i]
			simpleScore(names[$(this).attr("name")]);
		});
		path = (score[names.prenom.toUpperCase()] + score[names.prenom.toUpperCase()]) / 2;
		names.prenom = capitalize(names.prenom);
		names.conjoint = capitalize(names.conjoint);
		// NOTE: we may use in future lodash library 
		// (between) exist in lodash as _.inRange function
		function between(x, min, max) {
			return x >= min && x <= max;
		}
		// find set of strings and replace them with given ones
		function calculateRate(path) {
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
			calculateRate(paths.A);
			question.val(questions.classA);
		}
		else if (between(path, 4, 6)) {
			calculateRate(paths.B);
			question.val(questions.classB);
		}
		else {
			calculateRate(paths.C);
			question.val(questions.classC);
		}
		$('.person-a').text(capitalize(person[0]));
		$('.person-b').text(capitalize(person[1]));
		$('html,body').animate({scrollTop: $('.ContentBand').offset().top}, 1000);
});

if($(window).height() < 700){
	$('html,body').animate({scrollTop: $('.ContentBand').offset().top}, 1000);
}

});