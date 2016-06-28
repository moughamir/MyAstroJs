$("form").submit(function(e) {

    var ref = $(this).find("[required]");

    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
            alert("Veuillez remplir tous les champs obligatoires");

            $(this).focus();

            e.preventDefault();
            return false;
        }else if ($(this).attr("name") =='tel' && !validPhoneNumber($(this).val()))
        {
            alert("Veuillez modifier la valeur pour correspondre au format demandé");

            $(this).focus();

            e.preventDefault();
            return false;
        }
    });  return true;
});

function validPhoneNumber(phoneNumber){
    var regExp = /^(\+?\d[- .]*){10,18}/;
    var phone = phoneNumber.match(regExp);
    if(phone){
       return true;
    }
    return false;
}