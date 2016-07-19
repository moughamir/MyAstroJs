$(document).ready(function () {
                
    //choisir un chirffre entre 1 et 5
    var result= Math.round(Math.random()*5);
    console.log(result);
    $('#num-result-numero').text(result);
    
    switch(result) {
        case 1:
            $('#num-result-text').text("résultat pour chiffre 1");
            break;
        case 2:
            $('#num-result-text').text("résultat pour chiffre 2");
            break;
        case 3:
            $('#num-result-text').text("résultat pour chiffre 3");
            break;
        case 4:
            $('#num-result-text').text("résultat pour chiffre 4");
            break; 
        case 5:
            $('#num-result-text').text("résultat pour chiffre 5");
            break;    
    }

});