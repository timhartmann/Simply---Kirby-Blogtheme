$(function() {

  var closing = function() {
    $('.close').on('click', function(event) {
      event.preventDefault();
      var $container = $(this).parent().find('div');
      $container.toggleClass('hidden');

      $(this).toggleClass('icon--info').toggleClass('icon--remove-sign');

      if($container.hasClass('hidden')) {
        $container.slideUp();
      } else {
        $container.slideDown();
      }
    });
  }()
});