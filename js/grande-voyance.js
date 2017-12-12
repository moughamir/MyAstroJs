/*global $*/
/**
 * Grande Voyance
 * version: 2017.12.12.11
 * 
 * */
var scrollBtn = $(".scroll"),
  target = 1,
  gotoNext = function(target) {
    $('html, body').animate({
      scrollTop: $('section').eq(target).offset().top
    }, 800);
    return false;
  };
  //
scrollBtn.on("click", function() {
  console.log('Oh scroll!' + target);
  gotoNext(target);
  target++;
});
