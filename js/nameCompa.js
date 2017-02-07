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
  'one' : 'Entre vous et {{OTHERPERSON}}, c’est toute feu toute flamme ! Votre couple est la somme de vos deux personnalités, fortes, indépendantes et capables de se réaliser soi-même. Pour que votre histoire fonctionne, vos deux caractères doivent se compléter et chacun doit fournir des efforts très particuliers. Votre relation avec {{OTHERPERSON}} est à prendre avec des pincettes, mais le jeu en vaut vraiment la chandelle. {{FIRSTPERSON}}, c’est en prenant du recul que vous avancerez efficacement…',
  'two' : 'A première vue, vous n’êtes pas vraiment faits pour vivre l’un avec l’autre. Mais votre volonté, combinée à celle de {{OTHERPERSON}}, attenue cette fausse impression. Tout est possible avec l’état d’esprit approprié! {{FIRSTPERSON}}, allez-y pas à pas, en prenant soin de ne pas griller les étapes. Prenez le temps de réflexion nécessaire avant d’agir, sous peine de devoir faire face à bien des difficultés relationnelles.',
  'three' : 'Votre couple avec {{FIRSTNAME2}} est marqué par les blocages ! Vous manquez tout deux de souplesse d’esprit et de qualités d’adaptation. Ce qui va vous causer bien des ennuis dès que la première nouveauté ou la première instabilité va pointer le bout de son nez dans votre couple. Vous aimez la stabilité et vous pourriez aisément l’obtenir, à condition de surmonter tous ces blocages. Une chose facile à faire en soi, mais surtout très utile, car vous et {{FIRSTNAME2}} pourriez être promis à un bel avenir…'
},
user = '{{FIRSTPERSON}}',
other = '{{OTHERPERSON}}',
names = [],
name = $('.name').val(),
submit = $('.btn-submit');
    
submit.on('click', function(){
  $(".name").each(function() {
    names[$(this).attr("name")] = $(this).val();
    
    console.log(names);
  });
  
  
}); 

function simpleScore(name) {
  var nameScore = 0;
  for (var i = 0; i < name.length; i++ ) {
    //name[i];
    var curChar = name.charAt(i);
    var curValue = letters[curChar];
    
  }
}    
    var nameScore = 0;
    var singleDigitScore = nameScore;
    
    function scorifyName(name) {
      
      for( var i = 0; i < name.length; i++){
        var curChar = name.charAt(i);
        var curValue = letters[curChar]
        
        
      }
      nameScore = nameScore + curValue;
      
      while( singleDigitScore >= 10 ){
        var total = 0;
        var str = '' + singleDigitScore;
        for( var i = 0; i < str.length; i++ ){
          total = total + parseInt( str.charAt(i) );
        }//for()
        singleDigitScore = total;
      }//while
    }
    
    
    //$('jqueryselector').val($(this).val().toUpperCase());
    console.log( "Total score for this name is: " + scorifyName(name) );




console.log("Single Digit score is: " + singleDigitScore);





/**
 * Find and Replace with regEx
*/
//function (search, replacement) {
//    var target = this;
//    return target.replace(new RegExp(search, 'g'), replacement);
//};
function findReplace(word) {
  const regex = /word/g;
  const str = `Entre vous et {{OTHERPERSON}}, c’est toute feu toute flamme ! Votre couple est la somme de vos deux personnalités, fortes, indépendantes et capables de se réaliser soi-même. Pour que votre histoire fonctionne, vos deux caractères doivent se compléter et chacun doit fournir des efforts très particuliers. Votre relation avec {{OTHERPERSON}} est à prendre avec des pincettes, mais le jeu en vaut vraiment la chandelle. {{FIRSTPERSON}}, c’est en prenant du recul que vous avancerez efficacement…`;
  let m;
  
  while ((m = regex.exec(str)) !== null) {
    // This is necessary to avoid infinite loops with zero-width matches
    if (m.index === regex.lastIndex) {
        regex.lastIndex++;
    }
    
    // The result can be accessed through the `m`-variable.
    m.forEach((match, groupIndex) => {
        console.log(`Found match, group ${groupIndex}: ${match}`);
    });
}
}

