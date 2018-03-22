$(document).ready(function() {

  var toogle_spouse = function() {
    var flag = false;
    var option = $(this).find('option:selected');
    var question = option.val();
    if (option.data('need-spouse') == 1) {
      flag = true;
    }

    $('.conjoint').each(function() {
      if (flag) {
        $(this).slideDown();
      }
      else {
        $(this).slideUp();
      }
    });
  };
  $('.question_code').each(function() {
    $(this).change(toogle_spouse);
  });

});
