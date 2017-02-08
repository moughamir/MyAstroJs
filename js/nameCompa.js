/**
 * Title:  Test Compatibilté des Prénom
 * Author: Mohamed Moughamir <hello@omnizya.com>
 * Copyright: KG-Com 2017
*/
/*
global $
*/

var letters = {
  A:1, J:1, S:1,
  B:2, K:2, T:2,
  C:3, L:3, U:3,
  D:4, M:4, V:4,
  E:5, N:5, W:5,
  F:6, O:6, X:6,
  G:7, P:7, Y:7,
  H:8, Q:8, Z:8,
  I:9, R:9
},
paths = {
  'one' : 'Entre vous et <b>{{OTHER}}</b>, c’est toute feu toute flamme ! Votre couple est la somme de vos deux personnalités, fortes, indépendantes et capables de se réaliser soi-même. Pour que votre histoire fonctionne, vos deux caractères doivent se compléter et chacun doit fournir des efforts très particuliers. Votre relation avec <b>{{OTHER}}</b> est à prendre avec des pincettes, mais le jeu en vaut vraiment la chandelle. <b>{{USER}}</b>, c’est en prenant du recul que vous avancerez efficacement…',
  'two' : 'A première vue, vous n’êtes pas vraiment faits pour vivre l’un avec l’autre. Mais votre volonté, combinée à celle de <b>{{OTHER}}</b>, attenue cette fausse impression. Tout est possible avec l’état d’esprit approprié! <b>{{USER}}</b>, allez-y pas à pas, en prenant soin de ne pas griller les étapes. Prenez le temps de réflexion nécessaire avant d’agir, sous peine de devoir faire face à bien des difficultés relationnelles.',
  'three' : 'Votre couple avec <b>{{OTHER}}</b> est marqué par les blocages ! Vous manquez tout deux de souplesse d’esprit et de qualités d’adaptation. Ce qui va vous causer bien des ennuis dès que la première nouveauté ou la première instabilité va pointer le bout de son nez dans votre couple. Vous aimez la stabilité et vous pourriez aisément l’obtenir, à condition de surmonter tous ces blocages. Une chose facile à faire en soi, mais surtout très utile, car vous et {{OTHER}} pourriez être promis à un bel avenir…'
},
user = '{{USER}}',
other = '{{OTHER}}',
names = {},
score = {},
name = $('.name').val(),
submit = $('.btn-submit');
var person = [];
  
function capitalize(str){
 return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}  
  
function simpleScore(name) {
  var nameScore = 0;
  
  for (var i = 0; i < name.length; i++ ) {
    
    name = name.toUpperCase();
    
    var curChar = name.charAt(i);
    var curValue = letters[curChar];
    
    var nameScore = nameScore + curValue;
  
    //console.info(nameScore);
    //console.log(name);
    //console.log(score[name]);
    //console.log( "Total score for this name is: " + name + score[name] );
    
  }
  
  var singleDigitScore = nameScore;
  
  while( singleDigitScore >= 10 ){
        var total = 0;
        var str = '' + singleDigitScore;
        for( var i = 0; i < str.length; i++ ){
          total = total + parseInt( str.charAt(i) );
        }
        singleDigitScore = total;
        score[name] = singleDigitScore;
        
        console.log(capitalize(name) + " Single Digit score is: " + singleDigitScore);
      }
  
}


submit.on('click', function(){
  
  $(".name").each(function() {
    
    names[$(this).attr("name")] = $(this).val();
    
    //console.log(names);
    person.push($(this).val()); // person[i]
    
    simpleScore(names[$(this).attr("name")]);
    
    console.info('done');
  });
  
  
}); 

/**
 * Find and Replace with regEx
*/
//function (search, replacement) {
//    var target = this;
//    return target.replace(new RegExp(search, 'g'), replacement);
//};


function findReplace(word, replace, text) {
  var regex = '/'+word+'/gm';
  var str = text;
  var m;
  
  while ((m = regex.exec(str)) !== null) {
    
    if (m.index === regex.lastIndex) {
      regex.lastIndex++;
    }
    
    m.forEach((match, groupIndex) => {
      console.log(`Found match, group ${groupIndex}: ${match}`);
    });
  }
  console.info('found string');
  
  
  var personOne = person[0].toUpperCase();
  var personTwo = person[1].toUpperCase();
    
  var path =  (score[personOne] + score[personTwo]) / 2;
    
    if (path <= 1) {
      // paths.one
      for (var i = 0; i < person.length; i++) {
        //person[i]
        switch (true) {
          case person[0]:
            findReplace(user, person[0], path.one);
            break;
          
          case person[1]:
            findReplace(other, person[1], path.one);
            break;
          default:
            console.info('done with cases');
        }
        console.log('Get path one');
      }
      
    } else if (path > 1 && path <= 2) {
      for (var i = 0; i < person.length; i++) {
        //person[i]
        switch (true) {
          case person[0]:
            findReplace(user, person[0], path.two);
            break;
          
          case person[1]:
            findReplace(other, person[1], path.two);
            break;
          default:
            console.info('done with cases');
        }
        console.log('Get path two');
      }
    } else{
      for (var i = 0; i < person.length; i++) {
        //person[i]
        switch (true) {
          case person[0]:
            findReplace(user, person[0], path.three);
            break;
          
          case person[1]:
            findReplace(other, person[1], path.three);
            break;
          default:
            console.info('done with cases');
        }
        console.log('Get path three');
      }
    }
}
