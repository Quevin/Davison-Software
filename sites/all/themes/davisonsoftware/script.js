Drupal.behaviors.myModuleBehavior = function (context) {
  // IE6 & less-specific functions
  // Add hover class to primary menu li elements on hover
  if ($.browser.msie && ($.browser.version < 7)) {
    $('#primary-menu li').hover(function() {
      $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
    });
    $('.form-submit').hover(function() {
      $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
    });
    $('#search-box input.search_submit').hover(function() {
      $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
    });
  };
};

$(document).ready(function() {
    $("#banner label").overlabel();
});